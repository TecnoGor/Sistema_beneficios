<?php
	include('clSystem.php');

	$objRgstr = new pSystem();
	$objRgstr->id_cl 					= $_POST['id'];
	$objRgstr->nom 						= $_POST['nom'];
	$objRgstr->snom 					= $_POST['snom'];
	$objRgstr->ced 						= $_POST['ced'];
	$objRgstr->fnac 					= $_POST['fnac'];
	$objRgstr->nacionalidad 			= $_POST['nacionalidad'];
	$objRgstr->e_civil					= $_POST['e_civil'];
	$objRgstr->casa 					= $_POST['nro_casa'];
	$objRgstr->cel 						= $_POST['cel'];
	$objRgstr->tipo_habitante 			= $_POST['t_habitante'];
	$objRgstr->discapacidad 			= $_POST['discapacidad'];
	$objRgstr->pensionado 				= $_POST['pensionado'];
	$objRgstr->sex 						= $_POST['sex'];


	$objRgstr->update();

	header('Location: system.php');
?>