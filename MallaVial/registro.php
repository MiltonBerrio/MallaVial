<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>

<div class="showcase">
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="send.php" name="Malla_Vial" method="post" id="registrationForm">
            <div class="form-group">
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellidos:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="tipoDocumento">Tipo de Documento:</label>
                <select id="tipoDocumento" name="tipoDocumento" required>
                    <option value="">Seleccione</option>
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                    <option value="PP">PP</option>
                    <option value="CE">CE</option>
                    <option value="RC">RC</option>
                    <option value="NIT">NIT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numeroDocumento">Número de Documento:</label>
                <input type="text" id="numeroDocumento" name="numeroDocumento" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group position-relative">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <span class="password-toggle" onclick="togglePasswordVisibility()">👁️</span>
            </div>
            <div class="form-group">
                <label for="userType">Tipo de Usuario:</label>
                <select id="userType" name="userType" required>
                    <option value="">Seleccione</option>
                    <option value="normal">Normal</option>
                    <option value="normal">Administrador</option>
                </select>
            </div>

            <div class="form-group" id="requestAdminContainer" style="display: none;">
                <button type="button" onclick="requestAdmin()">Solicitar registrarse como administrador</button>
            </div>

            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
            <div id="message"></div>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }

    document.getElementById("userType").addEventListener("change", function() {
        var userType = this.value;
        var requestAdminContainer = document.getElementById("requestAdminContainer");

        if (userType === "admin") {
            requestAdminContainer.style.display = "block";
        } else {
            requestAdminContainer.style.display = "none";
        }
    });

    function requestAdmin() {
        alert('Solicitud para registrarse como administrador enviada.');
    }
</script>

</body>
</html>
