<?php 

	class Usuario{
		private $id;
		private $usuario;
		private $contrasena;
		private $cedula;
		private $nombres;
		private $apellidos;
		private $telefono;
		private $direccion;
		private $correo;
		private $tipo;
		private $estado;
		private $archivo;

		public function Usuario($id, $usuario,$contrasena,$tipo,$estado){
			$this->id = $id;
			$this->usuario         = $usuario;
			$this->contrasena      = $contrasena;
			$this->tipo    = $tipo;
			$this->estado = $estado;
		}

		public function getId(){
			return $this->id;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function getContrasena(){
			return $this->contrasena;
		}

		public function getCedula(){
			return $this->cedula;
		}

		public function getNombres(){
			return $this->nombres;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function getTelefono(){
			return $this->telefono;
		}

		public function getDireccion(){
			return $this->direccion;
		}

		public function getCorreo(){
			return $this->correo;
		}

		public function getTipo(){
			return $this->tipo;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function getArchivo(){
			return $this->archivo;
		}

		public function setUsuario($usuario){
			$this->usuario=$usuario;
		}

		public function setContrasena($contra){
			$this->contrasena=$contra;
		}

		public function setCedula($cedula){
			$this->cedula=$cedula;
		}

		public function setNombres($nombres){
			$this->nombres=$nombres;
		}

		public function setApellidos($apellidos){
			$this->apellidos=$apellidos;
		}

		public function setTelefono($telefono){
			$this->telefono=$telefono;
		}

		public function setCorreo($correo){
			$this->correo=$correo;
		}

		public function setDireccion($direccion){
			$this->direccion=$direccion;
		}

		public function setTipo($tipo){
			$this->tipo=$tipo;
		}

		public function setEstado($estado){
			$this->estado=$estado;
		}

		public function setArchivo($archivo){
			$this->archivo=$archivo;
		}

	}




 ?>