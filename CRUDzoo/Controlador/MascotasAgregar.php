<?php
	require('../Modelo/Mascota.php');
	require('../BD/Conexion.php');

	$conexion = new Conexion();
	$mascota = new Mascota();

	$mascota->agregar($conexion, $_POST['nombre'], $_POST['edad'], $_POST['raza'], $_POST['sexo'], $_POST['dueno']);
	header('Location:../index.php');
?>