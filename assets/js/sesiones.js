$(document).ready(function(){
	


	//var band = '<?php echo $bandInicio;?>';

	var index = document.querySelector("#historia");
	console.log(index);
		var menu = document.querySelector(".menu");
		var link = "";
	if(isDefined('tipo')){	

		if(tipo == 2){
			link = "mi_perfil.php";
		}else{
			link = "perfil_administrador.php";	
		} 

		if(index != null){
			//alert("Estas en acerca de");
			generarPrimerA("views/Usuario/"+link,"assets/img/perfil1.png");
			generarSegundoA("views/validar.php");
		}else{
			generarPrimerA("../Usuario/"+link,"../../assets/img/perfil1.png");
			generarSegundoA("../validar.php");

		}
	}



	function generarPrimerA(link, imagen){

		if(usuario != ''){
			var a1 = generar_Nav(link);
			generarAtributos(a1,imagen);

			a1.appendChild(document.createTextNode(usuario));
			console.log(a1);
		}
	}

	function generarSegundoA(link){
		
		var a = generar_Nav(link);
		a.appendChild(document.createTextNode("Iniciar Sesión"));	
		a.setAttribute("id","sesion");
	    var sesion = document.getElementById("sesion");
	  
		  	if(band == 1)
		    	sesion.innerText = "Cerrar Sesión";
			else
			    sesion.innerText = "Iniciar Sesión";
		
		
	}

	function generarTercerA(imagen){

			var a1 = generar_Nav(link);
			generarAtributos(a1,imagen);
		
	}
	
    /*<?php
              if(isset($_SESSION['usuario'])){
                //validarSesion();
                $usuario = $_SESSION["usuario"];
                echo "$usuario";
              }
            ?>*/

    function isDefined(variable) {
    	return (typeof(window[variable]) == "undefined")?  false: true;
	}     

    function generar_Nav(link){
    	
    
		var a = document.createElement('a');
		a.setAttribute("href",link);
		menu.appendChild(a);
			
	//	cls[3].firstChild.src = imagen;
		return a;
	}

	function generarAtributos(a, imagen){
		var img = document.createElement('img');
		img.src = imagen;
		a.appendChild(img);
	}

});
//}