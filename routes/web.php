<?php

use Illuminate\Support\Facades\Route;




Route::get('/index', function () {
    return view('candidantures.index');
});
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/connexion', function () {
    return view('candidats.connexion');
});

Route::get('/inscription', function () {
    return view('candidats.inscription');

});

Route::get('/', function () {
    return view('candidats/candidature');
});
