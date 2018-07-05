
<?php
#1 Ejecutar una sentencia preparada con parámetros de sustitución con signo de interrogacion
/* Ejecutar una sentencia preparada vinculando variables de PHP */
echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecutar una sentencia preparada con parametros de sustitucion con signo de interrogacion bindparam()</h2>";

$gbd=new pdo("mysql:host=localhost;port=3306;dbname=world","root","");
$poblacion = 100000;
$gobierno = 'republic';

$gsent = $gbd->prepare('SELECT name, continent, region
    FROM country
    WHERE population < ? AND governmentform LIKE ?');

$gsent->bindParam(1, $poblacion);
$gsent->bindParam(2, $gobierno);
/*$gsent->bindValue(1, $calorías, PDO::PARAM_INT);
$gsent->bindValue(2, $color, PDO::PARAM_STR);*/
$gsent->execute();

$resultado=$gsent->fetchAll();
var_dump($resultado);

print $resultado[3][0];
print $resultado[3][1];
print $resultado[3][2];
?>
