<?php

include '../model/registrar.php';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

registrarUsuario($email, $password, $confirm_password);
?>