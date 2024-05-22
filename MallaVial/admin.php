<?php
session_start();

// Verificar si el usuario está autenticado como "admin"
if (isset($_SESSION['userType']) && $_SESSION['userType'] == 'admin') {
    // El usuario está autenticado como "admin", puedes incluir aquí el contenido específico para este tipo de usuario
    // echo "<h1>Bienvenido, Administrador</h1>";
    // echo "<p>Aquí puede ir el contenido específico para los administradores.</p>";
} else {
    // Si el usuario intenta acceder a esta página sin estar autenticado o si no tiene el rol correcto, redirigirlo al formulario de inicio de sesión
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administrador de la Malla Vial</title>
    <link rel="stylesheet" href="css/admin.css" />
</head>
<style>
    
    gmp-map {
        height: 100%;
    }

    
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
        <li><a href="index.php">Iniciar sesion</a></li>
        <li><a href="mapa.php">Mapa</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
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
    <a href="sobre_nosotros.php">Sobre_Nosotros</a>
</div>
</div>

<body style="background-image: url('imágenes/cartagena_2.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Rutas</a></li>
                <li><a href="#">Agregar Ruta</a></li>
                <li><a href="#">Modificar Ruta</a></li>
                <li><a href="#">Eliminar Ruta</a></li>
            </ul>
        </nav>

        <div id="content">
            <div id="mallaVialInfo">
                <h2>Editar Tabla de Carreteras</h1>
                <button onclick="agregarFila()">Agregar Fila</button>
                <table id="mallaVialTable">
                    <thead>
                        <tr>
                            <th>Nombre de la Carretera</th>
                            <th>Estado de la Carretera</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Las filas se agregarán aquí dinámicamente -->
                    </tbody>
                </table>
                
            </div>

            <div id="rutaForm" style="display: none;">
                <h2>Agregar/Modificar Ruta</h2>
                <form id="rutaFormulario" action="rutas.php" method="post">
                    <label for="nombreCarretera">Nombre de la Carretera:</label>
                    <input type="text" id="nombreCarretera" required>
                    <label for="estadoCarretera">Estado de la Carretera:</label>
                    <select id="estadoCarretera" required>
                        <option value="bueno">Bueno</option>
                        <option value="regular">Regular</option>
                        <option value="malo">Malo</option>
                    </select>
                    <input type="submit" value="Guardar">
                    <button onclick="cancelarEdicion()">Cancelar</button>
                </form>
            </div>
        </div>

        <footer>
            MR - MB - AD &copy; 2024
        </footer>
    </div>
</body>
</html>
