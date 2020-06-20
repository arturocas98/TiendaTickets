<?php

require_once "../../controlador/Evento_BD.php";

$evento = new Evento_BD();

$eventoId = $_POST['idE'];

echo $evento->Eliminar_Evento($eventoId);


?>