<?php 
    require_once("../sesiones.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Administrador</title>
    <meta name="viewport" content="width-device-width , initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/estilos/normalize.css">

    <link rel="stylesheet" href="../../assets/estilos/mi_perfil_administrador.css">
    <link rel="stylesheet" href="../../assets/estilos/bootstrap.min.css">
    
     <link rel="stylesheet" href="../../assets/estilos/productos.css">

     
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/jquery-3.4.1.js"></script>

    <script src="../../assets/js/sesiones.js"></script>
    <script src="../../assets/js/configuraciones.js"></script>
    <script src="../../assets/js/formularioValidaciones.js"></script>
    
</head>
<body>
    <header>
      <div class="contenedor">
        <div id="navegador">
          <nav class="menu"> 
            <a href ="../../index.php">Inicio</a>
            <a href ="../Artista/productos.php">Productos</a>
            <a href ="../Artista/acerca_de.php">Acerca de</a>
          </nav>
        </div>
          

  			<div class="contenedor-texto">
  				
  			</div>
        
		  </div>
    </header>
    
    <main>
        <section class="main">
           <section class="acerca-de" id="acerca-de">
              <div class="contenedor">
               <div class="foto">
                    <img src="../../assets/img/usuario.png" width="200"alt="emagic">
               </div>            
              </div>
              <section class="contacto" id="contacto">
                <div class="contenedor">
                  <h3 class="titulo" style="font-size:50px;"> Configuraciones</h3>
                    <!--<h3 class="titulo">Datos Personales</h3>-->
                  <div class="artistaBusqueda contenedor-busqueda">
                    <form  id="busquedaA" name="busquedaA">
                      <input id="artistaB" name="artistaB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
                      <button id="cerrar" name="cerrar"><img src="../../assets/img/cerrar.png"></button>
                    </form>
                  </div>

                  <div class="eventoBusqueda contenedor-busqueda">
                    <form  id="busquedaE" name="busquedaE">
                      <input id="eventoB" name="eventoB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
                      <button id="cerrar" name="cerrar"><img src="../../assets/img/cerrar.png"></button>
                    </form>
                  </div>

                  <div class="ticketBusqueda contenedor-busqueda">
                    <form  id="busquedaT" name="busquedaT">
                      <input id="ticketB" name="ticketB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
                      <button id="cerrar" name="cerrar"><img src="../../img/cerrar.png"></button>
                    </form>
                  </div>

                  <div class="usuarioBusqueda contenedor-busqueda">
                    <form  id="busquedaU" name="busquedaU">
                      <input id="usuarioB" name="usuarioB"  class="mainLoginInput"  class="icon-search" type="text" name="busqueda" placeholder="&#61442; Buscar" id="busqueda"/>
                      <button id="cerrar" name="cerrar"><img src="../../assets/img/cerrar.png"></button>
                    </form>
                  </div>

                  <div class="configuracion ">
                    <form id="form_Artista" style="width: 400px; height: 300px;"method="post" enctype="multipart/form-data" name="form_Artista" class="agregar jumbotron mt-3">
                      <p><h3>Artistas</h3></p>
                      <input type="hidden" name="idA" id="idA">
                      <p><input type="text" id="artista" name="artista" class="artistaA form-control"  placeholder="Nombre del artista..." ></p>
                      <p class="btn btn-secondary"><input type="file" name="selecciona_imagen" id="selecciona_imagen" accept=".pdf,.jpg,.png" multiple ></p>
                      <input type="submit" class="btn btn-success" name="submit" value="Guardar Artista"/>
                      <input type="hidden" name="selecciona_imagenM" id="selecciona_imagenM">
                      <!--<button id="guardarArtista" name="guardarArtista">Guardar Artista</button>
                   --> </form>
                    <div class="div_tabla">
                      <table id="tabla_artistas" class="tabla_artistas table table-bordered table-hover table-responsive-lg" >
                      
                    </table>
                  </div>
                  </div>
                  <div class="configuracion">
                    <form id="form_Evento" style="width: 600px; height: 410px;" method="post" name="form_Evento"class="agregar jumbotron mt-3">
                      <p><h3>Evento</h3></p>
                      <input type="hidden" name="idE" id="idE">
                      <p><input type="text" name="lugar" onkeypress="return validarLetras(event)" onpaste="return false" class="lugar form-control" id="lugar" placeholder="Lugar...  ;" required></p>
                      <p><input type="text" name="ciudad" onkeypress="return validarLetras(event)" onpaste="return false" class="ciudad form-control" id="ciudad" placeholder="Ciudad ;" required></p>
                      <p><input type="date" name="fecha" class="fecha form-control" id="fecha" required></p>
                      <p><input type="time" name="hora" class="hora form-control" id="hora"required></p>
                      <p><select id="select_artistasE" class="select_artistas form-control" name="select_artistas"></select></p>
                      <button id="bt_guardarE" name="bt_guardar" class="btn btn-success">Guardar Evento</button>
                    </form>
                    <div class="div_tabla" >
                      <table id="tabla_eventos"  class="tabla_eventos table table-bordered table-hover table-responsive-lg">
                      
                      </table>
                    </div>
                  </div>  
                  <div class="configuracion">
                    <form id="form_Ticket" style="width: 600px; height: 450px;" method="post" name="form_Ticket"class="agregar jumbotron mt-3">
                      <p><h3>Ticket</h3></p>
                      <input type="hidden" name="idT" id="idT">
                      <p><select id="select_artistasT" class="select_artistas form-control" name="select_artistasT"></select></p>
                      <p><select id="select_eventosT" class="select_eventos form-control" name="select_eventosT">
                        

                      </select></p>
                      <p><input type="text" name="descripcion" class="descripcion form-control" id="descripcion" placeholder="Descripcion... " required></p>

                      <p><select id="tipo" class="tipo form-control" name="tipo">

                      </select></p>

                      <p><input type="text" name="stock" onkeypress="return validarNumeros(event)" onpaste="return false" minlength="1" maxlength="3" class="stock form-control" id="stock" placeholder="Stock... " required></p>
                      <p><input type="text" maxlength="8" name="precio" onkeypress="return validarDecimales(event,this)" onpaste="return false" class="precio form-control" id="precio" placeholder="Precio " required></p>
                      
                      <button id="bt_guardarT" name="bt_guardar" class="btn btn-success">Guardar Ticket</button>
                    </form>
                    <div class="div_tabla ">
                      <table id="tabla_tickets" class="tabla_artistas  table table-bordered table-hover table-responsive-lg ">
                      
                    </table>
                  </div>
                  

                </div>
                <div class="configuracion">
                    <div class="div_tabla ">
                      <table id="tabla_usuarios" class="tabla_artistas  table table-bordered table-hover table-responsive-lg ">
                      
                      </table>
                    </div> 
                  </div>

                 
                
                   
              </section>
              
              <section class="contacto" id="contacto">
                <div class="contenedor">
                    <h3 class="titulo">Datos de la cuenta</h3>
                    <form id="form_Cuenta" method="post" name="form_Cuenta" class="formulario">


                        <input type="text" name="nombreU" id="nombreU" placeholder="Nombre de usuario  &#128100;" disabled required>
                        
                        <input type="password" disabled name="contraU" id="contraU" placeholder="Contraseña Actual  &#128274;" required>
                        
                        <input type="password" name="contraCambiar" id="contraCambiar" placeholder=" nueva contraseña  &#128274;" required>
                        
                        <input type="password" name="contraConfirmar" id="contraConfirmar" placeholder=" confirme contaseña  &#128274;" required>  
                        <button id="bt_cuenta" name="bt_cuenta" class="boton">Guardar</button> 
                    </form>
                </div>
              </section>
            
                
            </section>
            
            
               
        </section>
    </main>
    
    

      <?php
        include("../footer.html");          
      ?>
      <script type="text/javascript">
        var band     = '<?php echo $bandInicio;?>';
    var usuario  = '<?php echo $usuario;?>';
    var tipo     = '<?php echo $tipo;?>';
    var clave = '<?php echo $clave?>';
     </script>
  </body>
</html>