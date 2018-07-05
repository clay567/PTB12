<?php
require 'televisor.php';
$tv1 = new Televisor("Samsung", 48);
$dscto = $tv1->calcularDescuento(1500);
$tv1->imprimirArtefacto();
echo "<br>Precio S/. 1500 <br>Descuento S/. ".$dscto;
?>