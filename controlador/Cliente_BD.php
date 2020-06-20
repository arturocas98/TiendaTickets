<?php
    require_once '/../database/baseDatos.php';
    include_once '/../model/Cliente.php';

    class Cliente_BD extends Cliente{

        private $base;

        //public function _construct(){}
        public function Cliente_BD(){}
        public function _construct($id, $ced, $primN, $segN, $primA, $segA, $correo, $telef, $edad, $dir,$est){

            parent::_construct($id, $ced, $primN, $segN, $primA, $segA, $correo, $telef, $edad, $dir,$est);
        }

        public function Guardar_Cliente(){
            $base = new baseDatos();
            $sql = "insert into cliente (c_cedula,c_primerN,c_segundoN,c_primerA,c_segundoA,c_correo,c_telef,c_edad,c_direccion) values ('".$this->getCedula()."','".$this->getPrimerNombre()."','".$this->getSegundoNombre()."','".$this->getPrimerApellido()."','".$this->getSegundoApellido()."','".$this->getCorreo()."','".$this->getTelefono()."','".$this->getEdad()."','".$this->getDireccion()."')"; 
            $base->consulta($sql);
        }
 
        public function EnviarResultado($cedula){
            $base = new baseDatos();
            $sql = "select * from cliente where c_estado = 1 and c_cedula LIKE '%".$cedula."%'";
            $clientes = $base->consulta($sql);
            $num_filas = $base->num_filas($clientes);
            $filas = array();
            while ($arreglo = $base->fetch_array($clientes)){
                array_push($filas,$arreglo);
            }

            return $filas;
        }


    }


?>