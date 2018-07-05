<?php
class Vehiculos{
	private $placa;
	private $yearFabricacion;
	//variable estatica
	protected static $km=0;
	//constructor con parametros
	public function __construct($placa, $year){
		$this->placa = $placa;
		$this->yearFabricacion = $year;
	}
	//encapsulando
	public function setPlaca($placa){
		$this->placa = $placa;
	}
	public function getPlaca(){
		return $this->placa;
	}
	public function setYear($year){
		$this->yearFabricacion = $year;
	}
	public function getYear(){
		return $this->yearFabricacion;
	}
}
?>