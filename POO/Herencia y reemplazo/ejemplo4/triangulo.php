<?php
require 'figuraras.php';
class Triangulo extends Figuras{
	private $base;
	private $altura;
	//contructor
	public function __construct($base, $altura){
		$this->base = $base;
		$this->altura = $altura;
	}
	//encapsulando
	public function setBase($base){
		$this->base = $base;
	}
	public function getBase(){
		return $this->base;
	}
	public function setAltura($altura){
		$this->altura = $altura;
	}
	public function getAltura(){
		return $this->altura;
	}
	//obligatorio implementas los metodos abstractos
	public function calcularArea(){
		return $this->altura * $this->base / 2;
	}
	//metodo para imprimir
	public function imprimirFigura(){
		echo "Figura Triangulo: ";
		echo "<br>Base: ".$this->getBase();
		echo "<br>Altura: ".$this->getAltura();
		echo "<br>Area: ".$this->calcularArea()."<br><br>";
	}
}
?>