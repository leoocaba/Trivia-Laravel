@extends('welcome') @section('title') Crear pregunta en @endsection @section('content')

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

<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="card col-10 col-md-3 bg-success rounded mx-2 my-2 d-block" style="border-radius: 30px!important;">
            <img src="/img/create.png" class="card-img-top bg-success m-auto d-flex justify-content-center" alt="Crear una pregunta.">
            <div class="card-body bg-success">
                <h4 class="card-title text-center text-light">Crear una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href=" {{url('/agregar/preguntas')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">CREAR</a>
            </div>
        </div>

        <div class="card col-10 col-md-3 bg-primary rounded mx-1 my-2 d-block" style="border-radius: 30px!important;">
            <img src="/img/edit.png" class="card-img-top m-auto d-flex justify-content-center" alt="Modificar una pregunta.">
            <div class="card-body bg-primary">
                <h4 class="card-title text-center text-light">Modificar una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href=" {{url('/modificar/preguntas')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">MODIFICAR</a>
            </div>
        </div>

        <div class="card col-10 col-md-3 bg-danger rounded mx-2 my-2 d-block" style="border-radius: 30px!important;">
            <img src="/img/delete.png" class="card-img-top m-auto d-flex justify-content-center" alt="Borrar una pregunta.">
            <div class="card-body bg-danger">
                <h4 class="card-title text-center text-light">Eliminar una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href=" {{url('/eliminar/preguntas')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">ELIMINAR</a>
            </div>
        </div>
    </div>
</div>
@endsection