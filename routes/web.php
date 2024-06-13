<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;


Route::get('/index',[CandidatureController::class,'postuler']);
Route::get('/index', function () {
    return view('candidantures.index');
});


Route::get('formation', [FormationController::class, 'index']);



Route::get('/index', function () {
    return view('candidantures.index');
});


Route::get('formation', [FormationController::class, 'index']);
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/connexion', function () {
    return view('candidats.connexion');
});

Route::get('/inscription', function () {
    return view('candidats.inscription');

});
Route::get('/mescandidatures',[CandidatureController::class, 'affichageListe'] );
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);


    Route::get('/liste_candidature', function () {
        return view('candidats/candidature');
    });

Route::get('/liste_candidature', function () {
        return view('candidats/candidature');
    });

Route::get('/espacePersonnel', function(){
    return view('personnels/espacePerso');
});
