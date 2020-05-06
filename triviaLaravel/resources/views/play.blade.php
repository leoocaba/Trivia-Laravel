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
@section('content')
  <body style="font-family:Consolas; background-image: url(../img/Background.jpg);">
    <div class="container py-3 px-3">
    <div class="caja jumbotron bg-light mx-auto block-center col-lg-8" id="cajita" style="background-color:#2E2E2E!important; margin: 0; border-radius: 40px;">
    <img class="pyr mx-auto d-block rounded-circle img-thumbnail" src="img/trivia.jpg" alt="preguntasyrespuestas" style="width:300px;height:250px;"><br>
    <h3 class="question text-center" style="color:#fff!important;">¿Quien convirtió el séptimo gol en la histórica goleada <br> de Estudiantes 7-0 Gimnasia?</h3>
    <hr class="my-4">
    <div class="progress" style="height:40px;">
      <div class="progress-bar-striped progress-bar-animated bg-warning w-50">
        <p style="text-align:center;padding:8px;font-size: 15px;color:black;">50%!</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p style="text-align:center;padding:10px;">50% restante</p></div>
        <div class="progress-bar-striped bg-dark progress-bar-animated w-50">
          <p style="text-align:center;padding:8px;font-size: 15px;color:lightyellow;">50% restante</p></div></div>
    <hr class="my-4">
    <div class="botonesr btn-group-vertical d-block align-items-center" id="botones">
      <button type="button" class="btn mx-auto d-block btn-outline-warning btn-lg">Pablo 'El Payaso' Luguercio</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-success btn-lg">Jose Luis 'Caldera' Calderón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-danger btn-lg">Juan Sebastian 'La Brujita' Verón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-primary btn-lg">Mariano 'El Tanque' Pavone</button>
      </div>
    </div>
  </div>
  </body>
</html>
@endsection
