<?php
require_once "../../controlador/Ticket_BD.php";

$ticket = new Ticket_BD();


$ticketId = $_POST['idT'];

	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$tipo = $_POST['tipo'];


	$ticket->setDescripcion($descripcion);
	$ticket->setPrecio($precio);
	$ticket->setStock($stock);
	$ticket->setTipo($tipo);

	echo $ticket->Modificar_Ticket($ticketId);
	


?>