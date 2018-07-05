<?php
require 'persona.php';
class Alumno extends Persona{
	//variables propias
	private $especialidad;
	//heredando el constructor de la clase base
	public function __construct(){
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	//encapsulando
	public function setEspecial($especial){
		$this->especialidad = $especial;
	}
	public function getEspecial(){
		return $this->especialidad;
	}
}
?>