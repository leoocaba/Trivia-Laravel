@extends('welcome') @section('title') Preguntas frecuentes @endsection @section('content')

<style>

    .__container {
      overflow: hidden;
    }
    .__card:hover{
    transition: all 0.3s ease-in-out;
    -webkit-transform:scale(1.025);
    }

</style>

<div class="container my-2">
  <div class="mx-2 row d-flex justify-content-center">
      <div class="__container col-12 col-lg-10 py-2 px-3" id="accordion" style="font-family:ZCOOL KuaiLe; border-radius:30px; background-color:#000">
        <div class="__card card my-2" style="border-radius:30px; background-color:#FF4848">
          <div class="card-header mx-auto" id="headingOne">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                ¿Qué es Trivia?
              </p>
            </h6>
          </div>
          <div id="collapseOne" class="collapse text-center mx-0" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">Trivia es un juego de preguntas y respuestas desarollado entre 2019 y 2020 por
            un grupo de estudiantes de <a class="btn btn-link text-white font-weight-bold px-0" target=”_blank” href="http://digitalhouse.com/ar">digitalHouse</a>.</div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#FF7F50">
          <div class="card-header mx-auto" id="headingTwo">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Quiero jugar... ¿Qué debo hacer?
              </p>
            </h6>
          </div>
          <div id="collapseTwo" class="collapse text-center mx-0" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">Para jugar a Trivia simplemente basta con crearse una cuenta personal y <a class="btn btn-link text-white font-weight-bold" href="/play">Jugar!</a></div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#F4A460">
          <div class="card-header mx-auto" id="headingThree">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                No estoy conforme con mi posición en el ranking... ¿Cómo mejoro la puntuación?
              </p>
            </h6>
          </div>
          <div id="collapseThree" class="collapse text-center mx-0" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">Para escalar en el ranking solo basta con volver a jugar y lograr un mejor desempeño.</div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#FFFF84">
          <div class="card-header mx-auto" id="headingFour">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                No recuerdo mi contraseña... ¿Qué hago?
              </p>
            </h6>
          </div>
          <div id="collapseFour" class="collapse text-center mx-0" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">En caso de olvidar su contraseña, debes ir a <a href="/login" class="btn btn-link text-secondary font-weight-bold px-0"> Login </a> para luego, por debajo del formulario, reestablecer su contraseña mediante su correo electrónico.</div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#F5DEB3">
          <div class="card-header mx-auto" id="headingFive">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ¡Me robaron mi cuenta!
              </p>
            </h6>
          </div>
          <div id="collapseFive" class="collapse text-center mx-0" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">En caso de haber sufrido el robo de su cuenta personal, debe enviar un correo lo antes posible a <a class="btn btn-link text-secondary font-weight-bold p-0" href="soporte@trivia.com">soporte@trivia.com</a> para que podamos brindarle ayuda cuanto antes.</div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#98FB98">
          <div class="card-header mx-auto" id="headingSix">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                ¡Quiero reportar a un jugador!
              </p>
            </h6>
          </div>
          <div id="collapseSix" class="collapse text-center mx-0" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">Para reportar a un jugador, debes enviarnos una solicitud en la casilla de <a href="/contact-us" class="text-dark">Contacto</a> detallando el asunto.</div>
          </div>
        </div>
        <div class="__card card my-2" style="border-radius:30px; background-color:#1FFEF3">
          <div class="card-header mx-auto" id="headingSeven">
            <h6 class="mb-0">
              <p class="collapsed text-center font-weight-bold my-auto" style="cursor: pointer; color: #000;" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Encontré un error en el sitio... ¿Qué debo hacer?
              </p>
            </h6>
          </div>
          <div id="collapseSeven" class="collapse text-center mx-0" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">En caso de encontrar una falla o "bug" en nuestro sitio web, estariamos muy agradecidos de que nos lo enseñase para poder repararlo. Para ello,
              por favor contactese a nuestro correo <a class="btn btn-link text-secondary font-weight-bold p-0" href="soporte@trivia.com">soporte@trivia.com</a>.</div>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
