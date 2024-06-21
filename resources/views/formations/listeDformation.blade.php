@extends('layouts.sidebar')
@section('content')
    <style>
        h1 {
            color: var(--couleur-pricinpal);
            font-size: var(--taille-titre);
            margin-left: 20px;
            line-height: 42px;
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

        td img {
            width: 100px;
            height: auto;
        }

        .thead-dark th {
            font-size: 20px;
            background: #CE0033;
            color: #ffffff
        }

        th {
            text-align: center;
            /* Center align text in table cells */
            vertical-align: middle
        }

        td {
            margin-left: 20px;
            text-align: justify;
            font-size: var(--taille-texte);
            text-align: center;
            /* Center align text in table cells */
            vertical-align: middle
        }

        a {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: rgb(5, 5, 5);
        }
    </style>
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <section style="margin-top:60px">
        <div class="container" style="background-color:#CE0033; width:98%;">
            <div class="container-fluid" style="background-color:#ffffff; width:100%; border-radius:50px;">
                <div class="container mt-5" style="padding:10px;">
                    <div class="dashboard-container">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin:30px;">
                            <h1>La liste des formations</h1>
                            <a href="/formations/ajouter" class="add-button">Ajouter une formation</a>
                        </div>
                        <table class="table ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Durée (Jours)</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                                @foreach ($formations as $formation)
                                    <tr style="text-align:">
                                        <td><img src="{{ asset($formation->image) }}" alt="Image de formation"></td>
                                        <td>{{ $formation->nom }}</td>
                                        <td>{{ $formation->dureeEnJours }}</td>
                                        <td class="actions">
                                            <a href="/formdetails/{{ $formation->id }}" class="view-button"
                                                title="Voir détails"><i class="fas fa-eye"></i></a>
                                            <a href="/listeCandidatPostulez/{{ $formation->id }}" class="candidat-button"
                                                title="Voir les candidatures"><i class="fas fa-user"></i></i></a>
                                            <a href="{{ route('modifierFormation', $formation->id) }}" class="edit-button"
                                                title="Modifier"><i class="fas fa-edit"></i></a>
                                            <a href="/Suppformations/{{ $formation->id }}" class="delete-button"
                                                title="Supprimer"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
=======
                                <tr>
                                    @foreach($formations as $formation)
                                    <td><img src="https://via.placeholder.com/100" alt="Image de formation"></td>
                                    <td>{{ $formation->nom }}</td>
                                    <td>{{ $formation->duree }}</td>
                                    <td class="actions">
                                        <a href="#" class="view-button" title="Voir détails"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('modifierFormation', $formation->id) }}" class="edit-button" title="Modifier"><i class="fas fa-edit"></i></a>
                                        
                                        <form action="{{ route('formations.destroy', $formation->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button" title="Supprimer"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="/listeCandidatPostulez/{{ $formation->id }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Voir candidats
                                        </a>   

                                        
                                    </td>
                                   </tr>
                                   @endforeach
>>>>>>> 7b33269 (mide à jour de la branch)
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

@endsection
