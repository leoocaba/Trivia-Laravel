@extends('welcome')

@section('title') Eliminar Pregunta en @endsection 

@section('style')
<link rel="stylesheet" href="/css/estilo-eliminar.css">
@endsection

@section('content')

<div id="eliminarPregunta">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-8 m-auto pt-3 pb-3">
            <form class="row m-auto d-flex justify-content-center" style="border-radius: 30px;" method="POST" action="/eliminar/{{$pregunta->id}}" enctype="multipart/form-data">
    
                    @csrf
    
                    <div class="bg-dark text-white mb-2 col-12" style="border-radius: 30px;">
                        <div class="form-group">
                            <label style="font-family: ZCOOL KuaiLe; font-weight: bold;" class="col-12 text-center pt-3" for=""><h5 class="text-danger">ELIMINAR LA PREGUNTA ELEGIDA</h5></label>
                        <h3 class="text-center">{{$pregunta->question}}</h3>
                        </div>
                    </div>
    
                    <div style="border-radius: 30px;" class="bg-dark text-white mb-2 col-12">
                        <div class="form-group">
                            <label for="__input-categoria" class="text-center col-12 mt-3 badge badge-pill badge-warning">CATEGORÍA</label>
                        <h4 class="text-center">{{$pregunta->categories->name}}</h4>  
                        </div>
                    </div>
    
                    <div style="border-radius: 30px;" class="bg-dark mb-2 col-12 row">
                        <div class="form-group col-md-6">
                            <label class="text-success mt-2" for="formGroupExampleInput">OPCIÓN 1</label>
                        <h5 class="tex-center text-white">{{$pregunta->option_1}}</h5>
                        </div>
    
    
                        <div class="form-group col-md-6 mt-2">
                            <label class="text-danger" for="formGroupExampleInput">OPCIÓN 2</label>
                            <h5 class="tex-center text-white">{{$pregunta->option_2}}</h5>
                        </div>
    
    
    
                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 3</label>
                            <h5 class="tex-center text-white">{{$pregunta->option_3}}</h5>
                        </div>
    
    
                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 4</label>
                            <h5 class="tex-center text-white">{{$pregunta->option_4}}</h5>
                        </div>
                    </div>
  
    
                    <div style="border-radius: 30px;" class="bg-dark col-12">
                        <div class="form-group">
                            <button type="submit" style="border-radius: 30px; font-family: 'Press Start 2P';" class="btn btn-danger btn-md btn-block mt-3 d-flex justify-content-center">ELIMINAR</button>
                        </div>
    
                    </div>
                </form>
            </div>
    
        </div>
    </div>
</div>

@endsection