<?php
include 'BD.php'; // Asegúrate de que este archivo establece correctamente la conexión a la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y validar los datos del formulario
    $id_rol = intval($_POST['id_rol']); // Asegúrate de convertir a entero
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encriptar la contraseña
    $direccion = $_POST['direccion'] ?? null; // Opcional
    $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? null; // Opcional
    $telefono = $_POST['telefono'] ?? null; // Opcional
    
    // Preparar la consulta SQL
    $sql = "INSERT INTO Usuario (ID_rol, Nombre_de_Usuario, Correo, Contraseña, Direccion, Fecha_de_Nacimiento, Telefono) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Preparar la consulta
    if ($stmt = $conexion->prepare($sql)) {
        // Vincular parámetros
        $stmt->bind_param("issssss", $id_rol, $nombre_usuario, $correo, $contrasena, $direccion, $fecha_nacimiento, $telefono);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso";
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

