<?php
//herencia de clases
//clase base
class Padre{
	//variables
	public $apellido;
	public $monto;
	//encapsulando
	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function setMonto($monto){
		$this->monto = $monto;
	}
	public function getMonto(){
		return $this->monto;
	}
}
?>