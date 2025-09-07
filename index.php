<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página en PHP</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos propios -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de navegación Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Web</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido a mi página con PHP</h1>
        <p class="text-center">
            <?php 
                echo "Hoy es " . date("d/m/Y") . " y la hora actual es " . date("H:i");
            ?>
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
