<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .form-group a {
            display: block;
            margin-top: 5px;
            text-decoration: none;
            color: #CE0033;
            text-align: right;
        }

        .form-group input[type="submit"],
        .google-button {
            width: 100%;
            padding: 10px;
            background-color: #CE0033;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .google-button {
            background-color: #F3F9FA;
            margin-top: 10px;
            color: #000;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
        }

        .footer-text a {
            color: #CE0033;
            text-decoration: none;
        }

        .image-container {

            background: url('images/imagea2.png') no-repeat center center;
            background-size: cover;
            width: 400px;
        }

        a {
            color: #CE0033;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
     <!-- Affichage des messages d'erreur -->
     @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif

    <div class="container">
        <div class="image-container"></div>
        <!-- Contenu de la page -->
        <div class="form-container">
            <h2>Connexion</h2>

           
            <form action="{{ route('connecter') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="mot_passe">Mot de passe</label>
                    <input type="password" id="mot_passe" name="mot_passe" placeholder="mot de passe">
                </div>
                <div class="form-group">
                    <a href="#">Mot de passe oublié?</a>
                </div>
                <div class="form-group">
                    <input type="submit" value="Connexion">
                </div>
            </form>
            <div class="footer-text">
                <p>Inscrivez-vous si vous n’avez pas de compte? <a href="{{ route('inscription') }}">S’inscrire</a></p>
            </div>
        </div>
    </div>
</body>

</html>
