<?php 
  require_once("../sesiones.php");
  $evento = $_GET['evento'];
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
    <link rel="stylesheet" href="../../assets/estilos/productos.css">
   
    <link rel="stylesheet" href="../../assets/estilos/acerca_de.css">
    <script src="../../assets/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="../../assets/estilos/bootstrap.min.css">
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/carrito.js"></script>
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/sesiones.js"></script>
    <script src="../../assets/js/productos.js"></script>
    <script src="../../assets/js/tickets.js"></script>
    

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
                        <a href ="../Artista/productos.php">Productos</a>
                        <a href ="../Artista/acerca_de.php">Acerca de</a>
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
        <section class="acerca-de logo" id="productos">
           <div class="contenedor">
               <div class="foto">
                    <img src="../../assets/img/emagic_f.png" width="115"alt="emagic">
               </div>

               <div class="texto">
                   <h3 class="titulo"> Concierto de tickets</h3>
               </div>
          </div>
      </section>
  <section id="artista_tickets">
    <div class="contenedor">
      <div class="contenedor_informacion">
        <div class="asientos">
          <table id="tabla_tickets"></table>
        </div>
        <div class="artista_precio"><table id="tabla_total"></table></div>

      </div>
      
    </div>
    
  </section>
</main>
<?php
  include("../footer.html");          
?>
<link rel="stylesheet" href="../../assets/estilos/tickets.css">
<script type="text/javascript">
  var evento = '<?php echo $evento;?>';
  var band     = '<?php echo $bandInicio;?>';
  var usuario  = '<?php echo $usuario;?>';
  var tipo     = '<?php echo $tipo;?>';
</script>
</body>
</html>