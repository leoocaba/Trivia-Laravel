@extends('welcome') @section('title') Mi perfil en @endsection @section('content')

<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card d-flex justify-content-center bg-dark text-white" style="border-radius: 30px;">
                <div class="d-flex justify-content-center">
                    <img class="p-3" src="{{ url('/uploads/avatars/' . $user->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 50%;">
                </div>
                <div class="card-body">
                    <h2 class="card-title text-nowrap d-flex justify-content-center" style="font-family: ZCOOL KuaiLe;"> {{$user->alias}} </h2>
                    <hr>
                    <div class="justify-content-center" style="font-size: 14px;">
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';"><strong style="color: #30B77E;">Nombre: </strong>{{ $user->name }}</p>
                        </div>
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';"><strong style="color: #30B77E;">Apellido: </strong>{{ $user->surname }}</p>
                        </div>
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';"><strong style="color: #30B77E;">Puesto: </strong>{{ $user->id }}</p>
                        </div>
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';"><strong style="color: #30B77E;">Puntos: </strong>{{ $user->id }}</p>
                        </div>
                        <hr>
                        <div>
                            <a class="py-auto text-center col-12 btn btn-link" href="/editar/perfil"> Editar mi perfil</a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection