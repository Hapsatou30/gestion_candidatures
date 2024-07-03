@extends('layouts.sidebar')
@section('content')
{{-- @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif --}}
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            /* width: 85%; */
            margin-top: 20px;
        }
        .btn {
            padding: 8px 25px;
            margin-top: 5px;
            background-color: #CE0033;
            color: white;
            border-radius: 3px;
            text-align: center;
        }
        .list1 {
            background-color: #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            color: #ffffff;
        }
        .list2 {
            background-color: #CE0033;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            color: #ffffff;
        }
    </style>
    <a href="/espacePersonnel" class="btn btn-danger">Retour </a>
    <div class="container">
        <div class="card1">
             <img src="{{ $formation->image }}" style="width: 80%;" class="card-img-top" alt="Photo biii">
            <h1 class="nom">{{{ $formation->nom }}}</h1>
            <p>{{ $formation->description }}</p>
            <h2>Débouchés</h2>

            <ul>
                <li>{{ $formation->debouches }}</li>

            </ul>
            <a href="{{ route('modifierFormation', $formation->id) }}" class="btn">Modifier</a>
        </div>
        <div class="card2">
            <div class="list1">
                <h2>Compétences</h2>
                <ul>
                    <li>{{ $formation->competences }}</li>

                </ul>
            </div>
            <div class="list2">
                <h2>Quelques débouchés</h2>
                <ul>
                    <li>{{ $formation->debouches }}</li>
                </ul>
            </div>
        </div>
    </div>


    @endsection
