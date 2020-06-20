<?php

require_once "../../controlador/Artista_BD.php";

$artista = new Artista_BD();

$artistaId = $_POST['idA'];

$artistaArchivo = '';

if(!is_dir('../img'))
	mkdir('../img');

if (isset($_POST['artista'])) {
	$artistaNombre = $_POST['artista'];
	$artista->setNombre($artistaNombre);
}

$archivo = $_FILES['selecciona_imagen'];


if(!empty($archivo['name'])){
	$artistaArchivo = $archivo['name'];
	move_uploaded_file($archivo['tmp_name'], '../img/'.$artistaArchivo);
	$artista->setArchivo($artistaArchivo);
}else{
	$artistaArchivo = $_POST['selecciona_imagenM'];
	$artista->setArchivo($artistaArchivo);
}




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

echo $artista->Modificar_Artista($artistaId);


?>