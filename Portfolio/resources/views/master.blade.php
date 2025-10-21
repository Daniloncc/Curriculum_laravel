<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Danilo Nunes Costa e Costa" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/"><img src="assets/img/logo_blanc.png" width="40" height="40" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/about">A Propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Mes Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')
    <!-- Footer-->
    <footer class="bg-black small text-center text-white-50">
        <div class="social-icons d-flex gap-3 justify-content-center mx-auto footer">
            <a class="social-icon" href="https://www.linkedin.com/in/danilo-nunes-costa-e-costa-12b451181/" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a class="social-icon" href="https://github.com/Daniloncc" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </div>
        <div class="container px-4 px-lg-5 pb-3">Copyright &copy; Danilo Costa - Portfolio</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    @yield('lienJSValidation')
</body>
<style>
    /* Personnalisation optionnelle du carrousel */
    #projectCarousel .carousel-item {
        transition: transform 0.6s ease-in-out;
    }

    #projectCarousel .carousel-control-prev-icon,
    #projectCarousel .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 20px;
    }

    #projectCarousel .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }
</style>

</html>