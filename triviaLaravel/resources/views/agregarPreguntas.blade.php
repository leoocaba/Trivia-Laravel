@extends('welcome') @section('title') Agregar Pregunta en @endsection @section('content')

{{-- ESTILO INPUT-FILE --}}
<style>
    #texto{
      text-decoration: underline;
      font-size: 12px;
      text-align: center;
      font-family: 'Press Start 2P';
    }
    div#div_file {
      box-shadow: 0px 3px 0px rgb(12, 180, 110);
      border-radius: 30px;
      overflow: hidden;
      box-sizing: border-box;
      position: relative;
      padding: 10px;
      width: 100%;
      height: 40px;
      background-color: #30B77E;
      color: antiquewhite;
      
    }
    input#btn_enviar{
      position: absolute;
      top: 0px;
      left: 0px;
      right: 0px;
      bottom: 0px;
      width: 100%;
      height: 100%;
      opacity: 0;
    }
  </style>
  
  {{-- ********** FIN ********** --}}


  <ul>
    @foreach ($errors->all() as $error)
        
    @endforeach

  </ul>
  

<div class="container">
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-8 mb-3">

            <div class="">

                <form class="row m-auto d-flex justify-content-center" style="border-radius: 30px;" method="POST" action="{{ url('/agregar/pregunta') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="text-white mb-2 col-12" style="background-color: #000; border-radius: 30px;">
                        <div class="form-group">
                            <label style="font-family: ZCOOL KuaiLe; font-weight: bold;" class="col-12 text-center pt-3" for=""><h5 class="text-success">INGRESE NUEVA PREGUNTA</h5></label>
                            <textarea class="col-12 px-3 rounded" name="question" for="question" placeholder="Máximo 300 caracteres" 
                            value="{{ old('question') }}" maxlength="300" autofocus required></textarea>
                        </div>
                    </div>

                    <div  style="border-radius: 30px; background-color: #000;" class="text-white mb-2 col-12">
                        <div class="form-group">
                            <label for="__input-categoria" class="text-center col-12 mt-3 badge badge-pill badge-warning">SELECCIONE UNA CATEGORÍA</label>
                            <select class="form-control col-12 mt-3" name="category_id" id="__input-categoria" required autofocus>
                                <option value="{{ old('category_id') }}">Elegir categoría...</option>
                             @foreach    ($categorias as $categoria) 
                                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                            @endforeach 
                            </select>
                        </div>
                    </div>

                    <div style="border-radius: 30px; background-color: #000;" class="col-12 row">
                        <div class="form-group col-md-6">
                            <label class="text-success mt-2" for="formGroupExampleInput">OPCIÓN 1</label>
                            <input type="text" style="border-radius: 30px;" name="option_1" class="form-control" id="formGroupExampleInput" value="{{ old('option_1') }}" placeholder="Aquí la respuesta CORRECTA" required autofocus>
                        </div>


                        <div class="form-group col-md-6 mt-2">
                            <label class="text-danger" for="formGroupExampleInput">OPCIÓN 2</label>
                            <input type="text" style="border-radius: 30px;" name="option_2" class="form-control" id="formGroupExampleInput" value="{{ old('option_2') }}" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>



                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 3</label>
                            <input type="text" style="border-radius: 30px;" name="option_3" class="form-control" id="formGroupExampleInput2" value="{{ old('option_3') }}" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 4</label>
                            <input type="text" style="border-radius: 30px;" name="option_4" class="form-control" id="formGroupExampleInput2" value="{{ old('option_4') }}" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>
                    </div>

                    <div style="border-radius: 30px; background-color: #000;" class="text-white mt-2 col-12">
                        <div class="form-group pr-2">
                            <label class=" text-center col-12 mt-3 badge badge-pill badge-warning" for="exampleFormControlFile1">INGRESE UNA IMAGEN</label>
                            <div class=" text-nowrap d-flex justify-content-center" id="div_file">
                                <p id="texto" style="cursor: pointer!important;"> <i class="icon-file_open">Elegir imagen</i> </p>   
                               <input type="file" style="cursor: pointer;" value="{{ old('image') }}" name="image" id="btn_enviar">
                              </div>
                        </div>
                    </div>

                    <div style="border-radius: 30px!important; background-color: #000;" class="mt-2 col-12">
                        <div class="form-group">
                            <button type="submit" style="border-radius: 30px!important; font-family: 'Press Start 2P';" class="btn btn-success btn-md btn-block mt-3 d-flex justify-content-center">PUBLICAR</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


@endsection