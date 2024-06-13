<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Personnel;
use Illuminate\Http\Request;

class FormationController extends Controller
{
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
}
