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


// de form
Route::get('/formdetails', [FormationController::class, 'formationshow']);



//routes authentification pour le candidat
Route::get('/connexion',[CandidatController::class,  'connexion'])->name(('login'));
Route::post('/connecter',[CandidatController::class,  'connecter'])->name('connecter');

Route::get('/inscription', [CandidatController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [CandidatController::class, 'inscrire'])->name('inscrire');
Route::delete('/deconnexion', [CandidatController::class, 'deconnexion'])->name('deconnexion');

//Accueil
Route::get('/', [CandidatController::class, 'index'])->name('accueil');


//persoooo
// Route::get('/personnels', [PersonnelController::class, 'index'])->name('personnels.index');
Route::get('/personnels/{id}', [PersonnelController::class, 'show'])->name('personnels.espacePerso');






//routes authentifcation personnels 
Route::get('/connexionPersonnel', [PersonnelController::class, 'connexion']);
Route::post('/verification', [PersonnelController::class, 'verification']);
Route::get('/deconnexion', [PersonnelController::class, 'deconnexion']);


//route pour l'email

Route::get('/send-my-email', function () {
    $name = 'haps thiam';  // Remplacez par le nom que vous souhaitez utiliser
    Mail::to('hapsthiam@gmail.com')->send(new MyEmail($name));
    return 'Email has been sent!';
});

Route::get('/candidature/{id}', [CandidatureController::class, 'show'])->name('candidature.show');
//candidat et candidature
Route::middleware(['auth', 'candidat'])->group(function (){
Route::get('/postuler/{id}',[CandidatureController::class,'postuler'])->name('postuler');
Route::post('/sauvegardeCandidature', [CandidatureController::class, 'sauvegardeCandidature']);
Route::get('/mescandidatures',[CandidatureController::class, 'affichageListe'] );
Route::post('/modifier/profil-traitement/', [CandidatController::class, 'ModifierProfilTraitement'])->name('ModifierProfilTraitement');
Route::get('/modifier-profil/{id}', [CandidatController::class, 'ModifierProfil']);
Route::get('/profil', [CandidatController::class, 'show'])->name('profil.show');


});



Route::middleware(['personnel'])->group(function () {
Route::get('/espacePersonnel',[PersonnelController::class,'voirEspace'])->name('espacePersonnel');
Route::post('/modifier/formation-traitement/', [FormationController::class, 'ModifierFormationTraitement']);
Route::get('/modifier-formation/{id}', [FormationController::class, 'ModifierFormation'])->name(('modifierFormation'));
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy');  
Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::get('/formations', [FormationController::class, 'listeDformation'])->name('listeFormation');



});
