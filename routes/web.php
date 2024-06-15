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
Route::get('/postuler/{id}',[CandidatureController::class,'postuler'])->name('postuler');
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);
// Route::get('/profil',  [CandidatController::class,'profil']);
Route::get('/mescandidatures',[CandidatureController::class, 'affichageListe'] );

Route::get('/candidature/{id}', [CandidatureController::class, 'show'])->name('candidature.show');

// Route modification de profil
Route::post('/modifier/profil-traitement/', [CandidatController::class, 'ModifierProfilTraitement'])->name('ModifierProfilTraitement');
Route::get('/modifier-profil/{id}', [CandidatController::class, 'ModifierProfil']);

Route::get('/profil', [CandidatController::class, 'show'])->name('profil.show');


//routes formations
Route::get('/formation', [FormationController::class, 'index'])->name('formation');
Route::get('formation/detail/{id}', [FormationController::class, 'detail'])->name('detailFormation');
Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::get('/formations', [FormationController::class, 'listeDformation'])->name('listeFormation');
Route::post('/modifier/formation-traitement/', [FormationController::class, 'ModifierFormationTraitement']);
Route::get('/modifier-formation/{id}', [FormationController::class, 'ModifierFormation'])->name(('modifierFormation'));
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy'); 
//Affichage liste des candidat pour une formation
Route::get('/listeCandidatPostulez/{id}',[FormationController::class,'CandidatPostulez']); 


//routes authentification pour le candidat
Route::get('/connexion',[CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter',[CandidatController::class,  'connecter'])->name('connecter');

Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('/deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

//Accueil
Route::get('/', [CandidatController::class, 'index'])->name('accueil');

//routes personnels
Route::get('/espacePersonnel',[PersonnelController::class,'voirEspace'])->name('espacePersonnel');


//routes authentifcation personnels
Route::get('/connexionPersonnel', [PersonnelController::class, 'connexion']);
Route::post('/verification', [PersonnelController::class, 'verification']);

//route pour l'email

Route::get('/send-my-email', function () {
    $name = 'haps thiam';  // Remplacez par le nom que vous souhaitez utiliser
    Mail::to('hapsthiam@gmail.com')->send(new MyEmail($name));
    return 'Email has been sent!';
});



