
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión - Agropecuaria San José</title>
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
            background-image: url('https://example.com/hojas.png'); /* Cambia esto por una imagen de hojas */
            background-size: cover;
            background-position: center;
            color: white; /* Color del texto dentro del cuadro */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Visión de la Institución Educativa Agropecuaria San José</h1>

        <div class="cuadro">
            <h2>Visión</h2>
            <p>La visión de la Institución Educativa Agropecuaria San José es ser reconocida como una entidad líder en la formación integral de profesionales en el ámbito agropecuario, que contribuyan al desarrollo sostenible y al bienestar de la comunidad, promoviendo una educación innovadora y de alta calidad que responda a las necesidades del entorno.</p>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
