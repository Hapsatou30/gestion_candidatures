@extends('layouts.sidebar')
@section('content')

<section class="contenu" style="padding-left: 300px;">
    <div class="container-fluid">
        <h3 class="mt-4" style="text-align: center">Liste des candidats postulés pour {{ $formation->nom }}</h3>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="color: #CE0033">Nom</th>
                    <th scope="col" style="color: #CE0033">Prénom</th>
                    <th scope="col" style="color: #CE0033">Email</th>
                    <th scope="col" style="color: #CE0033">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider"> 
            @foreach($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prenom }}</td>
                    <td>{{ $candidat->email }}</td>
                    <td><a href="#" class="btn btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
    </div>
</section>
@endsection