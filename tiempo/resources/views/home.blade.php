@extends('layouts.master')
@section('content')
<body class="body">

    <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="./img/slider.jpg">
            </div>
        </div>
    </div>
    <h4>Busca tu ciudad</h4>
    <div class="row">
        <div class="col-9 mt-5 mb-5 offset-md-3">
            <form action="{{url('/nombre')}}" class="form-inline my-2 my-lg-0">
                <input name="buscar" class="form-control mr-sm-3" size="60" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
    <h4>Algunas de las ciudades más importantes del planeta</h4>
    <div class="mt-5 mb-5 card-deck row justify-content-center cards">
            <div class="p-3 card col-3 juegos"> 
                {{$ny}}                 
            </div>
            <div class="p-3 card col-3 juegos">
                {{$dubai}}
            </div>
            <div class="p-3 card col-3 juegos">
                {{$tokio}}
            </div>
            <div class="p-3 card col-3 juegos">
                {{$berlin}}
            </div>
      </div>
    </div>

</body>
@endsection
