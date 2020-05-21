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
<<<<<<< HEAD
                      $listadoPreguntas=last($data['listadoPreguntas']);
=======
                   $listadoPreguntas=last($data['listadoPreguntas']);

>>>>>>> a1fd66dba28d902df4ca957784d5d8282595257d
                      ?>

                      @foreach ($listadoPreguntas as $pregunta)
                       <h2 class="col-12 question text-center my-2" style="color:#fff!important; font-family: ZCOOL KuaiLe;"> <strong>{{ $pregunta->categories->name }}</strong></h2>
                       <div class="col-12 p-1 my-2 d-flex justify-content-center mx-auto" style="width: 70%; height: 35%; border-radius: 20%; border: 3px solid white;">
                          <img class=" border border-dark" src="{{ url('/images/image/' . $pregunta->image) }}"  alt="" style=" border-radius: 20%; border: px solid white;">
                       </div>
                     <h3 class="col-12 question text-center" style="color:#fff!important; font-size: 18px;"> {{ $pregunta->question }}</h3>
                    @endforeach


<<<<<<< HEAD
                       @foreach ($listadoPreguntas as $pregunta)
                        <h2 class="col-12 question text-center my-2" style="color:#fff!important; font-family: ZCOOL KuaiLe;"> <strong class="text-wrap">{{ $pregunta->categories->name }}</strong></h2>
                        <div class="__div-img col-12 p-1 my-2 d-flex justify-content-center mx-auto">
                           <img class="__img border border-dark" src="{{ url('/images/image/' . $pregunta->image) }}"  alt="" style=" border-radius: 20%; border: 5px solid white;">
                        </div>
                      <h3 class="col-12 question text-center text-wrap" style="color:#fff!important; font-size: 18px;"> {{ $pregunta->question }}</h3>
                      @endforeach
=======
>>>>>>> a1fd66dba28d902df4ca957784d5d8282595257d

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
                            <button href="{{url('verificarPregunta',['pregunta' => $pregunta, 'respuesta' => $pregunta-> $numC])}}" type="button" id="option_1" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-warning text-wrap btn-md col-12 mb-4">{{ $pregunta-> $numC }}</button>

                            <button href="{{url('verificarPregunta',['pregunta' => $pregunta, 'respuesta' => $pregunta-> $numD])}}" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-success text-wrap btn-md col-12 mb-4">{{ $pregunta-> $numD}}</button>

                            <button href="{{url('verificarPregunta',['pregunta' => $pregunta, 'respuesta' => $pregunta-> $numA])}}" id="option_3" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-danger  text-wrapbtn-md col-12 mb-4">{{ $pregunta-> $numA}}</button>

                            <button href="{{url('verificarPregunta',['pregunta' => $pregunta, 'respuesta' => $pregunta-> $numB])}}" id="option_4" style="border-radius: 30px; font-size: 14px;"
                            class="__btn btn btn-outline-primary text-wrap btn-md col-12 mb-4">{{ $pregunta-> $numB}}</button>

                        </div>
                        <p class="col-12 question text-center" style="color:#fff!important; font-size: 14px; font-family: 'Press Start 2P';">
                          Mis Puntos  <?php echo($data['unosPuntos'])?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
