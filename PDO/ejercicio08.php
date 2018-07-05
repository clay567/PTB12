
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00> bindvalue() y marcadores de parametro con :nombre</h2>";
/* Ejecutar una sentencia preparada vinculando varialbes de PHP */
$gbd=new pdo('mysql:host=localhost;port=3306;dbname=world','root','');
$codigo = 'ABW';
$lengua = 'english';
$gsent = $gbd->prepare('SELECT *
    FROM countrylanguage
    WHERE countrycode = :codigoPais AND language = :lenguaMaterna');
$gsent->bindValue(':codigoPais', $codigo, PDO::PARAM_STR);
$gsent->bindValue(':lenguaMaterna', $lengua, PDO::PARAM_STR);
$gsent->execute();
$resultado=$gsent->fetchAll();
var_dump($resultado);
print_r($resultado);
print $resultado[0][0];
print $resultado[0][1];
print $resultado[0][2];
print $resultado[0][3];
?>
