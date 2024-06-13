<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;


Route::get('/index',[CandidatureController::class,'postuler']);

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