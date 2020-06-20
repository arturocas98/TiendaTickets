<?php 
//	require_once("../model/Usuario.php");
	require_once("../../controlador/Usuario_BD.php");
	
	session_start();
	$usuario = $_POST['usuario'];
	$clave1 = $_POST['clave1'];
	$clave2 = $_POST['clave2'];
	$pr = new Usuario_BD(1,$usuario,$clave1,2,1);
	$us = new Usuario_BD();

    $rows_Usuario = array();

    $rows_Usuario = $us->EnviarResultado();
	$error = "";
	$usuarioBase = null;
	
	if (empty($usuario) || empty($clave1) || empty($clave2)) {
		$error .='Campos Vacíos.';
	}else{
		foreach ($rows_Usuario as $arreglo){
			$us = new Usuario($arreglo['u_id'],$arreglo['u_usuario'],$arreglo['u_clave'],$arreglo['u_tipo'],$arreglo['u_estado']);
		 	if($usuario == $us->getUsuario()){
		 		$usuarioBase = $us->getUsuario();
		 		break;
		 	}
		}
		if($usuario == $usuarioBase){
	 		$error .='El usuario ya existe.';
	 	}else if(($usuario != $usuarioBase) && ($clave2 === $clave1)){
			 $pr->setUsuario($usuario);
			 $pr->setContrasena($clave1);
			 $pr->Guardar_Usuario();
			 $error = 1;

		}
		if($clave2 != $clave1) $error.= 'Las contraseñas no son iguales.';
	}
	echo $error;

	//require 'registrate.view.php';
?>