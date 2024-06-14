<style>
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.candidature-details .header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.candidature-details .header .photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 20px;
}

.candidature-details .header .info h1 {
    margin: 0;
    font-size: 24px;
}

.candidature-details .content h2 {
    margin-top: 20px;
    font-size: 20px;
}

.candidature-details .content p {
    margin-bottom: 10px;
}

.candidature-details .content a {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

.candidature-details .content a:hover {
    text-decoration: underline;
}


</style>
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/candidature-details.css') }}" rel="stylesheet">

<div class="container">
    <div class="candidature-details">
        <div class="header">
            <img src="{{ asset( $candidat->photo) }}" alt="Photo de {{ $candidat->prenom }} {{ $candidat->nom }}" class="photo">
            <div class="info">
                <h1>{{ $candidat->prenom }} {{ $candidat->nom }}</h1>
                <p>Âge: {{ $age }} ans</p>
            </div>
        </div>

        <div class="content">
            <h2>Biographie</h2>
            <p>{{ $candidature->biographie }}</p>

            <h2>Motivation</h2>
            <p>{{ $candidature->motivation }}</p>

            <h2>CV</h2>
            <a href="/candidature/cv/ {{ $candidat->id }}">Télécharger le CV</a>
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Retour</a>
    </div>
</div>
@endsection
