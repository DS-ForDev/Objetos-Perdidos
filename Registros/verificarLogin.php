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
$Correo = $_POST['correo'];  // Debe coincidir con el name del campo de correo en el formulario
$Contraseña = $_POST['contraseña'];  // Debe coincidir con el name del campo de contraseña

// Consulta para verificar el correo y la contraseña
$sql = "SELECT * FROM usuario WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $Correo);
$stmt->execute();
$result = $stmt->get_result();

// Validación del usuario
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verificar la contraseña en texto plano
    if ($Contrasena == $user['contraseña']) {
        $_SESSION['user_id'] = $user['id']; // Guardar el ID del usuario en la sesión
        $_SESSION['correo'] = $user['correo'];  // Guardar el correo del usuario en la sesión
        echo '<script>alert("Iniciaste Sesión"); window.location.href="../carousel/index.php";</script>';
   
 // Redireccionar al usuario al inicio
        exit();
    } else {
        // Mensaje de error si la contraseña es incorrecta
        echo '<script>alert("Contraseña incorrecta"); window.location.href="login.php";</script>';
    }

} else {
    // Mensaje de error si el correo no está registrado
    echo '<script>alert("Correo no registrado"); window.location.href="login.php";</script>';
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
