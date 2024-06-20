<?php

use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;

use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\EmailController;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;





//routes formations
Route::get('/formation', [FormationController::class, 'index'])->name('formation');
Route::get('formation/detail/{id}', [FormationController::class, 'detail'])->name('detailFormation');



//routes authentification pour le candidat
Route::get('/connexion',[CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter',[CandidatController::class,  'connecter'])->name('connecter');

Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('/deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

//Accueil
Route::get('/', [CandidatController::class, 'index'])->name('accueil');



//routes authentifcation personnels
Route::get('/connexionPersonnel', [PersonnelController::class, 'connexion']);
Route::post('/verification', [PersonnelController::class, 'verification']);
Route::get('/deconnexion', [PersonnelController::class, 'deconnexion']);





//candidat et candidature
Route::middleware(['auth', 'candidat'])->group(function (){
    
Route::get('/postuler/{id}',[CandidatureController::class,'postuler'])->name('postuler');
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);
Route::get('/mescandidatures',[CandidatureController::class, 'affichageListe'] );
Route::get('/modifier-profil/{id}', [CandidatController::class, 'ModifierProfil'])->name('candidats.modifier');
Route::post('/modifier/profil-traitement/{id}', [CandidatController::class, 'ModifierProfilTraitement'])->name('ModifierProfilTraitement');
Route::get('/profil', [CandidatController::class, 'show'])->name('profil.show');

});



Route::middleware(['personnel'])->group(function () {
    
Route::get('/espacePersonnel',[PersonnelController::class,'voirEspace'])->name('espacePersonnel');
Route::post('/modifier/formation-traitement/', [FormationController::class, 'ModifierFormationTraitement']);
Route::get('/modifier-formation/{id}', [FormationController::class, 'ModifierFormation'])->name(('modifierFormation'));
Route::get('/Suppformations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy');
Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::post('/ajouter/formation-traitement', [FormationController::class, 'AjouterFormationTraitement']);
Route::get('/formations', [FormationController::class, 'listeDformation'])->name('listeFormation');
Route::get('/formdetails/{id}', [FormationController::class, 'formationshow'])->name('formdetails');
Route::get('/listeCandidatPostulez/{formation}',[FormationController::class,'CandidatPostulez']);
Route::get('/candidature/{candidature}', [CandidatureController::class, 'show'])->name('candidature.show');
Route::post('/candidature/{id}/accepter', [CandidatureController::class, 'accepter'])->name('candidature.accepter');
Route::post('/candidature/{id}/refuser', [CandidatureController::class, 'refuser'])->name('candidature.refuser');
Route::get('/personnels/{id}', [PersonnelController::class, 'show'])->name('personnels.espacePerso');

});
