@extends('welcome') @section('title') Jugar @endsection @section('content') @section('style')
<link rel="stylesheet" href="/css/estilo-jugar.css"> @endsection
<?php
$puntos=0
 ?>
    <div class="mx-3 mt-3 justify-content-center">
        <div class="__container container mx-auto">
            <div class="row">
                <div class="mx-auto justify-content-center mb-3 block-center col-lg-6" id="cajita" style="border-radius: 30px; background-color: #000">
                    <div>

                      <?php
                   $listadoPreguntas=last($data['listadoPreguntas']);

                      ?>

                   <!--    @foreach ($listadoPreguntas as $pregunta) -->
                    <h2 class="col-12 question text-center my-2" style="color:#fff!important; font-family: ZCOOL KuaiLe;"> <strong class="text-wrap">{{ $pregunta->categories->name }}</strong></h2>
                    <div class="__div-img col-12 p-1 my-2 d-flex justify-content-center mx-auto">
                       <img class="__img border border-dark" src="{{ url('/images/image/' . $pregunta->image) }}"  alt="" style=" border-radius: 20%; border: 5px solid white;">
                    </div>
                  <h3 class="col-12 question text-center text-wrap" style="color:#fff!important; font-size: 18px;"> {{ $pregunta->question }}</h3>
                  @endforeach
                        <div class="my-3 mx-3 progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>


                        {{-- NÚMEROS ALEATORIOS PARA QUE LAS RESPUESTAS APAREZCAN DESORDENADAS --}}
                        <?php
                        $valores = array();
                        $x = 0;
                        while ($x<4) {
                          $num_aleatorio = rand(1,4);
                          if (!in_array($num_aleatorio,$valores)) {
                          array_push($valores,$num_aleatorio);
                          $x++;
                            }
                          }
                          $numA = "option_$valores[0]";
                          $numB = "option_$valores[1]";
                          $numC = "option_$valores[2]";
                          $numD = "option_$valores[3]";
                        ?>
                        {{-- ***************************************************** --}}
                        <div class="col-12 botones mx-auto btn-group-vertical d-block" id="botones">
                            <a    href="{{url('verificarRespuesta',['unaPregunta' => $pregunta->id, 'unaRespuesta' => $pregunta->$numC, 'unosPuntos' => $puntos])}}" type="button" id="option_1" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-warning text-wrap btn-md col-12 mb-4">{{ $pregunta->$numC }}</a>

                            <a href="{{url('verificarRespuesta',['unaPregunta' => $pregunta->id, 'unaRespuesta' => $pregunta->$numD, 'unosPuntos' => $puntos])}}" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-success text-wrap btn-md col-12 mb-4">{{ $pregunta->$numD}}</a>

                            <a href="{{url('verificarRespuesta',['unaPregunta' => $pregunta->id, 'unaRespuesta' => $pregunta->$numA, 'unosPuntos' => $puntos])}}" id="option_3" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-danger  text-wrapbtn-md col-12 mb-4">{{ $pregunta->$numA}}</a>

                            <a href="{{url('verificarRespuesta',['unaPregunta' => $pregunta->id, 'unaRespuesta' => $pregunta->$numB, 'unosPuntos' => $puntos])}}" id="option_4" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-primary text-wrap btn-md col-12 mb-4">{{ $pregunta->$numB}}</a>

                        </div>
                        <div class="col-12 d-flex justify-content-center">
                          <p class="col-4 question text-center text-wrap text-success" style="font-size: 10px; font-family: 'Press Start 2P';">
                            Aciertos: {{($data['aciertos'])}}
                          </p>
                          <p class="col-4 question text-center text-wrap" style="color:#fff!important; font-size: 12px; font-family: 'Press Start 2P';">
                            Puntos: {{($data['unosPuntos'])}}
                          </p>
                          <p class="col-4 question text-center text-wrap text-danger" style=" font-size: 10px; font-family: 'Press Start 2P';">
                            Fallos: {{($data['fallos'])}}
                          </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
