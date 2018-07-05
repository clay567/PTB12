<?php
//arreglo1
 echo "<h1 style=background:#ffbf00>array vacio llenado con la funcion rand() dentro de un for</h1>";
 $matrix=array();
 for ($i = 0; $i <5; $i++) {
 echo $matrix[$i]=rand(),"<br>";
 }
 print "<h3 style=background:#ffbf00;width:30%>recorriendo el contenido del array despues de haver sido llenado con el metodo rand():</h1><br>";
 for ($i=0; $i <5 ; $i++) { 
 	echo $matrix[$i].'<br>';
 }
//arreglo2
echo "<h1 style=background:#ffbf00>uso de foreach en un array indexado numericamente</h1>";
$arreglo=array(1,2,5,7);
 foreach ($arreglo as $value) {
	print $value."<br>";
 }
 echo "<h3 style=background:#ffbf00;width:30%>analizando el contenido con print_r:</h6>";
 print_r($arreglo);
 print '<br>';
//arreglo3
 echo "<h1 style=background:#ffbf00>uso de foreach en un array asociativo</h1>";
 $vector=array('manzana'=>1.00,'pera'=>2.00,'naranja'=>3.00);
 foreach ($vector as $key => $value) {
 echo $key.'=>'.$value."<br>";
 }
 echo "<h3 style=background:#ffbf00;width:30%>analizando el contenido con print_r:</h6>";
 print_r($vector);
 print '<br>';
//arreglo4
 echo "<h1 style=background:#ffbf00>uso de la funcion each() return array or false</h1>";
 $coleccion=array('stranger things'=>8,'13 reason why'=>13);
 while ($elemento=each($coleccion)) {
 print $elemento['key'].'-'.$elemento['value']."<br>";
 }
 //arreglo5
 echo "<h1 style=background:#ffbf00>uso de la funcion list() para inicializar varias variables de golpe</h1>";
 $matrix=array('cafe','marron','energia');
 list($a,$b,$c)=$matrix;
 echo $a,'-', $b,'-' ,$c;
 print "<br>";
 list($a,$b,$c)=array(5,array("nombre"=>'chapman'),true);
 print_r($b);
 print "<br>";
 //arreglo6
 echo "<h1 style=background:#ffbf00>matriz bidimensional de indice numerico recorrida con for</h1>";
 $matriz=array(array('c001','telefono','200.00'),array('c002','refrigerador','1000.00'));
 for ($i = 0; $i < 2; $i++) {
 	for ($j = 0; $j < 3; $j++) {
 		print $matriz[$i][$j]." ";
 		}
 	print "<br>";
 }
 echo "<h3 style=background:#ffbf00;width:30%>analizando el contenido con print_r:</h6>";
 print_r($matriz);
 print "<br>";
 //arreglo7
 echo "<h1 style=background:#ffbf00>matriz bidimensional de indice descriptivo recorrido con for</h1>";
 $matriz2=array(array('codigo'=>'c001','descripcion'=>'telefono','precio'=>200.00),array('codigo'=>'c002','descripcion'=>'refrigerador','precio'=>1000.00));
 for ($i = 0; $i < 2; $i++) {
 		echo $matriz2[$i]['codigo'].'-'.$matriz2[$i]['descripcion'].'-'.$matriz2[$i]['precio'].'<br>';
 	}
 echo "<h3 style=background:#ffbf00;width:30%>analizando el contenido con print_r:</h6>";
 print_r($matriz2);
 print '<br>';
 //arreglo8
 echo "<h1 style=background:#ffbf00>matriz de dimension irregular tecnica foreach para atravesarla</h1>";
 $matriz3=array(array('elvis','caira','laura',array('merma','flores')),array('vri','chile','colombia'));
 print_r($matriz3);
 print '<br>';
echo "<hr>"; 
$matriz4=array('libros'=>array('libro'=>array(array('id'=>1,'titulo'=>'php','autor'=>'cesar'),array('id'=>2,'titulo'=>'c#','autor'=>'inmobile'))));
 var_dump($matriz4['libros']);
 print_r($matriz4['libros']);
 echo "<br>";
 foreach ($matriz4 as $key => $value) {
 	foreach ($value as $key1 => $value1) {
 		foreach ($value1 as $key2 => $value2){
 			foreach ($value2 as $key3=>$value3){
 				echo $key3.'-'.$value3.'<br>';
 			}
 		}
 	}
 } 
?>