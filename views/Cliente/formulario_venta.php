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

   
    <link rel="stylesheet" href="../../assets/estilos/acerca_de.css">
     <link rel="stylesheet" href="../../assets/estilos/productos.css">

     <link rel="stylesheet" href="../../assets/estilos/estilo.css">
    <link rel="stylesheet" href="../../assets/estilos/bootstrap.min.css">
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/sesiones.js"></script>
    <script src="../../assets/js/carrito.js"></script>
    <script src="../../assets/js/productos.js"></script>
    <script src="../../assets/js/ajax.js"></script>

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
    <section class="logo" id="productos">
           <div class="contenedor">
               <div class="foto">
                    <img src="../../assets/img/emagic_f.png" width="115"alt="emagic">
               </div>
       <div class="texto">
           <h3 class="titulo"> Formulario de Venta</h3>
       </div>
      </div>
    </section>
  </main>


  <div class="contenedorFV">
    <form class="formularioV" id="cliente" name="cliente" method="post">
        
      <label class="Enunciado" for="cedula">Dinos tu cedula *</label>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" >
        <input id="cedula" name="cedula" onkeypress="return validarNumeros(event)" onpaste="return false" class="input100  Ccedula"  maxlength="10" type="text" maxlength="10"  name="cedula" placeholder="0987623759" required />
      </div>

      <label class="Enunciado" for="first-name">dinos tus nombres *</label>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" >
        <input id="primerN" class="input100  CprimerN" type="text" name="primerN" onkeypress="return validarLetras(event)" maxlength="50" onpaste="return false" placeholder="Primer nombre" maxlength="30" required/>
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs2-wrap-input100 validate-input" >
        <input id="segundoN" class="input100" type="text" onkeypress="return validarLetras(event)" maxlength="50" onpaste="return false" name="segundoN" placeholder="Segundo nombre" maxlength="30" required/>
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="first-name">dinos tus apellidos *</label>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" >
        <input id="primerA" class="input100" type="text" onkeypress="return validarLetras(event)" maxlength="50" onpaste="return false" name="primerA" required placeholder="Primer apellido" maxlength="30" />
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs2-wrap-input100 validate-input" >
        <input id="segundoA" class="input100" type="text" onkeypress="return validarLetras(event)" maxlength="50" onpaste="return false" required name="segundoA" placeholder="Segundo apellido" maxlength="30"/>
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="email">Introduzca su correo *</label>
      <div class="wrap-input100 validate-input" >
        <input id="email" class="input100" required name="email" placeholder="nombreapellido@hotmail.com" maxlength="30" />
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="phone"> Introduzca su numero celular</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" required onkeypress="return validarNumeros(event)" maxlength="10" onpaste="return false" type="text" name="phone" placeholder="0980730103" maxlength="10" />
        <span class="focus-input100" ></span>
      </div>

      <label class="Enunciado" for="edad"> Introduzca su edad*</label>
      <div class="wrap-input100">
        <input id="edad" class="input100" required type="text" name="edad" onkeypress="return validarNumeros(event)" maxlength="2" onpaste="return false" placeholder=" mayor a 18 años" min="18" max="100 " />
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="direccion"> Introduzca su Direccion*</label>
      <div class="wrap-input100">
        <input id="direccion" class="input100" required type="text" name="direccion" placeholder=" Av. calle..." maxlength="40" >
        <span class="focus-input100"></span>
      </div>
<!--
      <label class="Enunciado" for="fecha"> Introduzca la fecha de Nacimiento:</label>
      <div class="wrap-input100">
        <input id="fechaN" class="input100" type="date"name="fechaN" min="01/01/1997" max="01/01/2020" required>
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="sexo"> 
      Marque su sexo:</label>
      <div class="wrap-input100">
        <input id="sexo" name="sexo" class="persona1" type="radio"> Masculino
        <input type="radio" class="persona1" name="sexo" checked/> Femenino 
      </div> 

      <label class="Enunciado" for="sexo"> 
      Forma de Pago</label>
      <div class="wrap-input100">
      <input type="radio" class="persona1" name="fpago"  /> <em>TARJETA DE CREDITO </em></br>
        <input type="radio" class="persona1" name="fpago" checked/> <i>TARJETA DE CREDITO<i>  
      </div> </br>

      <label class="Enunciado" for="fecha"> Introduzca la fecha de Expedición*:</label>
      <div class="wrap-input100">
        <input id="fechaN" class="input100" type="date"name="fnacimiento" min="01/01/2008" max="01/01/2020">
        <span class="focus-input100"></span>
      </div>

      <label class="Enunciado" for="sexo"> 
      Institucion</label>
      <div class="wrap-input100">
        <input type="radio" class="persona1" name="Institucion"  /> MASTERCARD </br>
          <input type="radio" class="persona1" name="Institucion" checked/> VISA </br>
      </div> </br>

      <label class="Enunciado" for="phone"> Introduzca el numero de tarjeta*:</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="phone" placeholder=" 111111222233344" maxlength="16" onkeypress="return validarNumeros(event)" onpaste="return false">
        <span class="focus-input100" ></span>
      </div>

      <label class="Enunciado" for="phone"> Introduzca el CCV*:</label>
      <div class="wrap-input100">
        <input id="ccv" class="input100" type="text" name="ccv" placeholder=" Codigo de seguridad" maxlength="3" onkeypress="return validarNumeros(event)" onpaste="return false">
        <span class="focus-input100" ></span>
      </div></br></br>

      <p><input type="checkbox" class="perschx"  name="atyc" /> Acepta terminos y Condiciones</p> </br>

-->
        <div class="container-contact100-form-btn ">
          <button id="bt_formularioV" name="boton" class="contact100-form-btn  btnSubirF btn-green"  >
            Subir Formulario
          </button>
        </div></br></br></br>
    </form>
  </div>


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
  <script src="../../assets/js/formularioValidaciones.js"></script>
</body>
</html>