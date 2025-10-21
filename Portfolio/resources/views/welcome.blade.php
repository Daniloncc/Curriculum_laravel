@extends('master')
@section('title', 'Portfolio Danilo')
@section('content')
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex flex-column h-100">

        <div class="d-flex flex-column justify-content-center text-center flex-grow-1">
            <h1 class="mx-auto my-0 text-uppercase">Danilo Costa</h1>

            <h2 class="text-white-50 mx-auto mt-2 mb-5">
                "Développeur passionné, où la logique rencontre le design."
            </h2>

            <div>
                <a class="btn btn-primary" href="/projects">Mes Projets</a>
                <hr>
            </div>
        </div>

        <!-- BLOC COMPÉTENCES AU BOTTOM -->
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center mt-auto mb-3">
            <h2 class="text-white mb-4">Mes competences</h2>
            <ul class="d-flex flex-wrap gap-4 mt-4 justify-content-center dev-icons">
                <li class="list-inline-item text-white"><i class="fab fa-html5 fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-css3-alt fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-js-square fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-react fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-node-js fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-laravel fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-sass fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-wordpress fa-3x"></i></li>
                <li class="list-inline-item text-white"><i class="fab fa-npm fa-3x"></i></li>
            </ul>
        </div>

    </div>
</header>

@endsection('content')