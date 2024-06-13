<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/profil1.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid"> 
    </div>
    <div class="container">
        <div class="container1">
            <div class="profil">
                <p class="nom1">Profil Utilisateur</p>
                <br>
                <br>
                <br>
                <p classe="nom2">Hapsatou Thiam</p>
            </div>
            <div>
                <img src="{{ asset('images/Ellipse 18.png')}}" alt="">
            </div>
        </div>
        <div class="container2">
            <div class="cv">
                <div class="cv1">
                    <img src="{{asset('images/bi_file-pdf.png')}}" alt="">
                </div>
                <div class="cv2"> 
                    <h1>CV</h1>
                    <br>
                    <button><img src="{{asset('images/Icon.png')}}" alt=""></button>
                </div>
            </div>
            <div class="info">
                <h1>Informations Personnelles</h1>
                <div class="info_perso">
                    <div class="label">
                        <p>Date de Nais.</p>
                        <p>Téléphone</p>
                        <p>Email</p>
                        <p>Adresse</p>
                        <p>Genre</p>
                    </div>
                    <div class="input">
                        <p >30-04-1960</p>
                        <p>781509680</p>
                        <p>thiamhapsatou@gmail.com</p>
                        <p>THIES</p>
                        <p>Femme</p> 
                    </div>
                </div>
                <button>
                        <p>Editer les informations</p>
                        <img src="{{asset('images/Vector.png')}}" alt="">
                </button>
            </div>
        </div>
    </div> 








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
</body>
</html>