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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            width: 25%;
        }
        td img {
            width: 100px;
            height: auto;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions a {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: rgb(5, 5, 5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .card{
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .tableau{
            margin-top: 50px
        }
    </style>
@extends('layouts.sidebar')
@section('content')
    <div class="dashboard-container">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inscription dans les 24 h</h5>
                            <p class="card-text">{{ $candidatureCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nombre de Candidature</h5>
                            <p class="card-text">{{ $nbrCandidat }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Candidature Vérifié</h5>
                            <p class="card-text">{{ $verifieCandidatureCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- {{ route('personnels.show', $personnel->id) }} --}}
    </div>
    <div class="tableau">

        <h1>Formations</h1>
        <table>
            @foreach($formations as $formation)
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Formation</th>
                    <th>Statut</th>
                    <th>Debut</th>
                    <th>Fin</th>
                    <th>Voir détails</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td> <img src="{{ $formation->image}}" alt="Image" width="100"></td>
                        <td>{{ $formation->nom }}</td>
                        <td>{{ $formation->statut }}</td>
                        <td>{{ $formation->debut }}</td>
                        <td>{{ $formation->fin }}</td>
                        <td><a href="{{ route('formdetails', $formation->id) }}">Détails</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
