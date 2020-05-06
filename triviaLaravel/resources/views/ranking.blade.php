@extends('welcome') @section('title') Jugar @endsection @section('content')

<style>
    .card-img-top {
        width: 90px;
        height: 90px;
        object-fit: cover;
    }

    a {
        font-family: 'Press Start 2P';
    }

    h4 {
        font-family: ZCOOL KuaiLe;
    }
</style>

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">

<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

</head>

<body>
  <?php
   ?>

   <!--Table-->
<table class="table table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Posición</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Ciudad</th>
      <th>Pais</th>
      <th>Puntaje</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>1</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>99</td>
    </tr>
    <tr class="table-info">
      <th scope="row">3</th>
      <td>3</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>98</td>
    </tr>
    <tr>
      <th scope="row">4</th>
     <td>4</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>97</td>
    </tr>
    <tr class="table-info">
      <th scope="row">5</th>
     <td>5</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>96</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>6</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>90</td>
    </tr>
    <tr class="table-info">
      <th scope="row">7</th>
      <<td>7</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>80</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>8</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>50</td>
    </tr>
    <tr class="table-info">
      <th scope="row">9</th>
      <td>9</td>
      <td>Pedro </td>
      <td>Gonzalez</td>
      <td>La Plata</td>
      <td>Argentina</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
</body>
@endsection
