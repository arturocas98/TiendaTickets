<?php 

	require_once("../sesiones.php");
	require_once("../../controlador/Usuario_BD.php");
	//$BD = new baseDatos();
   $usuario_bd = new Usuario_BD();

if (isset($_POST['cedula'])) {
	$cedula = $_POST['cedula'];
	$usuario_bd->setCedula($cedula);
}
if (isset($_POST['nombres'])) {
	$nombres = $_POST['nombres'];
	$usuario_bd->setNombres($nombres);
}
if (isset($_POST['apellidos'])) {
	$apellidos = $_POST['apellidos'];
	$usuario_bd->setApellidos($apellidos);
}
if (isset($_POST['correo'])) {
	$correo = $_POST['correo'];
	$usuario_bd->setCorreo($correo);
}
if (isset($_POST['telefono'])) {
	$telefono = $_POST['telefono'];
	
	$usuario_bd->setTelefono($telefono);
}
if (isset($_POST['direccion'])) {
	$direccion = $_POST['direccion'];
	$usuario_bd->setDireccion($direccion);
}
	

	if(!is_dir('../../assets/img'))
		mkdir('../../assets/img');

if (isset($_FILES['archivo'])) {
	$archivo = $_FILES['archivo'];
}	
	


if(!empty($archivo['name'])){
	$usuarioArchivo = $archivo['name'];
	move_uploaded_file($archivo['tmp_name'], '../../assets/img/'.$usuarioArchivo);
	$usuario_bd->setArchivo($usuarioArchivo);
}
	
	
	/*$usuario_bd->setCedula($cedula);
	
	$usuario_bd->setNombres($nombres);

	$usuario_bd->setApellidos($apellidos);

	$usuario_bd->setCorreo($correo);

	$usuario_bd->setTelefono($telefono);

	$usuario_bd->setDireccion($direccion);

	$usuario_bd->setArchivo($archivoN);*/
	//echo $usuario ;
	$usuario_bd->Modificar_Usuario($usuario);


 ?>