<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">
    <link href="{{ asset('css/candidature.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion des candidatures</title>
</head>

<body>

    <nav class="navbar text-dark navbar-expand-lg cusSticky" style="background-color: #ffffff;">
        <a class="navbar-brand ml-5" href="#" data-abc="true"><img src="{{ asset('images/logo.png') }}"
                alt="logo" width="100" height="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container justify-content-center">
            <ul class="navbar fs-3 text-dark bg-white navbar-nav justify-content-center">
                <li class="nav-item active"> <a class="nav-link" href="#" data-abc="true">Accueil</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Formations</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Mes candidatures</a> </li>
            </ul>
        </div>
        <div class="bouton">
            <a href="" class="btn btn-danger me-5">Connexion</a>
        </div>
    </nav>
    @yield('content')



    <footer class="bg-white pt-5" style="width: 100%;">
        <hr class="p-0 m-0 b-0">
        <div class="py-2 pt-5 " style="background-color: #CE0033">
            <div class="container pb-5 text-center">
                <img src="{{ asset('images/logo-footer.png') }}" alt="logo">
            </div>
            <div class="container text-center">

            </div>
            <div class="icon text-end pb-5 mr-5 p-5">
                <img src="{{ asset('images/twitter.png') }}" alt="twitter" class="p-2">
                <img src="{{ asset('images/linkedin.png') }}" alt="twitter" class="p-2">
                <img src="{{ asset('images/facebook.png') }}" alt="twitter" class="p-2">
                <img src="{{ asset('images/instagram.png') }}" alt="twitter" class="p-2">
                <img src="{{ asset('images/youtube.png') }}" alt="twitter" class="p-2">
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
