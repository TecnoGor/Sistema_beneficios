<?php

include("connection.php");

$cedula = $_REQUEST['txtCedula'];

$sql = "SELECT count(*) as cantidad FROM habitantes WHERE cedula = :cedula && tipo_habitante = 'Jefe de Familia';";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":cedula", $cedula);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
	$cantidad = $row->cantidad;
}

echo $cantidad;

?>