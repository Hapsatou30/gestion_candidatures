@extends('layouts.app')
@section('content')
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <link href="{{ asset('css/modifier_profil.css') }}" rel="stylesheet">
    <div class="container-fluid"></div>
    <div class="container0">
        <div class="container1">
            <div class="profil">
                <h4>Profil Utilisateur</h4>
            </div>
            <form action="{{ route('ModifierProfilTraitement', $candidats->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group col-md-4">
                    <label for="photo"></label>
                    <input type="file" id="photo" name="photo" class="form-control">
                    @if ($candidats->photo)
                        <img src="{{ asset('storage/' . $candidats->photo) }}" alt="Photo de profil actuelle"
                            style="max-width: 100px; margin-top: 10px;">
                    @endif
                </div>
        </div>
                <div class="container2">        
                    <div class="form-row">
                        <input type="hidden" name="id" value="{{ old('id', $candidats->id) }}">
                        <div class="form-group col-md-4">
                            <label for="nom">Nom:</label>
                            <input type="text" id="nom" name="nom" class="form-control"
                            value="{{ old('nom', $candidats->nom) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="prenom">Prénom:</label>
                            <input type="text" id="prenom" name="prenom" class="form-control"
                            value="{{ old('prenom', $candidats->prenom) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date_naissance">Date de Naissance:</label>
                            <input type="date" id="date_naissance" name="date_naissance" class="form-control"
                            value="{{ old('date_naissance', $candidats->date_naissance) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telephone">Téléphone:</label>
                            <input type="text" id="telephone" name="telephone" class="form-control"
                            value="{{ old('telephone', $candidats->telephone) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="adresse">Adresse:</label>
                            <input type="text" id="adresse" name="adresse" class="form-control"
                            value="{{ old('adresse', $candidats->adresse) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Adresse email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                            value="{{ old('email', $candidats->email) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mot_passe">Mot de passe:</label>
                            <input type="password" id="mot_passe" name="mot_passe" class="form-control">
                        </div>               
                        <div class="form-group col-md-4">
                            <label for="cv">Votre CV:</label>
                            <input type="file" id="cv" name="cv" class="form-control"
                            value="{{ old('cv', $candidats->cv) }}">
                        </div>
                        <div class="col-md-4">
                            <label for="sexe">Genre</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Homme</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">Femme</label>
                            </div>
                        </div>
                    </div>
                        <br>
                        <button type="submit" class="btn">Enregistrer</button>                    
                </div>
            </form>
    </div>
@endsection
