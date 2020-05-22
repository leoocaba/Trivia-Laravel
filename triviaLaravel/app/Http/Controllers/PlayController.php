<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\User;

use App\Http\Controllers\QuestionsController;

class PlayController extends QuestionsController
{
  public function inicializarPuntaje()
  {
    //inicializa el puntaje del juego actual

    $unosPuntos = 100;
    return $unosPuntos;
  }

  public function jugar()
  {
    //inicia el juego
    //falta manejar lista de preguntas ya que sino no finaliza
    $listadoPreguntas = $this->dameListadoDePreguntas();
    //ver linea anterior ya que devuelve sólo una pregunta del randon
    $unosPuntos = $this->inicializarPuntaje();
    if ($this->hayPreguntas($listadoPreguntas)) {


      $pregunta = $this->preguntaAResponder($listadoPreguntas);
      //$listadoPreguntas = Question::orderByRaw('RAND()')->take(1)->get();
      //comentadas
      $data = ['listadoPreguntas' => $listadoPreguntas, 'unosPuntos' => $unosPuntos, 'pregunta' => $pregunta];
      return view('/jugar')->with('data', $data);;
      //comentadas

      //return view('/jugar',  $listadoPreguntas );

    } else {
      //sin preguntas se termina el juego
      return view('welcome');
    }
  }

  public function dameListadoDePreguntas()
  {
    //obtiene el listado de todas las preguntas de la tabla

    $listadoPreguntas = $this->listQuestion2();
    return  $listadoPreguntas;
  }

  public function hayPreguntas($listadoPreguntas)
  {
    //verificar si hay preguntas en $listadoPreguntas

    return (count($listadoPreguntas) > 0);
  }


  public function verificarRespuesta($unaPregunta, $unaRespuesta, $unosPuntos)
  {

    $respuestaCorrecta = Question::find($unaPregunta);
    //aca va la lógica, verifica si la respuesta es correcta, actualiza puntajes y continua prox pregunta
    //falta manejar lista de preguntas ya que sino no finaliza
    $puntos = 10;
    if ($respuestaCorrecta->option_1 == $unaRespuesta) {

      $usuario = User::find(Auth::User()->id);
      $usuario->puntos = ($usuario->puntos + $puntos);
      $usuario->aciertos = ($usuario->aciertos + 1);
      $usuario->save();
    } else {

      $usuario = User::find(Auth::User()->id);
      $usuario->puntos = ($usuario->puntos - $puntos);
      $usuario->fallos = ($usuario->fallos + 1);
      $usuario->save();
<<<<<<< HEAD

=======
>>>>>>> 500ce871de4fbe91e9531cd543fc1d8ec66cddaa
    }
    $usuario = User::find(Auth::User()->id);
    $unosPuntos = $usuario->puntos;
    $aciertos = $usuario->aciertos;
    $fallos = $usuarios->fallos;
    $listadoPreguntas = $this->dameListadoDePreguntas();
    $data = ['listadoPreguntas' => $listadoPreguntas, 'unosPuntos' => $unosPuntos, 'pregunta' => $unaPregunta, 
    'aciertos' => $aciertos, 'fallos' => $fallos];
    return view('/jugar')->with('data', $data);
  }


  public function preguntaAResponder($listadoPreguntas)
  {
    //devuelve la siguiente pregunta a responder
    //modificar para retornar listado
    if ($this->hayPreguntas($listadoPreguntas)) {
      $pregunta = array_pop($listadoPreguntas);
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
