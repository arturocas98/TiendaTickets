<?php
	require_once "../../model/Evento.php";
	require_once "../../controlador/Ticket_BD.php";


	$ticketId = $_POST['idT'];

	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$tipo = $_POST['tipo'];
	$eventoId = $_POST['select_eventosT'];

	//$Nueva = date('d-m-Y', strtotime($_POST['fecha']));
/*	$fecha = date('Y-m-d', strtotime($_POST['fecha']));
	$hora = date('H:i:s', strtotime($_POST['hora']));*/
	

	$ticket = new Ticket_BD();
	$evento = new Evento($eventoId, '', '', '', '', '', 1);
	$ticket->setDescripcion($descripcion);
	$ticket->setPrecio($precio);
	$ticket->setStock($stock);
	$ticket->setTipo($tipo);
	$ticket->setEvento($evento);
	echo $ticket->Guardar_Ticket();

?>