<?php

require_once "../../controlador/Ticket_BD.php";

$ticket = new Ticket_BD();

$ticketId = $_POST['idT'];

echo $ticket->Eliminar_Evento($ticketId);


?>