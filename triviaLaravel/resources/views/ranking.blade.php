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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<table class="table w-auto" style="background-color: white">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Puesto</th>
      <th>img</th>
      <th>Nombre de usuario</th>
      <th>Puntuación</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>1</td>
      <td></td>
      <td>Pedro </td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2</td>
      <td></td>
      <td>Pedro </td>
      <td>99</td>
    </tr>
    <tr class="table-info">
      <th scope="row">3</th>
      <td>3</td>
      <td></td>
      <td>Pedro </td>
      <td>98</td>
    </tr>
    <tr>
      <th scope="row">4</th>
     <td>4</td>
     <td></td>
      <td>Pedro </td>
      <td>97</td>
    </tr>
    <tr class="table-info">
      <th scope="row">5</th>
     <td>5</td>
     <td></td>
      <td>Pedro </td>
      <td>96</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>6</td>
      <td></td>
      <td>Pedro </td>
      <td>90</td>
    </tr>
    <tr class="table-info">
      <th scope="row">7</th>
      <<td>7</td>
      <td></td>
      <td>Pedro </td>
      <td>80</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>8</td>
      <td></td>
      <td>Pedro </td>
      <td>50</td>
    </tr>
    <tr class="table-info">
      <th scope="row">9</th>
      <td>9</td>
      <td></td>
      <td>Pedro </td>
      <td>10</td>
    </tr>
  </tbody>
</table>
</div>
</body>
@endsection
