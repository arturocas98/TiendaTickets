<?php

	require_once "../../controlador/Artista_BD.php";

	$artistaNombre = $_POST['artista'];
	$archivo = $_FILES['selecciona_imagen'];
	$artistaArchivo = $archivo['name'];
	
	if(!is_dir('../../assets/img'))
		mkdir('../../assets/img');

	move_uploaded_file($archivo['tmp_name'], '../../assets/img/'.$artistaArchivo);

	$artista = new Artista_BD(1,$artistaNombre,$artistaArchivo,1);
	$artista->setNombre($artistaNombre);
	$artista->setArchivo($artistaArchivo);
	echo $artista->Guardar_Artista();

?>