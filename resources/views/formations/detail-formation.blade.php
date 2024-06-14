@extends('layouts.app')
@section('content')
    <div class="banniere">
        <div class="row">
            {{-- <div class="col text-center p-5" >
                <div class="card p-3" style="width: 30rem;" id="card">
                    <h4 class="card-text-top">
                        Formation en Digitalisation et Maintenance d’une Chaîne de Production Industrielle par Simplon Sénégal : Votre Passage vers l’Industrie du Futur
                    </h4>
                    <div class="card-body">
                      <p class="card-text">
                        Chez Simplon Sénégal, nous croyons en l’émancipation des femmes dans le domaine du numérique. Notre formation SAS Women in Tech, d’une durée de 6 semaines, est conçue exclusivement pour les femmes. Cette formation est une opportunité pour vous d’acquérir les compétences essentielles nécessaires pour exceller dans le monde du numérique.
                      </p>
                    </div>
                    <a class="btn btn-danger m-5" style="width: 10rem;" href="">POSTULER</a>
                  </div>
                  
            </div> --}}
            <div class="col p-5">
                <div class="card mt-5 p-3" style="width: 30rem;" id="card">
                    <h4 class="card-text-top">{{ $formation->nom }}</h4>
                    <div class="card-body">
                        <p class="card-text">{{ $formation->description }}</</p>
                    </div>
                    <a class="btn btn-danger m-5" style="width: 10rem;" id="bouton" href="{{ route('postuler', $formation->id) }}">POSTULER</a>
                </div>
                <img class="image" src="{{ asset('images/banner3.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="nav grid gap-0 column-gap-3">
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark active " data-toggle="tab" href="#tout" onclick="showContent('tout')">COMPÉTENCES</a>
            </li>
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark" data-toggle="tab" href="#actualite" onclick="showContent('actualite')">QUELQUES DÉBOUCHÉES</a>
            </li>
            <li class="nav-item p-2 g-col-6">
                <a class="nav-link text-dark" data-toggle="tab" href="#photo" onclick="showContent('photo')">PÉDAGOGIE ACTIVE</a>
            </li>
        </ul>
        
        <div class="tab-content mt-5">
            <div id="tout" class="tab-pane fade show active">
                <div class="container text-start">
                    <div class="row row-cols-2">
                      <div class="col">
                        <h5 class="text-uppercase">Compétences clés</h5>
                        <p>{{ $formation->competences }}</</p>
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
                        <p>{{$formation->debouches}}</p>
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
                            Notre approche pédagogique active vous engage dans des projets réels, des ateliers pratiques, et une collaboration étroite avec nos formateurs expérimentés. Vous serez amenés à résoudre des problèmes concrets, à développer des applications web et mobile fonctionnelles, et à travailler en équipe, ce qui renforcera vos compétences techniques et vos soft skills.                        </p>
                      </div>

                    </div>
                  </div>
            </div>
        </div>
        <a class="btn btn-danger m-5" style="width: 10rem;" id="bouton" href="{{ route('postuler', $formation->id) }}">POSTULER</a>
    </div>
    <div class="autre-ref">
        <div class="container mt-5  text-center">
            <h1 class="mb-5">AUTRES RÉFÉRENTIELS</h1>
            <div class="row">
                @foreach ($formations as $formation) 
                <div class="col">
                                  
                 <a href="{{ route('detailFormation', $formation->id) }}">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ $formation->image }}" class="card-img-top"
                            alt="formation">
                        <div class="card-body">
                            <p class="card-text">
                                {{ $formation->nom}}</p>
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