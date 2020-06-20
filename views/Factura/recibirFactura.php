<?php 
	
	include("../../controlador/Ticket_BD.php");

	$f = new Factura_BD();
	$rows_Factur = array();

	$rows_Factura = $t->Recibir_Factura();


	if(empty($rows_Factura){
	        $jsonstring = 1;
	    }else{

	        $json = array();

	        foreach ($rows_Factura as $arreglo) {
				$json[] = array(
					'id_factura' => $arreglo['t_id'],
					'nombres' => $arreglo['c_nombre'],
					'apellidos' => $arreglo['c_apellidos'],
					'correo' => $arreglo['c_correo'],
					'direccion' => $arreglo['c_direccion'],
					'fecha' => $arreglo['e_fecha'],
					'hora' => $arreglo['e_hora_inicio'],
					'cantidad' => $arreglo['f_cantidad'],
					'precio' => $arreglo['f_precio'],
					'subtotal' => $arreglo['f_subtotal'],
					'total' => $arreglo['f_total']
				);
			}

	        
			$jsonstring = json_encode($json);
	    }
	}    
    echo $jsonstring;
 ?>