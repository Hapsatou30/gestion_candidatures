<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formations/ajouter', [FormationController::class, 'AjouterFormation']);
Route::post('/ajouter/formation-traitement', [FormationController::class, 'AjouterFormationTraitement']);