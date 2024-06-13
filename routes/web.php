<?php

use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;




Route::get('/index', function () {
    return view('candidantures.index');
});


Route::get('formation', [FormationController::class, 'index']);

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/connexion',[CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter',[CandidatController::class,  'connecter'])->name('connecter');

Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

// Route::middleware(['auth'])->group(function () {
    
// });
Route::get('/accueil', [CandidatController::class, 'index'])->name('accueil');

    Route::get('/liste_candidature', function () {
        return view('candidats/candidature');
    });
