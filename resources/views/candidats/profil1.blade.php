@extends('layouts.app')

@section('content')
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <link href="{{ asset('css/profil1.css') }}" rel="stylesheet">
    <div class="container-fluid">
    </div>
    <div class="container0">
        <div class="container1">
            <div class="profil">
                <h3>Profil Utilisateur</h3>
                <br>
                <br>
                <br>
                <h4>{{ $candidat->prenom }} {{ $candidat->nom }}</h4>
            </div>
            <div>
                <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="">
            </div>
        </div>
        <div class="container2">
            <div class="cv">
                <div class="cv1">
                    <img src="{{ asset('images/bi_file-pdf.png') }}" alt="">
                </div>
                <div class="cv2">
                    <h1>CV</h1>
                    <br>
                    <button><img src="{{ asset('images/Icon.png') }}" alt=""></button>
                </div>
            </div>
            <div class="info">
                <h2>Informations Personnelles</h2>
                <div class="info_perso">
                    <div class="label">
                        <p>Date de Nais.</p>
                        <p>Téléphone</p>
                        <p>Email</p>
                        <p>Adresse</p>
                        <p>Genre</p>
                    </div>
                    <div class="input">
                        <p>{{ $candidat->date_naissance }}</p>
                        <p>{{ $candidat->telephone }}</p>
                        <p>{{ $candidat->email }}</p>
                        <p>{{ $candidat->adresse }}</p>
                        <p>{{ $candidat->sexe }}</p>
                    </div>
                </div>
                <a href="/modifier-profil/{{ $candidat->id }}">
                    <button>
                        <p>Editer les informations</p>
                        <img src="{{ asset('images/Vector.png') }}" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
