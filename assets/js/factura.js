$(document).ready(function(){
	if(isDefined('cedula'))
		actualizarCliente(cedula);
	actualizarFactura();

	function isDefined(variable) {
    	return (typeof(window[variable]) == "undefined")?  false: true;
	}  

	function actualizarFactura(){
		fetch('http://127.0.0.1/ProyectoDesarrolloWeb/controlador/Carrito_Datos.php?accion=mostrar')
		.then(response => response.json())
		.then(data => {
			console.log(data);
			let precioTotal = '';
			let template = '';

			template += `
				<thead>
					<tr>
						<td>Cantidad</td>
						<td>Precio</td>
						<td>Descripcion</td>
						<td>subtotal</td>
					</tr>
				</thead>
				<tbody>

			`;
			data.tickets.forEach(ticket =>{
				template += `
					<tr class="table-success">
						<td>${ticket.cantidad}</td>
						<td>$ ${ticket.precio}</td>
						<td>${ticket.nombre} - ${ticket.ciudad}
						${ticket.descripcion}
						${ticket.fecha} ${ticket.hora}
						${ticket.lugar} - ${ticket.ciudad}</div></td>
						<td>$ ${ticket.subtotal}</td>
					</tr>
				`;
			});

			template += `
			<tr class="bg-primary text-white">
				<td colspan= '2'></td>
				<td>TOTAL</td>
				<td>$ ${data.info.total}</td>
			</tr>
			</tbody>


			`;

			$("#tabla_factura").html(template);

		});


	}

	function actualizarCliente(clienteB){
		//alert(cedula);
		$.ajax({
			data: { clienteB: clienteB },
			url: '../Cliente/recibirClientes.php',
			type: 'POST',
			success: function(resp){
				let clientes = JSON.parse(resp);
				
				//var strDate = d.getFullYear() + "-" + ((d.getMonth()+1)<10?'0'+(d.getMonth()+1):(d.getMonth()+1)) + "-" + (d.getDate()<10?'0'+d.getDate():d.getDate());
				var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
			var d = new Date();
		var fecha = diasSemana[d.getDay()] + ", " + d.getDate() + " de " + meses[d.getMonth()] + " de " + d.getFullYear();
				var strHora = d.getHours() + ":" + (d.getMinutes()<10?'0'+d.getMinutes():d.getMinutes()) + ":" + (d.getSeconds()<10?'0'+d.getSeconds():d.getSeconds());	
				
				$("#fechaC").attr("disabled",true);
			    $("#horaC").attr("disabled",true);
				$("#fechaC").val(fecha);
				$("#horaC").val(strHora);
				clientes.forEach(c => {
					$("#nombresC").attr("disabled",true);
			        $("#apellidosC").attr("disabled",true);
			        $("#correoC").attr("disabled",true);
			        $("#direccionC").attr("disabled",true);
			        $("#nombresC").val(c.primerN+" "+c.segundoN);
					$("#apellidosC").val(c.primerA+" "+c.segundoA);	
					$("#correoC").val(c.correo);
					$("#direccionC").val(c.direccion);
					//$("#correoC").val(c.correo);
					//$("#correoC").val(c.correo);
				});

			}	
		});

	}

	
	

});	

