@extends('welcome') @section('title') Ranking de @endsection @section('content')

@section('style')
    <link rel="stylesheet" href="/css/estilo-ranking.css">
@endsection

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-10 m-auto py-2 px-3">

            <div clas="table-responsive p-0 mr-1">
                    <div class="wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th id="letraBlanca"></th>
                                    <th id="letraBlanca" style="border-right: 1px solid #000!important; ">Puesto</th>
                                    <th id="letraBlanca" style="border-right: 1px solid #000!important; ">Player</th>
                                    <th id="letraBlanca" style="border-right: 1px solid #000!important; ">Puntos</th>
                                </tr>
                            </thead>
                            @forelse ($usuarios as $usuario)
                            <tbody>
                              <tr>
                                  <td><img style="border-radius: 50%;" class="p-1" src="/uploads/avatars/{{$usuario->image}}" alt="perfil" width="55px" height="55px"/></td>
                                  <td class="rank"> @for ($i = 0; $i < $usuarios->count('id'); $i++) {{$i}} @endfor</td>
                                  <td class="team">{{$usuario->alias}}</td>
                                  <td class="points">{{$usuario->puntos}}</td>
                              </tr>
                          </tbody>
                            @empty
                               <div class="bg-dark text-white h-50 w-100 "><h2 class="my-0 p-3" style="text-align: center; margi: 0 auto; font-size: 16px;">El Ranking aún está vacío! :(</h2><br><br></div> 
                            @endforelse
                            
                        </table>
                    </div>
                    <div class="pagination justify-content-center">
                        {{ $usuarios->links('vendor.pagination.simple-bootstrap-4') }}
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection