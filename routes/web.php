<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('formation', [FormationController::class, 'index']);
Route::get('formation/detail', [FormationController::class, 'detail']);
