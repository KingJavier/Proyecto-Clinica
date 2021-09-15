<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Clinica-Esperanza</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<!-- Header -->
<body class="antialiased">



  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
      <img src="../resources/img/" alt="">
      <a class="navbar-brand" href="#">Clinica-Esperanza</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
          aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Inicio
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Responsabilidad Social</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Más</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Hospital</a>
                <a class="dropdown-item" href="#">Clinica</a>
                <a class="dropdown-item" href="#">Centro de Salud</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">PQR</a>
              </div>
            </li>
          </ul>
          @if (Route::has('login'))
            <div class="">
              @auth
                <button class="btn btn-primary"><a href="{{ url('Inicio') }}" class="text-sm text-yellow-300 ">Inicio</a></button>
                @else
                  <button class="btn btn-primary"><a href="{{ url('Seleccionar') }}" class="text-sm text-yellow-300 ">Iniciar sesion</a></button>
                
                   @if (Route::has('register'))
                  <button class="btn btn-primary"><a href="{{ route('register') }}" class="ml-4 text-sm text-yellow-300 ">Registrarse</a></button>
                                
                @endif
              @endauth
            </div>
          @endif
        </div>
      </div>
    </nav>
  </div>

<!-- Carrusel -->
  <div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../resources/img/covid-19.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../resources/img/medical-563427_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../resources/img/doctores.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Card Horizontal -->
  <div class="  bg-secondary bg-opacity-25 ">
        <hr/>
        <div class="card center " style="margin-right:20px; margin-left: 20px; margin-top: 10px; margin-bottom: 10px">
            <div class="row no-gutters ">
                <div class="col-sm-5">
                    <img class="card-img" src="../resources/img/card.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center mt-10"><b>Clínica Esperanza su Ips amiga </b></h5>
                        
                        <h6 class="text-center"><b>Entidad Acreditada en Salud  desde el 2015</b></h6>
                        <br>
                        <p class="card-text"><b>CÍNICA ESPERANZA S.A.,</b> es una institución prestadora de servicios de salud, con una trayectoria de más de 25 años, con el compromiso de servir con calidad a todos los usuarios. Somos una institución de segundo y tercer nivel de complejidad,  que gracias al compromiso y entrega de sus colaboradores se desarrolla y crece con altos estándares de calidad en respuesta a las necesidades de la comunidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- Cards  -->
    <div>
      <hr/><br>
      <div>
          <h2 class=" fs-2 fw-bold"><b>Nuestros Servicios</b></h2><br>
      </div>
      <div class="row ml-10">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cirugía</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Consulta</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">UCIA</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <div class="row ml-10">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Imagenologia</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Urgencias</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="../resources/img/Captura6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gastroenterelogía</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </div>
      </div>  
</div>
  
 <!-- img -->
<div>
      <hr/><br>
      <div>
          <h2 class=" fs-2 fw-bold"><b>Nuestras Sedes</b></h2><br>
      </div>
      <div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div>
          <img src="../resources/img/1.jpg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div>
          <img src="../resources/img/2.jpg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div>
          <img src="../resources/img/3.jpg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div>
          <img src="../resources/img/4.jpg" class="img-fluid" alt="...">
          </div>
        </div>
      </div>  
    </div>
      </div>
</div><BR></BR>

<footer class="text-center text-lg-start" style="background-color: #3B83BD;">
    <div class="container d-flex justify-content-center py-5">
      <p>
        Calle 6 # 10 - 125 <br>
        Cota, Cundinamarca, Colombia <br>
        (57) (1) 5938080</p>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Clinica-Esperanza</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>