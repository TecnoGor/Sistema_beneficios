<?php

	include("../../model/connection.php");

	$user = $_REQUEST['user'];

	$sql = "SELECT count(*) as cantidad FROM usuarios WHERE usuario = :user;";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":user", $user);
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		$cantidad = $row->cantidad;
	}

	echo $cantidad;


?>