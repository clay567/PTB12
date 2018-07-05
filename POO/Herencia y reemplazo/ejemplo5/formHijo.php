<?php
//incluir el archivo
require 'hijo.php';
//creando el objeto
$objeto1 = new Hijo();
//asignando valores
$objeto1->setApellido("Rosales");
$objeto1->setNombre("Juan");
$objeto1->setEdad(25);
$objeto1->setMonto(3000);
//visualizando en pantalla
echo "Nombres: ".$objeto1->getNombre().", ".$objeto1->apellido;
echo "<br>Edad: ".$objeto1->getEdad();
echo "<br>Monto S/. ".$objeto1->getMonto();
?>