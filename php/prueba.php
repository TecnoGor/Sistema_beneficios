<?php 

	require '../html/index.php';
	$usuario = $_POST['usr'];
	$contraseña = $_POST['passwd'];

	$query = "SELECT * FROM usrs WHERE usr='$usuario' AND passwd='$contraseña'";
	$consultar = pg_query($connect_user,$query);
	$auth = pg_num_rows($consultar);

	if ($auth > 0) {
		$url = '../html/system.html';

		header("Location: $url");

		exit();
	} else {
		$url2 = '../html/index.php';

		header("Location: $url2");

		exit();
	}

?>