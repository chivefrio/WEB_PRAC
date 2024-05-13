<?php

require_once(__DIR__ . '/../config/config.php');

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos, 3308);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>