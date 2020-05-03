@extends('welcome') @section('style')
<link rel="stylesheet" href="/css/estilo-modificar.css"> @endsection @section('title') Modificar en @endsection @section('content')


    <div class="container d-none d-md-block justify-content-center">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="wrapper">
                    <table style="border-bottom-radius: 30px;">
                      <thead>
                        <tr>
                          <th class="text-nowrap col-8" style="border-bottom-left-radius: 30px; border-top-left-radius: 30px;" id="titulo-menu">Pregunta</th>
                          <th class="text-nowrap col-4"  style="border-bottom-right-radius: 30px; border-top-right-radius: 30px;" id="titulo-menu">Modificar</th>
                        </tr>
                      </thead>
                      <tbody style="margin-top: 10px;">
                        @forelse ($listadoPreguntas as $pregunta)
                          <tr style="margin-top: 10px;">
                            <td class="item p-3" style="border-bottom-left-radius: 30px; border-top-left-radius: 30px;"> <p>{{$pregunta->question}}</p><br><h6>Categoría:</h6> {{$pregunta->categories->name}} </td>
                            <td class="editar item p-3" style="border-bottom-right-radius: 30px; border-top-right-radius: 30px;"><a href="/modificar/la/pregunta/ {{$pregunta->id}} " style=" font-family: 'Press Start 2P'; font-size:12px;" class="btn btn-primary btn-md badge-pill badge-warning text-nowrap">Editar</a></td>
                        </tr>
                          @empty
                              
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                  <div class="pagination justify-content-center">
                    {{ $listadoPreguntas->links('vendor.pagination.simple-bootstrap-4') }}
                  </div>
            </div>
        </div>
    </div>

    {{-- VISTA DE LISTADO MOBILE --}}
    <div class="container d-md-none justify-content-center">
      <div class="row">
          <div class="col-12 mt-3">
              <div class="wrapper">
                  <table style="border-bottom-radius: 30px;">
                    <thead>
                      <tr>
                        <th class="text-nowrap col-8" style="border-bottom-left-radius: 30px; border-radius: 30px;" id="titulo-menu">Pregunta</th>
                      </tr>
                    </thead>
                    <tbody style="margin-top: 10px;">
                      @forelse ($listadoPreguntas as $pregunta)
                        <tr style="margin-top: 10px;">
                          <td class="item p-3" style="border-bottom-left-radius: 30px; border-radius: 30px;"> <p>{{$pregunta->question}}</p> <hr> <h6>Categoría:</h6> {{$pregunta->categories->name}} <hr>  <a href="/modificar/la/pregunta/ {{$pregunta->id}} " style=" font-family: 'Press Start 2P'; font-size:12px;" 
                            class="btn btn-primary btn-md badge-pill badge-warning text-nowrap">Editar</a> </td>
                           </td>
                      </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                  </table>
                </div>
                <div class="pagination justify-content-center">
                  {{ $listadoPreguntas->links('vendor.pagination.simple-bootstrap-4') }}
                </div>
          </div>
      </div>
  </div>
{{-- **********************   FIN   ********************* --}}
@endsection