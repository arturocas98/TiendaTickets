document.addEventListener('DOMContentLoaded', event =>{
	const cookies = document.cookie.split(';');
	let cookie = null;
	cookies.forEach(ticket =>{
		if(ticket.indexOf('tickets') > -1){
			cookie = ticket;
		}
	});

	if(cookie != null){
		const count = cookie.split('=')[1];
		console.log(count);
		$("#bt_carrito").html(`(${count}) <i class="fa fa-shopping-cart"></i>`);

	}
	});

$(document).ready(function(){

	$("#bt_carrito").click(function(){
		actualizarCarrito();
	});

	function actualizarCarrito(){
		fetch('http://127.0.0.1/ProyectoDesarrolloWeb/controlador/Carrito_Datos.php?accion=mostrar')
		.then(response => response.json())
		.then(data => {
			console.log(data);
			let precioTotal = '';
			let template = '';

			template += `
				<thead>
					<tr>
						<td></td>
						<td>Ticket</td>
						<td></td>
						<td>Cant</td>
						<td>Precio</td>
						<td>Total</td>
						<td></td>

					</tr>
				</thead>
				<tbody>

			`;
			data.tickets.forEach(ticket =>{
				template += `
					<tr style="height: 100px;">
						<td><input type='hidden' value='${ticket.id}'></td>
						<td><img src='../img/${ticket.archivo}' style="width: 80px;"></td>
						<td><div style="width: 250px;">${ticket.nombre} - ${ticket.ciudad}
						${ticket.descripcion}
						${ticket.fecha} ${ticket.hora}
						${ticket.lugar} - ${ticket.ciudad}</div></td>
						<td>${ticket.cantidad}</td>
						<td>$ ${ticket.precio}</td>
						<td>$ ${ticket.subtotal}</td>
						<td><img src='../../assets/img/eliminar.png' style="width: 20px;" class="bt_eliminar" name="bt_eliminar"></td>

					</tr>
				`;
			});

			template += `
			<tr>
				<td colspan= '4'></td>
				<td>TOTAL</td>
				<td>$ ${data.info.total}</td>
				<td></td>
			</tr>
			</tbody>


			`;

			$("#tabla_carrito").html(template);
			document.cookie = `tickets =${data.info.count}`;
			$("#bt_carrito").html(`(${data.info.count}) <i class="fa fa-shopping-cart"></i>`);

			$(".bt_eliminar").click(function(){
				let id = $(this).parent().parent().children()[0].innerText;
				eliminarTicketCarrito(id);
			});

		});


	}

	

	$(document).on('click','.bt_agregar',function(){
		let idA = $(this).parent().parent().children()[0].firstChild.value;
		let cant = $(this).parent().parent().children()[2].firstChild.value; 
		//alert(idA);	
		agregarTicketCarrito(idA, cant);
	});

	$(document).on('click','.bt_eliminar',function(){
		let idE = $(this).parent().parent().children()[0].firstChild.value;
		if(confirm("¿Desea eliminar el ticket?")){
			eliminarTicketCarrito(idE);
			alert("Se ha eliminado con éxito.");
		}
	});

	function agregarTicketCarrito(idA, cant){

		fetch('http://127.0.0.1/ProyectoDesarrolloWeb/controlador/Carrito_Datos.php?accion=agregar&id='+idA+'&cant='+cant)
		.then(res => res.json())
		.then(data =>{
			console.log(data);
			console.log(data.status);
			actualizarCarrito();
			alert("Se ha agregado con éxito.");
		});

	}

	function eliminarTicketCarrito(idE){
		fetch('http://127.0.0.1/ProyectoDesarrolloWeb/controlador/Carrito_Datos.php?accion=eliminar&id='+idE)
		.then(res => res.json())
		.then(data =>{
			console.log(data);
			console.log(data.status);
			actualizarCarrito();
		});
	}

	$("#bt_comprar").click(function(){
		window.location="../Cliente/formulario_venta.php";
	});


});