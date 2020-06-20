<?php 

	require_once("../sesiones.php");
	require_once("../../controlador/Usuario_BD.php");
	//$BD = new baseDatos();
   $usuario_bd = new Usuario_BD();

if (isset($_POST['clave'])) {
	$clave = $_POST['clave'];
	$usuario_bd->setContrasena($clave);
}
	echo $usuario_bd->Modificar_UsuarioC($usuario);



 ?>