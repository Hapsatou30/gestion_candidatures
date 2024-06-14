<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/modifier_profil.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid"> 
</div>
<div class="container">
        <h1>Modifier votre profil</h1>

        <form action="{{route('ModifierProfilTraitement')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
            <div class="form-row">
            <input type="text" name="id" style="display: none" value="{{ old('id', $candidats->id) }}" >
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
                <select id="sexe" name="sexe" class="form-control" value="{{ old('sexe', $candidats->sexe) }}">
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Adresse email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $candidats->email) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="mot_passe">Mot de passe:</label>
                <input type="password" id="mot_passe" name="mot_passe" class="form-control" value="{{ old('mot_passe', $candidats->mot_passe) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="photo">Photo de profil:</label>
                <input type="file" id="photo" name="photo" class="form-control" value="{{ old('photo', $candidats->photo) }}">
            </div>
            <div class="form-group col-md-4">
                <label for="cv">Votre CV:</label>
                <input type="file" id="cv" name="cv" class="form-control" value="{{ old('cv', $candidats->cv) }}">
            </div>
            <br>
            <button type="submit" class="btn">Enregistrer</button>
            <br>
            <br>
            <a href="/profil/{{$candidats->id}}" class="btn">Retour</a>
            </div>
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
</body>
</html>

