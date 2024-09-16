<?php 
    if(!isset($_GET['codigo'])){
        header('Location: ../php/services.php?mensaje=error');
        exit();
    }

    include 'conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM entrega where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ../php/services.php?mensaje=eliminado');
    } else {
        header('Location: ../php/services.php?mensaje=error');
    }
    
?>