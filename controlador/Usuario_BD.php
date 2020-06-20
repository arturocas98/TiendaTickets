<?php 
 	require_once '/../database/baseDatos.php';
    //require_once("../forms/sesiones.php");
    include_once '/../model/Usuario.php';
    class Usuario_BD extends Usuario
    {
    	private $base;

        public function Usuario_BD(){}
    	public function _construct($id,$usuario,$contrasena,$tipo,$estado)
    	{
    	  parent::_construct($id,$usuario,$contrasena,$tipo,$estado);
    	}

    	public function Guardar_Usuario(){
    		$base = new baseDatos();
    		$sql = "insert into usuario (u_usuario,u_clave) values ('".$this->getUsuario()."','".$this->getContrasena()."')";
            $base->consulta($sql);

    	}

    	public function EnviarResultado(){
    		$base = new baseDatos();

    		$sql= "select * from usuario where u_estado = 1";
    		$usuario = $base->consulta($sql);
    		$num_filas = $base->num_filas($usuario);
    		$filas = array();

    		while ($arreglo = $base->fetch_array($usuario)) {
    			array_push($filas, $arreglo);
    		}

    		return $filas;
    	}

        public function Busqueda_Usuarios($usuario){
            $base = new baseDatos();
            $sql = "select * from usuario where u_usuario like '%".$usuario."%' and u_estado = 1 ";
            $usuarios = $base->consulta($sql);
            $num_filas = $base->num_filas($usuarios);

            $filas = array();
            while ($arreglo = $base->fetch_array($usuarios)) {
                 array_push($filas, $arreglo);     
            }
            return $filas;
        
        }

        public function Eliminar_Usuario($id){
        $base = new baseDatos();
        $sql = "Update usuario set u_estado = 0 where u_id = ".$id; 
        $base->consulta($sql);
        }

        public function Modificar_Usuario($usuario){
        $base = new baseDatos();
        $sql = "Update usuario set u_cedula ='".$this->getCedula()."', u_nombres = '".$this->getNombres()."', u_apellidos = '".$this->getApellidos()."', u_telefono = '".$this->getTelefono()."', u_direccion = '".$this->getDireccion()."', u_correo = '".$this->getCorreo()."', u_archivo = '".$this->getArchivo()."' where u_usuario = '".$usuario."'"; 
        $base->consulta($sql);
        }
        public function Modificar_UsuarioC($usuario){
        $base = new baseDatos();
        $sql = "Update usuario set u_clave ='".$this->getContrasena()."' where u_usuario = '".$usuario."'"; 
        $base->consulta($sql);
        }
    }


 ?>