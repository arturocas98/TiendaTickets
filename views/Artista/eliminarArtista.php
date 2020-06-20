<?php

require_once "../../controlador/Artista_BD.php";

$artista = new Artista_BD();

$artistaId = $_POST['idA'];

echo $artista->Eliminar_Artista($artistaId);


?>