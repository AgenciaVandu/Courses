<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approved Course</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="max-w-xs overflow-hidden rounded-lg shadow-lg">
        <div class="px-6 py-4">
            <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">¡Tu curso ha sido aprovado!</h4>
            <p class="leading-normal text-gray-700">Hemos revisado el contenido del curso
                <strong>{{ $course->title }}</strong> y parece estar todo en orden, apartir de este momento se incluye
                en la vista de los cursos disponibles para todo nuestros estudiantes
            </p>
        </div>
    </div>
</body>

</html>
