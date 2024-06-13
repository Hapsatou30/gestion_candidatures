<?php

use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;

use App\Http\Controllers\CandidatureController;


Route::get('/index', [CandidatureController::class, 'postuler']);
Route::get('/index', function () {
    return view('candidantures.index');
});


Route::get('/', function () {
    return view('candidats/profil1');
});




Route::get('formation', [FormationController::class, 'index']);
Route::get('/index', function () {
    return view('candidantures.index');
});


Route::get('formation', [FormationController::class, 'index']);
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/connexion', [CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter', [CandidatController::class,  'connecter'])->name('connecter');


Route::get('/inscription', function () {
    return view('candidats.inscription');
});
Route::get('/mescandidatures', [CandidatureController::class, 'affichageListe']);
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);


Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

// Route::middleware(['auth'])->group(function () {

// });
Route::get('/accueil', [CandidatController::class, 'index'])->name('accueil');


Route::get('/liste_candidature', function () {
    return view('candidats/candidature');
});


Route::get('/liste_candidature', function () {
    return view('candidats/candidature');
});

Route::get('/espacePersonnel', function () {
    return view('personnels/espacePerso');
});
Route::get('/connexionPersonnel', [PersonnelController::class, 'connexion']);
Route::post('/verification', [PersonnelController::class, 'verification']);

Route::get('formation/detail/{id}', [FormationController::class, 'detail'])->name('detailFormation');


Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::post('/ajouter/formation-traitement', [FormationController::class, 'AjouterFormationTraitement']);

// affichage du liste sur le dashboad
Route::get('/formations', [FormationController::class, 'listeDformation']);

//pour la suppression
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy');




Route::post('/modifier/formation-traitement/', [FormationController::class, 'ModifierFormationTraitement']);
Route::get('/modifier-formation/{id}', [FormationController::class, 'ModifierFormation']);
