$(document).ready(function(){


	/*ARTISTAS*/
	let editar = false;
	rellenarTablaArtistas();
	
	rellenarTablaEventos();
	rellenarTablaTickets();
	rellenarTablaUsuarios();
	rellenarSelectArtistas();
	rellenarSelectEventos();
	rellenarSelectTipo();
	rellenarDatosCuenta(usuario);
	
	//let artSelect = getElementById("select_artistasT").innerText;
	
	console.log($('#select_artistasT option:selected'));
	/*ARTISTAS*/
	/*GUARDAR Y MODIFICAR ARTISTAS*/

	$("#form_Artista").on('submit', function(e){
        e.preventDefault();
        let url = "";
        if(editar == false){
        	url += '../Artista/guardarArtistas.php';
        }else 
        	url += '../Artista/modificarArtistas.php';

        $.ajax({
	            type: 'POST',
	            url: url,
	            data: new FormData(this),
	            contentType: false,
	            cache: false,
	            processData:false,
	            success: function(resp){
	                rellenarTablaArtistas();
	                rellenarSelectEventos();
	                $("#form_Artista").trigger('reset');
	                editar = false;
	            }
	        });
        
        return false;
    });

    /*BUSCAR ARTISTAS*/

	$("#artistaB").focus();
	 $("#artistaB").keyup(function(){
	 	var parametros = $("#busquedaA").serialize();
	 	rellenarTablaArtistas(parametros);

	 });

	 /*SELECCIONAR ARTISTAS PARA MODIFICAR*/

 	$(document).on('click','.seleccionar_artista',function(){
 		editar = true;
		var artistaB = this.innerText;
		$.ajax({
			data: { artistaB },
			url: '../Artista/recibirArtistas.php',
			type: 'POST',
			success: function(resp){
				let artistas = JSON.parse(resp);
					
				artistas.forEach(art => {
					console.log(art.nombre);
					$("#idA").val(art.id);
					$("#artista").val(art.nombre);	
					$("#selecciona_imagenM").val(art.archivo);

				});
				
			}
		});
		
	});

	/*RELLENAR TABLA ARTISTAS*/
	

	function rellenarTablaArtistas(parametros){
		$.ajax({
			data: parametros,
			url: '../Artista/recibirArtistas.php',
			type: 'POST',
			success: function(resp){
				let template = '';
				template += `<thead class="table-success">
						<tr > 
							<td >Id</td>
							<td >Artista</td>
							<td >Archivo</td>
							<td > </td>
						</tr>
					</thead
					<tbody>
					`
				if(resp == 1)
					template += `<tr>

					<td colspan="3">No se han encontrado artistas.</td>
					</tr>`
				else{
					let artistas = JSON.parse(resp);

					
					artistas.forEach(art => {
						template += `
							<tr a_id="${art.id} ">
								<td class ="bg-info text-white">${art.id}</td>
								<td><a class="seleccionar_artista">${art.nombre}</a></td>
								<td>${art.archivo}</td>
								<td ><img class="eliminarA " class="eliminar" src="../../assets/img/eliminar.png"></img></td>
							</tr>
						`	
					});
					
					template += `</tbody>`
				}	
				
				$("#tabla_artistas").html(template);
			}
		});

	}
	/*ELIMINAR ARTISTA*/

	$(document).on('click','.eliminarA',function(){
		/*document.getElementById("cerrar").style.display ="none";
		document.getElementById("resultado").style.display ="none";
		$('#busquedaA')[0].reset();  
		*/
		let idA = $(this).parent().parent().children()[0].innerText;
		let eliminar = confirm("¿Desea eliminar el artista?");
		if(eliminar == true){
			$.ajax({
				data: { idA: idA },
				url: '../Artista/eliminarArtista.php',
				type: 'POST',
				success: function(resp){
					
					rellenarTablaArtistas();
					rellenarSelectEventos();	
				}
			});

		}
		return false;
	});	



	/*GUARDAR EVENTOS PARA INSERTAR O MODIFICAR EVENTOS*/

	$("#bt_guardarE").click(function(){

        var parametros = $("#form_Evento").serialize();
        let url = "";
        if(editar == false){
        	url += '../Evento/guardarEventos.php';
        }else 
        	url += '../Evento/modificarEventos.php';

        $.ajax({
	            type: 'POST',
	            url: url,
	            data: parametros,
	            success: function(resp){
	                rellenarTablaEventos();
	                $("#form_Evento").trigger('reset');
	                editar = false;
	            }
	        });
        
        return false;
    });

		/*SELECCIONAR PARA MODIFICAR*/

	$(document).on('click','.seleccionar_evento',function(){
 		editar = true;
 		let idE = $(this).parent().parent().children()[0].innerText;
		/*var eventoB = this.innerText;*/
		
		$.ajax({
			data: { idE },
			url: '../Evento/recibirEventos.php',
			type: 'POST',
			success: function(resp){
				let eventos = JSON.parse(resp);
					
				eventos.forEach(ev => {
					console.log(ev.nombre);
					$("#idE").val(ev.id);
					$("#lugar").val(ev.lugar);	
					$("#ciudad").val(ev.ciudad);
					$("#fecha").val(ev.fecha);
					$("#hora").val(ev.hora);
					 $('#select_artistasE > option[value="'+ev.a_id+'"]').attr('selected', 'selected');

				});
				
			}
		});
		
	});	

	/*BUSCAR EVENTOS*/

	$("#eventoB").keyup(function(){

	 	var parametros = $("#busquedaE").serialize();
	 	rellenarTablaEventos(parametros);

	 });

	/*ELIMINAR EVENTOS*/

	$(document).on('click','.eliminarE',function(){
		let idE = $(this).parent().parent().children()[0].innerText;
		let eliminar = confirm("¿Desea eliminar el evento?");
		if(eliminar == true){
			$.ajax({
				data: { idE: idE },
				url: '../Evento/eliminarEventos.php',
				type: 'POST',
				success: function(resp){
					rellenarTablaEventos();
				}
			});

		}
		return false;
	});	

	/*RELLENAR TABLA EVENTOS*/

	function rellenarTablaEventos(parametros){
		$.ajax({
			data: parametros,
			url: '../Evento/recibirEventos.php',
			type: 'POST',
			success: function(resp){
				console.log(resp);
				let template = '';
				template += `<thead class="table-success">
						<tr> 
							<td>Id</td>
							<td>Artista</td>
							<td>Lugar</td>
							<td>Ciudad</td>
							<td>Fecha</td>
							<td>Hora</td>
							<td></td>
						</tr>
					</thead
					<tbody>
					`
				if(resp == 1)
					template += `<tr>

					<td colspan="7">No se han encontrado eventos.</td>
					</tr>`
				else{
					let eventos = JSON.parse(resp);

					
					eventos.forEach(ev => {
						template += `
							<tr e_id="${ev.id}">
								<td class ="bg-info text-white">${ev.id}</td>
								<td><a class="seleccionar_evento">${ev.nombre}</a></td>
								<td>${ev.lugar}</td>
								<td>${ev.ciudad}</td>
								<td>${ev.fecha}</td>
								<td>${ev.hora}</td>
								<td><img class="eliminarE" class="eliminar" style="width: 23px;" src="../../assets/img/eliminar.png"></img></td>
							</tr>
						`	
					});
					
					template += `</tbody>`
				}	
				
				$("#tabla_eventos").html(template);
			}
		});

	}

	/*RELLENAR SELECT CON ARTISTAS*/

	function rellenarSelectArtistas(){
		$.ajax({
			url: '../Artista/recibirArtistas.php',
			type: 'POST',
			success: function(resp){
				artistas = JSON.parse(resp);
				let template = '';
				template += `<option value="0" selected disabled>Artistas</option>`
				artistas.forEach(art => {
					template += `<option value="${art.id}">${art.nombre}</option>`
				});


				$(".select_artistas").html(template);
			}
		});
	}

	$("#bt_guardarT").click(function(){

        var parametros = $("#form_Ticket").serialize();
        let url = "";
        if(editar == false){
        	url += '../Ticket/guardarTickets.php';
        }else 
        	url += '../Ticket/modificarTickets.php';

        $.ajax({
	            type: 'POST',
	            url: url,
	            data: parametros,
	            success: function(resp){
	                rellenarTablaTickets();
	                $("#form_Ticket").trigger('reset');
	                $('#select_artistasT').attr('disabled', false);
					$('#select_eventosT').attr('disabled', false);
					$('#select_artistasT').val($('#select_artistasT > option:first').val());
					$('#select_eventosT').val($('#select_eventosT > option:first').val());
					$('#tipo').val($('#tipo > option:first').val());
					 editar = false;
	            }
	        });
        
        return false;
    });

	$(document).on('click','.seleccionar_ticket',function(){
 		editar = true;

 		let idT = $(this).parent().parent().children()[0].innerText;

		/*var eventoB = this.innerText;*/
		//alert(idT);
		$.ajax({
			data: { idT },
			url: '../Ticket/recibirTickets.php',
			type: 'POST',
			success: function(resp){
				$('#select_artistasT').attr('disabled', 'disabled');
				$('#select_eventosT').attr('disabled', 'disabled');
				let tickets = JSON.parse(resp);
					
				tickets.forEach(t => {
					//alert(t.id);
					
					$("#idT").val(t.id);
					$("#descripcion").val(t.descripcion);	
					$("#stock").val(t.descripcion);
					$("#stock").val(t.stock);
					$("#precio").val(t.precio);
					 $('#select_artistasT > option[value="'+t.a_id+'"]').attr('selected', 'selected');
					 $('#select_eventosT > option[value="'+t.e_id+'"]').attr('selected', 'selected');
					 $('#tipo > option[value="'+t.tipo+'"]').attr('selected', 'selected');

 					

				});
				
			}
		});
		
	});	

	

	function rellenarSelectEventos(eventoB){
		$.ajax({
			data: { eventoB },
			url: '../Evento/recibirEventos.php',
			type: 'POST',
			success: function(resp){
				eventos = JSON.parse(resp);
				let template = '';
				
				template += `<option value="0" selected disabled>Eventos</option>`	
				eventos.forEach(ev => {
					template += `<option value="${ev.id}">${ev.lugar}, ${ev.ciudad}, ${ev.fecha}, ${ev.hora}</option>`
				});
				$(".select_eventos").html(template);
			}
		});
	}


	function rellenarSelectTipo(){
		let template = `<option value="0" default disabled>Tipo</option>
                        <option value="1" >Golden Packet</option>
                        <option value="2" >V.I.P</option>
                        <option value="3" >General</option>`
        $("#tipo").html(template);
	}


	

	$("#select_artistasT").change(function() {
		//let valor = $(this).val();
		//alert("encontrado");
		//alert($('#select_artistasT option:selected').html());
        rellenarSelectEventos($('#select_artistasT option:selected').html());
    });

	/*TICKETS*/


	/*GUARDAR TICKETS*/

	/*BUSCAR TABLA TICKETS*/
	$("#ticketB").keyup(function(){
		var parametros = $("#busquedaT").serialize();
		rellenarTablaTickets(parametros);

	});


	/*ELIMINAR TICKETS*/
	$(document).on('click','.eliminarT',function(){
		let idT = $(this).parent().parent().children()[0].innerText;
		let eliminar = confirm("¿Desea eliminar el evento?");
		if(eliminar == true){
			$.ajax({
				data: { idT: idT },
				url: '../Ticket/eliminarTicket.php',
				type: 'POST',
				success: function(resp){
					rellenarTablaTickets();
				}
			});

		}
		return false;
	});	

	

	/*RELLENAR TABLA TICKETS*/

	function rellenarTablaTickets(parametros){
		$.ajax({
			data: parametros,
			url: '../Ticket/recibirTickets.php',
			type: 'POST',
			success: function(resp){
				let template = '';
				let tipo = '';
				template += `<thead class="table-success">
						<tr> 
							<td>Id</td>
							<td>Artista</td>
							<td>Lugar</td>
							<td>Ciudad</td>
							<td>Descripcion</td>
							<td>Stock</td>
							<td>Precio</td>
							<td>tipo</td>
							<td>Fecha</td>
							<td>Hora</td>
							<td></td>
						</tr>
					</thead
					<tbody>
					`
				if(resp == 1)
					template += `<tr>

					<td colspan="10">No se han encontrado tickets.</td>
					</tr>`
				else{
					let tickets = JSON.parse(resp);
					tickets.forEach(t => {
						if(t.tipo == 1)
							tipo = 'Golden Packet';
						else if(t.tipo == 2)
							tipo = 'V.I.P';
						else if(t.tipo == 3) tipo = 'General';

						template += `
							<tr t_id="${t.id}">
								<td class ="bg-info text-white">${t.id}</td>								
								<td><a class="seleccionar_ticket">${t.nombre}</a></td>
								<td>${t.lugar}</td>
								<td>${t.ciudad}</td>
								<td>${t.descripcion}</td>
								<td>${t.stock}</td>
								<td>${t.precio}</td>
								<td>${tipo}</td>
								<td>${t.fecha}</td>
								<td>${t.hora}</td>
								<td><img class="eliminarT" class="eliminar" src="../../assets/img/eliminar.png"></img></td>
							</tr>
						`	
					});
					
					template += `</tbody>`
				}	
				
				$("#tabla_tickets").html(template);
			}
		});

	}

	function rellenarDatosCuenta(user){

    $.ajax({
        data: { user },
        url: '../Usuario/recibirDatosPersonales.php',
        type: 'POST',
        success: function(resp){
            let users = JSON.parse(resp);
                    
            users.forEach(usr => {
                /*console.log(art.nombre);*/
                $("#nombreU").val(usr.usuario);
                $("#contraU").val(usr.clave);
            });                
        }
    });


    $("#usuarioB").keyup(function(){
	 	var parametros = $("#busquedaU").serialize();
	 	rellenarTablaUsuarios(parametros);

	 });


	}

	function rellenarTablaUsuarios(parametros){
		$.ajax({
			data: parametros,
			url: '../Usuario/recibirDatosPersonales.php',
			type: 'POST',
			success: function(resp){
				let template = '';
				template += `<thead class="table-success">
						<tr > 
							<td >Id</td>
							<td >Usuario</td>
							<td ></td>
						</tr>
					</thead
					<tbody>
					`
				if(resp == 1)
					template += `<tr>

					<td colspan="3">No se han encontrado usuarios.</td>
					</tr>`
				else{
					let usuarios = JSON.parse(resp);

					
					usuarios.forEach(usr => {
						template += `
							<tr a_id="${usr.id} ">
								<td class ="bg-info text-white">${usr.id}</td>
								<td><a class="seleccionar_artista">${usr.usuario}</a></td>
								<td ><img class="eliminarU " class="eliminar" src="../../assets/img/eliminar.png"></img></td>
							</tr>
						`	
					});
					
					template += `</tbody>`
				}	
				
				$("#tabla_usuarios").html(template);
			}
		});

		/*ELIMINAR TICKETS*/
	$(document).on('click','.eliminarU',function(){
		let idU = $(this).parent().parent().children()[0].innerText;
		let eliminar = confirm("¿Desea eliminar el evento?");
		if(eliminar == true){
			$.ajax({
				data: { idU: idU },
				url: '../Usuario/eliminarUsuario.php',
				type: 'POST',
				success: function(resp){
					rellenarTablaUsuarios();
				}
			});

		}
		return false;
	});	

	$("#bt_cuenta").click(function(){

		if($("#contraCambiar").val() == $("#contraConfirmar").val()){
			if($("#contraCambiar").val() != $("#contraU").val()){
				var clave = $("#contraCambiar").val();
				$.ajax({
					data: { clave: clave },
					url: '../Usuario/guardarPerfilDatosCuenta.php',
					type: 'POST',
					success: function(resp){
						$("#form_Cuenta").trigger('reset');
						rellenarDatosCuenta(usuario);

					}
				});
			}
			else
				alert("Ha ingresado la misma contraseña.");
		}else
			alert("Las contraseñas no coinciden.");
		return false;
	});	





}
	


});