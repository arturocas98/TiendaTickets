<?php
	include("../../controlador/Ticket_BD.php");

	
	//echo $e_id;
	$t = new Ticket_BD();
	$rows_Ticket = array();

	$rows_Ticket = $t->EnviarResultado();

	if(isset($_GET['idT'])){
		$idT = $_GET['idT'];
	    $rows_Ticket = $t->Seleccionar_TicketC($idT);
	    $jsonstring = json_encode(['statuscode' => 200, 'ticket' => $rows_Ticket]);
	   // echo json_encode(['statuscode' => 200, 'ticket' => $rows_Ticket]);
	}else{

	 	if(isset($_POST['idT'])){

		/*$e = $_POST['idE'];*/
			$idT = $_POST['idT'];
		    $rows_Ticket = $t->Seleccionar_Ticket($idT);
    	}else if(isset($_POST['ticketB'])){
		    $ticketB = $_POST['ticketB'];
		    $rows_Ticket = $t->Enviar_Resultado($ticketB);
		    
		}

	    if(empty($rows_Ticket)){
	        $jsonstring = 1;
	    }else{

	        $json = array();

	        foreach ($rows_Ticket as $arreglo) {
				$json[] = array(
					'id' => $arreglo['t_id'],
					'descripcion' => $arreglo['t_descripcion'],
					'precio' => $arreglo['t_precio'],
					'stock' => $arreglo['t_stock'],
					'tipo' => $arreglo['t_tipo'],
					'e_id' => $arreglo['e_id'],
					'lugar' => $arreglo['e_lugar'],
					'ciudad' => $arreglo['e_ciudad'],
					'fecha' => $arreglo['e_fecha'],
					'hora' => $arreglo['e_hora_inicio'],
					'a_id' => $arreglo['a_id'],
					'nombre' => $arreglo['a_nombre'],
					'archivo' => $arreglo['a_archivo']
				);
			}

	        //$jsonstring = json_encode($json);    
			 $jsonstring = json_encode($json);
	    }
	}    
    echo $jsonstring;
/*
	$rows_Ticket = $t->Enviar_Resultado($e_id);
	$json = array();
	
	foreach ($rows_Ticket as $arreglo) {
		$json[] = array(
			'id' => $arreglo['t_id'],
			'descripcion' => $arreglo['t_descripcion'],
			'precio' => $arreglo['t_precio'],
			'stock' => $arreglo['t_stock'],
			'tipo' => $arreglo['t_tipo'],
			'lugar' => $arreglo['e_lugar'],
			'ciudad' => $arreglo['e_ciudad'],
			'fecha' => $arreglo['e_fecha'],
			'hora' => $arreglo['e_hora_inicio'],
			'nombre' => $arreglo['a_nombre'],
			'archivo' => $arreglo['a_archivo']
		);
	}

	$jsonstring = json_encode($json);
	echo $jsonstring;*/

?>