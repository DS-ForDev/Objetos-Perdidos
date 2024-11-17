<?php
include 'BD.php'; // Asegúrate de que este archivo establece correctamente la conexión a la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el checkbox de Términos y Condiciones está marcado
    $ID_rol = isset($_POST['terms']) ? 2 : 1; // Si está marcado, rol = 2 (usuario), si no, rol = 1 (admin)

    // Recibir y validar los datos del formulario
    $Nombre_de_Usuario = trim($_POST['nombre']);
    $Correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $Contraseña = $_POST['contraseña']; // SIN Encriptar la contraseña// con encriptacion:$Contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $Direccion = isset($_POST['direccion']) ? trim($_POST['direccion']) : null; // Opcional
    $fecha_de_Nacimiento = isset($_POST['fechanacimiento']) ? $_POST['fechanacimiento'] : null; // Opcional
    $Telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : null; // Opcional
    
    // Validar correo electrónico
    if (!filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    // Verificar si el correo ya está registrado en la base de datos
    $sql_check = "SELECT COUNT(*) FROM Usuario WHERE Correo = ?";
    if ($stmt_check = $conexion->prepare($sql_check)) {
        $stmt_check->bind_param("s", $Correo);
        $stmt_check->execute();
        $stmt_check->bind_result($count);
        $stmt_check->fetch();
        $stmt_check->close();

        if ($count > 0) {
            echo "El correo electrónico ya está registrado.";
            exit;
        }
    }

    // Verificar si el ID_rol existe en la tabla 'roles'
    $sql_check_role = "SELECT COUNT(*) FROM roles WHERE ID_rol = ?";
    if ($stmt_role_check = $conexion->prepare($sql_check_role)) {
        $stmt_role_check->bind_param("i", $ID_rol);
        $stmt_role_check->execute();
        $stmt_role_check->bind_result($role_count);
        $stmt_role_check->fetch();
        $stmt_role_check->close();

        if ($role_count == 0) {
            echo "El ID de rol no existe.";
            exit;
        }
    }

    // Preparar la consulta SQL para insertar el nuevo usuario
    $sql = "INSERT INTO Usuario (ID_rol, Nombre_de_Usuario, Correo, Contraseña, Direccion, Fecha_de_Nacimiento, Telefono) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conexion->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("issssss", $ID_rol, $Nombre_de_Usuario, $Correo, $Contraseña, $Direccion, $fecha_de_Nacimiento, $Telefono);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>
                    alert('¡Registro exitoso! Ahora serás redirigido al inicio de sesión.');
                    window.location.href = 'login.php'; // Redirige a la página de inicio de sesión
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
