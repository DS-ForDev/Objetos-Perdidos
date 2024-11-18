<?php
session_start();

// Conexión a la base de datos
include 'BD.php';

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$Correo = $_POST['correo'];  // Debe coincidir con el name del campo de correo en el formulario
$Contrasena = $_POST['contraseña'];  // Debe coincidir con el name del campo de contraseña

// Consulta para verificar el correo y la contraseña
$sql = "SELECT * FROM usuario WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $Correo);
$stmt->execute();
$result = $stmt->get_result();

// Validación del usuario
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verificar la contraseña en texto plano
    if ($Contrasena == $user['Contraseña']) {
        $_SESSION['nombre'] = $user['Nombre_de_Usuario']; // Guardar el nombre del usuario en la sesión
        $_SESSION['correo'] = $user['Correo'];  // Guardar el correo del usuario en la sesión
        
        // Aquí se guarda el nombre del usuario en la sesión
        $_SESSION['nombre'] = $user['Nombre_de_Usuario']; // Cambia 'nombre_de_usuario' al nombre correcto de tu columna

        echo '<script>alert("Iniciaste Sesión"); window.location.href="../carousel/Bienvenida.php";</script>';

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
