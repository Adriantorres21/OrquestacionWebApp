<?php
	require('Modelo/Mascota.php');
	require('BD/Conexion.php');

	$conexion = new Conexion();
	$mascota = new Mascota();

	$tabla = $mascota->listar($conexion);
?>