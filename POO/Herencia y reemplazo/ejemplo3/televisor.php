<?php
require 'artefacto.php';
class Televisor implements Artefacto {
	private $marca;
	private $pulgadas;
	//constructor
	public function __construct($marca, $pulgadas){
		$this->marca = $marca;
		$this->pulgadas = $pulgadas;
	}
	//encapsulando
	public function setMarca($marca){
		$this->marca = $marca;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function setPulgadas($pulgadas){
		$this->pulgadas = $pulgadas;
	}
	public function getPulgadas(){
		return $this->pulgadas;
	}
	//implementando los metodos abstractos
	public function calcularDescuento($monto){
		return $monto * self::DSCTO;
	}
	public function imprimirArtefacto(){
		echo "Televisor: ";
		echo "<br>Marca: ".$this->getMarca();
		echo "<br>Pulgadas: ".$this->getPulgadas();
	}
}