@extends('layouts.app')
@section('content')
    <section id="caroussel" class=" container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6" style="height: 500px">
                            <img src="{{ asset('images/banner1.png') }}" class="d-block w-100" alt="Image 1"
                                style="height: 500px">
                        </div>
                        <div class="texte col-md-6" style="height: 500px">
                            <h2>SAS HACKEUSES</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.</p>
                            <button class="btn btn-custom">NOS FORMATIONS</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6 order-md-2" style="height: 500px">
                            <img src="{{ asset('images/banner3.png') }}" class="d-block w-100" alt="Image 2"
                                style="height: 500px">
                        </div>
                        <div class=" texte col-md-6 order-md-1" style="height: 500px">
                            <h2><span>Des </span>FORMATIONS <span> des metiers du</span> NUMÉRIQUE</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.</p>
                            <button class="btn btn-custom">NOS FORMATIONS</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6" style="height: 500px">
                            <img src="{{ asset('images/banner2.png') }}" class="d-block w-100" alt="Image 3"
                                style="height: 500px">
                        </div>
                        <div class="texte col-md-6" style="height: 500px">
                            <h2>GRADUATION</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.</p>
                            <button class="btn btn-custom">NOS FORMATIONS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="propos">
        <div class="container">
            <div class="row">
                <div class=" col-md-6" style="height: 500px">
                    <img src="{{ asset('images/propos.jpg') }}" class="d-block w-100" alt="Image de gauche"
                        style="height: 600px">
                </div>
                <div class=" texte col-md-6" style="height: 500px">
                    <h2>Notre approche pédagogique</h2>
                    <p><span>Chez Simplon SN, nous croyons fermement en la pédagogie active pour favoriser l’apprentissage
                            optimal.</span></p>
                    <p>Nos formations Simplon s’appuient sur une pédagogie qui se fonde sur une approche par les
                        compétences. Son objectif étant de rendre l’apprenant.e acteur.trice de sa formation. Lors de
                        l’apprentissage, l’apprenant.e est mis.e en situation de travail avec un ensemble de dispositifs
                        afin de l’accompagner dans l’acquisition des compétences métiers et transversales. Simplon dispose
                        d’un studio pédagogique avec des ingénieurs pédagogiques pour la conception de référentiels /
                        programmes de formation. Plus d’une vingtaine de référentiels de formation sont proposés en fonction
                        des besoins en compétences métiers des entreprises.</p>
                    <p>Simplon s’investit également dans des actions de plaidoyer et de sensibilisation au numérique
                        auprès des femmes, des jeunes filles et des publics précaires dans une dynamique d’égalité des
                        chances avec un taux de présence minimum de 35% de femmes et de 10% de personnes en situation de
                        handicap (PSH) dans ses cohortes.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="formation">
        <div class="container">
            <div class="row">
                <h2>Découvrez nos formations</h2>
                <p>La qualité est au coeur de notre démarche, la satisfaction de nos clients étant la seule voie par
                    laquelle nous
                    pouvons assurer notre développement. Le souci permanent de la QUALITE est donc omniprésent dans le
                    cadre des services offerts aux clients.</p>
            </div>
            <div class="formations row">
                <div class="col-md-4">
                    <div class="image-container">
                        <div class="image-item">
                            <img src="{{ asset('images/image 1.jpg') }}" alt="Image 1">
                            <p>ADEFNIPA</p>
                        </div>
                        <div class="image-item">
                            <img src="{{ asset('images/image 7.png') }}" alt="Image 2">
                            <p>SAS Hackeuses</p>
                        </div>
                        <div class="image-item">
                            <img src="{{ asset('images/image 5.jpg') }}" alt="Image 3">
                            <p>Développeur Web + IOT</p>
                        </div>
                        <div class="image-item">
                            <img src="{{ asset('images/image 6.jpg') }}" alt="Image 4">
                            <p>Référent Digital</p>
                        </div>
                    </div>
                    <button class="btn btn-custom">Découvrir nos formations</button>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('images/formation.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="impact"
        style="background: linear-gradient(rgba(7, 10, 7, 0.808), rgba(0, 0, 0, 0.856)),url('{{ asset('images/banniere.JPG') }}');
  height: 400px;
  background-size: cover;
  background-position: center;">
        <div class="container">
            <h2>Notre Impact</h2>
            <div class="counters">
                <div class="counter">
                    <span class="count">+20000</span>
                    <span>Personnes formées</span>
                </div>
                <div class="counter">
                    <span class="count">96%</span>
                    <span>Sorties positives</span>
                </div>
                <div class="counter">
                    <span class="count">+250</span>
                    <span>Partenaires</span>
                </div>
                <div class="counter">
                    <span class="count">13</span>
                    <span>Régions d'interventions</span>
                </div>
            </div>
        </div>
    </section>
    <section id="temoignages">
        <div class="container">
            <h2>Témoignages</h2>

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Premier témoignage -->
                    <div class="carousel-item active">
                        <div class="content">
                            <div class="image-with-title">
                                <img src="{{ asset('images/Ellipse 3.png') }}" alt="Larissa">
                                <h3>Larissa</h3>
                            </div>
                            <div class="quote-card">
                                <blockquote>
                                    <i class="fas fa-quote-left quote-icon"
                                        style="margin-left: 20px; margin-top: 20px;"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <i class="fas fa-quote-right quote-icon"
                                        style="margin-left: 20px; margin-top: -30px;"></i>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Deuxième témoignage -->
                    <div class="carousel-item">
                        <div class="content">
                            <div class="image-with-title">
                                <img src="{{ asset('images/Ellipse 4.png') }}" alt="Second Image">
                                <h3>Mouna</h3>
                            </div>
                            <div class="quote-card">
                                <blockquote>
                                    <i class="fas fa-quote-left quote-icon"
                                        style="margin-left: 20px; margin-top: 20px;"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s..</p>
                                    <i class="fas fa-quote-right quote-icon"
                                        style="margin-left: 20px;  margin-top: -30px; "></i>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Troisième témoignage -->
                    <div class="carousel-item">
                        <div class="content">
                            <div class="image-with-title">
                                <img src="{{ asset('images/Ellipse 2.png') }}" alt="Third Image">
                                <h3>Rachid</h3>
                            </div>
                            <div class="quote-card">
                                <blockquote>
                                    <i class="fas fa-quote-left quote-icon"
                                        style="margin-left: 20px; margin-top: 20px;"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <i class="fas fa-quote-right quote-icon"
                                        style="margin-left: 20px; margin-top: -30px; "></i>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Contrôles du carrousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>

    </section>
    <section id="partenaires">
        <div class="container">
            <h2>Partenaires</h2>
            <div class="gallery-container">
                <div class="gallery">
                    <img src="{{ asset('images/img1.png') }}" alt="Image 1">
                    <img src="{{ asset('images/img2.png') }}" alt="Image 2">
                    <img src="{{ asset('images/img3.png') }}" alt="Image 3">
                    <img src="{{ asset('images/img4.png') }}" alt="Image 4">
                    <img src="{{ asset('images/img5.png') }}" alt="Image 5">
                    <img src="{{ asset('images/img6.png') }}" alt="Image 6">
                    <img src="{{ asset('images/img7.png') }}" alt="Image 7">
                    <img src="{{ asset('images/img8.png') }}" alt="Image 8">
                    <img src="{{ asset('images/img9.png') }}" alt="Image 9">
                    <img src="{{ asset('images/img10.png') }}" alt="Image 10">
                    <img src="{{ asset('images/img11.png') }}" alt="Image 11">
                    <img src="{{ asset('images/img12.png') }}" alt="Image 12">
                </div>
            </div>
        </div>

    </section>
@endsection