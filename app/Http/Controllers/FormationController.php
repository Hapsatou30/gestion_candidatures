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
        /*dd($request->all());*/
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'competences' => 'required',
            'debouches' => 'required', // Validation d'image si elle est fournie
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

        /*return redirect('/')->with('status', "Le bien a bien été ajouté avec succés.");*/
       /* ('nom');
            $table->text('description');
            $table->text('competences');
            $table->text('debouches');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->date('date_limite');
            $table->string('image')->nullable();
            $table->string('cohorte');
            $table->enum('statut', ['ouverte', 'fermée'])->default('ouverte');
            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');
            $table->timestamps();*/
    }
}
