
<!DOCTYPE html>
<html>
<head>
    <title>Jhon_Hernandez - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Personalización del navbar */
        .navbar {
            background-color: #78e14b; /* Color de fondo personalizado */
        }
        .navbar-brand, .nav-link, .dropdown-item {
            color: #ecf0f1 !important; /* Color del texto */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            font-weight: bold; /* Negrita */
        }
        .navbar-brand:hover, .nav-link:hover, .dropdown-item:hover {
            color: #3498db !important; /* Color al pasar el ratón */
        }
        .dropdown-menu {
            background-color: #34495e; /* Color de fondo del menú desplegable */
        }
        .dropdown-divider {
            border-color: #7f8c8d; /* Color del divisor en el menú desplegable */
        }

        /* Estilo de los botones */
        .btn-primary {
            background-color: #3498db; /* Color de fondo personalizado */
            border-color: #467696; /* Color del borde */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            font-weight: bold; /* Negrita */
        }
        .btn-primary:hover {
            background-color: #2980b9; /* Color de fondo al pasar el ratón */
            border-color: #1c6ea4; /* Color del borde al pasar el ratón */
        }

        /* Estilo de los inputs de búsqueda */
        .form-control {
            border-radius: 20px; /* Bordes redondeados */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
        }

        /* Estilo general */
        body {
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            background-color: #93dcec; /* Color de fondo de la página */
            color: #14c33d; /* Color del texto */
        }

        /* Margen personalizado para la imagen del logo */
        .navbar-brand img {
            margin-right: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('images/logo.png') }}" alt="CDR" style="width: 40px; height: auto;">

                <a class="navbar-brand" href="#">I.E San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mi Colegio
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('mision') }}">Misión</a></li>
                                <li><a class="dropdown-item" href="{{ route('vision') }}">Visión</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logros académicos</a></li>
                                <li><a class="dropdown-item" href="#">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="#">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="#">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Primaria</a></li>
                                <li><a class="dropdown-item" href="#">Secundaria</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Talento Humano
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Docentes</a></li>
                                <li><a class="dropdown-item" href="#">Administrativos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Directivos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="BUSQUEDA">
                        <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">
                        <button class="btn btn-primary" type="submit">BUSCAR</button>
                    </form>
                </div>
            </div>
        </nav>

        <br><br><br>

        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>



<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/GALLO.png') }}" class="d-block w-25 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/gallina.png') }}" class="d-block w-25 mx-auto" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/CERDO.png') }}" class="d-block w-25 mx-auto" alt="...">
        </div>
    </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Información de Interés</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          .info-section {
              background-color: #f8f9fa;
              padding: 40px 0;
          }
          .info-card {
              background-color: #ffffff;
              border-radius: 8px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              margin-bottom: 30px;
              transition: transform 0.2s;
          }
          .info-card:hover {
              transform: translateY(-5px);
          }
          .info-card img {
              border-radius: 8px 8px 0 0;
          }
          .info-card-body {
              padding: 20px;
          }
          .info-card-title {
              font-size: 1.25rem;
              font-weight: bold;
              color: #2c3e50;
          }
          .info-card-text {
              color: #7f8c8d;
          }
      </style>
  </head>
  <body>

      <!-- Sección de Información de Interés -->
      <section class="info-section">
          <div class="container">
              <h2 class="text-center mb-5">Información de Interés</h2>
              <div class="row">
                  <!-- Noticias -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/granja.png') }}" alt="Noticias" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Noticias</h5>
                              <p class="info-card-text">Mantente informado con las últimas noticias sobre nuestras actividades y eventos.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>

                  <!-- Matrículas -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/matricula.png') }}" alt="Matrículas" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Matrículas</h5>
                              <p class="info-card-text">Infórmate sobre el proceso de matrículas y cómo inscribirte en nuestros programas educativos.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>

                  <!-- Proyectos Agropecuarios -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/colegio.png') }}" alt="Proyectos Agropecuarios" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Proyectos Agropecuarios</h5>
                              <p class="info-card-text">Descubre los proyectos agropecuarios en los que nuestros estudiantes participan activamente.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Scripts de Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
















  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pie de Página</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          /* Estilos para el pie de página */
          footer {
              background-color: #2c3e50;
              color: #ecf0f1;
              padding: 20px 0;
          }

          .footer-section {
              margin-bottom: 10px;
          }

          .footer-section h5 {
              margin-bottom: 15px;
              font-weight: bold;
          }

          .footer-section p, .footer-section a {
              margin: 0;
              color: #ecf0f1;
          }

          .footer-section a:hover {
              color: #3498db;
              text-decoration: none;
          }

          .footer-bottom {
              border-top: 1px solid #7f8c8d;
              padding-top: 10px;
              text-align: center;
          }
      </style>
  </head>
  <body>

      <!-- Contenido principal de la página -->

      <!-- Pie de página -->
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-md-4 footer-section">
                      <h5>Contacto</h5>
                      <p>Dirección: Calle 123, Zona Rural, Municipio</p>
                      <p>Teléfono: (123) 456-7890</p>
                      <p>Email: info@colegioagropecuario.edu</p>
                  </div>
                  <div class="col-md-4 footer-section">
                      <h5>Enlaces Rápidos</h5>
                      <a href="#">Inicio</a><br>
                      <a href="#">Acerca de</a><br>
                      <a href="#">Programas</a><br>
                      <a href="#">Contacto</a>
                  </div>
                  <div class="col-md-4 footer-section">
                      <h5>Síguenos</h5>
                      <a href="#">Facebook</a><br>
                      <a href="#">Twitter</a><br>
                      <a href="#">Instagram</a>
                  </div>
              </div>
              <div class="footer-bottom mt-3">
                  <p>&copy; 2024 Colegio Agropecuario San José. Todos los derechos reservados.</p>
              </div>
          </div>
      </footer>

      <!-- Scripts de Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>





