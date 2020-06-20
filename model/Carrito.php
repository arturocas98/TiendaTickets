<?php
include_once 'Session.php';

/**
 * 
 */
class Carrito extends Session
{
	
	
	function __construct()
	{
		parent::__construct('carrito'); //crea una session llamada carrito
	}

/*
	public function Setear_Tickets($this){
		 if($this->getSession() == NULL){
			$tickets = [];
		}
		$ticket = ['id' => (int)$id, 'cantidad' => (int)$cant];
		array_push($tickets, $ticket);
		$this->setSession(json_encode($tickets));
	}
*/
	public function Cargar_Tickets(){
		if($this->getSession() == NULL){
			return [];
		}

		return $this->getSession();
	}

	public function Agregar_Ticket($id, $cant){
		if($this->getSession() == NULL){
			$tickets = [];
		}else{
			$tickets = json_decode($this->getSession(), 1);

			for($i=0; $i<sizeof($tickets); $i++){
				if($tickets[$i]['id'] == $id){
					$tickets[$i]['cantidad']+=$cant;
					$this->setSession(json_encode($tickets));
					return $this->getSession();
				}
			}
		}

		//cuando el carrito está vacío

		$ticket = ['id' => (int)$id, 'cantidad' => (int)$cant];
		array_push($tickets, $ticket);
		$this->setSession(json_encode($tickets));
		return $this->getSession();
	}

	public function Eliminar_Ticket($id){

		if($this->getSession() == NULL){
			$tickets = [];
			
		}else{
			$tickets = json_decode($this->getSession(), 1);
			for($i =0; $i< sizeof($tickets); $i++){
				if($tickets[$i]['id'] == $id){
					
					$tickets[$i]['cantidad']--;

					if($tickets[$i]['cantidad'] == 0){

						unset($tickets[$i]);
						$tickets = array_values($tickets);
					}

					$this->setSession(json_encode($tickets));
					return true;
				}
			}


		}



	}
}

?>