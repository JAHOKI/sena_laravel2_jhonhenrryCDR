
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CDR-SAN JOSE - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #044506;
        }
        .navbar-brand,
        .nav-link,
        .dropdown-item {
            color: hsl(212, 57%, 82%) !important;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }
        .navbar-brand:hover,
        .nav-link:hover,
        .dropdown-item:hover {
            color: #5f0f40 !important;
        }
        .dropdown-menu {
            background-color: #3c6a55;
        }
        .dropdown-divider {
            border-color: #7f8c8d;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #467696;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #1c6ea4;
        }
        .form-control {
            border-radius: 20px;
            font-family: 'Arial', sans-serif;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #93dcec;
            color: #14c33d;
        }
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
                <a class="navbar-brand" >San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Mi cole</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Como es
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/mision">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>
                                <li><a class="dropdown-item" href="/gestion-juridica">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="/logros-directivos">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="/proyectos-productivos">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
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

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">

                        <button class="btn btn-primary" type="submit">BUSCAR</button>
                        <button class="btn btn-primary me-2" type="button" onclick="window.location.href='/login'">login</button>
                    </form>
                </div>
            </div>
        </nav>

        <br><br><br>

        @yield('contenido')
        @yield('logro')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VoPF1aCqUuWbJaIS+phZLHYd5Br4AfH6HwLE2OTmlj9mOd4pZUy5kkV/T8B3s8S6" crossorigin="anonymous"></script>
</body>
</html>
