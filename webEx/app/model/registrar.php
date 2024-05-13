<?php
require_once('../../core/conexion.php');
include $_SERVER['DOCUMENT_ROOT'] . '/webEx/core/conexion.php';


function registrarUsuario($email, $password, $confirm_password) {
    global $conexion;
    
    if ($password != $confirm_password) {
        echo "Las contraseñas ingresadas no coinciden.";
        return;
    }

    $sql = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        echo "Error al preparar la consulta: " . $conexion->error;
        return;
    }

    $stmt->bind_param("ss", $email, $password);
    if (!$stmt->execute()) {
        echo "Error al registrar usuario: " . $stmt->error;
        return;
    }

    echo "Usuario registrado exitosamente.";
}

?>
