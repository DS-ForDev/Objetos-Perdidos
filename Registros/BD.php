<?php
$servidor = "localhost";
$usuario = "tu_usuario";
$contrasena = "tu_contrasena";
$basedatos = "tu_base_de_datos";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
