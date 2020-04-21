@extends('welcome')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url(../img/Background.jpg)!important; margin: 0!important;">
    <div class="container">
      <div class="botones">
      <button type="button" onclick="location.href = 'jugar.php'" class="btn btn-primary btn-sm btn-block">JUGAR</button>
      <button type="button" onclick="location.href = 'ranking.php'" class="btn btn-primary btn-sm btn-block">RANKING</button>
      <button type="button" onclick="location.href = 'crearPregunta.php'" class="btn btn-primary btn-sm btn-block">CREÁ UNA PREGUNTA</button>

      </div>
    </div>
  </div>   
@endsection