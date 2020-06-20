<?php
	require_once '/../database/baseDatos.php';
	require_Once '/../model/Evento.php';

	class Evento_BD extends Evento{
		private $base;

		public function Evento_BD(){}
		public function _construct($id, /*$des, */$lug, $ciu, $fec, $hr,$art, $est){

			parent::_construct($id,/* $des, */$lug, $ciu, $fec, $hr, $art, $est);
		}

		public function Guardar_Evento(){
			$base = new baseDatos();
			$sql = "insert into evento (e_lugar, e_ciudad, e_fecha, e_hora_inicio, a_id) values ('".$this->getLugar()."','".$this->getCiudad()."','".$this->getFecha()."','".$this->getHora_Inicio()."','".$this->getArtista()->getId()."') ";
			$base->consulta($sql);
		}

		public function Enviar_Resultado(){

			$base = new baseDatos();
			/*$sql = "select * from evento e inner join artista a on e.a_id = a.a_id WHERE e_estado = 1";*/

			$sql = "select * from evento e left join artista a on e.a_id = a.a_id WHERE e.e_estado = 1 AND a.a_estado = 1";
// e.e_id, e.e_lugar, e.e_ciudad, e.e_fecha, e.e_hora_inicio,  a.a_id, a.a_nombre
//select * from evento e left join artista a on e.a_id = a.a_id WHERE e.e_estado = 1 AND a.a_estado = 1
			$eventos = $base->consulta($sql);
			$num_filas = $base->num_filas($eventos);
			$filas = array();
			while($arreglo = $base->fetch_array($eventos)) {
				array_push($filas, $arreglo);
			}
			return $filas;
		}


		public function EnviarResultado($busqueda){

			$base = new baseDatos();
			/*$sql = "select * from evento e inner join artista a on e.a_id = a.a_id WHERE e_estado = 1";*/

			$sql = "select * from evento e left join artista a on e.a_id = a.a_id WHERE e.e_estado = 1 AND a.a_estado = 1 AND e.e_id = '".$busqueda."' OR a.a_nombre LIKE '%".$busqueda."%' OR e.e_lugar LIKE '%".$busqueda."%' OR e.e_ciudad LIKE '%".$busqueda."%'";

			
// e.e_id, e.e_lugar, e.e_ciudad, e.e_fecha, e.e_hora_inicio,  a.a_id, a.a_nombre
//select * from evento e left join artista a on e.a_id = a.a_id WHERE e.e_estado = 1 AND a.a_estado = 1
			$eventos = $base->consulta($sql);
			$num_filas = $base->num_filas($eventos);
			$filas = array();
			while($arreglo = $base->fetch_array($eventos)) {
				array_push($filas, $arreglo);
			}
			return $filas;
		}

		public function Modificar_Evento($id){
	        $base = new baseDatos();
	        $sql = "Update evento set e_lugar='".$this->getLugar()."', e_ciudad = '".$this->getCiudad()."', e_fecha = '".$this->getFecha()."', e_hora_inicio = '".$this->getHora_Inicio()."', a_id = '".$this->getArtista()->getId()."' where e_id = ".$id; 
	        $base->consulta($sql);
	    }
	    public function Eliminar_Evento($id){
	        $base = new baseDatos();
	        $sql = "Update evento set e_estado = 0 where e_id = ".$id; 
	        $base->consulta($sql);
	    }


	}

?>