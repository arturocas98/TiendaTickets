<?php
	require_once '/../database/baseDatos.php';
	require_Once '/../model/Evento.php';

	class Factura_BD extends Factura{
		private $base;

		public function Evento_BD(){}
		public function _construct($cliente,$evento,$ticket,$cantidad,$precio, $descripcion, $subtotal,$total){

			parent::_construct($id,$cliente,$evento,$ticket,$cantidad,$precio, $descripcion, $subtotal,$total);
		}


		public function Recibir_Factura(){

			$base = new baseDatos();
			$sql = "select * from factura f join cliente c on f.id_factura=c.id_cliente";
			$facturas = $base->consulta($sql);
			$num_filas = $base->num_filas($facturas);
			$filas = array();
			while($arreglo = $base->fetch_array($facturas)) {
				array_push($filas, $arreglo);
			}
			return $filas;
		}


		

	}

?>