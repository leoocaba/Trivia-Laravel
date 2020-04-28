@extends('welcome')
@section('title')
    Inicio de
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url(../img/Background.jpg)!important; margin: 0!important;">
    <div class="container">
      <div class="botones">
      <a href="" style="text-decoration: none;" class=""><button type="button" class="btn btn-primary btn-sm btn-block mb-2">JUGAR</button></a>
      <a href="" style="text-decoration: none;" class=""><button type="button" class="btn btn-primary btn-sm btn-block mb-2">RANKING</button></a>
      <a href=" {{url('/crear/pregunta')}} " style="text-decoration: none;" class=""><button type="button" class="btn btn-primary btn-sm btn-block mb-2">CREÁ UNA PREGUNTA</button></a>
      </div>
    </div>
  </div>   
@endsection