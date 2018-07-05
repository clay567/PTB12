<?php
//clases abstractas
abstract class Figuras{
	private $nombre;
	//constructor
	public function __construct(){
	}
	//encapsulado
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	//funcion abstracta
	abstract function calcularArea();
}