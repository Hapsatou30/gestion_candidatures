<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
          
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-container {
            padding: 30px;
            width: 540px; /* Réduire la largeur du formulaire */
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 12px; /* Ajouter de l'espace entre la photo et le formulaire */
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 15px;
            box-sizing: border-box;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group input[type="submit"], .google-button {
            width: 100%;
            padding: 10px;
            background-color: #CE0033;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .google-button {
            background-color: #F3F9FA;
            color: #040404;
            margin-top: 10px;
        }
        .image-container {
            background: url('images/imagea22.png') no-repeat center center;
            background-size: cover;
            width: 650px;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <h2>Inscription</h2>
            {{-- <form action="{{ route('inscrire') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="prenom">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="nom">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="adresse">
                </div>
                <div class="form-group">
                    <label for="adresse">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="telephone">
                </div>
                <div class="form-group">
                    <label for="adresse">Date de naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance" placeholder="date_naissance">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="mot de passe">Mot de passe</label>
                    <input type="password" id="mot_passe" name="mot_passe" placeholder="mot de passe">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" name="photo" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="cv">Curriculum Vitae</label>
                    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <select id="sexe" name="sexe" required>
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="S'inscrire">
                </div>
                <div class="form-group">
                    <button type="button" class="google-button">Se connecter avec Google</button>
                </div>
            </form> --}}
    <form action="{{ route('inscription') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
            @error('nom') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}">
            @error('prenom') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}">
            @error('date_naissance') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}">
            @error('telephone') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value="{{ old('adresse') }}">
            @error('adresse') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe">
                <option value="M" {{ old('sexe') == 'M' ? 'selected' : '' }}>Homme</option>
                <option value="F" {{ old('sexe') == 'F' ? 'selected' : '' }}>Femme</option>
            </select>
            @error('sexe') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="mot_passe" id="mot_passe">
            @error('mot_passe') <span>{{ $message }}</span> @enderror
        </div>
   
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo">
            @error('photo') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="cv">CV</label>
            <input type="file" name="cv" id="cv">
            @error('cv') <span>{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="S'inscrire">
        </div>
        <div class="form-group">
            <button type="button" class="google-button">Se connecter avec Google</button>
        </div>
    </form>
   </div>
    </div>
</body>
</html>
