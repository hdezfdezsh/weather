@extends('layouts.master')
@section('content')
<body class="body">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <img class="img-fluid" src="./../img/mapa.jpeg">
        </div>
        <div class="col-4">
          {{$output}}
        </div>
      </div>
    </div>

</body>
@endsection
