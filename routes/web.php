<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

Route::get('/', function () {
    return view('welcome');
});
// affichage du liste sur le dashboad
Route::get('/formations', [FormationController::class, 'listeDformation']);









