<?php

  include('../../model/connection.php');

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$password = MD5($_POST['password']);
$email = $_POST['email'];
$roles = $_POST['roles'];

$consulta = "UPDATE usuarios SET usuario = '$usuario', password = '$password', correo = '$email', roles = '$roles' WHERE id = $id;";

$stmt = $conn->prepare($consulta);
$stmt->execute();

header('Location: ../config.php');

?>
