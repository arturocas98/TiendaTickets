<?php 
  require_once("../sesiones.php");
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
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/sesiones.js"></script>
    <script src="../../assets/js/carrito.js"></script>
    <script src="../../assets/js/productos.js"></script>

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
        <section class="acerca-de logo" id="productos">
           <div class="contenedor">
               <div class="foto">
                    <img src="../../assets/img/emagic_f.png" width="115"alt="emagic">
               </div>

               
                       <div class="texto">
                           <h3 class="titulo"> Acerca de</h3>
                               <p>Ofrecemos un servicio de alta calidad con la 
                               <span class="bold">mejor atención al cliente</span>
                                que puede ofrecer una pagina de reserva de eventos, contamos con un <span class="bold"> sistema de pagos eficiente</span> donde la seguridad de su información esta en buenas manos.</p>

                           
                       </div>
            
                </div>
                
            </section>
            
            <section class="trabajos" id="trabajos">
                <div class="contenedor">
                    <h3 class="titulo">Nuestros Servicios</h3>
                    <div class="contenedor-trabajos">
                       <div class="trabajo">
                           <div class="thumb">
                               <img src="../../assets/img/pagos.jpg" alt="lorem ipsum">
                           </div>
                           <div class="descripcion">
                               <p class="nombre">Compras Seguras</p>
                               <p class="categoria">Facilidad de compra de tickets con varios metodos de pago y  seguridad de su información.</p>
                           </div>
                       </div>   
                       
                        <div class="trabajo">
                           <div class="thumb">
                               <img src="../../assets/img/correo.jpg" alt="lorem ipsum">
                           </div>
                           <div class="descripcion">
                               <p class="nombre">Correo de Confirmación</p>
                               <p class="categoria">Confirmación de compra mediante su correo, donde se detallara información sobre su asiento.</p>
                           </div>
                       </div>  
                    </div>
                    
                    
                </div>
            </section>
            
        </section>
    </main>
    
    <footer>
      <section class="contacto" id="contacto">
        <div class="contenedor">
          <h3 class="titulo">Contacto</h3>
          <form action="" class="formulario">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre  &#128100;" required>
            <input type="email" name="correo" id="correo" placeholder="Correo  &#128231;" required>
            <textarea name="mensaje" id="mensaje" placeholder="Mensaje &#x1F5CA;" required></textarea>
            <input type="submit" class="boton" value="Enviar">
          </form>
        </div>
      </section>

      <?php
        include("../footer.html");          
      ?>
      <script type="text/javascript">
        var band     = '<?php echo $bandInicio;?>';
        var usuario  = '<?php echo $usuario;?>';
        var tipo     = '<?php echo $tipo;?>';
     </script>
  </body>
</html>