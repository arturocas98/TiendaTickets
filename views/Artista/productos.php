<?php 
    require_once("../sesiones.php");
    include('../../model/Artista.php');
    include('../../controlador/Artista_BD.php');
    //include('recibirEventos.php');
     
    $BD = new baseDatos();

    //$pr = new Artista_BD(15, 'Ed Sheeran', 1);
    //$pr = new Producto_BD
 //   $productos = $BD->consulta("select * from productos where pro_estado=1");
 //   $filas = $BD->num_filas($productos);

  //  $pr->Guardar_Producto();
    $pr = new Artista_BD();

    $rows_Artistas = array();

    $rows_Artistas = $pr->Enviar_Resultado();


 ?>


<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<title>Tickets de Conciertos</title>
    <meta name="viewport" content="width-device-width , initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/estilos/normalize.css">

   
    <link rel="stylesheet" href="../../assets/estilos/acerca_de.css">
     <link rel="stylesheet" href="../../assets/estilos/productos.css">
    <script src="../../assets/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="../../assets/estilos/bootstrap.min.css">
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/productos.js"></script>
    <script src="../../assets/js/sesiones.js"></script>
    <script src="../../assets/js/carrito.js"></script>

</head>
<body>
	<header>
		<div class="contenedor">
			
			<div id="navegador">	
				
		        <nav class="menu">

	        		<div class="contenedor-busqueda">
						<form  id="busquedaA" name="busquedaA">
						<input id="artistaB" name="artistaB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
						<button id="cerrar" name="cerrar"><img src="../../assets/img/cerrar.png"></button>
				  		 </form>

				  		<div class="result" id="resultado">
					   		<!--Artista<ul id="artistaR"></ul>-->
					   		Evento<ul id="eventoR"></ul>
					 	</div>
			        
					</div>
					<div id="nav">
						<a href ="../../index.php">Inicio</a>
				        <a href ="productos.php">Productos</a>
				        <a href ="acerca_de.php">Acerca de</a>
						<?php include("../Carrito/abrirCarrito.php");?>
						


					</div>

					
		         
		        </nav>
        	</div>

			<div class="contenedor-texto ">
				<div class="texto">
					<h1 class="nombre_empresa">EMAGYC</h1>
					<h2 class="slogan">¡Vive el momento!</h2>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section class="logo" id="productos">
           <div class="contenedor">
               <div class="foto">
                    <img src="../../assets/img/emagic_f.png" width="115"alt="emagic">
               </div>
               <div class="texto">
                   <h3 class="titulo"> <b><em>Concierto de tickets</b></em> </h3>
               </div>
            </div>
        </section>
		<section id="nacionales">
			<div class="contenedor">
				<h4 class="contenedor_titulo">Nacionales</h4>
				<div class="contenedor_artistas">
					<?php
						foreach ($rows_Artistas as $arreglo):
							$prod = new Artista($arreglo['a_id'], $arreglo['a_nombre'], $arreglo['a_archivo'], $arreglo['a_estado']);
						
                    ?> 

					<div id="artista1" class="contenedor_artista"style='background-image: url("../../assets/img/<?php echo $prod->getArchivo(); ?>");'>
						<h5 class="art" id="artista" name="artista"><?php echo $prod->getNombre();?></h5>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="artistaSeleccionado" id="contenedor_lugar"><div id="eventos" style="text-align: center; position: inherit;  "></div></div>
			</div>
			<em></em>
		</section>

		<section id="internacionales">
			<div class="contenedor">
				<h4 class="contenedor_titulo">Proximamente</h4>
				<div class="contenedor_artistas">
					<div class="contenedor_artista" style='background-image: url("../../assets/img/artista7.jpg");'>
						<a href="tickets.php?variable1=valor1&variable2=valor2"><h5>Ed Sheeran</h5></a>
					</div>
					<div class="contenedor_artista" style='background-image: url("../../assets/img/artista8.jpg");'>
						<h5>Shawn Mendes</h5>
					</div>
					<div class="contenedor_artista" style='background-image: url("../../assets/img/artista9.jpg");'>
						<h5>Jonas Brothers</h5>
					</div>
				</div>
				
			</div>
		</section>
		
	</main>
	 <?php
	    include("../footer.html");          
	  ?>

    <script type="text/javascript">
        var band     = '<?php echo $bandInicio;?>';
        var usuario  = '<?php echo $usuario;?>';
        var tipo     = '<?php echo $tipo;?>';
    </script>
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

   
</body>
</html>