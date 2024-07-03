@extends('layouts.app')
@section('content')
@section('content')
    {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}
    <main class="container">
        <div class="banniere text-start">
            <div class="row d-flex">
                <div class="col mt-3">
                    <h1 class="text-danger justify-content-start mb-3">Trouver votre formation en 2
                        clics
                    </h1>
                    <div class='note mb-5'>
                        <button class='btn note btn-danger rounded-pill'>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            96% de nos apprennant recommandent Simplon Formation
                        </button>
                    </div>
                    <div class="recherche">
                        <div class="d-flex justify-content-center">
                            <div class="search">
                                <i class="fa fa-search m-3" style="color: rgb(212, 10, 10);"></i>
                                <input class="search_input" type="text" name=""
                                    placeholder="Mot clés, thématique de formation....">
                                <a href="#" class="search_icon">RECHERCHER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('images/banniere.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="comment-faire mt-5">
            <div class="row text-center justify-content-center">
                <h1 style="width:500px;">Comment participer à nos formations ?</h1>
                <p style="width:900px;">
                    Pour bénéficier de nos formations, plusieurs étapes doivent être franchies. Ainsi, nous lançons unappel
                    à candidatures afin de sélectionner les bénéficiaires en fonction de nos critères.
                </p>
            </div>
            <div class="container text-center">
                <div class="row row-cols-2 mt-5">
                    <div class="col"><img src="{{ asset('images/formation.png') }}" style="width:100%;"></div>
                    <div class="col">
                        <h4 class="text-danger text-start"><img src="{{ asset('images/Vector.svg') }}"> Appel à candidature
                        </h4>
                        <p class="text-start mx-4">
                            Un appel à candidatures est lancé sur nos pages sociales. Ainsi, nous invitons tous les
                            individus intéressés à postuler en remplissant notre formulaire en ligne.
                        </p>
                        <h4 class="text-danger text-start"><img src="{{ asset('images/Vector.svg') }}"> Réunion
                            d’informations
                        </h4>
                        <p class="text-start mx-4">
                            Une fois que nous avons reçu les candidatures, nous organisons des réunions d’informations pour
                            présenter plus en détail notre programme de formation.
                        <h4 class="text-danger text-start"><img src="{{ asset('images/Vector.svg') }}"> Tests individuels
                        </h4>
                        <p class="text-start mx-4">
                            Après la réunion d’informations, nous procédons à des tests individuels pour évaluer les
                            compétences des candidats.
                        </p>
                        <h4 class="text-danger text-start"><img src="{{ asset('images/Vector.svg') }}"> Sélection finale
                        </h4>
                        <p class="text-start mx-4">
                            La dernière étape de notre processus de sélection consiste à choisir les bénéficiaires qui
                            seront admis dans nos formations
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="formation mt-5">
            <div class="row text-center justify-content-center">
                <h1 style="width:700px;">Découvrez nos formations</h1>
                <p style="width:900px;">
                    La qualité est au coeur de notre démarche, la satisfaction de nos clients étant la seule voie par
                    laquelle nous
                    pouvons assurer notre développement. Le souci permanent de la QUALITE est donc omniprésent dans le
                    cadre des services offerts aux clients.
                </p>
            </div>
            <div class="container text-center">
                <div class="row row-cols-2 mt-5">

                    <div class="col">
                        <div class="container text-center">

                            <div class="row row-cols-2">
                                @foreach ($formations as $formation)
                                    <div class="col">

                                        <a href="{{ route('detailFormation', $formation->id) }}">
                                            <div class="card mb-5" style="width: 15rem; height:250px">
                                                <img src="{{ $formation->image }}" class="card-img-top"
                                                    alt="formation" style="height:200px">
                                                <div class="card-body">
                                                    <h6 class="card-text">
                                                        {{ $formation->nom}}</h6>
                                                </div>
                                            </div>
                                         </a>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col"><img src="{{ asset('images/formation1.png') }}" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
