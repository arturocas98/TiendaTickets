<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: ../enviar.php');
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../assets/estilos/estilos.css">

    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/ajax.js"></script>
	<title>Crea una cuenta</title>

</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Regístrate</h1>
		
		<hr class="border">

		<form class="formulario" id="login" name="login" method="post">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" id="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="clave1" id="clave1" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="clave2" id="clave2" placeholder="Repite la contraseña">
				<i class="submit-btn fa fa-arrow-right" id="bt_registrar" name="bt_registrar"></i>
				<!--<button id="bt_registrar" name="bt_registrar" class="contact100-form-btn  btnSubirF btn-green"  >
            Registrar
          </button>-->
				<!--onclick="login.submit()"-->
			
			</div>

			<ul class="error" id="error"></ul>
		</form>

		<p class="texto-registrate">
			¿ Ya tienes cuenta ?
			<a href="login.view.php">Iniciar Sesión</a>
		</p>

	</div>
	<script src="../../assets/js/formulario.js"></script>
</body>
</html>