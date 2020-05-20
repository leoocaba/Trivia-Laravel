@extends('welcome') @section('title') Jugar @endsection @section('content')

<nav class="navbar noutline-avbar-expand-sm bg-dark navbar-dark sticky-top" style="opacity: .9;">
    <h3 class="text-danger" style="font-family: ZCOOL KuaiLe">Jugar</h3>
</nav>
<div class="container mx-auto my-2">
  <div class="row">
    <div class="caja jumbotron bg-dark justify-content-center mx-auto block-center col-lg-6" id="cajita" style="border-radius: 30px;">
      <div class=" p-1 d-flex justify-content-center">
        <img class=" border border-dark" src="/img/7a0.png" alt="" style="width: 300px; height: 200px; border-radius: 25%;">
      </div>  
    <div> 
      <h4 class="col-12 question text-center" style="color:#fff!important;">
        ¿Quien convirtió el séptimo gol en la histórica goleada de Estudiantes 7-0 Gimnasia?</h4>

      <hr class="my-4">

      <div class="col-10 mx-auto progress" style="height:30px;">

          <div class="col-6 progress-bar-striped progress-bar-animated bg-warning">
              <p style="text-align:center;font-size: 15px;color:black;">50%!</p>
          </div>

          <div class="col-6 progress-bar-striped bg-dark progress-bar-animated">
              <p style="text-align:center; font-size: 15px;color:lightyellow;">50% restante</p>
          </div>

      </div>

      <hr class="my-2">

      <div class="col-10 botones mx-auto btn-group-vertical d-block" id="botones">
          <button type="button" class="btn btn-outline-warning btn-md col-12 mb-4">Pablo 'El Payaso' Luguercio</button>
          <button type="button" class="btn btn-outline-success btn-md col-12 mb-4">Jose Luis 'Caldera' Calderón</button>
          <button type="button" class="btn btn-outline-danger btn-md col-12 mb-4">Juan Sebastian 'La Brujita' Verón</button>
          <button type="button" class="btn btn-outline-primary btn-md col-12 mb-4">Mariano 'El Tanque' Pavone</button>
      </div>
    </div>
  </div>
  </div>
</div>

@endsection