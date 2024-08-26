<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ciudadanos</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluir Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestión de Ciudadanos</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/nivelesacademicos">Niveles Académicos</a></li>
                <li class="nav-item"><a class="nav-link" href="/ciudadanos">Ciudadanos</a></li>
                <li class="nav-item"><a class="nav-link" href="/municipios">Municipios</a></li>
                <li class="nav-item"><a class="nav-link" href="/departamentos">Departamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="/regiones">Regiones</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Sección de contenido, donde se renderizarán las vistas -->
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Incluir jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
