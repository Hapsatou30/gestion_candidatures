<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Models\Formation;

class CandidatureController extends Controller
{

    public  function postuler(){
        $formations = Formation::all();
        $candidat = Candidat::all();
        return view('candidantures.index', compact('formations', 'candidat'));
    }
    //Methode qui permet de sauvegarder une candidature
    public function sauvegardeCandidature(Request $request){
    Candidature::create($request->all());
    return back();
    }
    public function affichageListe(){
        $candidatures = Candidature::with('formation')->get();
        return view('candidats/candidature', compact('candidatures'));
    }
   
}
