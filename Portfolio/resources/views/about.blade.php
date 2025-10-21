@extends('master')
@section('title', 'A propos de moi')
@section('content')
<!-- Masthead-->
<header class="masthead masthead-about">
    <div class="container px-4 px-lg-5 d-flex flex-column h-100">

        <div class="d-flex flex-column justify-content-center text-center flex-grow-1">
            <h1 class="mx-auto my-0 text-uppercase">
                A Propos
            </h1>
            <h2 class=" text-white-50 mx-auto mt-2 mb-5">
                "Fort d’expériences diverses, je mets à profit ma curiosité, ma rigueur et ma créativité pour relever des défis variés. Capable de m’adapter rapidement à de nouveaux environnements, j’allie sens du détail, logique et vision globale pour apporter des solutions efficaces et réfléchies."
            </h2>
        </div>
    </div>
</header>

<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">

        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/programation.webp" alt="Ordinateur language programmation" /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>La programmation web pour moi est...</h4>
                    <p class="text-black-50 mb-0">"ma passion. J’aime transformer des idées en projets concrets, créer des interfaces utiles et logiques, et donner vie à des concepts grâce au code. Explorer, apprendre et bâtir : c’est ce qui me motive au quotidien !"</p>
                </div>
            </div>
        </div>

        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/autocad.webp" alt="Ordinateur AUTOCAD" /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Dessinateur Industriel</h4>
                            <p class="mb-0 text-white-50">"Trois ans comme dessinateur industriel m’ont appris la précision, la rigueur et la logique, des qualités que j’applique aujourd’hui dans la conception web pour créer des interfaces claires et fonctionnelles."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/dentist.webp" alt="Chaise dendiste" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Dentiste</h4>
                            <p class="mb-0 text-white-50">"Six ans en tant que dentiste m’ont permis de développer patience, attention aux détails et méthode, des compétences précieuses pour concevoir des sites web intuitifs et bien structurés."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')