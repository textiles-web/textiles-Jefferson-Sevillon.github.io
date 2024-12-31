@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<div class="container">
<div id="carouselExampleCaptions" class="carousel-slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($inicio as $item)
      <div class="carousel-item {{$item->class}}">
        <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="{{$item->title}}">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$item->title}}</h5>
          <p>{{$item->description}}</p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
              <!-- START THE FEATURETTES -->
        <div id="nosotros">
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Mision</h2>
              <p class="lead text-justify">{{$Mision->name}}</p>
            </div>
            <div class="col-md-5">
  
              <figure class="figure">
                <img src="{{asset('imagen/'.$Mision->image)}}" class="figure-img img-fluid rounded" alt="...">
              </figure>
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Vision</h2>
              <p class="lead">{{$Vision->name}}</p>
            </div>
            <div class="col-md-5 order-md-1">             
              <figure class="figure">
                <img src="{{asset('imagen/'.$Vision->image)}}" class="figure-img img-fluid rounded" alt="...">
              </figure>
            </div>
          </div>
        </div>
        <!--CONTACTO-->
        @if ($statusCard == 'activo')
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('imagen/'.$item->image)}}" class="d-block mx-lg-auto img-fluid" alt="{{$card->title}}" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">{{$card->title}}</h1>
                <p class="lead">{{$card->description}}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <a href="{{$card->link}}" class="btn btn-primary btn-lg px-4 me-md-2">Comunicate</a>
                </div>
              </div>
            </div>
          </div>
        @endif    
        <!--FIN CONTACTO-->
        <div id="servicio">
          <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom text-center">Servicios</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
              @foreach ($servicios as $servicio)
              <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                  <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                </div>
                <div>
                  <h2>{{$servicio->title}}</h2>
                  <img src="{{asset('imagen/'.$servicio->image)}}" class="img-thumbnail" alt="{{$servicio->title}}">
                  <p>{{$servicio->description}}</p>
                  <a target="_blank" href="{{$servicio->link}}" class="btn btn-primary">
                    Comunicate
                  </a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>     
  </div>
@endsection