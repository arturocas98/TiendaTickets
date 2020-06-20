<?php
	session_start();
	require_once("../../controlador/Cliente_BD.php");
	//$BD = new baseDatos();
    
	$cedula = $_POST['cedula'];
	if(!isset($_SESSION['cedula'])){
		$_SESSION['cedula'] = $cedula;
	}
	$primerN = $_POST['primerN'];
	$segundoN = $_POST['segundoN'];
	$primerA = $_POST['primerA'];
	$segundoA = $_POST['segundoA'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$edad = $_POST['edad'];
	$direccion = $_POST['direccion'];

	//$pr = new Cliente_BD();
	$pr = new Cliente_BD(/*1,$cedula,$primerN,$segundoN,$primerA,$segundoA,$email,$phone,$edad,$direccion,1*/);
	$pr->setCedula($cedula);
	$pr->setPrimerNombre($primerN);
	$pr->setSegundoNombre($segundoN);
	$pr->setPrimerApellido($primerA);
	$pr->setSegundoApellido($segundoA);
	$pr->setCorreo($email);
	$pr->setTelefono($phone);
	$pr->setEdad($edad);
	$pr->setDireccion($direccion);

	//$prod->setCedula($cedula);

	//$sql = "insert into cliente (c_cedula,c_primerN,c_segundoN,c_primerA,c_segundoA,c_correo,c_telef,c_edad,c_direccion) values ('$cedula','$primerN','$segundoN','$primerA','$segundoA','$email','$phone','$edad','$direccion')";


	//echo $BD->consulta($sql);
	echo $pr->Guardar_Cliente();
?>