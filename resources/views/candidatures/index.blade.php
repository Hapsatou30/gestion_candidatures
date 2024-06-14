@extends('layouts.app')
@section('content')
    <style>
        .container {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .container .row{
            display: flex;
            align-items: center;
            justify-content: space-around
        }
        .image-container img {
            width: 400px
        }

        .form-container {

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            margin-bottom: 50px;
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            height: 150px;
            resize: none;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #CE0033;
            ;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2 {
            text-align: center
        }
    </style>
    <div class="container">
        
        <div class="row">
            <div class="col-6 image-container">
                <img src="{{ asset('images/image3.png') }}" alt="">
            </div>
            <div class="col-6 form-container">
                <h3>Postuler à la formation : {{ $formation->titre }}</h3>
                <form method="POST" action="/sauvegardeCandidature">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" id="candidat_id" name="candidat_id" value="{{$candidat->id}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input value="{{ $formation->id }}" name="formation_id" type="hidden">
                    </div>

                    <!-- Champ pour la motivation du candidat -->
                    <div class="form-group">
                        <label for="motivation">Motivation</label>
                        <textarea id="motivation" name="motivation" class="form-control" placeholder="Motivation" required></textarea>
                    </div>

                    <!-- Champ pour la biographie du candidat -->
                    <div class="form-group">
                        <label for="biographie">Biographie</label>
                        <textarea id="biographie" name="biographie" class="form-control" placeholder="Biographie" required></textarea>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class="form-group">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
