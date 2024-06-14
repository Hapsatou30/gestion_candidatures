@extends('layouts.sidebar')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .dashboard-container {
            max-width: 900px;
            margin: auto;
            border-radius: 1px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: auto;
        }
        h1 {
            text-align: left;
            margin-bottom: 20px;
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
        
    </style>

    <section style="margin-top:60px">
        <div style="background-color:#CE0033; ">
            <div style="background-color:#ffffff; border-radius:60px;">
                <div class="container mt-5" style="padding:10px;">
                    <div class="dashboard-container" style="padding-left: 150px; ">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1 class="text-end">La liste des formations</h1>
                            <a href="/formations/ajouter" class="add-button">Ajouter une formation</a>
                            
                        </div>
                        <table style="">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Durée</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
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


                                        
                                    </td>
                                   </tr>
                                   @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

@endsection