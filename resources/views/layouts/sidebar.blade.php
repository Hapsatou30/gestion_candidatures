<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/espace.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="wrapper d-flex">
        <div class="sidebar">
            <small class="text-muted p-5 mb-3">
                <img src="{{asset('images/logo.png')}}" style="width:50%;">
                <hr class="text-ligt" style="color:white;">
            </small>
            <ul>
                <li><a href="#"><img src="images/deconnexion.svg" alt="">   Tableau de bord</a></li>
                <li><a href="#"><img src="images/formation.svg" alt="">   Formations </a></li>
                <li><a href="#"><img src="images/candidat.svg" alt="">   Candidats </a></li>
            </ul>
            <small class="text-muted px-3"></small>
            <ul>
               
            </ul>
            <small class="text-muted px-3"></small>
            <ul>
                
                <li><a href="#"><img src="images/deconnexion.svg" alt="" style="background-color: ">   Deconnexion</a></li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header class="header text-start" id="header">
           
            <div class="container h-100">
                
                <div class="d-flex justify-content-center h-100">
                    <h1 class="m-5 text-danger">Dashboard</h1>
                  <div class="search">
                    <input class="search_input" type="text" name="" placeholder="Rechercer">
                    <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                  </div>
                  <div class="header_img"> 
                    <img class="rounded-circle" style="width: 50px; margin-top:50px; margin-left:50px;" src="{{ asset('images/banniere.png') }}" alt="">
                    <i class="fa-solid fa-bell" style="color: #950909;"></i>
                 </div>
                </div>
                
              </div>
               
        </header>
        @yield('content')
        <!-- Contenu principal de la page -->
    </div>

</body>

</html>
