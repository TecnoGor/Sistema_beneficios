<?php
	/*echo "Hola";


	$host = "localhost";
	$dbname = "comunidad"
	$usrname = "consejo";
	$psswd = "c0n53j0";

	$dsn = "mysql:host=".$host.";dbname=".$dbname;

			try {
				$conn = new PDO($dsn, $usrname, $psswd);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
				echo "Conexion Exitosa";
			} catch (PDOException $e) {
				echo "Error al establecer conexion" . $e->getMessage();
			}*/


//	try {
/*
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "conexion establecida";
		} catch (PDOException $e) {
			echo 'Error al establecer la conexion' . $e->getMessage();
		}
	*/



	class Conexion{
		private $host = 'localhost';
		private	$dbname = 'comunidad';
		private	$usrname = 'consejo';
		private	$psswd = 'c0n53j0';

		private $conn;

		public function connect(){
			$dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

			try {
				$this->conn = new PDO($dsn, $this->usrname, $this->psswd);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->conn;
			} catch (PDOException $e) {
				echo "Error al establecer conexion" . $e->getMessage();
			}
		}

		public function dsconnect(){
			$this->conn=null;
		}
	}

?>

