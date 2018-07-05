<?php
require 'vehiculos.php';
class Automovil extends Vehiculos{
	private $tipo;
	
	public function __construct($placa, $year, $tipo){
		//utilizando el constructor de la clase base
		parent:: __construct($placa,$year);
		//inicializar varible de esta clase
		$this->tipo = $tipo;
	}
	//encapsular
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	//metodo para imprimir
	public function imprimirAuto(){
		echo "Placa: ".$this->getPlaca();
		echo "<br>A. Fabric.: ".$this->getYear();
		echo "<br>Tipo: ".$this->tipo;
		echo "<br>Total Km.: ".self::$km+=50;
	}
}