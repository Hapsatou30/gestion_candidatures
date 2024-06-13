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
            height: 100vh;
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
            <form>
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
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="mot de passe">Mot de passe</label>
                    <input type="password" id="mot-de-passe" name="mot-de-passe" placeholder="mot de passe">
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
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Féminin</option>
                        <option value="autre">Autre</option>
                    </select>
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
