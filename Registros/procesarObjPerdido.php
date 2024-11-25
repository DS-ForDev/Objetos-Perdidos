<?php
session_start(); // Asegúrate de iniciar la sesión

// Verifica si el usuario está logueado
if (isset($_SESSION['nombre'])) {
    $usuario_id = $_SESSION['nombre'];
} else {
    // Si no está logueado, redirige o maneja el error
    echo "No estás logueado.";
    exit();
}



// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "objetosperdidos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar datos del formulario
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$color = isset($_POST['color']) ? $_POST['color'] : null;
$tamaño = isset($_POST['tamaño']) ? $_POST['tamaño'] : null;
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;

// Validar archivos
$foto1 = !empty($_FILES['foto1']['tmp_name']) ? $_FILES['foto1']['tmp_name'] : null;
$foto2 = !empty($_FILES['foto2']['tmp_name']) ? $_FILES['foto2']['tmp_name'] : null;
$foto3 = !empty($_FILES['foto3']['tmp_name']) ? $_FILES['foto3']['tmp_name'] : null;

// Usuario que realiza la acción (obtenido de la sesión)
$usuario_id = $_SESSION['nombre'];

// Preparar consulta SQL
$sql = "INSERT INTO objetos_perdidos (id, categoria, nombre, color, tamaño, descripcion, foto1, foto2, foto3) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issssssss", $id, $categoria, $nombre, $color, $tamaño, $descripcion, $foto1, $foto2, $foto3);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
