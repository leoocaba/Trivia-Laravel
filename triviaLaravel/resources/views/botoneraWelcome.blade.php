@extends('welcome') @section('title') Inicio de @endsection @section('style')
<link rel="stylesheet" href="/css/estilo-botonera.css"> @endsection @section('content')
<div class="container __jumbotron my-5">
    <div class="row my-5">
        <div class="container">
          
        </div>
        <div class="col-12 my-2 mx-auto botones" style="border-radius: 30px;">
            <a href="{{url('/play')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block text-wrap">JUGAR</button></a>
        </div>

        <div class="col-12 my-2 mx-auto botones" style="border-radius: 30px;">
            <a href="{{url('/ranking')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block text-wrap">RANKING</button></a>
        </div>

        <div class="col-12 my-2 mx-auto botones" style="border-radius: 30px;">
            <a href="{{url('/crear/pregunta')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block text-wrap">CREÁ UNA PREGUNTA</button></a>
        </div>
    </div>
</div>
@endsection