<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primaria - IE San José</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/css/primaria.css">
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Institución Educativa San José</h1>
            <p class="lead">Formando el futuro rural de Colombia con excelencia y valores</p>
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registroModal">
                ¡Inscribe a tu hijo ahora!
            </button>
        </div>
    </div>

    <!-- Sección de Niveles Educativos -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Nuestros Niveles Educativos</h2>
        <div class="row">
            <!-- Pre Jardín -->
            <div class="col-md-4">
                <div class="card grado-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Pre Jardín">
                    <div class="card-body">
                        <h3 class="card-title">Pre Jardín (3 años)</h3>
                        <p class="card-text">Iniciamos el maravilloso viaje del aprendizaje con:</p>
                        <ul>
                            <li>Desarrollo motriz y sensorial</li>
                            <li>Primeros pasos en socialización</li>
                            <li>Exploración del entorno rural</li>
                            <li>Actividades lúdicas y creativas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Jardín -->
            <div class="col-md-4">
                <div class="card grado-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Jardín">
                    <div class="card-body">
                        <h3 class="card-title">Jardín (4 años)</h3>
                        <p class="card-text">Fortalecemos habilidades básicas:</p>
                        <ul>
                            <li>Pre-lectura y pre-escritura</li>
                            <li>Desarrollo del pensamiento lógico</li>
                            <li>Habilidades sociales</li>
                            <li>Contacto con la naturaleza</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Primaria -->
            <div class="col-md-4">
                <div class="card grado-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Primaria">
                    <div class="card-body">
                        <h3 class="card-title">Primaria (6-11 años)</h3>
                        <p class="card-text">Educación integral con énfasis en:</p>
                        <ul>
                            <li>Competencias básicas</li>
                            <li>Proyectos agrícolas escolares</li>
                            <li>Tecnología e innovación</li>
                            <li>Valores y convivencia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enfoque Rural -->
    <div class="container">
        <div class="rural-emphasis">
            <h3>Educación Rural de Calidad</h3>
            <p class="lead">Nuestro modelo educativo integra el contexto rural con la excelencia académica:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Huerta escolar pedagógica</li>
                        <li>Proyectos ambientales</li>
                        <li>Valoración de la cultura local</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Tecnología adaptada al campo</li>
                        <li>Alimentación saludable</li>
                        <li>Participación comunitaria</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Valores y Características -->
    <section class="valores-section">
        <div class="container">
            <h2 class="text-center mb-5">¿Por qué elegirnos?</h2>
            <div class="row">
                <div class="col-md-3 text-center mb-4">
                    <div class="icon-box">🌱</div>
                    <h4>Educación Ambiental</h4>
                    <p>Fomentamos el amor y cuidado por la naturaleza</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="icon-box">👥</div>
                    <h4>Grupos Reducidos</h4>
                    <p>Atención personalizada para cada estudiante</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="icon-box">🎯</div>
                    <h4>Metodología Activa</h4>
                    <p>Aprendizaje basado en proyectos y experiencias</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="icon-box">🤝</div>
                    <h4>Comunidad Educativa</h4>
                    <p>Integración familia-escuela-comunidad</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Registro -->
    <div class="modal fade" id="registroModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Solicitud de Información / Registro</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="custom-form">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre del Acudiente</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre del Estudiante</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Edad del Estudiante</label>
                                <input type="number" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Grado de Interés</label>
                            <select class="form-select" required>
                                <option value="">Seleccione un grado</option>
                                <option value="prejardin">Pre Jardín</option>
                                <option value="jardin">Jardín</option>
                                <option value="primaria">Primaria</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensaje o Consulta</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar Solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
