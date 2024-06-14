<?php

namespace App\Http\Controllers;


use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    return back();
    }
    public function affichageListe(){
        $candidatures = Candidature::with('formation')->get();
        return view('candidats/candidature', compact('candidatures'));
    }
   
}
