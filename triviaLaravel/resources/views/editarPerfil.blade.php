@extends('welcome') @section('title') Editar mi perfil en @endsection @section('content')


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

<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card d-flex justify-content-center bg-dark text-white" style="border-radius: 30px;">
              <div class="d-flex justify-content-center">
                <img class="p-3" src="{{ url('/uploads/avatars/' . $user->image) }}" alt="" 
              style="width: 200px; height: 200px; border-radius: 50%;">
              </div>
                <div class="card-body col-12">
                  <h2 class="card-title d-flex justify-content-center" style="font-family: ZCOOL KuaiLe;"> {{$user->alias}} </h2>
                  <hr>
                  <form class="" enctype="multipart/form-data" method="POST" action="/editar/perfil">
                     <label class="d-flex justify-content-center" style=" font-family: sans-serif;" for="">Cambiar mi foto de perfil</label>
                     <div class=" text-nowrap d-flex justify-content-center" id="div_file">
                       <p id="texto" style="cursor: pointer!important;"> <i class="icon-file_open">Elegir imagen</i> </p>   
                      <input type="file" style="cursor: pointer;" name="image" id="btn_enviar">
                     </div>
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="">
                     <hr>
                     <button type="submit" style="font-family: 'Press Start 2P'; border-radius: 30px;" class="btn btn-sm btn-success btn-block p-2" name="" id="">CAMBIAR</button>
                  </form>
                  <hr>
                  <div>
                    <a class="text-center col-12 btn btn-link" href="/perfil"> Volver a mi perfil</a>
                  </div>
                  <hr>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

