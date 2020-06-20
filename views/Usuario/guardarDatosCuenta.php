<?php 

	require_once("../baseDatos.php");
	require_once("../forms/sesiones.php");
	require_once("../controlador/Usuario_BD.php");
	//$BD = new baseDatos
	$user = $_POST['nombreU'];
    $claveU = $_POST['contraU'];
	$claveCamb = $_POST['contraCambiar'];
	$claveConf = $_POST['contraConfirmar'];
	$pr = new Usuario_BD(1,$usuario,$claveCamb,2,1);
	$us = new Usuario_BD();
	$rows_Usuario = array();

    $rows_Usuario = $us->EnviarResultado();
	$error = "";
	$claveBase = null;
	
	if (empty($claveCamb) || empty($claveConf) || empty($user)) {
		$error .='Campos Vacíos.';
	}else{
		foreach ($rows_Usuario as $arreglo){
			$us = new Usuario($arreglo['u_id'],$arreglo['u_usuario'],$arreglo['u_clave'],$arreglo['u_tipo'],$arreglo['u_estado']);
		 	if($claveU == $us->getContrasena()){
		 		$claveBase = $us->getContrasena();
		 		break;
		 	}
		}
		if($claveCamb == $claveBase){
	 		$error .='La clave es la misma por favor cambiela';
	 	}else if(($claveCamb != $claveBase) && ($claveConf === $claveCamb)){
	 		$pr->setUsuario($user);
			$pr->setContrasena($claveCamb);
			$pr->Modificar_Usuario_Cuenta($usuario);
		}
		if($claveConf != $claveCamb) $error.= 'Las contraseñas no son iguales.';
	}
	echo $error;



 ?>