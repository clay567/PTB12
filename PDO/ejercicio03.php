
<?php
/* Ejecutar una sentencia preparada proporcionando un array de valores de inserción */
echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecuta una sentencia preparada pasando un array de valores ,uso de marcadores de parametro con nombre</h2>";
$gbd=new pdo('mysql:host=localhost;port=3306;dbname=world','root','');
$idciudad = 6;
$gsent = $gbd->prepare('SELECT name, countrycode, district
    FROM city
    WHERE id = :ciudad');
$gsent->execute(array(':ciudad' => $idciudad));
$resultado=$gsent->fetchAll();
var_dump($resultado);
print $resultado[0][0];
print $resultado[0][1];
print $resultado[0][2];
?>
