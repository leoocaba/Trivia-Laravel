@extends('welcome') @section('title') Agregar Pregunta en @endsection @section('content')
<div class="container container-fluid">
    <div class="row justify-content-center">

        <div class="col-12 col-lg-10 m-auto pt-3 pl-2 pb-3 pr-2">

            <div class="bg-dark text-white">

                <form class="row m-auto d-flex justify-content-center pt-3 pl-2 pb-3 pr-2" method="POST" action="{{ url('/agregar/pregunta') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group col-12">
                        <label style="font-family: ZCOOL KuaiLe;" class="text-center" for=""><h5>INGRESE NUEVA PREGUNTA</h5></label>
                        <textarea class="col-12" name="question" for="question" placeholder="Máximo 140 caracteres" maxlength="140" required autofocus></textarea>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label class="text-success" for="formGroupExampleInput">Respuesta 1</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Aquí la respuesta CORRECTA" required autofocus>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label class="text-danger" for="formGroupExampleInput">Respuesta 2</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label class="text-danger" for="formGroupExampleInput2">Respuesta 3</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label class="text-danger" for="formGroupExampleInput2">Respuesta 4</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Aquí la respuesta INCORRECTA" required autofocus>
                    </div>

                    <div class="form-group row col-12 pr-2">
                        <label class="col-12 col-md-6 bg-danger text-left" for="exampleFormControlFile1">Ingrese una imagen relacionada a la pregunta.</label>
                        <input class="form-control-file col-12 col-md-6" type="file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group col-12">
                        <button type="submit" style=" font-family: 'Press Start 2P';" class="btn btn-primary btn-md btn-block px-1 d-flex justify-content-center">PUBLICAR</button>
                    </div>

                </form>
            </div>

        </div>

    </div>
</div>


@endsection