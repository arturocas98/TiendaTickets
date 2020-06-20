<?php 
  require_once("../sesiones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi perfil</title>
    <meta name="viewport" content="width-device-width , initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/estilos/normalize.css">
    <link rel="stylesheet" href="../../assets/estilos/mi_perfil_usuario.css">
    <script src="../../assets/js/all.js"></script>
    
    <script src="../../assets/js/jquery-3.4.1.js"></script>

    <script src="../../assets/js/sesiones.js"></script>
    
    <script src="../../assets/js/perfilUsuario.js"></script>
    
</head>
<body>
  <header>
    <div class="contenedor">
      <div id="navegador">
        <nav class="menu"> 
          <a href ="../../index.php">Inicio</a>
          <a href ="../Artista/productos.php">Productos</a>
          <a href ="../acerca_de.php">Acerca de</a>
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
            <img id="foto_usuario" name="foto_usuario" src="../../assets/img/usuario.png" width="200"alt="emagic">
          </div>
        </div>
        <section class="contacto" id="contacto">

          <div class="contenedor">
            <h3 class="titulo" style="font-size:50px;"> Configuraciones</h3>
            <h3 class="titulo">Datos Personales <i class="submit-btn fa fa-user-edit" id="bt_actualizar" name="bt_actualizar"></i></h3>
            <form class="formulario" id="formularioDatosPersonales" enctype="multipart/form-data" name="formularioDatosPersonales"  method="POST">
              <input type="text" name="cedula" class="cedula" disabled id="cedula" placeholder="cedula  &#128179;" required>

              <input type="text" disabled name="nombres" id="nombres" placeholder="nombres  &#128100;" required>

              <input type="text" name="apellidos" id="apellidos" disabled value="<?php ?>" placeholder="apellidos  &#128100;" required>

              <input type="email" disabled name="correo" id="correo" placeholder="Correo  &#128231;" required>

              <input type="text"  name="telefono" id="telefono" disabled placeholder="telefono  &#128241;" required>

               <input type="file" name="archivo" id="archivo" accept=".pdf,.jpg,.png" multiple >

              <textarea disabled name="direccion" id="direccion" placeholder="Direccion  &#127969;" required></textarea>

              <input type="submit" class="boton" id="btnGuardar" value="Guardar">
              
            
            </form>
          </div>
        </section>
        
        <section class="contacto" id="contacto">
          <div class="contenedor">
            <h3 class="titulo">Datos de la cuenta <i class="submit-btn fa fa-user-edit" id="bt_actualizar2" name="bt_actualizar2"></i></h3>
            <form action="" class="formulario" method="POST" id="formularioCuenta" name="formularioCuenta" >
              <input type="text" name="nombreU" disabled id="nombreU" placeholder="Nombre de usuario  &#128100;" required>
                        
              <input type="password" name="contraU" id="contraU" placeholder="clave  &#128274;" required>
                        
              <input type="password" name="contraCambiar" id="contraCambiar" placeholder=" nueva contraseña  &#128274;" required>
                        
              <input type="password" name="contraConfirmar" id="contraConfirmar" placeholder=" confirme contaseña  &#128274;" required>                        
              <input type="submit" id="btnGuardar2" name="btnGuardar2" class="boton" value="Guardar">
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