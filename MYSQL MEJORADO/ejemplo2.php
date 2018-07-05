<?php
#2 Interfaz orientada a objetos y procedimental

#procedimental
echo "<h2 style=text-align:center;background-color:#ffbf00>conexion a MySQL usando la extension php mysqli en su estilo procedural</h2>";
$mysqli = mysqli_connect("127.0.0.1", "root", "", "world",3306);
if (mysqli_connect_errno($mysqli)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$resultado = mysqli_query($mysqli, "SELECT Name FROM city LIMIT 10");
var_dump($resultado);
print_r($resultado);
echo "<br>";
//aqui solo obtenemos el primer valor del campo name
/*$fila = mysqli_fetch_assoc($resultado);
print_r($fila);
echo "<br>";*/

//aqui obtenemos todos los valores del campo name
while ($fila = mysqli_fetch_assoc($resultado)) {
	echo $fila['Name'].'<br>';	
};

var_dump($fila);

#orientado a objetos
echo "<h2 style=text-align:center;background-color:#ffbf00>conexion a MySQL usando la extension php en su estilo orientado a objetos</h2>";
$mysqli = new mysqli("localhost", "root", "", "world",3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
//el uso de alias en campos genera error
$strescape=$mysqli->real_escape_string("SELECT 'elecciones para complacer a todos.' AS Name FROM city");
var_dump($strescape);
$resultado = $mysqli->query($strescape);
var_dump($resultado);
//$fila = $resultado->fetch_assoc();
?>
	