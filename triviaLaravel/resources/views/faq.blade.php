@extends('welcome') @section('title') Preguntas frecuentes @endsection @section('content')
<div class="container jumbotron py-3 mt-3" style="border-radius:40px; background-color:#292b2c">
<div id="accordion" style="font-family:ZCOOL KuaiLe">
  <div class="card" style="background-color:#FF4848">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
          ¿Qué es Trivia?
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">Trivia es un juego de preguntas y respuestas desarollado entre 2019 y 2020 por
      un grupo de estudiantes de <a href="http://digitalhouse.com/ar"><s></s></a>.</div>
    </div>
  </div>
  <div class="card" style="background-color:#FF7F50">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Quiero jugar, ¿qué debo hacer?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">Para jugar a Trivia simplemente basta con crearse una cuenta personal y <a class="text-dark" href="/play">Jugar!</a></div>
    </div>
  </div>
  <div class="card" style="background-color:#F4A460">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          No estoy conforme con mi posición en el ranking, ¿cómo mejoro la puntuación?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">Para escalar en el ranking solo basta con volver a jugar y lograr un mejor desempeño.</div>
    </div>
  </div>
  <div class="card" style="background-color:#FFFF84">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          No recuerdo mi contraseña, ¿qué hago?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">En caso de olvidar su contraseña, debes ir a <a href="/login" class="text-dark">Login</a> para luego, por debajo del formulario, reestablecer su contraseña mediante su correo electrónico.</div>
    </div>
  </div>
  <div class="card" style="background-color:#F5DEB3">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Me robaron mi cuenta!!
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">En caso de haber sufrido el robo de su cuenta personal, debe enviar un correo lo antes posible a <a href="soporte@trivia.com">soporte@trivia.com</a> para que podamos brindarle ayuda cuanto antes.</div>
    </div>
  </div>
  <div class="card" style="background-color:#98FB98">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Quiero reportar a un jugador!!
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">Para reportar a un jugador, debes enviarnos una solicitud en la casilla de <a href="/contact-us" class="text-dark">Contacto</a> detallando el asunto.</div>
    </div>
  </div>
  <div class="card" style="background-color:#1FFEF3">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Encontré un error en el sitio, ¿qué debo hacer?
        </button>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">En caso de encontrar una falla o "bug" en nuestro sitio web, estariamos muy agradecidos de que nos lo enseñase para poder repararlo. Para ello,
        por favor contactese a nuestro correo <a href="soporte@trivia.com">soporte@trivia.com</a>.</div>
    </div>
  </div>
</div>
</div>
@endsection
