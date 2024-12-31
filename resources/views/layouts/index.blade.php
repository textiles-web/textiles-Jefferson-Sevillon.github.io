<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('seo')
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="{{asset('sitioWeb/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('sitioWeb/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div>  
                <img width="100px" height="100px" src="{{asset('imagen/'.$empresa->logo)}}" alt="{{$empresa->title}}">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            </div>           
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Sobre Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicio">Servicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto">Contacto</a>
              </li>        
          </ul> 
        </nav>
    </header>  
  <main>
    @yield('content')
  </main>
  <div>
    <div>
      <footer>
        <div class="footer-container">
          <div id="contacto">
            <img class="" src="{{asset('imagen/'.$empresa->logo)}}" alt="{{$empresa->title}}" width="24" height="19">
            <small class="">&copy; 2024</small>
          </div>
          <div class="footer-section social-icons">
            <h5>Redes</h5>
            <ul>
              @foreach ($redes as $red)
                  <li class="mb-1"><a target="_blank" class="link-secondary text-decoration-none" href="{{$red->link}}"> <i class="{{$red->icon}}"></i> {{$red->title}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="footer-section contact-numbers">
            <h5>Contacto</h5>
            <ul class="">
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->correo}}</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->numero}}</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" >{{$empresa->direccion}}</a></li>
            </ul>
          </div>
          <div class="footer-section map-container">
            <h5>Georeferencia</h5>
            <iframe src="{{$empresa->georeferencia}}" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>     
      </footer>
    </div>
  </div>
  <script src="{{asset('sitioWeb/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>