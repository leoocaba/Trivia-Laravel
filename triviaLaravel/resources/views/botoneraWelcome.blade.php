@extends('welcome')
@section('title')
    Inicio de
@endsection
@section('content')

<style>
  .__jumbotron {
    background-image: url(../img/Background.jpg)!important;
    margin: 0!important;
  }

  .botones a {
    text-decoration: none;
  }
  .botones .btn {
    transition: all 0.2s ease-in-out;
    margin-top: 15px;
}

  .botones .btn:hover {
    box-shadow:
        0 19px 38px rgba(0,0,0,0.17),
        0 15px 12px rgba(0,0,0,0.09);
}
</style>

<div class="jumbotron jumbotron-fluid __jumbotron">
    <div class="container">
      <div class="botones">
      <a href="{{url('/play')}}"><button type="button" style="border-radius: 30px;" class="btn btn-primary btn-sm btn-block mb-2">JUGAR</button></a>
      <a href="{{url('/ranking')}}"><button type="button" style="border-radius: 30px;" class="btn btn-primary btn-sm btn-block mb-2">RANKING</button></a>
      <a href="{{url('/crear/pregunta')}}"><button type="button" style="border-radius: 30px;" class="btn btn-primary btn-sm btn-block mb-2">CREÁ UNA PREGUNTA</button></a>
      </div>
    </div>
  </div>
@endsection
