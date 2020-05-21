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
                        @foreach ($listadoPreguntas as $pregunta)
                        <h3 class="col-12 question text-center my-2" style="color:#fff!important; font-size: 20px;"> {{ $pregunta->categories->name }}</h3>
                        <div class="col-12 p-1 my-2 d-flex justify-content-center">
                            <img class=" border border-dark" src="{{ url('/images/image/' . $pregunta->image) }}"  alt="" style="width: 70%; height: 35%; border-radius: 20%; border: 1px solid black;">
                        </div>
                        <h3 class="col-12 question text-center" style="color:#fff!important; font-size: 18px;"> {{ $pregunta->question }}</h3>
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
                            <button id="opcion1" type="button" style="border-radius: 30px; font-size: 14px;" 
                            class="__btn btn btn-outline-warning btn-md col-12 mb-4">{{ $pregunta-> $numA }}</button>
                            <button id="opcion2" type="button" style="border-radius: 30px; font-size: 14px;" 
                            class="__btn btn btn-outline-success btn-md col-12 mb-4">{{ $pregunta-> $numB}}</button>
                            <button id="opcion3" type="button" style="border-radius: 30px; font-size: 14px;" 
                            class="__btn btn btn-outline-danger btn-md col-12 mb-4">{{ $pregunta-> $numC}}</button>
                            <button id="opcion4" type="button" style="border-radius: 30px; font-size: 14px;" 
                            class="__btn btn btn-outline-primary btn-md col-12 mb-4">{{ $pregunta-> $numD}}</button>
                        </div>
                        <p class="col-12 question text-center" style="color:#fff!important; font-size: 14px; font-family: 'Press Start 2P';">
                          Mis Puntos <?php echo($puntos)?> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection