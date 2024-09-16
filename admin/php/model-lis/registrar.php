<?php
include('../../model/connection.php');

$usuario = $_POST['usuario'];
$password = MD5($_POST['password']);
$email = $_POST['email'];
$roles = $_POST['roles'];

$consulta = "INSERT INTO usuarios (usuario, password, correo, roles) VALUES ('$usuario', '$password', '$email', '$roles');";

$stmt = $conn->prepare($consulta);
$stmt->execute();

header('Location: ../config.php');

?>