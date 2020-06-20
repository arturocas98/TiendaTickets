$(document).ready(function(){
	
		//document.getElementById("contenedor_lugar").style.display = 'none';
	//$("#contenedor_lugar").hide();

	/*CLIENTES*/


	$("#bt_formularioV").click(function(){
		alert($("#edad").val());
		if(confirm("¿Está seguro de la compra?")){
			
    		emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    		if (emailRegex.test($("#email").val())) {

				if($("#edad").val()>18){
					var parametros = $("#cliente").serialize();
			//alert(parametros);
					$.ajax({
						data: parametros,
						url: 'guardarFormulario.php',
						type: 'POST',
						success: function(resp){
							/*alert(resp);
							if(resp == 1)
								alert("Datos ingresados con éxito");
							else
								alert("Problemas con el servidor");
						*/
							window.location="../Factura/factura.php";
						}
					});

				}else{
					alert("Tiene que ser mayor de Edad.");
					return false;
				}
			}else
				alert("Inserte un correo válido.");

			

		}
		
		return false;
	});	

	
	/*CONFIGURACION*/



	/*REGISTRO*/

	$("#bt_registrar").click(function(){
		var parametros = $("#login").serialize();
		//alert(parametros);
		alert(parametros);
		$.ajax({
			data: parametros,
			url: 'registrate.php',
			type: 'POST',
			success: function(resp){
				alert(resp);
				if(resp == 1){
					alert("Datos ingresados con éxito");
					window.location="login.view.php";
				}
			}
		});
		return false;
	});	

	/*LOGIN*/

	$("#bt_login").click(function(){
		//alert("entro");
		var parametros = $("#login").serialize();
		//alert(parametros);
		$.ajax({
			data: parametros,
			url: 'login.php',
			type: 'POST',
			success: function(resp){
				if(resp == 1)
					window.location="../enviar.php";
				else
					alert("Usuario o Contraseña equivocada.");
			}
		});
		return false;
	});	

});

	
