
<?php
#1 Ejecutar una sentencia preparada con parámetros de sustitución con nombre
/* Ejecutar una sentencia preparada vinculando varialbes de PHP */

echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecutar una sentencia preparada con parametros de sustitucion con nombre bindparam()</h2>";

$gbd=new pdo("mysql:host=localhost;port=3306;dbname=world","root","");
$poblacion = 100000;
$gobierno = 'republic';
$gsent = $gbd->prepare('SELECT name, continent, region
    FROM country
    WHERE population < :poblacion AND governmentform LIKE :gobierno');
$gsent->bindParam(':poblacion', $poblacion);
$gsent->bindParam(':gobierno', $gobierno);
/*$gsent->bindValue(':calories', $calorías, PDO::PARAM_INT);
$gsent->bindValue(':colour', $color, PDO::PARAM_STR);*/
$gsent->execute();
$resultado=$gsent->fetchAll();
var_dump($resultado);

print $resultado[6][0];
print $resultado[6][1];
print $resultado[6][2];
?>
