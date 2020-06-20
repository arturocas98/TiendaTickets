<?php

require_once "../../controlador/Usuario_BD.php";

$usuario = new Usuario_BD();

$usuarioId = $_POST['idU'];

echo $usuario->Eliminar_Usuario($usuarioId);


?>