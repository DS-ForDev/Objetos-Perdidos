<?php
session_start();

// Conexión a la base de datos
$host = "localhost"; // Cambia esto según tu configuración
$user = "root";
$password = "";
$database = "objetosperdidos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar el correo y la contraseña
$sql = "SELECT * FROM usuario WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

// Validación del usuario
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verificar la contraseña encriptada
    if (password_verify($contrasena, $user['contraseña'])) {
        $_SESSION['user_id'] = $user['id']; // Guardar el ID del usuario en la sesión
        $_SESSION['correo'] = $user['correo'];
        header("Location: index.php"); // Redireccionar al usuario al inicio
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Correo no registrado";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
