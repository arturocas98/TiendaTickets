<?php

class baseDatos
{
    private $conexion;

    public function baseDatos(){
        require_once "bd.php";
        $this->conexion = @mysqli_connect(DB_SERVIDOR, DB_USER, DB_PASS, DB_BASE);
    }

    //enviar la consulta
    public function consulta($sql){
        return mysqli_query($this->conexion, $sql);
    }

    //devuelva el numero de filas
    public function num_filas($resultado){
        return mysqli_num_rows($resultado);
    }

    //devuelva el resulset-array
    public function fetch_array($resultado){
        return mysqli_fetch_array($resultado);
    }

    //public function _construct(){
    //}


}

?>