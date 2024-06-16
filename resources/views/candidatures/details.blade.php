@extends('layouts.sidebar')

@section('content')
<link href="{{ asset('css/candidatureDetail.css') }}" rel="stylesheet">
<div class="container">
    <div class="candidature-detail">
        <div class="header">
            </div>
            <div class="info">
                <img src="{{ asset('storage/' . $candidature->candidat->photo) }}" alt="Photo de {{ $candidature->candidat->prenom }} {{ $candidature->candidat->nom }}">
                <div class="name">
                    <h2>Prénom: {{ $candidature->candidat->prenom }} </h2>
                    <h2>Nom: {{ $candidature->candidat->nom }}</h2>
                </div>
                <h2>Age: {{ \Carbon\Carbon::parse($candidature->candidat->date_naissance)->age }} ans</h2>
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
            <img src="{{ asset('images/bi_file-pdf.png') }}" alt="">
            <p>CV <a href="{{ asset('storage/' . $candidature->candidat->cv) }}" class="btn btn-danger" target="_blank"><i class="fas fa-download"></i> </a>
            </p>
        </div>

        @if(is_null($candidature->etat))
            <div class="reponse">
                <form action="{{ route('candidature.accepter', $candidature->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success add-button">Accepter</button>
                </form>
                <form action="{{ route('candidature.refuser', $candidature->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger add-button">Refuser</button>
                </form>
            </div>
        @else
            <div class="reponse">
                <p class="text-success">Candidature {{ $candidature->etat }}</p>
            </div>
        @endif
        {{-- <div class="reponse">
            <form action="{{ route('candidature.accepter', $candidature->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success add-button">Accepter</button>
            </form>
            <form action="{{ route('candidature.refuser', $candidature->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger add-button">Refuser</button>
            </form>
        </div> --}}
        <a href="" class="btn btn-danger">Retour</a>
    </div>
</div>
@endsection
