<?php

namespace App\Http\Controllers;


use App\Models\Formation;

use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Formatter\FormatterInterface;
use App\Mail\CandidatureAcceptee;
use App\Mail\CandidatureRefusee;
use Illuminate\Support\Facades\Mail;

class CandidatureController extends Controller
{


    
    public  function postuler($id){
        $formation = Formation::find($id);
        
        if (Auth::check()) {
            $candidat = Auth::user(); // Récupère l'utilisateur authentifié
            return view('candidatures.index', compact('formation', 'candidat'));
        } else {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour postuler.');
        }
      }

    //Methode qui permet de sauvegarder une candidature
    public function sauvegardeCandidature(Request $request){
    Candidature::create($request->all());
    return redirect('/');
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
        $candidature = Candidature::with('candidat')->findOrFail($id);
        
        return view('candidatures/details', compact('candidature'));
    }

    public function accepter($id)
    {
        $candidature = Candidature::with('candidat')->findOrFail($id);

        // Envoyer un email au candidat
        Mail::to($candidature->candidat->email)->send(new CandidatureAcceptee($candidature->candidat));

        // Mettre à jour le statut de la candidature si nécessaire
        $candidature->etat = 'accepté';
        $candidature->save();

        return redirect()->back()->with('success', 'La candidature a été acceptée et un email a été envoyé au candidat.');
    }
    public function refuser($id)
    {
        $candidature = Candidature::with('candidat')->findOrFail($id);

        // Envoyer un email au candidat
        Mail::to($candidature->candidat->email)->send(new CandidatureRefusee($candidature->candidat));

        // Mettre à jour le statut de la candidature si nécessaire
        $candidature->etat = 'rejeté';
        $candidature->save();

        return redirect()->back()->with('success', 'La candidature a été refusée et un email a été envoyé au candidat.');
    }

}
