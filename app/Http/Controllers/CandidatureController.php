<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Models\Formation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class CandidatureController extends Controller
{

    public  function postuler(){
        $formations = Formation::all();
        $candidat = Candidat::all();
        return view('candidatures.index', compact('formations', 'candidat'));
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
    public function show($id)
{
    $candidature = Candidature::with('candidat')->findOrFail($id);
    $candidat = $candidature->candidat;

    // Calcul de l'âge
    $age = Carbon::parse($candidat->date_naissance)->age;

    return view('candidatures.details', compact('candidature', 'candidat', 'age'));
}
public function telechargerCV($id){
$candidat = Candidat::where('id', $id)->first();
$pathToFile =storage_path("app/public/{$candidat->cv}");
return Response::download($pathToFile);
}
}
