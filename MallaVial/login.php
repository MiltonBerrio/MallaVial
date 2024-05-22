<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir la conexión a la base de datos
    include 'conexion.php';
    
    // Recibir los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Buscar el usuario en la base de datos por su correo electrónico
    $stmt = $conex->prepare("SELECT id, correo, password, userType FROM usuario WHERE correo = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Iniciar sesión y redirigir al usuario según su tipo
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['correo'];
            $_SESSION['userType'] = $user['userType'];
            
            // Redirigir al usuario a una página según su tipo de usuario
            if ($user['userType'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: mapa.php");
            }
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('Correo electrónico no encontrado');</script>";
    }
} else {
    // Si no se envió el formulario, redirigir de nuevo al formulario de inicio de sesión
    header("Location: login.html");
    exit;
}
?>

