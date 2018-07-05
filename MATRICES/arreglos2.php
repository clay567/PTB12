<?php
//arreglo1
echo "<h1 style=background:#ffbf00>bucle while</h1>";
$i=0;
while ($i<=10) {
	print $i;
	$i=$i+1;
	echo '<br>';
}
//arreglo2
echo "<h1 style=background:#ffbf00>do-while</h1>";
do
{
	echo "hola";
}while(0);
//arreglo3
echo "<h1 style=background:#ffbf00>bucle for</h1>";
echo "productos de Auto partes bob's",'<br>';
$Matrix=array('oil','tires','spark plugs');
for ($i = 0; $i <3; $i++) {
echo $i. " ". $Matrix[$i],'<br>';	
}
//arreglo4
echo "<h1 style=background:#ffbf00>funcion each y bucle while</h1>";
$arreglo=array('cdpearl'=>10,'cdalice'=>20,'cdfloyd'=>30);
while ($elemento=each($arreglo)) {
	echo $elemento['key'];
	print '-';
	echo $elemento['value'];
	print '<br>';
}
//arreglo5
echo "<h1 style=background:#ffbf00>funcion list y funcion each dentro de un bucle while</h1>";

$arreglo=array('radioMagica'=>88.3,'radioDobleNueve'=>99.1,'radioFilarmonia'=>102.7);
while (list($radio,$frecuencia)=each($arreglo)) {
	echo $radio,'-',$frecuencia,'<br>';
}
//funciones de array
/*
array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )
devuelve las claves, numéricas y de tipo string, del array. Si se especifica el parámetro opcional search_value, solamente serán devueltas las claves para ese valor. De lo contrario, son devueltas todas las claves de array.
Parámetros                                                                                                array:un array que contiene las claves a devolver 
search_value: Si se especifica, solamente serán devueltas las claves que contengan estos valores.          
Strict: Determina si debería usarse una comparación estricta (===) durante la búsqueda.                                                                                                    
Valores devueltos  Retorna un array con todas las claves de array.

mixed current ( array &$array ) Cada array tiene un puntero interno a su elemento "actual", que es iniciado desde el primer elemento insertado en el array. Devuelve el elemento actual en un array. La función current() simplemente devuelve el valor del elemento del array que está siendo apuntado por el puntero interno. No desplaza el puntero de ninguna manera. Si el puntero interno apunta más allá del final de la lista de elementos o el array está vacío, current() devolverá FALSE.

end() - Establece el puntero interno de un array a su último elemento
prev() - Rebobina el puntero interno del array
next() - Avanza el puntero interno de un array
*/

echo "<h1 style=background:#ffbf00>funciones de array:current,next,prev,end,reset</h1>";
$transport = array('pie', 'bici', 'coche', 'avión');
$mode = current($transport); // $mode = 'pie';
$mode = next($transport);    // $mode = 'bici';
$mode = current($transport); // $mode = 'bici';
$mode = prev($transport);    // $mode = 'pie';
$mode = end($transport);     // $mode = 'avión';
$mode = current($transport); // $mode = 'avión';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }

?>