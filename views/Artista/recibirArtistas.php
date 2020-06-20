<?php

    include('../../controlador/Artista_BD.php');


    $ar = new Artista_BD();
    $rows_Artista = array();

    $rows_Artista = $ar->Enviar_Resultado();

    if(isset($_POST['artistaB'])){
        $artista = $_POST['artistaB'];
        $rows_Artista = $ar->Busqueda_Artista($artista);
        
    }
    if(empty($rows_Artista)){
        $jsonstring = 1;
    }else{

        $json = array();

        foreach ($rows_Artista as $arreglo){
            $json[] = array(
                'id' => $arreglo['a_id'],
                'nombre' => $arreglo['a_nombre'],
                'archivo' => $arreglo['a_archivo']
            );
            /*$prod = new Artista($arreglo['a_id'], $arreglo['a_nombre'], $arreglo['a_archivo'], $arreglo['a_estado']);
            $thearray = (array) $prod;
            $jsonstring = json_encode($thearray);     
           // var_dump($rows_Evento);  
            echo $jsonstring;*/
        
        }

        $jsonstring = json_encode($json);    

    }


     
       // var_dump($rows_Evento);  
    echo $jsonstring;


?>