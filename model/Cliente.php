<?php
	

	class Cliente{
		private $id;
		private $cedula;
		private $primerNombre;
		private $segundoNombre;
		private $primerApellido;
		private $segundoApellido;
		private $correo;
		private $telefono;
		private $edad;
		private $direccion;
		private $estado;
		
		public function Cliente($id, $ced, $primN, $segN, $primA, $segA, $correo, $telef, $edad, $dir,$est){
			$this->id              = $id;
			$this->cedula          = $ced;
			$this->primerNombre    = $primN;
			$this->segundoNombre   = $segN;
			$this->primerApellido  = $primA;
			$this->segundoApellido = $segA;
			$this->correo          = $correo;
			$this->telefono        = $telef;
			$this->edad            = $edad;
			$this->direccion       = $dir;
			$this->estado          = $est;
		}

		public function getId(){
			return $this->id;
		}
		public function getCedula(){
			return $this->cedula;
		}
		public function getPrimerNombre(){
			return $this->primerNombre;
		}
		public function getSegundoNombre(){
			return $this->segundoNombre;
		}
		public function getPrimerApellido(){
			return $this->primerApellido;
		}
		public function getSegundoApellido(){
			return $this->segundoApellido;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function getEstado(){
			return $this->estado;
		}

		public function setCedula($ced){
			$this->cedula = $ced;
		}

		public function setPrimerNombre($primN){
			$this->primerNombre = $primN;
		}
		public function setSegundoNombre($segN){
			$this->segundoNombre   = $segN;
		}
		public function setPrimerApellido($primA){
			$this->primerApellido  = $primA;
		}
		public function setSegundoApellido($segA){
			$this->segundoApellido = $segA;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function setTelefono($telef){
			$this->telefono = $telef;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function setDireccion($dir){
			$this->direccion = $dir;
		}
		public function setEstado($est){
			$this->estado = $est;
		}


	}

?>