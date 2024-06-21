@extends('layouts.sidebar')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="dashboard-container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border-radius: 25px;">
                    <div class="row">
                        <div class="col-4 p-3">
                            <img src="{{ asset('images/new.png') }}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Inscription dans les 24 h</h5>
                                <p class="card-text">{{ $candidatureCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 25px;">
                    <div class="row">
                        <div class="col-4 p-3">
                            <img src="{{ asset('images/canditature.png') }}" alt="" srcset="">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Nombre de Candidature</h5>
                                <p class="card-text">{{ $nbrCandidat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 25px;">
                    <div class="row">
                        <div class="col-4 p-3">
                            <img src="{{ asset('images/verif.png') }}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Candidature Vérifié</h5>
                                <p class="card-text">{{ $verifieCandidatureCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tableau">
    <div class="container">
        <h1 class="my-4">Formations</h1>
        @foreach ($formations as $formation)
            <div class="card card-custom">
                <img src="{{ $formation->image }}" alt="{{ $formation->nom }}">
                <div class="card-body">
                    <div class="info">
                        <div><h6><strong>Formation</strong></h6><p class="card-text">{{ $formation->nom }}</p></div>
                        <div><h6><strong>Statut</strong></h6><p class="card-text">{{ $formation->statut }}</p></div>
                        <div><h6><strong>Début</strong></h6><p class="card-text">{{ $formation->date_debut }}</p></div>
                        <div><h6><strong>Fin</strong></h6><p class="card-text">{{ $formation->date_fin }}</p></div>
                    </div>
                    <a href="{{ route('formdetails', $formation->id) }}">Voir détails</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
    h1 {
    color: var(--couleur-pricinpal);
    font-size: var(--taille-titre);
    margin-left: 20px;
    line-height: 42px;
    margin-bottom: 30px;
}

.add-button {
    display: inline-block;
    padding: 10px;
    background-color: #CE0033;
    color: white;
    text-align: center;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.add-button:hover {
    background-color: #a60028;
}

.button-container {
    text-align: right;
    margin-bottom: 20px;
}

.dashboard {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.card {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    border: none;
    margin-bottom: 20px;
}

.tableau {
    margin-top: 50px;
}

.tableau .card-custom {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); /* Ombre en bas */
    border: none; /* Suppression des bordures */
    border-radius: 25px; /* Bordure arrondie */
}

.tableau .card-custom img {
    width: 100px;
    height: auto;
}

.tableau .card-custom .card-body {
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.tableau .card-custom .card-body .info {
    flex: 1;
    margin-left: 20px;
    display: flex;
    justify-content: space-around;
}

.tableau a {
    text-decoration: none;
    color: #CE0033;
}

.tableau .card-custom .info > div {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

</style>
@endsection
