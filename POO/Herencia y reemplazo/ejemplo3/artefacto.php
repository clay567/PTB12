<?php
//interfaces
interface Artefacto{
	//declaras constantes
	const DSCTO = 0.15;
	//todos sus metodos deben ser abstractos
	public function calcularDescuento($monto);
	public function imprimirArtefacto();
}
?>