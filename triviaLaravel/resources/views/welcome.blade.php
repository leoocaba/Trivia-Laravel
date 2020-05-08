<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" xml:lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Trivia</title>
    <link rel="shortcut icon" href="/img/t.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo-header.css">
    <link rel="stylesheet" href="/css/estilo-footer.css">
    <link rel="stylesheet" href="/css/estilo-botonera.css">
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Static/Css/font-awesome.min.css">
</head>

<body>

    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            padding: 0;
            background-image: url(../img/Background.jpg);
        }
    </style>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #dac300!important;">
            <a class="navbar-brand" href=" {{ url('/') }} ">Trivia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Route::has('login')) @auth
                <div class="d-lg-none mx-0">
                    <img class="border border-dark my-3 mx-auto" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" style="display: flex; align-items: center; width: 60px; height: 60px; border-radius: 50%;">
                </div>
                @endif @endauth
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                    <a class="nav-link active" href="{{ url('/welcome')}}">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="{{ url('/play')}}">Jugar!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{ url('/ranking')}}">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{ url('/faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{ url('/contact-us')}}">Contacto<span class="sr-only">(current)</span></a>
                    </li>
                    @if (Route::has('login')) @auth

                    <div class="dropdown m-auto">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bienvenido/a {{ auth()->user()->alias }}
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item btn btn-link" href="/perfil" style="color: royalblue; text-align: center; font-size:15px;"> Mi Perfil</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item btn btn-link" style="color: red; text-align: center; font-size:15px;" href=""onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        </div>
                      </div>

                    @else

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Ingresar</a>
                    @if (Route::has('register'))

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register') }}">Registrarme</a>
                        @endif @endauth
                    </li>
                    @endauth
                </ul>
                @if (Route::has('login')) @auth
                <div class="d-none d-lg-block ">
                    <img class="border border-dark mx-2 my-auto" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" style="width: 60px; height: 60px; border-radius: 50%;">
                </div>
                @endif @endauth
                <form class="ml-auto justify-content-center">
                    @csrf
                    <input class="form-control border border-success my-1" type="search" name="search" placeholder="Búsqueda" aria-label="Search">
                    <div class="my-1">
                        <button class="btn btn-outline-success d-block btn-block m-0" type="submit">BUSCAR</button>
                    </div>
                </form>
            </div>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </header>

    <main>
        <section style="flex-grow: 1;">
            @yield('content')
        </section>
    </main>

    <!-- Site footer -->

    <footer class="section bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-s-12 col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Mas Información</h6>
                        <p>Puedes <a style="color:gray" href="/contact-us">contactarnos</a> para realizar cualquier tipo de sugerencia sobre nuestro proyecto!</p>
                    </div>
                </div>

                <div class="col-s-12 col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Acerca de nosotros</h6>
                        <p>Somos un grupo de estudiantes de programación Web, en donde elegimos optar por desarrollar un juego de preguntas y respuestas, donde allí surgió Trivia.</p>
                    </div>
                </div>

                <div class="col-s-12 col-lg-2">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">cuenta</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <a href="{{ url('/login') }}" class="" style="text-decoration: none;"><li style="cursor: pointer"; class="m-0">INGRESAR</li></a>
                            <a href="{{ url('/register') }}" class="" style="text-decoration: none;"><li style="cursor: pointer"; class="m-0">REGISTRARME</li></a>
                        </ul>

                    </div>
                </div>

                <div class="col-s-12 col-lg-4">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">redes sociales</h6>
                        <p class="contact-info mt-4">Para más información no dude en contactarnos.</p>
                        <p class="contact-info">+54 221 458-5034</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" target="_blanck"><img src="/img/facebook.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blanck"><img src="/img/twitter.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blanck"><img src="/img/Instagram.png" alt=""></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blanck"><img src="/img/linkedin.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
        <p class="footer-alt mb-0 f-14">{{date('Y')}} Copyright © Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
