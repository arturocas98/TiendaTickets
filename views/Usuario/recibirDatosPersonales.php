<?php

    include('../../controlador/Usuario_BD.php');



    $us = new Usuario_BD();
    $rows_usuarios = array();

    $rows_usuarios = $us->EnviarResultado();

    if(isset($_POST['user'])){
        $usuario = $_POST['user'];
        $rows_usuarios = $us->Busqueda_Usuarios($usuario);
    }

    if(isset($_POST['usuarioB'])){
        $usuario = $_POST['usuarioB'];
        $rows_usuarios = $us->Busqueda_Usuarios($usuario);
        
    }

    if(empty($rows_usuarios)){
        $result = 1;
    }else{

        $json = array();

        foreach ($rows_usuarios as $arreglo){
            $json[] = array(
                'id' => $arreglo['u_id'],
                'usuario' => $arreglo['u_usuario'],
                'clave' => $arreglo['u_clave'],
                'cedula' => $arreglo['u_cedula'],
                'nombres' => $arreglo['u_nombres'],
                'apellidos' => $arreglo['u_apellidos'],
                'telefono' => $arreglo['u_telefono'],
                'direccion' => $arreglo['u_direccion'],
                'correo' => $arreglo['u_correo'],
                'tipo' => $arreglo['u_tipo'],
                'estado' => $arreglo['u_estado'],
                'archivo' => $arreglo['u_archivo']
            );
        }

        $result = json_encode($json);    

    }

    echo $result; //devuelve un registro de json
?>