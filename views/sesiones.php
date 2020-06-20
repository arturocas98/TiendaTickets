<?php
	session_start();
  
    $bandInicio = 0; 
	  $usuario = null; 
    $tipo = null; 

    if(isset($_SESSION['usuario']) && isset($_SESSION['tipo']) && isset($_SESSION['clave'])){
      $usuario = $_SESSION['usuario'];
      $clave = $_SESSION['clave'];
      $tipo = $_SESSION['tipo'];
      
      $bandInicio = 1;
    }

    if(isset($_SESSION['cedula']))
      $cedula = $_SESSION['cedula'];
?>    