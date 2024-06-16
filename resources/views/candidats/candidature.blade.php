@extends('layouts.app')
@section('content')
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <section style="margin-top:50px;">
        <h1 style="font-family: 'Nunito', sans-serif; text-align:center;font-weight: bold; ">Mes candidatures à Simplon</h1>
        <div class="trait"></div>
        <div class="carres">
            <div class="carre"></div>
            <div class="carre"></div>
            <div class="carre"></div>
        </div>
    </section>
    <section style="margin-top:60px">
        <div style="background-color:#CE0033; width:70%; margin-left:14%">
            <div style="background-color:#ffffff; width:100%; border-radius:60px;">
                <div class="container mt-5" style="padding:50px;">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Cohortes</th>
                                <th scope="col">Formations</th>
                                <th scope="col">Résultats</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidatures as $candidature)
                                <tr style="height: 100px;">
                                    <td>{{ $candidature->formation->cohorte }}</td>
                                    <td>{{ $candidature->formation->nom }}</td>
                                    <td>{{ ucfirst($candidature->etat) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
@endsection
