
<!DOCTYPE html>
<html>
    <head>
        <title>Jhon_Hernandez - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>


        <div class="container">
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">I.E San Jose CDR</a>
                  <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">

                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Mi Colegio
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Mision</a></li>
                          <li><a class="dropdown-item" href="#">Vision</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Logros academicos</a></li>
                          <li><a class="dropdown-item" href="#">Gestion juridica</a></li>
                          <li><a class="dropdown-item" href="#">Logros Directivos</a></li>
                          <li><a class="dropdown-item" href="#">Proyectos Productivoss</a></li>

                        </ul>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Escolaridad
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Primaria</a></li>
                            <li><a class="dropdown-item" href="#">Secundaria</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Media Tecnica</a></li>
                          </ul>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Talento Humano
                            </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">docentes</a></li>
                          <li><a class="dropdown-item" href="#">administrativos</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Directivos</a></li>
                        </ul>

                    </ul>
                    <form class="d-flex" role="BUSQUEDA">
                      <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                      <button class="btn btn-primary" type="submit">BUSCAR</button>

                    </form>
                  </div>
                </div>
              </nav>

        <br>
        <br><br>





            @yield('contenido')
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>





@section('title', 'Editar Práctica')

@section('content')
    <div class="container mt-5">
        <h1>Editar Práctica</h1>

        <form action="{{ route('practicas.update', $practice->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Especifica que es una actualización -->

            <div class="mb-3">
                <label for="tipo_proyecto" class="form-label">Tipo de Proyecto</label>
                <input type="text" class="form-control" id="tipo_proyecto" name="tipo_proyecto" value="{{ $practice->tipo_proyecto }}" required>
            </div>

            <div class="mb-3">
                <label for="grado" class="form-label">Grado</label>
                <input type="text" class="form-control" id="grado" name="grado" value="{{ $practice->grado }}" required>
            </div>

            <div class="mb-3">
                <label for="apellidos_nombres" class="form-label">Apellidos y Nombres</label>
                <input type="text" class="form-control" id="apellidos_nombres" name="apellidos_nombres" value="{{ $practice->apellidos_nombres }}" required>
            </div>

            <div class="mb-3">
                <label for="horas" class="form-label">Horas</label>
                <input type="number" class="form-control" id="horas" name="horas" value="{{ $practice->horas }}" required>
            </div>

            <div class="mb-3">
                <label for="docente" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente" name="docente" value="{{ $practice->docente }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar Práctica</button>
            <a href="{{ route('practicas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

