@extends('welcome') @section('title') Agregar Pregunta en @endsection @section('content')
<div class="container container-fluid">
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-8 m-auto pt-3 pb-3">

            <div class="">

                <form class="row m-auto d-flex justify-content-center" style="border-radius: 30px;" method="POST" action="{{ url('/agregar/pregunta') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="bg-dark text-white mb-2 col-12" style="border-radius: 30px;">
                        <div class="form-group">
                            <label style="font-family: ZCOOL KuaiLe; font-weight: bold;" class="col-12 text-center pt-3" for=""><h5>INGRESE NUEVA PREGUNTA</h5></label>
                            <textarea class="col-12 px-3 rounded" name="question" for="question" placeholder="Máximo 140 caracteres" maxlength="140" required autofocus></textarea>
                        </div>
                    </div>

                    <div  style="border-radius: 30px;" class="bg-dark text-white mb-2 col-12">
                        <div class="form-group">
                            <label for="__input-category" class="text-center col-12 mt-3 badge badge-pill badge-warning">SELECCIONE UNA CATEGORÍA</label>
                            <select class="form-control col-12 mt-3" name="category_id" id="__input-category">
                                <option value="">Elegir categoría...</option>
                               {{-- @foreach  ($categories as $category)--}}
                                    <option value="{{--$category->id--}}">{{-- $category->name --}}</option>
                               {{-- @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div style="border-radius: 30px;" class="bg-dark mb-2 col-12 row">
                        <div class="form-group col-md-6">
                            <label class="text-success" for="formGroupExampleInput">OPCIÓN 1</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Aquí la respuesta CORRECTA" required autofocus>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput">OPCIÓN 2</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>



                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 3</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="text-danger" for="formGroupExampleInput2">OPCIÓN 4</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                        </div>
                    </div>

                    <div style="border-radius: 30px;" class="bg-dark text-white mb-2 col-12">
                        <div class="form-group pr-2">
                            <label class=" text-center col-12 mt-3 badge badge-pill badge-warning" for="exampleFormControlFile1">INGRESE UNA IMAGEN</label>
                            <input class="form-control-file mt-3" type="file" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div style="border-radius: 30px;" class="bg-dark col-12">
                        <div class="form-group">
                            <button type="submit" style=" font-family: 'Press Start 2P';" class="btn btn-success btn-md btn-block mt-3 d-flex justify-content-center">PUBLICAR</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


@endsection