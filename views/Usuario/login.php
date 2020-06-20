<?php 
	require_once("../sesiones.php");
	include('../../model/Usuario.php');
    include('../../controlador/Usuario_BD.php');
   

    $usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$pr = new  Usuario_BD();
	$rows_Usuarios = array();
	$rows_Usuarios = $pr->EnviarResultado();  
	$resultado = 0;
	if (isset($_SESSION['usuario'])) {
		header('Location: ../enviar.php');
		die();
	}else{	
		foreach ($rows_Usuarios as $arreglo) {
			$us = new Usuario($arreglo['u_id'],$arreglo['u_usuario'],$arreglo['u_clave'],$arreglo['u_tipo'],$arreglo['u_estado']);

			if($us->getUsuario() == $usuario && $us->getContrasena() == $clave){
				$_SESSION['usuario'] = $usuario;
				$_SESSION['tipo'] = $us->getTipo();
				$_SESSION['clave'] = $us->getContrasena();
				$resultado = 1;
			}	
		}
	}	

	echo $resultado;
	
 ?>