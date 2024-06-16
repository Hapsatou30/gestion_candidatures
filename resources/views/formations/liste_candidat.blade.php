@extends('layouts.sidebar')

@section('content')

<section class="contenu">
    <div class="container" style="background-color:#CE0033; width:98%;">
        <div class="container-fluid" style="background-color:#ffffff; width:100%; border-radius:50px;">
            <div class="container mt-5" style="padding:10px;">
                <div class="dashboard-container">
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
                            @foreach($candidatures as $candidature)
                                <tr>
                                    <td>{{ $candidature->candidat->nom }}</td>
                                    <td>{{ $candidature->candidat->prenom }}</td>
                                    <td>{{ $candidature->candidat->email }}</td>
                                    <td>
                                        <a href="{{ route('candidature.show', $candidature->id) }}" class="btn btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

@endsection
