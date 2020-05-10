<!DOCTYPE html>
<html lang="es" dir="ltr" xml:lang="es">
<head>
  <meta charset="utf-8">
  <title>Trivia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/t.png">
  <link rel="stylesheet" href="/css/estilo-index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body style="background-color: #dac300;"!important;>

  <div class="jumbotron jumbotron-fluid" style="background-color: #dac300"!important;>
    <div class="container">
      <div class="contenedor">
        <h2 style="font-family: 'Press Start 2P'"!important;>BIENVENIDO<span>&#160;</span></h2><br>
        <h2 style="font-family: 'Press Start 2P'"!important;>A<span>&#160;</span></h2><br>
        <h2 style="font-family: 'Press Start 2P'"!important;>TRIVIA<span>&#160;</span></h2>
      </div>
       <br>
       <a href="{{ url('/welcome') }}"> <button type="button" class="btn btn-outline-success">INGRESAR</button></a>
   <br>
   <br>
   <div class="text-center mt-5">
    <p class="d-inline footer-alt mb-0 f-14 font-weight-bold">{{date('Y')}} Copyright</p> <p class="text-success d-inline footer-alt mb-0 f-14 font-weight-bold" 
    style="font-family: ZCOOL KuaiLe;">Trivia</p><p class="d-inline footer-alt mb-0 f-14 font-weight-bold"> © Todos los derechos reservados.</p>
    </div>
    </div>
 </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
