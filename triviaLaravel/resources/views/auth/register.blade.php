@extends('welcome')
@section('title')
    Registrarme en
@endsection
@section('content')
<div class="container py-3 px-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card text-white py-2 px-2" style="border-radius: 30px; background-color: #000;">
                <div class="form-group my-2 bg-info d-flex justify-content-center" style="margin:0 auto; display: flex;justify-content: center; 
                align-items: center; text-align: center; margin:0px auto;padding:3% -webkit-border-radius: 61px; -moz-border-radius: 61px;
                border-radius: 61px; border:5px solid #aaaaaa; width:112px; height:112px; font-family: ZCOOL KuaiLe; font-weight: bold;">
                    <h2 class="my-2 mx-2">
                        Trivia
                    </h2>
                </div>
                <div class="card-header m-1"><h3 class="text-center">{{ __('Registrarme') }}</h3></div>
                <div class="card-body">
                    <form class="justify-content-center" method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="col-12 mx-0 row">
                        <div class="form-group col-12 col-md-6">
                            <label for="name" class="col-form-label">{{ __('Nombre') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="name" type="text" class="col-12 form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese su nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="surname" class="col-form-label">{{ __('Apellido') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" 
                                name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder="Ingrese su apellido" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="surname" class="col-form-label">{{ __('Alias para el juego') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="alias" type="text" class="form-control @error('alias') is-invalid @enderror" 
                                name="alias" value="{{ old('alias') }}" required autocomplete="alias" placeholder="Ingrese su alias" autofocus>

                                @error('alias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" placeholder="Ingrese su e-mail" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="password" class="col-form-label">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" placeholder="Ingrese su contraseña" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="password-confirm" class="col-form-label">{{ __('Confirmar contraseña') }}</label>

                            <div class="">
                                <input style="border-radius: 30px;" id="password-confirm" type="password" class="form-control" 
                                name="password_confirmation" placeholder="Repita su contraseña" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                        <hr>
                        <div class="form-group my-4 d-flex justify-content-center">
                            <div class="col-12 justify-content-centerr">
                                <button type="submit" style="border-radius: 30px; font-family: 'Press Start 2P';" class="btn btn-info btn-md btn-block p-1 my-2">
                                    {{ __('Registrarme') }}
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
<script>
// Validación email
let email = document.getElementById("email");
email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("Por favor, ingresa un correo electrónico!");
  } else {
    email.setCustomValidity("");
  }
});
    </script>
@endsection
