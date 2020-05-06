@extends('welcome')
@section('title')
    Ingresar en
@endsection
@section('content')
<div class="container py-3 px-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <div class="card text-white bg-dark justify-content-center" style="border-radius: 30px;">
                <div class="py-3 col-md-12 d-flex justify-content-center my-1"
               ><svg  style=" -webkit-border-radius: 61px; -moz-border-radius: 61px; border-radius: 61px; border:5px solid #aaaaaa;
               width:112px; height:112px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14 d-flex justify-content-center bg-info p-2" 
                width="50px" height="50px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" 
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 
                    16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 
                    48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                </div>
                <div class="card-header my-1"><h3 class=" text-center">{{ __('Iniciar Sesión') }}</h3></div>

                <div class="card-body color-black">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group my-1 d-flex justify-content-center">

                            <div class="col-12 ">
                                <label for="email" class="col-12 col-form-label">{{ __('Usuario') }}</label>
                                <input id="email" style="border-radius: 40px!important;" type="email" class="form-control radius @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingrese su e-mail" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group my-1 d-flex justify-content-center">
                            <div class="col-12">
                                <label for="password" class="col-12 col-form-label">{{ __('Contraseña') }}</label>
                                <input id="password" style="border-radius: 40px!important;" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Ingrese su contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group my-4 row">
                            <div class="col-12 ml-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group my-1 d-flex justify-content-center">
                            <div class="col-12 justify-content-center">
                                <button type="submit" class="btn btn-info btn-md btn-block" style="font-family:'Press Start 2P'; border-radius: 40px!important;">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                               
                                    <a class="py-auto text-center col-12 btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Restablecer contraseña') }}
                                    </a>
                              
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="form-group my-0 d-flex justify-content-center">
                            <h3 style="font-family: ZCOOL KuaiLe; font-weight: bold;">
                                Trivia
                            </h3>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
