<?php 


    $host = "localhost";
    $dbname = "comunidad";
    $user = "consejo";
    $password = "c0n53j0";

    $conn = "mysql:host=".$host.";dbname=".$dbname;

    try {
        $conn = new PDO($conn, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexion establecida";
    } catch (PDOException $e) {
        echo "Error al establecer conexion" . $e->getMessage();
    }

    $sql = "SELECT * FROM edades WHERE edad>=60";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $row = $stmt->rowCount();

    $cantidad3 = $row;

    

?>