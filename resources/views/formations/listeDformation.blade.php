@extends('layouts.sidebar')

@section('content')

<style>
    h1 {
        text-align: center;
        margin-top: 30px;
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
        background-color: #CE0033;
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
    
   

    th {
        background-color: #f2f2f2;
    }
    td img {
        width: 100px;
        height: 100px;
    }

    .actions {
        display: flex;
        justify-content: center; /* Centrer horizontalement les actions */
        gap: 10px;
        border-bottom: 0;
    }

    .actions a {
        border: none;
        text-decoration: none;
        color: rgb(5, 5, 5);
        
    }

</style>

<section style="margin-top: 60px">
    <div class="container-fluid">
        <div class="dashboard-container">
            <div style="display: flex; justify-content: space-between; align-items: center; margin: 30px;">
                <h1>La liste des formations</h1>
                <a href="/formations/ajouter" class="add-button">Ajouter une formation</a>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Durée (Jours)</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($formations as $formation)
                    <tr>
                        <td><img src="{{ asset($formation->image) }}" alt="Image de formation" class="img-thumbnail"></td>
                        <td>{{ $formation->nom }}</td>
                        <td>{{ $formation->dureeEnJours }}</td>
                        <td class="actions">
                            <a href="#" class="btn  btn-lg view-button" title="Voir détails"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('modifierFormation', $formation->id) }}" class="btn  btn-lg edit-button" title="Modifier"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('formations.destroy', $formation->id) }}" class="btn  btn-lg edit-button" title="Supprimer"><i class="fas fa-trash"></i></a>       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

@endsection
