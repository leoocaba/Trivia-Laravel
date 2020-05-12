@extends('welcome')

@section('title') Editar Pregunta en @endsection 

@section('style')
<link rel="stylesheet" href="/css/estilo-editarPregunta.css">
@endsection

@section('content')

<div id="editarPregunta">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-8 m-auto pt-3 pb-3">
            <form class="row m-auto d-flex justify-content-center" style="border-radius: 30px;" method="POST" action="/modificarla/{{$pregunta->id}}" enctype="multipart/form-data">
    
                    @csrf
    
                    <div class="text-white mb-2 col-12" style="border-radius: 30px; background-color: #000;">
                        <div class="form-group">
                            <label style="font-family: ZCOOL KuaiLe; font-weight: bold;" class="col-12 text-center pt-3" for=""><h5 class="text-primary">EDITAR LA PREGUNTA ELEGIDA</h5></label>
                            <textarea class="col-12 px-3 rounded" name="question" for="question" placeholder="Máximo 300 caracteres" value=" {{ $pregunta->question }}" xlength="300" required autofocus>{{ $pregunta->question }}</textarea>
                        </div>
                    </div>
    
                    <div style="border-radius: 30px; background-color: #000;" class="text-white mb-2 col-12">
                        <div class="form-group">
                            <label for="__input-categoria" class="text-center col-12 mt-3 badge badge-pill badge-warning">SELECCIONE UNA CATEGORÍA</label>
                            <select class="form-control col-12 mt-3" name="category_id" id="__input-categoria" required autofocus>
                                <option value="">{{$pregunta->categories->name}}</option>
                                 @foreach    ($categorias as $categoria) 
                                        <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                @endforeach 
                                </select>   
                        </div>
                    </div>
    
                    <div style="border-radius: 30px; background-color: #000;" class="mb-2 col-12 row">
                        <div class="form-group col-md-6">
                            <label class="text-success mt-2" for="formGroupExampleInput">OPCIÓN 1</label>
                            <input style="border-radius: 30px!important;" type="text" name="option_1" class="form-control" id="formGroupExampleInput" value="{{ $pregunta->option_1 }}" placeholder="Aquí la Opción CORRECTA" required autofocus>
                        </div>
    
    
                        <div class="form-group col-md-6 mt-2">
                            <label class="text-danger" for="formGroupExampleInput">OPCIÓN 2</label>
                            <input style="border-radius: 30px!important;" type="text" name="option_2" class="form-control" id="formGroupExampleInput" value="{{ $pregunta->option_2 }}" placeholder="Aquí la Opción INCORRECTA" required autofocus>
                        </div>
    
    
    
                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 3</label>
                            <input style="border-radius: 30px!important;" type="text" name="option_3" class="form-control" id="formGroupExampleInput2" value="{{ $pregunta->option_3 }}" placeholder="Aquí la Opción INCORRECTA" required autofocus>
                        </div>
    
    
                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 4</label>
                            <input style="border-radius: 30px!important;" type="text" name="option_4" class="form-control" id="formGroupExampleInput2" value="{{ $pregunta->option_4 }}" placeholder="Aquí la Opción INCORRECTA" required autofocus>
                        </div>
                    </div>
    
                    <div style="border-radius: 30px; background-color: #000;" class="text-white mb-2 col-12">
                        <div class="form-group pr-2">
                            <label class=" text-center col-12 mt-3 badge badge-pill badge-warning" for="exampleFormControlFile1">INGRESE UNA IMAGEN</label>
                            <div class=" text-nowrap d-flex justify-content-center" id="div_file">
                           <p id="texto" style="cursor: pointer!important;"> <i class="icon-file_open">Elegir imagen</i> </p>   
                          <input type="file" style="cursor: pointer;" name="image" id="btn_enviar">
                         </div>
                        </div>
                    </div>
    
                    <div style="border-radius: 30px; background-color: #000;" class="col-12">
                        <div class="form-group">
                            <button type="submit" style="border-radius: 30px; font-family: 'Press Start 2P';" class="btn btn-primary btn-md btn-block mt-3 d-flex justify-content-center">EDITAR</button>
                        </div>
    
                    </div>
                </form>
            </div>
    
        </div>
    </div>
</div>




@endsection