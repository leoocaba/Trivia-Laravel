@extends('welcome')
@section('title')
    Comunicate con nosotros
@endsection
@section('content')
<div class="container py-3 px-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card text-white bg-dark py-2 px-2" style="border-radius: 30px;">
                <div class="form-group my-2 bg-info d-flex justify-content-center" style="margin:0 auto; display: flex;justify-content: center;
                align-items: center; text-align: center; margin:0px auto;padding:3% -webkit-border-radius: 61px; -moz-border-radius: 61px;
                border-radius: 61px; border:5px solid #aaaaaa; width:112px; height:112px; font-family: ZCOOL KuaiLe; font-weight: bold;">
                    <h2 class="my-2 mx-2">
                        Trivia
                    </h2>
                </div>
                <div class="card-header m-1"><h3 class="text-center">{{ __('Comunicate con nosotros') }}</h3></div>

                <div class="card-body">
                  @if(Session::has('success'))
                     <div class="alert alert-success">
                     {{ Session::get('success') }}
                      </div>
                  @endif
                    <form class="justify-content-center" method="POST" action="contact-us">
                       {{csrf_field()}}

                        <div class="form-group">
                            <label for="name" class="col-12 col-form-label">{{ __('Nombre') }}</label>

                            <div class="col-12">
                                <input style="border-radius: 30px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese su nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="email" class="col-12 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-12">
                                <input style="border-radius: 30px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Ingrese su e-mail" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                               <label> Número de Teléfono </label>
                              <input style="border-radius: 30px;" type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Número de Teléfono" value="{{ old('phone_number') }}"name="phone_number"  required autocomplete="phone_number">
                              @error('phone_number')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>

                          <div class="col-md-12">
                             <div class="form-group">
                               <label> Asunto </label>
                               <input style="border-radius: 30px;" type="text" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Asunto" name="subject" required autocomplete="subject">
                               @error('subject')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                             </div>
                           </div>

                           <div class="col-md-12">
                             <div class="form-group">
                                <label> Mensaje </label>
                                <textarea style="border-radius: 10px;" class="form-control textarea @error('message') is-invalid @enderror" placeholder="Ingrese su mensaje" value="{{ old('message') }}" name="message" required autocomplete="message"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>


                        <hr>
                        <div class="form-group my-4 d-flex justify-content-center">
                            <div class="col-12 justify-content-centerr">
                                <button type="submit" style="border-radius: 30px; font-family: 'Press Start 2P'; font-size: 12px; overflow: hidden;" class="justify-content-centerr btn btn-info text-nowrap btn-md btn-block my-2">
                                    {{ __('Enviar Consulta') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
