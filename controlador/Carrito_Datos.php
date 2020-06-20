<?php

include_once '../model/Carrito.php';

if(isset($_GET['accion'])){
	$accion = $_GET['accion'];
	$carrito = new Carrito();

	switch ($accion) {
		case 'mostrar':
			mostrar($carrito);
			break;
		case 'agregar':
			agregar($carrito);
			break;
		case 'eliminar':
			eliminar($carrito);
			break;

		default:
	}

}else{
	echo json_encode(['statuscode' => 404,
                      'response' => 'No se puede procesar la solicitud.']);
}


function mostrar($carrito){
	//cargar arreglo en la session 
	//consultar Base Datos para actualizar valores tickets
	$ticketsCarrito = json_decode($carrito->Cargar_Tickets(), 1);
	$ticketsLleno = [];
	$total = 0;
	$totalTickets = 0;

	foreach($ticketsCarrito as $ticketCarrito) {
		$httpRequest = file_get_contents('http://127.0.0.1/ProyectoDesarrolloWeb/views/Ticket/recibirTickets.php?idT='.$ticketCarrito['id']);
		$ticketProducto = json_decode($httpRequest, 1)['ticket'];
		$ticketProducto['cantidad'] = $ticketCarrito['cantidad'];
		$ticketProducto['subtotal'] = $ticketProducto['cantidad'] * $ticketProducto['precio'];	
		$total += $ticketProducto['subtotal'];
		$totalTickets += $ticketProducto['cantidad'];

		array_push($ticketsLleno, $ticketProducto);


	}

	$resArreglo = array('info' => ['count' => $totalTickets, 'total' => $total], 'tickets' => $ticketsLleno);

	echo json_encode($resArreglo);
}
/*
function llenar($carrito){
	if (isset($_GET['id']) && isset($_GET['cant'])) {
  	$resp = $carrito->Agregar_Ticket($_GET['id'],$_GET['cant']);
	echo $resp;
  	}else{
  		echo json_encode(['statuscode' => 404,
                      'response' => 'No se puede procesar la solicitud, id vacío.']);
  	} 
}
*/
function agregar($carrito){
 if (isset($_GET['id']) && isset($_GET['cant'])) {
  	$resp = $carrito->Agregar_Ticket($_GET['id'],$_GET['cant']);
	echo $resp;
  }else{
  	echo json_encode(['statuscode' => 404,
                      'response' => 'No se puede procesar la solicitud, id vacío.']);
  } 
  
}

function eliminar($carrito){

	if (isset($_GET['id'])) {
		$resp = $carrito->Eliminar_Ticket($_GET['id']);	

		if($resp)
			echo json_encode(['statuscode' => 200]);
		else
			echo json_encode(['statuscode' => 400]);

	}else{
		echo json_encode(['statuscode' => 404,
                      'response' => 'No se puede procesar la solicitud, id vacío.']);
	}

}







?>