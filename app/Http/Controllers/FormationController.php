<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FormationController extends Controller
{

    
    public function index(){
        $formations = Formation::all();
        return view('formations.index', compact('formations'));
    }

    public function detail($id){
        $formation = Formation::find($id);
        $formations = Formation::all();
        return view ('formations.detail-formation',compact('formation', 'formations'));
    }

    public function AjouterFormation(){
        $personnels = Personnel::all();
        return view ('formations/ajouter', compact('personnels'));
     }

        public function AjouterFormationTraitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'competences' => 'required',
            'debouches' => 'required', 
            'date_debut' => 'required',
            'date_fin' => 'required',
            'date_limite' => 'required',
            'image' => 'required',
            'cohorte' => 'required',
            'statut' => 'required',
            'personnel_id' => 'required',

        ]);

        $formation = new Formation();
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->competences = $request->competences;
        $formation->debouches = $request->debouches;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->date_limite = $request->date_limite;
        $formation->image = $request->input('image');
        $formation->cohorte = $request->cohorte;
        $formation->statut = $request->statut;
        $formation->personnel_id = $request->personnel_id;
        $formation->save();

        return back()->with('status', "La formation a bien été ajouté avec succés.");

    }

// Affichage du liste
public function listeDformation()
{
    $formations = Formation::all();

    // Calculer la durée pour chaque formation
    foreach ($formations as $formation) {
        $dateDebut = Carbon::parse($formation->date_debut);
        $dateFin = Carbon::parse($formation->date_fin);
        
        // Calculer la différence en mois et jours
        $diffEnJours = $dateDebut->diffInDays($dateFin);

        // Stocker la durée dans un nouvel attribut pour chaque formation
        // Vous pouvez choisir d'afficher en mois ou jours selon vos besoin
        $formation->dureeEnJours = $diffEnJours;
    }

    return view('formations.listeDformation', compact('formations'));
}

    public function destroy($id)
   {
       // Suppression de la formation
       $formation = Formation::findOrFail($id);
       $formation->delete();
   
       // Retourne en arriere
       return back()->with('success', 'Formation supprimée avec succès');  
   }
   
    

    public function ModifierFormation($id)
{
    $formations = Formation::findOrFail($id);
    $personnels = session('personnel');
    return view('formations/modifier', compact('formations', 'personnels'));

}

public function ModifierFormationTraitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'competences' => 'required',
        'debouches' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'date_limite' => 'required',
        'image' => 'required',
        'description' => 'required',
        'cohorte' => 'required',
        'statut' => 'required',       
        'personnel_id' => 'required|exists:personnels,id',
    ]);

    $formation = Formation::findOrFail($request->id);
    $formation->nom = $request->nom;
    $formation->competences = $request->competences;
    $formation->debouches = $request->debouches;
    $formation->date_debut = $request->date_debut;
    $formation->date_fin = $request->date_fin;
    $formation->date_limite = $request->date_limite;
    $formation->image = $request->input('image');
    $formation->description = $request->description;
    $formation->cohorte = $request->cohorte;
    $formation->statut = $request->statut;
    $formation->personnel_id = $request->personnel_id;
    $formation->update();

    return back()->with('status', "La formation été modifié avec succés.");

}

public function formationshow()
{
    return view('formations.detailFormationb');
}

}
