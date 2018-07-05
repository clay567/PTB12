
<?php
/* Ejecutar una sentencia preparada vinculando una variable y un valor */
echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecuta una sentencia preparada usando bindparam(),bindvalue() y execute()</h2>";
$gbd=new pdo("mysql:host=localhost;port=3306;dbname=world","root","");

$poblacion = 100000;
$gobierno = 'republic';

$gsent = $gbd->prepare('SELECT name, continent, region
    FROM country
    WHERE population < :poblacion AND governmentform LIKE :gobierno');

$gsent->bindParam(':poblacion', $poblacion, PDO::PARAM_INT);
//$sth->bindValue(':gobierno', "%{$gobierno}%");
$gsent->bindValue(':gobierno', "%{$gobierno}%");
$gsent->execute();
$resultado=$gsent->fetchAll();
var_dump($resultado);
print $resultado[0]['name'];
print $resultado[0]['continent'];
print $resultado[0]['region'];
?>
