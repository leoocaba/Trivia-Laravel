@extends('welcome') @section('title') faq @endsection @section('content')
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
<div class="panel-group" id="accordion">
   <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionOne">
            1. Como  jugamos ?
            </a>
           </h4>
        </div>

        <div id="accordionOne" class="panel-collapse collapse in">
          <div class="panel-body">
          Para jugar a la trivia ............................
          </div>
        </div>
  </div>
   <div class="panel panel-success">
          <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionTwo">
              2.Como ganamos ?
            </a>
          </h4>
          </div>

        <div id="accordionTwo" class="panel-collapse collapse">
          <div class="panel-body">
             Para ganar en la Trivia.......................
          </div>
        </div>
   </div>
    <div class="panel panel-warning">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionThree">
             3. Como recupero clave?
            </a>
          </h4>
        </div>
        <div id="accordionThree" class="panel-collapse collapse">

          <div class="panel-body">
         Depositando en la cuenta $$$.............
        </div>
     </div>
 </div>


@endsection
