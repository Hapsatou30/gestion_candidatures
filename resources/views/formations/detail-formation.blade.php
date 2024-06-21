@extends('layouts.app')
@section('content')
    <div class="banniere mt-5">
        <div class="row">

            <div class="col p-5">
                <div class="card mt-5 p-3" style="width: 30rem;" id="card">
                    <h4 class="card-text-top">{{ $formation->nom }}</h4>
                    <div class="card-body">
                        <p class="card-text">{{ $formation->description }}</< /p>
                    </div>
                    <a class="btn btn-danger m-5" style="width: 10rem;" id="bouton"
                        href="{{ route('postuler', $formation->id) }}">POSTULER</a>
                </div>
                <img class="image" src="{{ asset('images/banner3.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="nav grid gap-0 column-gap-3">
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark active " data-toggle="tab" href="#tout"
                    onclick="showContent('tout')">COMPÉTENCES</a>
            </li>
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark" data-toggle="tab" href="#actualite"
                    onclick="showContent('actualite')">QUELQUES DÉBOUCHÉES</a>
            </li>
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark" data-toggle="tab" href="#photo" onclick="showContent('photo')">PÉDAGOGIE
                    ACTIVE</a>
            </li>
        </ul>

        <div class="tab-content mt-5">
            <div id="tout" class="tab-pane fade show active">
                <div class="container text-start">
                    <div class="row row-cols-2">
                        <div class="col">
                            <h5 class="text-uppercase">Compétences clés</h5>
                            <p>{{ $formation->competences }}</< /p>
                        </div>
                        <div class="col">
                            <h5 class="text-uppercase">soft skils</h5>
                            <p>{{ $formation->competences }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="actualite" class="tab-pane fade">
                <div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-uppercase">Débouchés</h5>
                            <p>{{ $formation->debouches }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <div id="photo" class="tab-pane fade">
                <div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-uppercase">Compétences clés</h5>
                            <p>
                                Notre approche pédagogique active vous engage dans des projets réels, des ateliers
                                pratiques, et une collaboration étroite avec nos formateurs expérimentés. Vous serez amenés
                                à résoudre des problèmes concrets, à développer des applications web et mobile
                                fonctionnelles, et à travailler en équipe, ce qui renforcera vos compétences techniques et
                                vos soft skills. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-danger m-5" style="width: 10rem;  border-radius: 5px;" id="bouton"
            href="{{ route('postuler', $formation->id) }}">POSTULER</a>
    </div>
    <div class="autre-ref">
        <div class="container mt-5  text-center">
            <h1 class="mb-5">AUTRES RÉFÉRENTIELS</h1>
            <div class="row">
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
    </div>
@endsection

<script>
    function showContent(contentId) {
        var contents = document.getElementsByClassName('tab-pane');
        for (var i = 0; i < contents.length; i++) {
            contents[i].classList.remove('show');
            contents[i].classList.remove('active');
        }
        document.getElementById(contentId).classList.add('show');
        document.getElementById(contentId).classList.add('active');
    }
</script>
