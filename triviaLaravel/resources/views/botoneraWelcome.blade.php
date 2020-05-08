@extends('welcome')
@section('title')
    Inicio de
@endsection
@section('content')

<style>
  .__jumbotron {
    background-image: url(../img/Background.jpg)!important;
  }

  .botones a {
    text-decoration: none;
  }

  .__btn:hover{
    transition: all 0.3s ease-in-out;
    -webkit-transform:scale(1.3);
    transform:scale(1.3);
    }

  .botones {
    overflow:hidden;
}
  .botones:hover {
    transition: all 0.3s ease-in-out;
    box-shadow:
        0 19px 38px rgba(0,0,0,0.17),
        0 15px 12px rgba(0,0,0,0.09);
  }

</style>

<div class="jumbotron jumbotron-fluid __jumbotron">
    <div class="container">
        <div class="row">
          <div class="col-12 my-2 mx-auto botones"  style="border-radius: 30px;">
            <a href="{{url('/play')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block">JUGAR</button></a>
          </div>
  
          <div class="col-12 my-2 mx-auto botones"  style="border-radius: 30px;">
            <a href="{{url('/ranking')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block">RANKING</button></a>
          </div>
  
          <div class="col-12 my-2 mx-auto botones"  style="border-radius: 30px;">
            <a href="{{url('/crear/pregunta')}}"><button type="button" style="border-radius: 30px;" class="__btn btn btn-primary btn-md btn-block">CREÁ UNA PREGUNTA</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
