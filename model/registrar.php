<?php
      print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtCedula"]) || empty($_POST["txtFecha"]) || empty($_POST["txtCantidad"]) || empty($_POST["txtBeneficio"]) || empty($_POST["txEntrega"])){
        
    }

    include_once 'conexion.php';
    $Cedula = $_POST["txtCedula"];
    $Fecha = $_POST["txtFecha"];
    $Cantidad = $_POST["txtCantidad"];
    $Beneficio = $_POST["txtBeneficio"];
    $Entrega = $_POST["txEntrega"];
    
    $sentencia = $bd->prepare("INSERT INTO entrega(cedula,fecha,cantidad,beneficio,entrega) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$Cedula,$Fecha,$Cantidad,$Beneficio,$Entrega]);

    if ($resultado === TRUE) {
        header('Location: ../php/services.php?mensaje=registrado');
    } else {
        header('Location: ../php/services.php?mensaje=error');
        exit();
    }
    
?>