@extends('welcome') @section('title') Jugar @endsection @section('content')

<style>
    .card-img-top {
        width: 90px;
        height: 90px;
        object-fit: cover;
    }

    a {
        font-family: 'Press Start 2P';
    }

    h4 {
        font-family: ZCOOL KuaiLe;
    }
</style>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="font-family:Consolas; background-image: url(../img/Background.jpg);
	font-family: Tahoma;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <h1 class="text-white">Jugar</h1>
    </nav>
    <div class="caja jumbotron bg-light block-center" id="cajita" style="background-color:#2E2E2E!important; margin: 0; border-radius: 0">
    <img class="pyr mx-auto d-block rounded-circle img-thumbnail" src="img/trivia.jpg" alt="preguntasyrespuestas" style="width:300px;height:250px;"><br>
    <h3 class="question text-center" style="color:#fff!important;">¿Quien convirtió el séptimo gol en la histórica goleada <br> de Estudiantes 7-0 Gimnasia?</h3>
    <hr class="my-4">
    <div class="progress" style="height:40px;">
      <div class="progress-bar-striped progress-bar-animated bg-warning w-50">
        <s><p style="text-align:center;padding:8px;font-size: 15px;color:black;">50%!</p></s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p style="text-align:center;padding:10px;">50% restante</p></div>
        <div class="progress-bar-striped bg-dark progress-bar-animated w-50">
          <p style="text-align:center;padding:8px;font-size: 15px;color:lightyellow;">50% restante</p></div></div>
    <hr class="my-4">
    <div class="botonesr btn-group-vertical mx-auto d-block" id="botones">
      <button type="button" class="btn mx-auto d-block btn-outline-warning btn-sm">Pablo 'El Payaso' Luguercio</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-success btn-sm">Jose Luis 'Caldera' Calderón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-danger btn-sm">Juan Sebastian 'La Brujita' Verón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-primary btn-sm">Mariano 'El Tanque' Pavone</button>
      </div>
    </div>
  </body>
</html>
@endsection
