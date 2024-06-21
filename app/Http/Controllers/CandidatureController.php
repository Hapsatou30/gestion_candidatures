<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Formation;
use App\Models\Candidature;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Mail\CandidatureEnvoyee;

use App\Mail\CandidatureRefusee;
use App\Mail\CandidatureAcceptee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Monolog\Formatter\FormatterInterface;

class CandidatureController extends Controller
{


    public function postuler($id) {
        $formation = Formation::findOrFail($id);
    
        // Vérifier si la date limite est dépassée
        if ($formation->date_limite < now()) {
            return redirect()->route('detailFormation', $formation->id)
                ->with('error', 'La date limite de candidature pour cette formation est dépassée.');
        }
        
        if (Auth::check()) {
            $candidat = Auth::user(); // Récupère l'utilisateur authentifié
        
            // Vérifier si le candidat a déjà une candidature acceptée pour cette formation
            $candidatureAcceptee = Candidature::where('formation_id', $id)
                ->where('candidat_id', $candidat->id)
                ->where('etat', 'accepté')
                ->exists();
        
            if ($candidatureAcceptee) {
                return redirect()->route('detailFormation', $formation->id)
                    ->with('error', 'Vous avez déjà une candidature acceptée pour cette formation.');
            }
        
            return view('candidatures.index', compact('formation', 'candidat'));
        } else {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour postuler.');
        }
    }
    

    // //Methode qui permet de sauvegarder une candidature
    // public function sauvegardeCandidature(Request $request){
    // Candidature::create($request->all());
    
    // return redirect('/');
    // }
    public function sauvegardeCandidature(Request $request)
    {
        // Valider les données de la requête si nécessaire
        $request->validate([
            'candidat_id' => 'required',
            'formation_id' => 'required',
            'biographie' => 'required',
            'motivation' => 'required',
        ]);

        // Créer une nouvelle candidature
        $candidature = Candidature::create($request->all());

        // Récupérer les informations nécessaires pour l'email
        $candidat = $candidature->candidat;
        $formation = Formation::findOrFail($candidature->formation_id)->nom; // Assurez-vous que la formation existe

        // Envoyer un email de confirmation au candidat
        Mail::to($candidat->email)->send(new CandidatureEnvoyee($candidat, $formation));
          // Récupérer le contenu de la vue de l'email
          $contenu = View::make('emails.candidature_envoyee', [
            'prenom' => $candidature->candidat->prenom,
            'nom' => $candidature->candidat->nom,
            'formation' => $formation
        ])->render();

        // Créer une notification
        Notification::create([
            'candidature_id' => $candidature->id,
            'contenu' => $contenu,
            'objet' => 'Candidature Envoyé'
        ]);

        return redirect('/')->with('success', 'Votre candidature a été soumise avec succès.');
    }

    public function affichageListe()
    {
        $candidatId = Auth::id();
        $candidatures = Candidature::with('formation')
                                   ->where('candidat_id', $candidatId)
                                   ->get();

        return view('candidats/candidature', compact('candidatures'));
    }
    public function show($id)
    {
        $candidature = Candidature::with('candidat', 'formation')->findOrFail($id);

        return view('candidatures/details', compact('candidature'));
    }

  
    public function accepter($id)
    {
        $candidature = Candidature::with('candidat', 'formation')->findOrFail($id);
        
        $formation = $candidature->formation->nom; // Assuming the relation 'formation' exists and has a 'nom' attribute

        // Envoyer un email au candidat
        Mail::to($candidature->candidat->email)->send(new CandidatureAcceptee($candidature->candidat, $formation));

        // Récupérer le contenu de la vue de l'email
        $contenu = View::make('emails.candidature_acceptee', [
            'prenom' => $candidature->candidat->prenom,
            'nom' => $candidature->candidat->nom,
            'formation' => $formation
        ])->render();

        // Créer une notification
        Notification::create([
            'candidature_id' => $candidature->id,
            'contenu' => $contenu,
            'objet' => 'Candidature Acceptée'
        ]);

        // Mettre à jour le statut de la candidature
        $candidature->etat = 'accepté';
        $candidature->save();

        return redirect()->back()->with('success', 'La candidature a été acceptée et un email a été envoyé au candidat.');
    }

    public function refuser($id)
    {
        $candidature = Candidature::with('candidat', 'formation')->findOrFail($id);
        
        $formation = $candidature->formation->nom; 

        // Envoyer un email au candidat
        Mail::to($candidature->candidat->email)->send(new CandidatureRefusee($candidature->candidat, $formation));

        // Récupérer le contenu de la vue de l'email
        $contenu = View::make('emails.candidature_refusee', [
            'prenom' => $candidature->candidat->prenom,
            'nom' => $candidature->candidat->nom,
            'formation' => $formation
        ])->render();

        // Créer une notification
        Notification::create([
            'candidature_id' => $candidature->id,
            'contenu' => $contenu,
            'objet' => 'Candidature Refusée'
        ]);

        // Mettre à jour le statut de la candidature
        $candidature->etat = 'rejeté';
        $candidature->save();

        return redirect()->back()->with('success', 'La candidature a été refusée et un email a été envoyé au candidat.');
    }
}