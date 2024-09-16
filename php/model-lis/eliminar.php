<?php

  include('../../model/connection.php');

$id = $_REQUEST['upd'];

$consulta = "DELETE FROM usuarios WHERE id = $id;";

$stmt = $conn->prepare($consulta);
$stmt->execute();

header('Location: ../config.php');

?>
