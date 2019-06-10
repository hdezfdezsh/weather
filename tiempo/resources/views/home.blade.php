@extends('layouts.master')
@section('content')
<body class="body">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="./img/slider.jpg">
            </div>
        </div>
    </div>
    <form action="{{url('/nombre')}}" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
 
    <div class="mt-3 mb-3 card-deck row justify-content-center cards">
            <div class="p-3 card col-3 juegos"> 
                ciudad 1            
                <!-- <img class="card-img-top juegos" src="./img/diablo.png">
                <div class="card-body">
                    
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">El tiempo segun el nombre de tu ciudad</p>
                    <form action="{{url('/buscador')}}">
                        <input type="hidden" name="nombre" class="form-control" id="nombre">
                        <button type="submit" name="buscanombre" class="btn btn-primary">Buscar</button>
                    </form>
                </div>  -->        
            </div>
            <div class="p-3 card col-3 juegos">
                ciudad 2
                    <!-- <img class="card-img-top" src="./img/battlefield.jpg">
                    <div class="card-body">
                        <h5 class="card-title"><a class="navbar-brand" href="{{url('id')}}">ID</a></h5>
                        <p class="card-text">El tiempo segun el ID de tu ciudad</p>
                        <form action="{{url('buscador')}}">
                             <input type="hidden" name="id" class="form-control" id="id">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div> -->
            </div>
            <div class="p-3 card col-3 juegos">
                ciudad 3
                   <!--  <img class="card-img-top" src="./img/fortnite.jpg">
                    <div class="card-body">
                        <h5 class="card-title"><a class="navbar-brand" href="{{url('zip')}}">Codigo ZIP</a></h5>
                        <p class="card-text">El tiempo segun el codigo ZIP de tu ciudad</p>
                        <form action="{{url('buscador')}}">
                             <input type="hidden" name="zip" class="form-control" id="zip">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div> -->
            </div>
            <div class="p-3 card col-3 juegos">
                ciudad 4
                    <!-- <img class="card-img-top" src="./img/skyrim.png">
                    <div class="card-body">
                        <h5 class="card-title"><a class="navbar-brand" href="{{url('gps')}}">Coordenadas GPS</a></h5>             
                        <p class="card-text">El tiempo segun las coordenadas GPS de tu ciudad</p>
                        <form action="{{url('buscador')}}">
                             <input type="hidden" name="gps" class="form-control" id="gps">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div> -->
            </div>
      </div>
    </div>

</body>
@endsection