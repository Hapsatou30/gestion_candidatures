
<style>.candidature-detail {
    padding: 20px;
}

.header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.photo img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-right: 20px;
}

.info h1 {
    margin: 0;
    font-size: 24px;
}

.biographie, .motivation, .cv {
    margin-bottom: 20px;
}

.cv a {
    display: inline-block;
    margin-top: 10px;
}


</style>

@extends('layouts.sidebar')
@section('content')
<link href="{{ asset('css/candidature.css') }}" rel="stylesheet">

<div class="container-fluid">
    <div class="candidature-detail">
        <div class="header">
            <div class="photo">
                <img src="{{ asset('storage/' . $candidature->candidat->photo) }}" alt="Photo de {{ $candidature->candidat->prenom }} {{ $candidature->candidat->nom }}">
            </div>
            <div class="info">
                <h1>{{ $candidature->candidat->prenom }} {{ $candidature->candidat->nom }}</h1>
                <p>Age: {{ \Carbon\Carbon::parse($candidature->candidat->date_naissance)->age }} ans</p>
            </div>
        </div>
        <div class="biographie">
            <h2>Biographie</h2>
            <p>{{ $candidature->biographie }}</p>
        </div>
        <div class="motivation">
            <h2>Motivation</h2>
            <p>{{ $candidature->motivation }}</p>
        </div>
        <div class="cv">
            <h2>CV</h2>
            <a href="{{ asset('storage/' . $candidature->candidat->cv) }}" class="btn btn-primary" target="_blank">Voir le CV</a>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Retour</a>
    </div>
</div>
@endsection
