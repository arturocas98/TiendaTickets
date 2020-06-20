<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: cerrar.php");
	}else	
		header("location: Usuario/login.view.php");
 ?>