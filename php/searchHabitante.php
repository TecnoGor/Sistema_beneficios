<?php

	include('../model/connection.php');

	$buscar = $_REQUEST['buscar'];

	$sql = "SELECT count(*) as cantidad FROM habitantes WHERE cedula=:buscar || nombres=:buscar || apellidos=:buscar";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":buscar", $buscar);
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		$cantidad = $row->cantidad;
	}

	echo $cantidad;
?>