<?php
class Persona{
	private $nombre;
	protected $apellido;
	//creando un constructor
	public function __construct(){		
	}
	public function __destruct(){	
	}
	//encapsulando
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
}