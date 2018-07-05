<?php
 #2 Prepara una sentencia SQL con parámetros de signos de interrogación
//Ejecuta una sentencia preparada pasando un array de valores 
echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecuta una sentencia preparada pasando un array de valores execute(array()) marcadores con signo de interrogacion ?</h2>";
$dbh=new PDO("mysql:host=localhost;dbname=world;port=3306","root","");

$sth = $dbh->prepare('SELECT name,countrycode,district FROM city WHERE id=?');
$sth->execute(array(2));
$red = $sth->fetchAll();

var_dump($red);
print_r($red);

print $red[0][0];
print $red[0][1];
print $red[0][2];
?>
