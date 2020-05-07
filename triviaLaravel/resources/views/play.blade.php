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


        <div class="col-12 botones mx-auto btn-group-vertical d-block" id="botones">
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-warning btn-md col-12 mb-4">Pablo 'El Payaso' Luguercio</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-success btn-md col-12 mb-4">Jose Luis 'Caldera' Calderón</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-danger btn-md col-12 mb-4">Juan Sebastian 'La Brujita' Verón</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="btn btn-outline-primary btn-md col-12 mb-4">Mariano 'El Tanque' Pavone</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
