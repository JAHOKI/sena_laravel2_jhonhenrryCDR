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
                                <li><a class="dropdown-item" href="#">Visión</a></li>
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




<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Misión - Agropecuaria San José</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #87CEEB; /* Azul cielo */
                color: #2c6e49; /* Verde oscuro para la legibilidad */
            }
            h1 {
                text-align: center;
                animation: shine 1.5s infinite;
                text-transform: uppercase; /* Título en mayúsculas */
            }
            @keyframes shine {
                0% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 15px #66ff66, 0 0 20px #66ff66, 0 0 30px #66ff66;
                }
                50% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #66ff66, 0 0 40px #66ff66;
                }
                100% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 15px #66ff66, 0 0 20px #66ff66, 0 0 30px #66ff66;
                }
            }
            p {
                font-size: 1.2rem;
                text-align: justify; /* Texto justificado */
                margin-top: 20px;
            }
            .cuadro {
                border: 2px solid #2c6e49;
                border-radius: 10px;
                padding: 20px;
                margin-top: 30px;
                background-image: url('https://example.com/hojas

            body {
                background-color: #87CEEB; /* Azul cielo */
                color: #2c6e49; /* Verde oscuro para la legibilidad */
            }
            h1 {
                text-align: center;
                animation: shine 1.5s infinite;
                text-transform: uppercase; /* Título en mayúsculas */
            }
            @keyframes shine {
                0% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 15px #66ff66, 0 0 20px #66ff66, 0 0 30px #66ff66;
                }
                50% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #66ff66, 0 0 40px #66ff66;
                }
                100% {
                    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 15px #66ff66, 0 0 20px #66ff66, 0 0 30px #66ff66;
                }
            }
            p {
                font-size: 1.2rem;
                text-align: justify; /* Texto justificado */
                margin-top: 20px;
            }
            .cuadro {
                border: 2px solid #2c6e49;
                border-radius: 10px;
                padding: 20px;
                margin-top: 30px;
                background-image: url('https://example.com/hojas.png'); /* Cambia esto por una imagen de hojas */
                background-size: cover;
                background-position: center;
                color: white; /* Color del texto dentro del cuadro */
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Misión de la Institución Educativa Agropecuaria San José</h1>


<div class="cuadro">
                <p>La misión de la Institución Educativa Agropecuaria San José es formar profesionales íntegros con un enfoque en la sostenibilidad, promoviendo el desarrollo agropecuario y la conservación del medio ambiente mediante una educación de calidad que fortalezca las competencias técnicas y socio-emocionales de nuestros estudiantes.</p>
            </div>

        </div
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>

