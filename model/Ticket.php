<?php
	
class Ticket{

	private $id;
	private $descripcion;
	private $precio;
	private $stock;
	private $tipo;
	private $evento;
	private $estado;

	public function Ticket($id,$des,$prec,$st,$tip,$ev,$est){
		$this->id 			= $id;
		$this->descripcion	= $des;
		$this->precio 		= $prec;
		$this->stock 		= $st;
		$this->tipo 		= $tip;
		$this->evento 		= $ev;
		$this->estado 		= $est;
	}

	public function getId(){
		return $this->id;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getEvento(){
		return $this->evento;
	}
	public function getEstado(){
		return $this->estado;
	}
	public function setDescripcion($des){
		$this->descripcion = $des;
	}
	public function setPrecio($prec){
		$this->precio = $prec;
	}
	public function setStock($st){
		$this->stock =$st;
	}
	public function setTipo($tip){
		$this->tipo = $tip;
	}
	public function setEvento($ev){
		$this->evento = $ev;
	}
	public function setEstado($est){
		$this->estado = $est;
	}
}


?>