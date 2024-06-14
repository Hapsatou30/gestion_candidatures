<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion du Personnel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
   
</head>

<body>
    <main>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </main>
    <div class="row login-container">
        <div class=" col-4 login-image">
            <img src="{{ asset('images/personnel.jpg') }}" alt="connexion">
        </div>
        <div class="col-6 login-form">
            <h2>Connexion</h2>
            <form method="POST" action="/verification">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="mot_passe" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <a href="#">Mot de passe oublié?</a>
                </div>
                <button type="submit" class="btn btn-custom">Se Connecter</button>
            </form>
        </div>
    </div>

</body>

</html>
