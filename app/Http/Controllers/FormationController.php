<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Personnel;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        return view('formations.index');
    }
    public function ModifierFormation($id)
{
    $formations = Formation::findOrFail($id);
    $personnels = Personnel::all();
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
}
