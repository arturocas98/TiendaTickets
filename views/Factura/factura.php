<?php 
  require_once("../sesiones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>




    
    
   
    <meta charset="UTF-8">
    <title>Factura</title>
    <meta name="viewport" content="width-device-width , initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/estilos/normalize.css">
    <link rel="stylesheet" href="../../assets/estilos/acerca_de.css">
     <link rel="stylesheet" href="../../assets/estilos/productos.css">

     <link rel="stylesheet" href="../../assets/estilos/estilo.css">
    <link rel="stylesheet" href="../../assets/estilos/mi_factura.css">
    <link rel="stylesheet" href="../../assets/estilos/bootstrap.min.css">
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/sesiones.js"></script>
     <script src="../../assets/js/carrito.js"></script>
    <script src="../../assets/js/factura.js"></script>
    
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
              Artista<ul id="artistaR"></ul>
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
      <div class="contenedor-texto">
        <div class="texto">
          <h1 class="nombre_empresa">EMAGYC</h1>
          <h2 class="slogan">Vive el momento!</h2>
        </div>
      </div>
    </div>
  </header>
    
  <main>
    <section class="main">
      <section class="acerca-de" id="acerca-de">
        <div class="contenedor">
          <div class="foto">
            <img src="../img/emagic_f.png" width="200"alt="emagic">
          </div>
        </div>

        <section class="contacto" id="contacto">
          <div class="container contenedor">
            <h3 class="titulo">Datos de la factura </h3>
            <form action="" class="formulario">
              <input type="text" name="nombresC" class="form-control"  id="nombresC" placeholder="nombres" required>
                        
              <input type="text" name="apellidosC" class="form-control"id="apellidosC" placeholder="apellidos" required>
                        
              <input type="email" name="correoC" class="form-control" id="correoC" placeholder="correo" required>
                        
              <input type="text" name="direccionC" class="form-control" id="direccionC" placeholder="direccion de envio" required>

              <input type="text" name="fechaC" class="form-control" id="fechaC" placeholder="fecha" required> 

              <input type="text" name="horaC" class="form-control" id="horaC" placeholder="hora de ingreso " required>                       
              
            </form>
            <h3 class="titulo" style="font-size:50px;"> Factura</h3>
            <div class="row">
              <div class="col">
                <table id="tabla_factura" class="table table-sm table-hover table-bordered table-responsive-lg">
                 <!-- <thead>
                    <tr>
                      <th>cantidad</th>
                      <th>Precio</th>
                      <th>descripción</th>
                      <th>subtotal</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
          
                    <tr class="table-success">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
      
                    <tr class="bg-primary text-white">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      
                    </tr>
                  </tbody>-->
                </table>
              </div>
            </div>
          </div>
        </section>
      </section>
    </section>
  </main>
  <?php
    include("../footer.html");          
  ?>
  <script type="text/javascript">

    var cedula     = '<?php echo $cedula;?>';
    var band     = '<?php echo $bandInicio;?>';
    var usuario  = '<?php echo $usuario;?>';
    var tipo     = '<?php echo $tipo;?>';
    var clave = '<?php echo $clave?>';
  </script>

    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>