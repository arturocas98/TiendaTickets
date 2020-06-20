<?php
    include('../../controlador/Cliente_BD.php');
    //include('../controlador/Artista_BD.php');
    //$pr = new Artista_BD(15, 'Ed Sheeran', 1);
    //$pr = new Producto_BD
 //   $productos = $BD->consulta("select * from productos where pro_estado=1");
 //   $filas = $BD->num_filas($productos);

  //  $pr->Guardar_Producto();

    $c = new Cliente_BD();
    $rows_Cliente = array();


    if(isset($_POST['clienteB'])){

        $clienteB = $_POST['clienteB'];
        $rows_Cliente = $c->EnviarResultado($clienteB);
        
    }
    if(empty($rows_Cliente)){
        $jsonstring = 1;
    }else{

        $json = array();

        foreach ($rows_Cliente as $arreglo){
            $json[] = array(
                'id' => $arreglo['c_id'],
            'cedula' => $arreglo['c_cedula'], 
            'primerN' => $arreglo['c_primerN'],
            'segundoN' => $arreglo['c_segundoN'],
            'primerA' => $arreglo['c_primerA'],
            'segundoA' => $arreglo['c_segundoA'],
            'correo' => $arreglo['c_correo'],
            'direccion' => $arreglo['c_direccion']
            );
        }

        $jsonstring = json_encode($json);    

    }
    echo $jsonstring;

?>