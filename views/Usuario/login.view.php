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
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="../../assets/estilos/estilos.css">
	<script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/ajax.js"></script>
	<title>Iniciar Sesión</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		
		<hr class="border">

		<form class="formulario" name="login" id="login" method="POST">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="clave" placeholder="contraseña">
				<i class="submit-btn fa fa-arrow-right" id="bt_login" name="bt_login"></i>
			</div>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		

		<p class="texto-registrate">
			¿ Aun no tienes cuenta ?
			<a href="registrate.view.php">Regístrate</a>
		</p>

	</div>
</body>
</html>