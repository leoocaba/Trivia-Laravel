<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

use App\Http\Controllers\QuestionsController;

class PlayController extends QuestionsController
{
  public  function inicializarPuntaje() {
  //verificar funcion
      $unosPuntos = 100;
    return $unosPuntos;
  }





  public  function jugar() {
    $listadoPreguntas = $this->dameListadoDePreguntas();
    $unosPuntos= $this->inicializarPuntaje();
    if ($this->hayPreguntas($listadoPreguntas)) {


    //  $pregunta=$this->preguntaAResponder($listadoPreguntas);
      //$listadoPreguntas = Question::orderByRaw('RAND()')->take(1)->get();
  //comentadas
 $data = ['listadoPreguntas' => $listadoPreguntas,'unosPuntos' =>$unosPuntos];
   return view('/jugar' )->with('data', $data );;
//comentadas

//   return view('/jugar',  $listadoPreguntas );

    } else {
      //sin preguntas se termina el juego
      return view('welcome');
    }


  }




  public  function dameListadoDePreguntas() {
  //obtiene el listado de todas las preguntas de la tabla

      $listadoPreguntas = $this->listQuestion2();
    return  $listadoPreguntas;
  }



  public  function hayPreguntas($listadoPreguntas) {
  //verificar si hay preguntas en $listadoPreguntas

    return (count($listadoPreguntas) > 0 );
  }


  public  function verificarRespuesta($unaPreguntas,$unaRespuesta,$unosPuntos) {
  //aca va la lógica, verifica si la respuesta es correcta, actualiza puntajes y continua prox pregunta

  $unosPuntos = $unosPuntos+ 55;
  return $unosPuntos;
    return view('play', $unosPuntos);
 //return ($unaPreguntas.option_1==$unaRespuesta);


  //return view('play', $listadoPreguntas);
  }


  public  function preguntaAResponder($listadoPreguntas) {
  //devuelve la siguiente pregunta a responder
  if ($this->hayPreguntas($listadoPreguntas))  {
    $pregunta=array_pop($listadoPreguntas);
                   return ($pregunta);
       }

   }





//armando borrador del jugar


/* pasar código
jugar(unJugador) ó jugar()
inicializarPuntaje(unPuntaje) ó inicializarPuntaje(unPuntaje,unJugador)
dameListadoDePreguntas(unasPreguntas)>>function listQuestion2()
iniciarJuego(unJugador,unasPreguntas)
  {
while (hayPreguntas(unasPreguntas)and (estoyGanando()and(tiempoOk())  ) >>sigue jugando mientras hay preguntas para responder, sigue acertando y con "vidas de juego" y dentro del tiempo permitido
  {
     preguntaAResponder(unaPregunta)>>Me Devuelve una pregunta y la quita lista
     if verificarRespuesta(unaPreguntas,unaRespuesta) verifica si elige respuesta correcta
        {
        actualizarPuntajeGanador(unPuntaje) o (unPuntaje,unJugador)
        preguntaAResponder(unaPregunta)>>Me Devuelve una pregunta y la quita lista
      }else {
       actualizarPuntajePerdedor(unPuntaje) o (unPuntaje,unJugador)
       finDeJuego() o (unPuntaje,unJugador)
      }
}
ActualizarRanking(unPuntaje,unJugador)>>actualiza puntaje del jugador con lo obtenido en el juego
}
  return >> una vez finalizado retorna
  }*/
}
