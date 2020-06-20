<?php
	
/**
 * 
 */
class Session
{
	private $session = NULL;
	
	public function __construct($session_nombre)
	{
		session_start();

		if(!isset($_SESSION[$session_nombre])){
			$_SESSION[$session_nombre] = NULL;
		}

		$this->session = $session_nombre;
	}

	public function setSession($session_nombre){
		$_SESSION[$this->session] = $session_nombre;
	}

	public function getSession(){
		return $_SESSION[$this->session];
	}
}

?>