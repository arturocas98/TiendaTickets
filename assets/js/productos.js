$(document).ready(function(){
	
	/*
	document.getElementById("contenedor_lugar").style.display = 'none';*/
		/*PRODUCTOS*/

	/*BUSQUEDA ARTISTAS*/
	$("#artistaB").focus();

	var index = document.querySelector("#historia");

	if(index != null){
			//alert("Estas en acerca de");
			url = 'views/Evento/recibirEventos.php';
		}else{
			url = '../Evento/recibirEventos.php';

		}

	$("#artistaB").keyup(function(){
		
		tecla = event.keyCode || event.which;
		//alert(tecla);
		var parametros = $("#busquedaA").serialize();
		/*if( tecla != 8 )*/

			document.getElementById("resultado").style.display ="block";
			document.getElementById("cerrar").style.display ="block";
		/*$.ajax({
			data: parametros,
			url: 'Artista/recibirArtistas.php',
			type: 'POST',
			success: function(resp){
				alert(resp);
				let template = '';
				if(resp == 1)
					template += "No se han encontrado artistas."
				else{
					let artistas = JSON.parse(resp);
				
			
					artistas.forEach(art => {
						template += `<li>
						${art.nombre}
						</li>`
					});
				}	
				$("#artistaR").html(template);
			}
		});*/

		/*BUSQUEDA EVENTOS*/

		$.ajax({
			data: parametros,
			url: url,
			type: 'POST',
			success: function(resp){
				let eventos = JSON.parse(resp);
				let template1 = '';
				console.log(eventos);
				let artistas = '';
				if($.isEmptyObject(eventos)){
					template1 += "No se han encontrado eventos.";
				}else{
						
					eventos.forEach(ev => {
						console.log(ev.nombre);
						var fecha = obtenerFecha(ev.fecha);
						template1 += `<ul>
								<a style="color:black;" href='../Ticket/tickets.php?evento=${ev.id}'>
									<li>
										${ev.nombre}
									</li>
									<li>
										${ev.lugar} ${ev.ciudad}
									</li>
									<li>
										${fecha} ${ev.hora}
									</li>
								</a>
							</ul>`;
					});
				}
				$("#eventoR").html(template1);
			}
		});
		return false;
	});

	/*FUNCION FECHA*/

	function obtenerFecha(fech){
		var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
		var f=new Date(fech);
		var fecha = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
		return fecha;	
	}

	/*BORRAR LA BUSQUEDA*/

	$("#cerrar").click(function(){
		document.getElementById("cerrar").style.display ="none";
		document.getElementById("resultado").style.display ="none";
		$('#busquedaA')[0].reset();  
		
		return false;


	});	

	/*CARGAR EVENTOS*/

	/*CARGAR EVENTOS*/
	artistaViejo = '';
	$("#contenedor_lugar").hide();
	$(".contenedor_artista").click(function(){
	//	var artista = $("div.art").text();

		var eventoB = this.innerText;
		
		//alert(artista);	
		//$("#contenedor_lugar").show();
		console.log("NUEVO  "+eventoB);
		console.log("vIEJO: "+artistaViejo);
		if(document.getElementById){		
		var el=document.getElementById("contenedor_lugar");
		if(artista==null || ((artista!=eventoB || artista ==eventoB) && el.style.display=='none')){
			el.style.display = 'block';
			
		}
		else if(artista==eventoB && el.style.display=='block')
			el.style.display = 'none';
			artista = eventoB;	
		}
		//Nada importante
		//console.log(artista);
		$.ajax({
			data: { eventoB : eventoB },
			url: '../Evento/recibirEventos.php',
			type: 'POST',
			success: function(resp)  {
				alert(resp);
				 eventos = JSON.parse(resp);
				let template1 = '';
				console.log(eventos);
				eventos.forEach((ev,ind) => {
				var fecha = obtenerFecha(ev.fecha);
				template1 += `<ul>
								<a href='../Ticket/tickets.php?evento=${ev.id}'>
									<li>
										${fecha} ${ev.hora}
									</li>
									<li>
										${ev.nombre}
									</li>
									<li>
										${ev.lugar} ${ev.ciudad}
									</li>
								</a>
							</ul>`
				});

/*
			$("#artistaR").html(template2);*/
			$("#eventos").html(template1);
			}
		});
		return false;
	});		



	

});	


