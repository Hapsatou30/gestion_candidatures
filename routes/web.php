<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// //pour candidats inscription
// Route::get('/inscription', function () {
//     return view('candidats.inscription');
// });
// //pour candidats connexion

// Route::get('/connexion', function () {
//     return view('candidats.connexion');
// });
//pour candidanture index

Route::get('/index', function () {
    return view('candidantures.index');
});
Route::get('/accueil', function () {
    return view('accueil');
});
