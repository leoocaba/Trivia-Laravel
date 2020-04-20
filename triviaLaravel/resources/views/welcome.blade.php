<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" xml:lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo-header.css">
    <link rel="stylesheet" href="/css/estilo-footer.css">
    <link rel="stylesheet" href="/css/estilo-botonera.css">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    padding: 0;
    position: relative;
    margin: 0 auto;
    background-image: url(../img/Background.jpg);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #dac300!important;">
            <a class="navbar-brand" href=" {{ url('/index') }} ">Trivia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jugar.php">Jugar!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ranking.php">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    @if (Route::has('login')) @auth
                    <a href="{{ url('/home') }}">Home</a> @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Ingresar</a> @if (Route::has('register'))
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarme</a> @endif @endauth
                    </li>
                    @endif

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
                </form>
            </div>
        </nav>
    </header>


    <section style="flex-grow: 1;">
        @yield('content')
    </section>
    

    <!-- Site footer -->

    <footer class="section bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Mas Información</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Acerca de nosotros</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">cuenta</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li onclick="location.href = 'login.php'" style="cursor: pointer" ;>Ingresar</li>
                            <li onclick="location.href = 'login.php'" style="cursor: pointer" ;>Registrarme</li>
                            <li> </li>
                            <li></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">redes sociales</h6>
                        <p class="contact-info mt-4">Para más información no dude en contactarnos.</p>
                        <p class="contact-info">+54 221 458-5034</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#"><img src="img/facebook.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><img src="img/twitter.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><img src="img/Instagram.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><img src="img/linkedin.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14">2020 Copyright © Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>