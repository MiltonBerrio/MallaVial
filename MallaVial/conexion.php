<?php
// Archivo: conexion.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malla_vial";

try {
    $conex = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
