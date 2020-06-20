<?php
   // include('../model/Evento.php');
    include('../../controlador/Evento_BD.php');
    //include('../controlador/Artista_BD.php');
    //$pr = new Artista_BD(15, 'Ed Sheeran', 1);
    //$pr = new Producto_BD
 //   $productos = $BD->consulta("select * from productos where pro_estado=1");
 //   $filas = $BD->num_filas($productos);

  //  $pr->Guardar_Producto();

    $ev = new Evento_BD();
    $rows_Evento = array();

    $rows_Evento = $ev->Enviar_Resultado();

    if(isset($_POST['idE'])){
      $idE = $_POST['idE'];
      $rows_Evento = $ev->EnviarResultado($idE);
    }
    if(isset($_POST['artistaB'])){
        $artista = $_POST['artistaB'];
        $rows_Evento = $ev->EnviarResultado($artista);
        
    }

    if(isset($_POST['eventoB'])){
        $artista = $_POST['eventoB'];
        $rows_Evento = $ev->EnviarResultado($artista);
        
    }
    if(empty($rows_Evento)){
        $jsonstring = 1;
    }else{

        $json = array();

        foreach ($rows_Evento as $arreglo){
            $json[] = array(
                'id' => $arreglo['e_id'],
            'lugar' => $arreglo['e_lugar'], 
            'ciudad' => $arreglo['e_ciudad'],
            'fecha' => $arreglo['e_fecha'],
            'hora' => $arreglo['e_hora_inicio'],
            'a_id' => $arreglo['a_id'],
            'nombre' => $arreglo['a_nombre']
            );
        }

        $jsonstring = json_encode($json);    

    }
    echo $jsonstring;

/*
    $artista = $_POST['artistaB'];
    //echo $artista;
    $ev = new Evento_BD();
    $rows_Evento = array();
    $rows_Evento = $ev->EnviarResultado($artista);
/*
    $jsonstring = json_encode($rows_Evento);     
       // var_dump($rows_Evento);  
    echo $jsonstring;*/
          //var_dump($rows_Evento);
      
    //$ev = new Evento_BD();
   // $eventos = array();

  /*$json = array();

    foreach ($rows_Evento as $arreglo){
        $json[] = array(
            'id' => $arreglo['e_id'],
            'lugar' => $arreglo['e_lugar'], 
            'ciudad' => $arreglo['e_ciudad'],
            'fecha' => $arreglo['e_fecha'],
            'hora' => $arreglo['e_hora_inicio'],
            'nombre' => $arreglo['a_nombre']
        );
    /*$prod = new Artista($arreglo['a_id'], $arreglo['a_nombre'], $arreglo['a_archivo'], $arreglo['a_estado']);
    $thearray = (array) $prod;
    $jsonstring = json_encode($thearray);     
       // var_dump($rows_Evento);  
        echo $jsonstring;*/
  
  //}

 /*   $jsonstring = json_encode($json);     
       // var_dump($rows_Evento);  
    echo $jsonstring;
/*
    foreach ($rows_Evento as $arreglo){
       /*                     
        $art = new Artista($arreglo['a_id'], $arreglo['a_nombre'], $arreglo['a_archivo'], $arreglo['a_estado']);
        $art->setNombre($arreglo['a_nombre']);

        
        $event = new Evento($arreglo['e_id'], $arreglo['e_lugar'],$arreglo['e_ciudad'],$arreglo['e_fecha'],$arreglo['e_hora_inicio'],$art,$arreglo['a_estado']);
        array_push($eventos, $event);  
*/
/*
        $art = new Artista();
        $art->setNombre($arreglo['a_nombre']);
        $art->setArchivo($arreglo['a_archivo']);
        $event = new Evento;
        $event->setLugar($arreglo['e_lugar']);
        $event->setCiudad($arreglo['e_ciudad']);
        $event->setFecha($arreglo['e_fecha']);
        $event->setHora_Inicio($arreglo['e_hora_inicio']);
        $event->setArtista($art);*/
       //$art = new Artista();
        // array_push($eventos, $event);
        // echo json_encode($event). "\n";
      /* $jsonstring = json_encode($event);     
       // var_dump($rows_Evento);  
        echo $jsonstring;*/ 
       // echo $art;
        //var_dump($event);
      //  var_dump(json_encode($arreglo));
    //}
     /*  
     $jsonstring = json_encode($eventos);     
       // var_dump($rows_Evento);  
        echo $jsonstring; */
         //
  /*  header('Content-type: application/json; charset=utf-8');
    var_dump(json_encode($rows_Evento, JSON_FORCE_OBJECT));
    exit();*/

?>