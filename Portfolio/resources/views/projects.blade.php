@extends('master')
@section('title', 'Mes projets')
@section('content')
<!-- Masthead-->
<header class="masthead masthead-projects">
    <div class="container px-4 px-lg-5 d-flex flex-column h-100">

        <div class="d-flex flex-column justify-content-center text-center flex-grow-1">
            <h1 class="mx-auto my-0 text-uppercase">
                Projects
            </h1>

            <h2 class="text-white-50 mx-auto mt-2 mb-5">
                "Au fil de ma formation au Collège Maisonneuve, j’ai développé plusieurs projets en utilisant PHP, JavaScript, HTML et CSS. Ces expériences m’ont permis de renforcer mes compétences en développement web tout en explorant la logique, la structure et l’esthétique du design. Chaque projet représente pour moi une opportunité d’apprendre, d’expérimenter et de transformer des idées en solutions concrètes."
            </h2>

        </div>
    </div>
</header>


<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">

        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/projet_plantes.webp" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Projet Plantes - JS vanille</h4>
                            <p class="mb-0 text-white-50">Application e-commerce de vente de plantes développée en JavaScript vanilla. Intègre un système de panier dynamique, un filtrage par catégories, et une gestion de l'inventaire en temps réel. Interface responsive et interactive démontrant la maîtrise des fondamentaux du JavaScript.</p>
                            <div class="mt-5">
                                <a class="btn btn-primary" href="https://plantesjs.netlify.app/index.html" target="_blank">Voir Site</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicateurs -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1 - Dentiste -->
                <div class="carousel-item active">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="{{ asset('assets/img/projet_yoga.webp') }}" alt="page accueil projet yoga" />
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <h4 class="text-white">Projet Yoga page - accueil - Vite</h4>
                                        <p class="mb-0 text-white-50">Page d'accueil accueillante du studio de yoga, présentant une navigation intuitive et un design épuré. Développée avec vite et css pur pour offrir une expérience utilisateur fluide et responsive sur tous les appareils.</p>
                                        <div class="mt-5">
                                            <a class="btn btn-primary" href="https://github.com/Daniloncc/pey2" target="_blank">Voir github</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Exemple -->
                <div class="carousel-item">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="{{ asset('assets/img/projet_yoga_2.webp') }}" alt="page cours projet yoga" />
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <h4 class="text-white">Projet Yoga page - cours - Vite</h4>
                                        <p class="mb-0 text-white-50">Interface de gestion des cours de yoga permettant aux utilisateurs de consulter les cours, avec les infos disponibles.</p>
                                        <div class="mt-5">
                                            <a class="btn btn-primary" href="https://github.com/Daniloncc/pey2" target="_blank">Voir github</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 - Exemple -->
                <div class="carousel-item">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="{{ asset('assets/img/projet_yoga_3.webp') }}" alt="page connexion projet yoga" />
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <h4 class="text-white">Projet Yoga page - connection - Vite</h4>
                                        <p class="mb-0 text-white-50">Système d'authentification sécurisé permettant aux membres de se connecter à leur espace personnel. Formulaire validé côté client et serveur avec gestion des sessions node.js pour garantir la sécurité des données.</p>
                                        <div class="mt-5">
                                            <a class="btn btn-primary" href="https://github.com/Daniloncc/pey2" target="_blank">Voir github</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contrôles Précédent/Suivant -->
            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/projet_stampee.webp" alt="Image accueil du site" /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Projet Stampee - PHP</h4>
                            <p class="mb-0 text-white-50">Plateforme d'enchères en ligne spécialisée dans la vente de timbres rares.
                                Développée en PHP avec architecture MVC, elle offre un système complet de gestion
                                d'enchères, de profils utilisateurs, de favoris et de messagerie automatisée.
                                Interface intuitive permettant aux visiteurs de consulter les enchères et aux
                                membres inscrits de participer activement aux ventes.</p>
                            <div class="mt-5">
                                <a class="btn btn-primary" href="https://stampee.infinityfree.me/" target="_blank">Voir site</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection('content')