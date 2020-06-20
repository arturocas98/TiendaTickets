<?php
require_once '/../database/baseDatos.php';
require_once '/../model/Ticket.php';

/**
 * 
 */
class Ticket_BD extends Ticket
{
	private $base;
	public function Ticket_BD(){}
	function _construct($id,$des,$prec,$st,$tip,$ev,$est)
	{
		parent::_construct($id,$des,$prec,$st,$tip,$ev,$est);
	}


	public function EnviarResultado(){

		$base = new baseDatos();
		/*$sql = "select * from evento e inner join artista a on e.a_id = a.a_id WHERE e_estado = 1";*/

		$sql = "select * from ticket t inner join evento e on t.e_id = e.e_id inner join artista a on e.a_id = a.a_id WHERE t.t_estado = 1 AND e.e_estado = 1 AND a.a_estado = 1";
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


	public function Guardar_Ticket(){
		$base = new baseDatos();
		$sql = "insert into ticket (t_descripcion,t_precio,t_stock,t_tipo,e_id) values ('".$this->getDescripcion()."','".$this->getPrecio()."','".$this->getStock()."','".$this->getTipo()."','".$this->getEvento()->getId()."')";
		$base->consulta($sql);

	}

	public function Seleccionar_Ticket($idT){
		$base = new baseDatos();
		$sql = "select * from ticket t inner join evento e on t.e_id = e.e_id inner join artista a on e.a_id = a.a_id WHERE t.t_estado = 1 AND e.e_estado = 1 AND a.a_estado = 1 AND t.t_id = ".$idT;
		$tickets = $base->consulta($sql);
		$num_filas = $base->num_filas($tickets);
		$filas = array();
		while ($arreglo = $base->fetch_array($tickets)) {
             array_push($filas, $arreglo);     
        }
        return $filas;

		
	}

	public function Seleccionar_TicketC($idT){
		$base = new baseDatos();
		$sql = "select * from ticket t inner join evento e on t.e_id = e.e_id inner join artista a on e.a_id = a.a_id WHERE t.t_estado = 1 AND e.e_estado = 1 AND a.a_estado = 1 AND t.t_id = ".$idT;
		$tickets = $base->consulta($sql);
		$num_filas = $base->num_filas($tickets);
		$arreglo = $base->fetch_array($tickets);

		return [
			'id' => $arreglo['t_id'],
			'descripcion' => $arreglo['t_descripcion'],
			'precio' => $arreglo['t_precio'],
			'stock' => $arreglo['t_stock'],
			'tipo' => $arreglo['t_tipo'],
			'e_id' => $arreglo['e_id'],
			'lugar' => $arreglo['e_lugar'],
			'ciudad' => $arreglo['e_ciudad'],
			'fecha' => $arreglo['e_fecha'],
			'hora' => $arreglo['e_hora_inicio'],
			'a_id' => $arreglo['a_id'],
			'nombre' => $arreglo['a_nombre'],
			'archivo' => $arreglo['a_archivo']
		];
	}


	public function Enviar_Resultado($busqueda){
		$base = new baseDatos();
		$sql = "select * from ticket t inner join evento e on t.e_id = e.e_id inner join artista a on e.a_id = a.a_id WHERE t.t_estado = 1 AND e.e_estado = 1 AND a.a_estado = 1 AND e.e_id = '".$busqueda."' OR a.a_nombre LIKE '%".$busqueda."%' OR e.e_lugar LIKE '%".$busqueda."%' OR e.e_ciudad LIKE '%".$busqueda."%' OR t.t_descripcion LIKE '%".$busqueda."%'";
		$tickets = $base->consulta($sql);
		$num_filas = $base->num_filas($tickets);
		$filas = array();
		while ($arreglo = $base->fetch_array($tickets)) {
             array_push($filas, $arreglo);     
        }
        return $filas;

	}
	public function Modificar_Ticket($id){
	        $base = new baseDatos();
	        $sql = "Update ticket set t_descripcion='".$this->getDescripcion()."', t_stock = '".$this->getStock()."', t_precio = '".$this->getPrecio()."', t_tipo = '".$this->getTipo()."' where t_id = ".$id; 
	        $base->consulta($sql);
	    }
	    public function Eliminar_Evento($id){
	        $base = new baseDatos();
	        $sql = "Update ticket set t_estado = 0 where t_id = ".$id; 
	        $base->consulta($sql);
	    }

	
}



?>