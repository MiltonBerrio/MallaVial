<?php
// Incluir la conexión a la base de datos
include 'conexion.php';

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y recibir datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $tipoDocumento = isset($_POST['tipoDocumento']) ? $_POST['tipoDocumento'] : '';
    $numeroDocumento = isset($_POST['numeroDocumento']) ? $_POST['numeroDocumento'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $userType = isset($_POST['userType']) ? $_POST['userType'] : '';

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Preparar la declaración SQL
        $stmt = $conex->prepare("INSERT INTO usuario (nombre, apellido, tipoDocumento, numeroDocumento, correo, fechaNacimiento, direccion, username, password, userType) VALUES (:nombre, :apellido, :tipoDocumento, :numeroDocumento, :correo, :fechaNacimiento, :direccion, :username, :password, :userType)");

        // Enlazar los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':tipoDocumento', $tipoDocumento);
        $stmt->bindParam(':numeroDocumento', $numeroDocumento);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':userType', $userType);

        // Ejecutar la declaración
        $stmt->execute();
        echo "<script>alert('Registro exitoso'); window.location.href='index.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href='registro.php';</script>";
    }

    // Cerrar la conexión
    $conex = null;
} else {
    echo "<script>alert('Método de solicitud no válido'); window.location.href='registro.php';</script>";
}
?>
