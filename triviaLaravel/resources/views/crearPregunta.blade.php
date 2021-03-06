@extends('welcome') @section('title') Crear pregunta en @endsection @section('content')

@section('style')
    <link rel="stylesheet" href="/css/estilo-crearPregunta.css">
@endsection

<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="__card card col-10 col-lg-3 bg-success rounded mx-3 my-2 d-block">
            <img src="/img/create.png" class="card-img-top bg-success m-auto d-flex justify-content-center" alt="Crear una pregunta.">
            <div class="card-body bg-success">
                <h4 class="card-title text-center text-light">Agregar una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href=" {{url('/agregar/preguntas')}} " style=" font-family: 'Press Start 2P';" class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">AGREGAR</a>
            </div>
        </div>

        <div class="__card card col-10 col-lg-3 bg-primary rounded mx-3 my-2 d-block">
            <img src="/img/edit.png" class="card-img-top m-auto d-flex justify-content-center" alt="Modificar una pregunta.">
            <div class="card-body bg-primary">
                <h4 class="card-title text-center text-light">Modificar una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href=" {{url('/modificar/preguntas')}} " style=" font-family: 'Press Start 2P';" class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">MODIFICAR</a>
            </div>
        </div>

        <div class="__card card col-10 col-lg-3 bg-danger rounded mx-3 my-2 d-block">
            <img src="/img/delete.png" class="card-img-top m-auto d-flex justify-content-center" alt="Borrar una pregunta.">
            <div class="card-body bg-danger">
                <h4 class="card-title text-center text-light">Eliminar una Pregunta</h4>
                <p class="card-text text-light"></p>
                <a href="#" style=" font-family: 'Press Start 2P';" class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center badge badge-pill badge-warning">ELIMINAR</a>
            </div>
        </div>
    </div>
</div>
@endsection
