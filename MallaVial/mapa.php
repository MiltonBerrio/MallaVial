<?php

session_start();

// Verificar si el usuario está autenticado como "normal"
if (isset($_SESSION['userType']) && $_SESSION['userType'] == 'normal') {
    // El usuario está autenticado como "normal", puedes incluir aquí el contenido específico para este tipo de usuario
} else {
    // Si el usuario intenta acceder a esta página sin estar autenticado o si no tiene el rol correcto, redirigirlo al formulario de inicio de sesión
    header("Location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malla Vial de Cartagena</title>
    <link rel="stylesheet" href="css/mapa.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        gmp-map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Cerrar sesión</a></li>
            <li><a href="#ruta">Mapa</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="registro.php">Registro</a></li>
        </ul>
    </nav>
    <h1>Malla Vial de Cartagena</h1>
</header>

<div id="menuDesplegable">
    <button id="botonMenu">☰ Menú</button>
    <div id="contenidoMenu" class="oculto">
        <form id="rutaForm">
            <h2>Trazar Ruta</h2>
            <div class="form-group">
                <label for="origen">Origen:</label>
                <input type="text" id="origen" name="origen" required>
            </div>
            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" id="destino" name="destino" required>
            </div>
            <button type="submit">Trazar Ruta</button>
        </form>
        <a href="contacto.php">Contacto</a>
        <a href="registro.php">Registro</a>
        <a href="index.php">Login</a>
    </div>
</div>

<section id="inicio">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88796.19644335199!2d-75.55278264155139!3d10.399756019994408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef625e7ae9d1351%3A0xb161392e033f26ca!2sCartagena%20de%20Indias%2C%20Provincia%20de%20Cartagena%2C%20Bol%C3%ADvar%2C%20Colombia!5e0!3m2!1ses-419!2sdo!4v1716182915721!5m2!1ses-419!2sdo" width="100%" height="300%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<gmp-map center="10.423280715942383,-75.54125213623047" zoom="14" api-key="AIzaSyAvFdrkQ3AdTzJCyzDIWgLCug01Rx-KqfE">
    <gmp-advanced-marker position="10.423280715942383,-75.54125213623047" title="Mi ubicación"></gmp-advanced-marker>
</gmp-map>

<footer>
    <p>© 2024 Malla Vial de Cartagena by MR - MB - AD</p>
</footer>
<script>
    function initMap() {
        loadMap();
    }

    function loadMap() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 10.391049, lng: -75.479426 }, // Coordenadas de Cartagena
            zoom: 12, // Nivel de zoom
        });
        // Personaliza el mapa según tus necesidades
    }

    // Llama a la función initMap cuando se cargue la API
    window.initMap = initMap;

    document.getElementById('botonMenu').addEventListener('click', function() {
        var contenido = document.getElementById('contenidoMenu');
        if (contenido.classList.contains('oculto')) {
            contenido.classList.remove('oculto');
        } else {
            contenido.classList.add('oculto');
        }
    });
</script>
</body>
</html>
