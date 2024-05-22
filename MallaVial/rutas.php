<?php
include 'db_connect.php';

// Operaciones CRUD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombreCarretera'];
    $estado = $_POST['estadoCarretera'];
    $accion = $_POST['accion'];

    if ($accion == 'agregar') {
        $sql = "INSERT INTO carreteras (nombre, estado) VALUES ('$nombre', '$estado')";
    } elseif ($accion == 'modificar') {
        $id = $_POST['id'];
        $sql = "UPDATE carreteras SET nombre='$nombre', estado='$estado' WHERE id=$id";
    } elseif ($accion == 'eliminar') {
        $id = $_POST['id'];
        $sql = "DELETE FROM carreteras WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Operación realizada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>