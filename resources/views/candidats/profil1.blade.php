    <link href="{{ asset('css/profil1.css') }}" rel="stylesheet">
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
        <button class="retourner">Retour</button>
    </div> 

