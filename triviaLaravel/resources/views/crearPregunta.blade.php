@extends('welcome') @section('title') Crear pregunta en @endsection @section('content')
<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <style>
            .card-img-top {
                width: 100px;
                height: 100px;
                object-fit: cover;
            }
            
            a {
                font-family: 'Press Start 2P';
            }
            
            h5 {
                font-family: ZCOOL KuaiLe;
            }
        </style>

        <div class="card col-8 col-md-3 bg-success rounded mx-2 my-2 d-block">
            <img src="/img/create.png" class="card-img-top bg-success m-auto d-flex justify-content-center" alt="Crear una pregunta.">
            <div class="card-body bg-success">
                <h5 class="card-title text-center text-light">Crear Pregunta</h5>
                <p class="card-text text-light"></p>
                <a href=" {{url('/agregar/pregunta')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center">CREAR</a>
            </div>
        </div>

        <div class="card col-8 col-md-3 bg-primary rounded mx-2 my-2 d-block">
            <img src="/img/edit.png" class="card-img-top m-auto d-flex justify-content-center" alt="Editar una pregunta.">
            <div class="card-body bg-primary">
                <h5 class="card-title text-center text-light">Modificar Pregunta</h5>
                <p class="card-text text-light"></p>
                <a href=" {{url('/editar/pregunta')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center">MODIFICAR</a>
            </div>
        </div>

        <div class="card col-8 col-md-3 bg-danger rounded mx-2 my-2 d-block">
            <img src="/img/delete.png" class="card-img-top m-auto d-flex justify-content-center" alt="Borrar una pregunta.">
            <div class="card-body bg-danger">
                <h5 class="card-title text-center text-light">Eliminar Pregunta</h5>
                <p class="card-text text-light"></p>
                <a href=" {{url('/eliminar/pregunta')}} " class="btn btn-dark btn-sm btn-block px-1 d-flex justify-content-center">ELIMINAR</a>
            </div>
        </div>
    </div>
</div>
@endsection