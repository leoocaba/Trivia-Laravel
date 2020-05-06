@extends('welcome') @section('title') Mi perfil en @endsection @section('content')

<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card d-flex justify-content-center text-white border border-dark" style="border-radius: 30px; background-color: #30B77E;">
                <div class=" p-3 d-flex justify-content-center">
                    <img class=" border border-dark" src="{{ url('/uploads/avatars/' . $user->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 50%;">
                </div>
                <div class="card-body border bg-white border-dark h-80" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h2 class="card-title text-dark text-nowrap d-flex justify-content-center" style="font-family: ZCOOL KuaiLe;"> {{$user->alias}} </h2>
                    <hr>
                    <div class="justify-content-center" style="font-size: 14px; color: black;">
                        <div class="col-12 justify-content-center mx-0">
                            <p style="color: #30B77E; text-align:center; font-family: 'Press Start 2P';"><strong>Nombre</strong> </p>
                            <p class="text-nowrap" style="font-family: 'Press Start 2P'; text-align:center;"> {{ $user->name }}</p>
                        </div>
                        <hr>
                        <div class="col-12 text-nowrap mx-0">
                            <p style="font-family: 'Press Start 2P';text-align:center; color: #30B77E;"><strong>Apellido</strong></p>
                            <p class="text-nowrap" style="font-family: 'Press Start 2P'; text-align:center;">{{ $user->surname }}</p>
                        </div>
                        <hr>
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';text-align:center;"><strong style="color: #30B77E;">Ranking: </strong>{{ $user->id }}</p>
                        </div>
                        <hr>
                        <div class="text-nowrap justify-content-center">
                            <p style="font-family: 'Press Start 2P';text-align:center;"><strong style="color: #30B77E;">Puntaje: </strong>{{ $user->id }}</p>
                        </div>
                        <hr>
                        <div>
                            <a class="py-auto text-center col-12 btn btn-info p-1" style="border-radius: 30px; font-family: 'Press Start 2P'; font-size: 12px;" href="/editar/perfil"> Editar mi perfil</a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection