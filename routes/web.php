<?php

use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;

use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\EmailController;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;



//routes candidat et candidature
Route::get('/postuler',[CandidatureController::class,'postuler']);
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);
// Route::get('/profil',  [CandidatController::class,'profil']);
Route::get('/mescandidatures',[CandidatureController::class, 'affichageListe'] );
Route::get('/profil/{id}', [CandidatController::class, 'show'])->name('profil.show');
Route::get('/candidature/{id}', [CandidatureController::class, 'show'])->name('candidature.show');
// Route::get('/candidature/cv/{id}', [CandidatureController::class, 'telechargerCV'])->name('candidature.show');

//routes formations
Route::get('/formation', [FormationController::class, 'index']);
Route::get('formation/detail', [FormationController::class, 'detail']);
Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::get('/formations', [FormationController::class, 'listeDformation']);
Route::post('/modifier/formation-traitement/', [FormationController::class, 'ModifierFormationTraitement']);
Route::get('/modifier-formation/{id}', [FormationController::class, 'ModifierFormation']);
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy');  


//routes authentification pour le candidat
Route::get('/connexion',[CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter',[CandidatController::class,  'connecter'])->name('connecter');

Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('/deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

//Accueil
Route::get('/', [CandidatController::class, 'index'])->name('accueil');

//routes personnels
Route::get('/espacePersonnel',[PersonnelController::class,'voirEspace']);


//routes authentifcation personnels
Route::get('/connexionPersonnel', [PersonnelController::class, 'connexion']);
Route::post('/verification', [PersonnelController::class, 'verification']);

//route pour l'email

Route::get('/send-my-email', function () {
    $name = 'haps thiam';  // Remplacez par le nom que vous souhaitez utiliser
    Mail::to('hapsthiam@gmail.com')->send(new MyEmail($name));
    return 'Email has been sent!';
});



