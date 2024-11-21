<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['ID_usuario'])) {
    die("Acceso denegado: debes iniciar sesión para registrar un objeto perdido.");
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
$usuario_id = $_SESSION['usuario_id'];

// Preparar consulta SQL
$sql = "INSERT INTO objetos_perdidos (usuario_id, categoria, nombre, color, tamaño, descripcion, foto1, foto2, foto3) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issssssss", $usuario_id, $categoria, $nombre, $color, $tamaño, $descripcion, $foto1, $foto2, $foto3);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
