var tab= document.getElementById('tabla_tickets');
var fil=null;

$(document).ready(function(){

	var ticketB = evento;
	//alert(parametros);
	$.ajax({
		data: { ticketB },
		url: 'recibirTickets.php',
		type: 'POST',
		success: function(resp) {
			tickets = JSON.parse(resp);
			let template = '';
			artista = '';
			archivo = '';
			tipo = '';
			tickets.forEach(ticket => {
				artista = ticket.nombre+" - "+ticket.lugar;
				archivo = ticket.archivo;
				if(ticket.tipo == 1)
					tipo = 'Golden Packet';
				else if(ticket.tipo == 2)
					tipo = 'V.I.P';
				else tipo = 'General';

				//generar_fila_tickets(ticket.descripcion+" "+tipo, ticket.stock, "$"+ticket.precio);
				
				template += `<tr class="fila_seleccionada">
					<td><input type="hidden" value="${ticket.id}"></td>
					<td>${ticket.descripcion} ${tipo}</td>
					<td><select>`;

				for (var i=1; i <= ticket.stock; i++){
					template += `<option value="${i}">${i}</option>`;
				} 

				template += `
					</select></td>
					<td>$ ${ticket.precio}</td>
					<td><img src='../../assets/img/icon_agregar11.png' style="width: 23px;" class="bt_agregar" name="bt_agregar"></td>
					</tr>
				`;


			});
			portadas(artista, '../../assets/img/'+archivo);
			$("#tabla_tickets").html(template);
			$(".slogan").html(artista);
			//seleccionar_producto();
		}

	});


	console.log($("#tabla_total").parent().parent());

});

function portadas(art, url){
	header = document.getElementsByTagName('header')[0];
	h2 = document.getElementsByTagName('h2')[0];
	header.style.background = "url("+url+") #443473 no-repeat center fixed";
	header.style.backgroundSize= "cover";
	header.style.maxHeight ="600px";
	h2.innerHTML=art;

}
/*
function generar_filas_columnas(n){
		tfil=document.createElement('tr');
		tfil.className = "fila_seleccionada";
		tabla.appendChild(tfil);
		fila = tabla.childNodes;
		for(var j=0; j<n; j++){
			var tcol=document.createElement('td');

			tabla.lastChild.appendChild(tcol);
		}
}

function generar_opciones(cls, stock){
	var select=document.createElement('select');
	cls[1].appendChild(select);
	for (var i=0; i < stock; i++){
		select.options[i]=new Option(i+1, (i+1));
	}
}

function generar_agregar(imagen){
	
	var img = document.createElement('img');
	cls[3].appendChild(img);
	cls[3].firstChild.src = imagen;
	cls[3].firstChild.className = 'bt_agregar';

}

function generar_fila_tickets(col1, col2, col3){
	tabla= document.getElementById('tabla_tickets');
	generar_filas_columnas(4);
	cls = tabla.lastChild.childNodes;

	cls[0].innerHTML=col1;
	generar_opciones(cls, col2);
	cls[2].innerHTML=col3;
//	cls[3].innerHTML=imagen
	generar_agregar("../img/icon_agregar11.png");
}

function generar_filai_precios(){
	generar_filas_columnas(3);
	cls = tabla.firstChild.childNodes;
	cls[0].innerHTML="<b>Asiento</b>";
	cls[1].innerHTML="<b>Cant</b>";
	cls[2].innerHTML="<b>Total</b>";
}

function generar_fila_etiquetas(col1, col2, col3, cont){
	cls = tabla.childNodes[cont].childNodes;
	cls[0].innerHTML=col1;
	cls[1].innerHTML=col2;
	cls[2].innerHTML=col3;
	//generar_agregar("../img/eliminar.png");

}

function generar_bt_comprar(){
	bt = document.createElement('a');
	if(band == 1)
		bt.href = "formulario_venta.php";
	else 
		bt.href = "login.view.php";
	padre.appendChild(bt);
	bt_comprar=padre.lastChild;	
	bt_comprar.appendChild(document.createTextNode('Comprar'));	
}
function generar_bt_agregar(){
	bt = document.createElement('a');
	if(band == 1)
		bt.href = "formulario_venta.php";
	else 
		bt.href = "login.view.php";
	padre.appendChild(bt);
	bt_comprar=padre.lastChild;	
	bt_comprar.appendChild(document.createTextNode('Comprar'));	
}

function producto_repetido(){
	columnas = fil.childNodes;
	
	var cant1 = parseInt(columnas[1].textContent.split('x')[1]) + cant;
	var prec1 = parseInt(columnas[2].textContent.split('$')[1]) + prexcant;
	columnas[1].innerText='x'+cant1;
	columnas[2].innerText='$'+parseFloat(prec1).toFixed(2);
	tabla.lastChild.previousSibling.previousSibling.childNodes[2].innerText = "$"+parseFloat(subt).toFixed(2);
	tabla.lastChild.childNodes[2].textContent = "$"+parseFloat(tot).toFixed(2);
	console.log(cant1);
}

function seleccionar_producto(){
	tab= document.getElementById('tabla_tickets').childNodes;
	cont = 1;
	subt = 0;
	IVA = 0;
	tot = 0;
	for(var i = 0; i <tab.length; i++){
		tab[i].lastChild.onclick = function(){ //tabla tickets
			columnas=this.parentNode.childNodes;
			tabla=document.getElementById('tabla_total');
			filap=tabla.firstChild;
			padre=tabla.parentNode;
			bt_comprar=tabla.nextSibling;
			 produc = columnas[0].textContent;
			 cant = parseInt(columnas[1].firstChild.value);
			 prec = parseInt(columnas[2].textContent.split('$')[1]);
			 prexcant = prec * cant;
			var band = false;
			if(filap == null && bt_comprar == null){
				generar_filai_precios();
				generar_bt_comprar();
				generar_bt_agregar();
			}
			subt += prexcant;
			IVA = subt * 0.12;
			tot = subt + IVA;
			//console.log(tabla.childNodes[1].firstChild.textContent);
			
			for(var i = 0; i < tabla.childNodes.length; i++){
				fil = tabla.childNodes[i];
				if(produc === fil.firstChild.textContent){
					band = true; 
					break;
				}else band = false;
			}
			console.log(band);
			if(band == true){
				producto_repetido();
			}else{
				generar_filas_columnas(4);
				generar_fila_etiquetas(produc, "x"+cant, "$"+parseFloat(prexcant).toFixed(2), cont);
				if(cont==1)
					generar_filas_columnas(3);
				generar_fila_etiquetas("<b>Subtotal</b>", " ", "$"+parseFloat(subt).toFixed(2), cont+1);
				if(cont==1)
					generar_filas_columnas(3);
				generar_fila_etiquetas("<b>IVA</b>", " ", "%12", cont+2);
				if (cont==1)
					generar_filas_columnas(3);
				generar_fila_etiquetas("<b>Total</b>", " ", "$"+parseFloat(tot).toFixed(2), cont+3);
				cont++;
			}
			/*alert(produc);
			alert(cant);
			alert(prec); */
/*		}	
	}
}


window.onload=function(){

	//generar_tickets();
	
	seleccionar_producto();
	//soluccion_select();
	
	
	
}*/
