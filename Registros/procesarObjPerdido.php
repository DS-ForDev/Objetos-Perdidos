<?php
session_start(); // Asegúrate de iniciar la sesión

// Verifica si el usuario está logueado
if (isset($_SESSION['nombre'])) {
    $usuario_id = $_SESSION['nombre'];
} else {
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
$tamaño = isset($_POST['tamano']) ? $_POST['tamano'] : null;
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;

// Directorio de subida
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true); // Crea el directorio si no existe
}

// Función para procesar y guardar las imágenes
function uploadImage($file, $uploadDir) {
    if (!empty($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION); // Obtén la extensión
        $allowed = ['jpg', 'jpeg', 'png', 'gif']; // Tipos permitidos

        if (in_array(strtolower($ext), $allowed)) {
            $newFileName = uniqid("img_", true) . '.' . $ext; // Genera un nombre único
            $destination = $uploadDir . $newFileName;

            if (move_uploaded_file($file['tmp_name'], $destination)) {
                return $destination; // Retorna la ruta si se guardó correctamente
            }
        }
    }
    return null; // Retorna null si no se pudo guardar
}

// Guardar las imágenes
$foto1 = uploadImage($_FILES['foto1'], $uploadDir);
$foto2 = uploadImage($_FILES['foto2'], $uploadDir);
$foto3 = uploadImage($_FILES['foto3'], $uploadDir);

// Preparar consulta SQL
$sql = "INSERT INTO objetos_perdidos (categoria, nombre, color, tamaño, descripcion, foto1, foto2, foto3) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $categoria, $nombre, $color, $tamaño, $descripcion, $foto1, $foto2, $foto3);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
