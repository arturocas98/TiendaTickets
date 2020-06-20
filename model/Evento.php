<?php
	class Evento{
		private $id;
		//private $descripcion;
		private $lugar;
		private $ciudad;
		private $fecha;
		private $hora_inicio;
		private $artista;
		private $estado;

		//public function Evento(){}
		public function Evento($id, /*$des,*/ $lug, $ciu, $fec, $hr,$art, $est){
			$this->id = $id;
			//$this->descripcion = $des;
			$this->lugar = $lug;
			$this->ciudad = $ciu;
			$this->fecha = $fec;
			$this->hora_inicio = $hr;
			$this->artista = $art;
			$this->estado = $est;
		}

		public function getId(){
			return $this->id;
		}

		/*public function getDescripcion(){
			return $this->descripcion;
		}*/
		public function getLugar(){
			return $this->lugar;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function getHora_Inicio(){
			return $this->hora_inicio;
		}
		public function getArtista(){
			return $this->artista;
		}
		public function getEstado(){
			return $this->estado;
		}

		/*public function setDescripcion($des){
			$this->descripcion = $des;
		}*/
		public function setLugar($lug){
			$this->lugar = $lug;
		}
		public function setCiudad($ciu){
			$this->ciudad = $ciu;
		}
		public function setFecha($fec){
			$this->fecha =  date('Y-m-d', strtotime($fec));
		}
		public function setHora_Inicio($hr){
			$this->hora_inicio = date('H:i:s', strtotime($hr));
		}
		public function setArtista($art){
			$this->artista = $art;
		}
		public function setEstado($est){
			$this->estado = $est;
		}

	}

?>