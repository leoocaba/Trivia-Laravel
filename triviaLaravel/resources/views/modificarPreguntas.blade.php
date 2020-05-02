@extends('welcome') @section('style')
<link rel="stylesheet" href="/css/estilo-modificar.css"> @endsection @section('title') Modificar en @endsection @section('content')


    <div class="container container fluid">
        <div class="row">
            <div class="col-12 col-md-12">
               
                <div class="wrapper">
                    <table>
                      <thead>
                        <tr>
                          <th class="text-nowrap col-8" id="titulo-menu">Pregunta</th>
                          <th class="text-nowrap col-4" id="titulo-menu">Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($listadoPreguntas as $pregunta)
                          <tr>
                            <td class="item"> <p>{{$pregunta->question}}</p><br><h6>Categoría:</h6> {{$pregunta->categories->name}} </td>
                            <td class="editar item"><a href="/modificar/la/pregunta/ {{$pregunta->id}} " style=" font-family: 'Press Start 2P'; font-size:12px;" class="btn btn-primary m-2 btn-md badge-pill badge-warning text-nowrap">Editar</a></td>

                        </tr>
                          @empty
                              
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                
            </div>
        </div>
        <div class="row pagination d-flex justify-content-center">
            {{ $listadoPreguntas->links() }}
        </div>
    </div>
@endsection