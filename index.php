<?php 
	require_once("views/sesiones.php");
 ?>



<!DOCTYPE html>
<html lang= "es"> 

	<head>
		<meta charset="UTF-8">
    <title>Tickets de Conciertos</title>
    <meta name="viewport" content="width-device-width , initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/estilos/quienes_somos.css">
    <link rel="stylesheet" href="assets/estilos/normalize.css">
    <link rel="stylesheet" href="assets/estilos/productos.css">
   
    <link rel="stylesheet" href="assets/estilos/acerca_de.css">
    <script src="assets/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="assets/estilos/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/sesiones.js"></script>
    <script src="assets/js/carrito.js"></script>
    <script src="assets/js/productos.js"></script>
		<meta charset="UTF-8">
		<title> Inicio </title>
		<link rel="shortout icon" href="assets/img/emagic_f.png"/>
    	
    	<audio autoplay src="assets/img/MusicaFondo.mp3"></audio>
	</head>
	
	
	<body>
		<header id="principio">
			<div class=" contenedor">
				<div id="navegador">
			        <nav class="menu"> 
			          <div class="contenedor-busqueda">
                        <form  id="busquedaA" name="busquedaA">
                        <input id="artistaB" name="artistaB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
                        <button id="cerrar" name="cerrar"><img src="assets/img/cerrar.png"></button>
                         </form>

                        <div class="result" id="resultado">
                            <!--Artista<ul id="artistaR"></ul>-->
                            Evento<ul id="eventoR"></ul>
                        </div>
                    
                    </div>
                    <div id="nav">
                        <a href ="index.php">Inicio</a>
                        <a href ="views/Artista/productos.php">Productos</a>
                        <a href ="views/Artista/acerca_de.php">Acerca de</a>
                        <?php include("views/Carrito/abrirCarrito.php");?>
                        


                    </div>
			        </nav>
		        </div>
				<div class="contenedor-texto">
					<div class="texto">
						<h1 class="nombre_empresa">EMAGYC</h1>
						<h2 class="slogan">¡Vive el momento!</h2>
					</div>
				</div>
		    </div>	
		</header>

		<main>
			<section class="main">
				<section id="historia" class="historia">
					<div class="contenedor">
						<div class="imagen1">
							<div class="foto">
	                        <img src="assets/img/emagic_f.png" width="115"alt="emagic">
	                   	</div>
	                   
						<div class="texto">
							<h3 class="titulo">HISTORIA</h3>
							<p>Somos una empresa 100% Ecuatoriana, fundada en la ciudad de Guayaquil en el año 2019.
							El inicio de operaciones de EMAGYC, que fue lanzada el sabado 22 de Junio del 2019, se conjugó con el crecimiento del entretenimiento en vivo, conciertos, musicales, obras de teatro, talleres, exposiciones y partidos de futbol.
							EMAGYC opera en toda la República, proveyendo a través de: www.emagyc.com.ec, la venta y distribución de boletos, en uno de los sitios de comercio electrónico más grandes en Internet, por medio de sus puntos de venta distribuidos a lo largo de todo el país y por medio de nuestro Centro Telefónico.
							</p>
						</div>	
					</div>
				</section>

				<section id="Dueños" class="Dueños">
					<div class="contenedor">
						<h3 class="titulo">DUEÑOS</h3>
						<div class="contenedor-dueños">
							<div class="Dueño">
	                           <div class="thumb">
	                               <img src="assets/img/arturo.jpg" alt="lorem ipsum">
	                           </div>
	                           <div class="descripcion">
	                               <p class="nombre"><em>Arturo Castro</em></p>
	                               <p class="categoria">Estudiante de la UG</p>
	                           </div>
	                       </div>  
	                      
		                    <div class="Dueño">
	                           <div class="thumb">
	                               <img src="assets/img/johanna.jpg" alt="lorem ipsum">
	                           </div>
	                           <div class="descripcion">
	                               <p class="nombre"><em>Johanna Cabrera</em> </p>
	                               <p class="categoria">Estudiante de la UG</p>
	                           </div>
	                        </div> 
                       
	                       <div class="Dueño">
	                           <div class="thumb">
	                               <img src="assets/img/carlos.jpg" alt="lorem ipsum">
	                           </div>
	                           <div class="descripcion">
	                               <p class="nombre"><em>Carlos Sánchez</em></p>
	                               <p class="categoria">Estudiante de la UG</p>
	                           </div>
	                       </div> 

	                       <div class="Dueño">
	                           <div class="thumb">
	                               <img src="assets/img/javier.jpg" alt="lorem ipsum">
	                           </div>
	                           <div class="descripcion">
	                               <p class="nombre"><em>Javier Lindao</em> </p>
	                               <p class="categoria">Estudiante de la UG</p>
	                           </div>
	                        </div> 
                       		<div class="descripcion">
                       			<p class="titulo">Somos líderes en la venta de boletos. Miles de personas alrededor del mundo nos visitan diariamente. Compra tus tickets en EMAGYC ahora!</p>
                           </div>
	                    </div> 
				</section>

				<section id="Mision" class="Mision">
					<div class="contenedor">				
						<div class="texto">
							<h3 class="titulo nombre_empresa ">MISIÓN</h3>
							<p>Nuestra misión brindar servicio de impresión de tickets, venta y control de
							acceso para eventos a nivel nacional de una manera ágil y transparente. Contamos con el servicio de venta en línea que permite a nuestros clientes adquirir sus tickets a través de nuestro sitio web con envio a domicilio dentro del país.
							Mantenernos como la empresa líder en venta y distribución de boletaje, consolidando la excelencia en servicio y calidad a través de tecnología de vanguardia y productos innovadores, apoyados en el bienestar y valores de nuestros colaboradores, identificando, valorando y superando las expectativas de nuestros clientes para aumentar la rentabilidad y lealtad hacia la empresa.</p>
						</div>	
					</div>
				</section>
			
				<section id="Vision" class="Vision">
					<div class="contenedor">
						<div class="texto" >
							<h3 class="titulo">VISIÓN</h3>
							<p> <strong>¿Qué? </strong> Mantenernos como la empresa líder en comercialización de boletaje de entretenimiento y generar nuevos servicios y procesos que aumenten la rentabilidad de la empresa, la calidad y lograr la excelencia en el servicio.</p>
							<p> <strong>¿Cómo?</strong>  A través de la propuesta y ejecución de excelentes productos, servicios y herramientas enfocados en darle valor agregado al cliente y consumidor anticipándonos a sus expectativas, con un equipo de trabajo que viva nuestros valores y cuyo objetivo sea la excelencia en el trabajo.</p>
							<p><strong>¿Por qué? </strong>Nuestra razón de ser son los clientes, la sociedad y la empresa.</p>
							<p><strong>¿Cuándo?</strong> Todos los días.</p>
						</div>
					</div>
				</section>	
			</section>
	 	</main>
    	<?php
        	include("views/footer.html");          
      	?>

      	<script type="text/javascript">
	      var band = '<?php echo $bandInicio;?>';
	      var usuario = '<?php echo $usuario;?>';
	      var tipo = '<?php echo $tipo;?>';
	    </script>
	</body>

</html>

