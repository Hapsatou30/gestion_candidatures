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
                    <h4 class="card-text-top">
                        Formation en Digitalisation et Maintenance d’une Chaîne de Production Industrielle par Simplon
                        Sénégal : Votre Passage vers l’Industrie du Futur
                    </h4>
                    <div class="card-body">
                        <p class="card-text">
                            Chez Simplon Sénégal, nous croyons en l’émancipation des femmes dans le domaine du numérique.
                            Notre formation SAS Women in Tech, d’une durée de 6 semaines, est conçue exclusivement pour les
                            femmes. Cette formation est une opportunité pour vous d’acquérir les compétences essentielles
                            nécessaires pour exceller dans le monde du numérique.
                        </p>
                    </div>
                    <a class="btn btn-danger m-5" style="width: 10rem;" id="bouton" href="">POSTULER</a>
                </div>
                <img class="image" src="{{ asset('images/banner3.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class="autre-ref">
        <div class="container mt-5  text-center">
            <h1 class="mb-5">AUTRES RÉFÉRENTIELS</h1>
            <div class="row">
              <div class="col">
                <a href="">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/formation_card.png') }}" class="card-img-top"
                            alt="formation">
                        <div class="card-body">
                            <p class="card-text">
                                ADEFNIPA</p>
                        </div>
                    </div>
                 </a>
              </div>
              <div class="col">
                <a href="">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/formation_card.png') }}" class="card-img-top"
                            alt="formation">
                        <div class="card-body">
                            <p class="card-text">
                                ADEFNIPA</p>
                        </div>
                    </div>
                 </a>
              </div>
              <div class="col">
                <a href="">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/formation_card.png') }}" class="card-img-top"
                            alt="formation">
                        <div class="card-body">
                            <p class="card-text">
                                ADEFNIPA</p>
                        </div>
                    </div>
                 </a>
              </div>
              <div class="col">
                <a href="">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/formation_card.png') }}" class="card-img-top"
                            alt="formation">
                        <div class="card-body">
                            <p class="card-text">
                                ADEFNIPA</p>
                        </div>
                    </div>
                 </a>
              </div>
            </div>
          </div>
    </div>
@endsection
