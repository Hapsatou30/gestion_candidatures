@extends('layouts.sidebar')

@section('content')
    <div class="dashboard-container">
        <h1>{{ $personnel->Titre }}</h1>
        <p>Formation: {{ $personnel->formation }}</p>
        <p>Statut: {{ $personnel->statut }}</p>
        <p>Début: {{ $personnel->debut }}</p>
        <p>Fin: {{ $personnel->fin }}</p>
    </div>
@endsection
