<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Institución Educativa Agropecuaria</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-100">
    <div class="container mx-auto p-6">
        <header class="bg-white shadow-md rounded-lg p-4 mb-6">
            <h1 class="text-3xl font-bold text-center text-green-700">Bienvenido a la Institución Educativa Agropecuaria</h1>
            <p class="text-center text-gray-600">Tu espacio para aprender y crecer en el ámbito agropecuario.</p>
        </header>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-600">Últimas Noticias</h2>
                <p class="text-gray-700">Mantente informado sobre las últimas novedades y eventos en nuestra institución.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-600">Cursos Disponibles</h2>
                <p class="text-gray-700">Explora nuestros cursos y programas educativos en el área agropecuaria.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-600">Recursos Educativos</h2>
                <p class="text-gray-700">Accede a materiales y recursos que te ayudarán en tu aprendizaje.</p>
            </div>
        </section>
    </div>
</body>
</html>
