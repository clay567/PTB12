<?php
require 'automovil.php';
//creando objetos
$obj1 = new Automovil("PQR523", 2000, "4x4");
$obj1->imprimirAuto();
echo "<br><br>";
$obj2 = new Automovil("APG456", 2016, "Minivan");
$obj2->imprimirAuto();
echo "<br><br>";
$obj3 = new Automovil("TMA123", 2010, "Station");
$obj3->imprimirAuto();
?>