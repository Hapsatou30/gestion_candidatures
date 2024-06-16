@extends('layouts.app')
@section('content')

<link href="{{ asset('css/modifier_profil.css') }}" rel="stylesheet">

<div class="container">
    <h1>Modifier votre profil</h1>

    <form action="{{ route('ModifierProfilTraitement', $candidats->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-row">
            <input type="hidden" name="id" value="{{ old('id', $candidats->id) }}">
            <div class="form-group col-md-4">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', $candidats->nom) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" value="{{ old('prenom', $candidats->prenom) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="date_naissance">Date de Naissance:</label>
                <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ old('date_naissance', $candidats->date_naissance) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="telephone">Téléphone:</label>
                <input type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone', $candidats->telephone) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" class="form-control" value="{{ old('adresse', $candidats->adresse) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="sexe">Sexe</label>
                <select id="sexe" name="sexe" class="form-control">
                    <option value="M" {{ old('sexe', $candidats->sexe) == 'M' ? 'selected' : '' }}>Masculin</option>
                    <option value="F" {{ old('sexe', $candidats->sexe) == 'F' ? 'selected' : '' }}>Féminin</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Adresse email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $candidats->email) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="mot_passe">Mot de passe:</label>
                <input type="password" id="mot_passe" name="mot_passe" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="photo">Photo de profil:</label>
                <input type="file" id="photo" name="photo" class="form-control">
                @if ($candidats->photo)
                    <img src="{{ asset('storage/' . $candidats->photo) }}" alt="Photo de profil actuelle" style="max-width: 100px; margin-top: 10px;">
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="cv">Votre CV:</label>
                <input type="file" id="cv" name="cv" class="form-control">
                @if ($candidats->cv)
                    <a href="{{ asset('storage/' . $candidats->cv) }}" target="_blank">Voir CV actuel</a>
                @endif
            </div>
            <br>
            <button type="submit" class="btn">Enregistrer</button>
            <br><br>
            <a href="/profil" class="btn">Retour</a>
        </div>
    </form>
</div>
@endsection
