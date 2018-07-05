<?php
require 'alumno.php';
//creando objetos
$obj1 = new Alumno();
$obj1->setApellido("Ramirez Salas");
$obj1->setNombre("Diego");
$obj1->setEspecial("Sistemas");
//visualizando
echo "Nombres: ".$obj1->getNombre().", ".$obj1->getApellido();
echo "<br>Especialidad: ".$obj1->getEspecial();