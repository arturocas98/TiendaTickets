<?php 
	/**
	 * 
	 */
	class Factura 
	{
		private $id;
		private $cliente;
		
		private $evento_id;
		private $ticket_id;

		private $cantidad;
		private $precio;
		private $descripcion;
		private $subtotal;
		private $total;

		public function Factura($id,$cliente, $evento_id,$ticket_id,$cantidad,$precio,$descripcion,$subtotal,$total)
		{
			$this->id= $id;
			$this->cliente = $cliente;
			$this->evento_id = $evento_id;
			$this->ticket_id = $ticket_id;
			$this->cantidad = $cantidad;
			$this->precio = $precio;
			$this->descripcion = $descripcion;
			$this->subtotal = $subtotal;
			$this->total = $total;
		}

		public function getId(){
			return $this->id;
		}

		public function getCliente(){
			return $this->cliente;
		}

		public function getEventoid(){
			return $this->evento_id;
		}

		public function getTicketid(){
			return $this->ticket_id;
		}

		public function getCantidad(){
			return $this->descripcion;
		}

		public function getPrecio(){
			return $this->descripcion;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}

		public function getSubtotal(){
			return $this->subtotal;
		}

		public function getTotal(){
			return $this->total;
		}

		public function setCliente($cliente){
			$this->cliente = $cliente;
		}

		public function setEventoid($evento_id){
			$this->evento_id = $evento_id;
		}

		public function setTicketid($ticket_id){
			$this->ticket_id = $ticket_id; 
		}

		public function setPrecio($precio){
			$this->precio = $precio;
		}

		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function setSubtotal($subtotal){
			$this->subtotal = $subtotal;
		}

		public function setTotal($total){
			$this->total = $total;
		}



	}
 ?>