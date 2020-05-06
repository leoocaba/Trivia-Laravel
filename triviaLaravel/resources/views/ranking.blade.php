@extends('welcome') @section('title') Ranking de @endsection @section('content')

@section('style')
    <link rel="stylesheet" href="/css/estilo-ranking.css">
@endsection

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-10 m-auto pt-3 pb-3">

            <div clas="table-responsive p-0">
                    <div class="wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th id="letraNegra"></th>
                                    <th id="letraNegra">Player</th>
                                    <th id="letraBlanca">Puesto</th>
                                    <th id="letraBlanca">Puntos</th>
                                </tr>
                            </thead>
                            @forelse ($usuarios as $usuario)
                            <tbody>
                              <tr>
                                  <td><img style="border-radius: 50%;" class="p-1" src="/uploads/avatars/{{$usuario->image}}" alt="perfil" width="55px" height="55px"/></td>
                                  <td class="team">{{$usuario->alias}}</td>
                                  <td class="rank">{{$usuario->ranking}}</td>
                                  <td class="points">{{$usuario->ranking}}</td>
                              </tr>
                          </tbody>
                            @empty
                               <div class="bg-dark text-white h-50 w-100 "><h2 class="my-0 p-3" style="text-align: center; margi: 0 auto; font-size: 16px;">El Ranking aún está vacío! :(</h2><br><br></div> 
                            @endforelse
                            
                        </table>
                    </div>
                    <br>
                </div>
        </div>
    </div>
</div>

@endsection