@extends('welcome') @section('title') Jugar @endsection @section('content')

<div class="mx-3 mt-3 justify-content-center">
<div class="container mx-auto">
  <div class="row">
    <div class="bg-dark mx-auto justify-content-center mb-3 block-center col-lg-6" id="cajita" style="border-radius: 30px;">
      <div class=" p-1 my-2 d-flex justify-content-center">
        <img class=" border border-dark" src="/img/7a0.png" alt="" style="width: 70%; height: 35%; border-radius: 20%; border: 1px solid black;">
      </div>  
    <div> 
      <h5 class="col-12 question text-center" style="color:#fff!important; font-size: 18px;">
        ¿Quien convirtió el séptimo gol en la histórica goleada de Estudiantes 7-0 Gimnasia?
      </h5>

        <div class="my-3 mx-3 progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" 
          aria-valuemax="100" style="width: 75%"></div>
        </div>

<<<<<<< HEAD
        <div class="col-12 botones mx-auto btn-group-vertical d-block" id="botones">
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-warning btn-md col-12 mb-4">Pablo 'El Payaso' Luguercio</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-success btn-md col-12 mb-4">Jose Luis 'Caldera' Calderón</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-danger btn-md col-12 mb-4">Juan Sebastian 'La Brujita' Verón</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-primary btn-md col-12 mb-4">Mariano 'El Tanque' Pavone</button>
=======
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
>>>>>>> fc7f93de92562d1ecf6b063978e18ebfbc6777eb
      </div>
    </div>
  </div>
  </div>
</div>
</div>

@endsection