<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/espace.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper d-flex">
        <div class="sidebar d-flex flex-column justify-content-between">
            <div>
                <img src="{{asset('images/logo.png')}}" class="logo">
                <hr>
                <ul class="menu-list">
                    <li>
                        <a href="{{route('espacePersonnel')}}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="icon-path" fill="white" d="M2 2h9v7H2zm2 2v3h5V4zm9-2h9v11h-9zm2 2v7h5V4zM2 11h9v11H2zm2 2v7h5v-7zm9 2h9v7h-9zm2 2v3h5v-3z"/>
                            </svg> 
                            Tableau de bord
                        </a>
                    </li>
                    <li>
                        <a href="/formations">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="icon-path" fill="white" fill-rule="evenodd" d="M11.49 4.11a10.451 10.451 0 0 0-9.26-.74a1.163 1.163 0 0 0-.731 1.08v11.66c0 .78.789 1.314 1.514 1.024a8.558 8.558 0 0 1 7.582.608l1.135.68c.087.053.18.075.269.074a.503.503 0 0 0 .27-.073l1.134-.681a8.558 8.558 0 0 1 7.582-.608a1.104 1.104 0 0 0 1.514-1.025V4.45c0-.476-.29-.903-.731-1.08a10.451 10.451 0 0 0-9.259.742l-.51.306zm1.26 2.39a.75.75 0 0 0-1.5 0V16a.75.75 0 0 0 1.5 0z" clip-rule="evenodd"/><path class="icon-path" fill="white" d="M2.725 19.042a6.5 6.5 0 0 1 6.55 0l1.087.634a3.25 3.25 0 0 0 3.276 0l1.087-.634a6.5 6.5 0 0 1 6.55 0l.103.06a.75.75 0 1 1-.756 1.296l-.103-.06a5 5 0 0 0-5.038 0l-1.088.634a4.75 4.75 0 0 1-4.786 0l-1.088-.634a5 5 0 0 0-5.038 0l-.103.06a.75.75 0 0 1-.756-1.296z"/>
                            </svg> 
                            Formations
                        </a>
                    </li>
                    <li>
                        <a href="/formations">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="icon-path" fill="white" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4l.11-.94L5 5.5L12 2l7 3.5v5h-1V6l-2.11 1.06zm-4 6c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/>
                            </svg> 
                            Candidats
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="logout-list">
                <li>
                    <a href="/deconnexion">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path class="icon-path" fill="white" d="M5 11h8v2H5v3l-5-4l5-4zm-1 7h2.708a8 8 0 1 0 0-12H4a9.99 9.99 0 0 1 8-4c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.99 9.99 0 0 1-8-4"/>
                        </svg> 
                        Deconnexion
                        @if (session('status'))
                        <div class="alert alert-success">
                            <a href="/deconnexion">{{ session('status') }}</a>
                        </div>
                    @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
    

    <div class="container top-bar d-flex align-items-center justify-content-end">
        <h4>Bonjour {{ session('personnel')->prenom }}</h4> <hr>
    </div>
   
    

    <div class="main-content">
        @yield('content')
    </div>

</body>

</html>
