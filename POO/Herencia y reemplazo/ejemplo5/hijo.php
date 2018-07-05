<?php
require 'ejercicio1.php';
//clase derivada de la clase base
class Hijo extends Padre{
	public $nombre;
	public $edad;
	//encapsulando
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setEdad($edad){
		$this->edad = $edad;
	}
	public function getEdad(){
		return $this->edad;
	}
}
?>