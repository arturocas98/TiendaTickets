<?php

	require_once "../../model/Artista.php";
	require_once "../../controlador/Evento_BD.php";


	$lugar = $_POST['lugar'];
	$ciudad = $_POST['ciudad'];
	//$Nueva = date('d-m-Y', strtotime($_POST['fecha']));
/*	$fecha = date('Y-m-d', strtotime($_POST['fecha']));
	$hora = date('H:i:s', strtotime($_POST['hora']));*/
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];

	$artistaId = $_POST['select_artistas'];
	$evento = new Evento_BD();
	$artista = new Artista($artistaId, '', '',1);
	$evento->setLugar($lugar);
	$evento->setCiudad($ciudad);
	$evento->setFecha($fecha);
	$evento->setHora_Inicio($hora);
	$evento->setArtista($artista);
	echo $evento->Guardar_Evento();

?>