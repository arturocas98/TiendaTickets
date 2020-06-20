<?php
require_once "../../model/Artista.php";
require_once "../../controlador/Evento_BD.php";

$evento = new Evento_BD();

$eventoId = $_POST['idE'];


	$lugar = $_POST['lugar'];
	$ciudad = $_POST['ciudad'];
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

	echo $evento->Modificar_Evento($eventoId);
	

	
/*
	$evento->setLugar($lugar);
	$evento->setCiudad($ciudad);
	$evento->setFecha($fecha);
	$evento->setHora($hora);


	$evento->setArtista($art);
*/
/*MALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL*/
/*$archivo = $_FILES['selecciona_imagen'];


if(!empty($archivo['name'])){
	$artistaArchivo = $archivo['name'];
	move_uploaded_file($archivo['tmp_name'], '../img/'.$artistaArchivo);
	$artista->setArchivo($artistaArchivo);
}else{
	$artistaArchivo = $_POST['selecciona_imagenM'];
	$artista->setArchivo($artistaArchivo);
}

*/


/*
if(empty($_FILES['selecciona_imagen'])){
	$artistaArchivo = $_POST['selecciona_imagenM'];
	$artista->setArchivo($artistaArchivo);	
}else{ 
	echo "entro";
	$archivo = $_FILES['selecciona_imagen'];
	$artistaArchivo = $archivo['name'];
	move_uploaded_file($archivo['tmp_name'], '../img/'.$artistaArchivo);
	$artista->setArchivo($artistaArchivo);
}*/


?>