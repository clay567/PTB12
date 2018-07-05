<?php
	#1 Prepara una sentencia SQL con parámetros de sustitución nombrados
	//Ejecuta una sentencia preparada pasando un array de valores
	
	echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecuta una sentencia preparada pasando un array de valores ,uso de marcadores de parametro con nombre
	</h2>";

	$dbh=new PDO("mysql:host=localhost;dbname=world;port=3306","root","");
	$sql='SELECT name,countrycode,district FROM city WHERE id=:identificador AND population=:poblacion';
	$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	
	$sth->execute(array(':identificador' => 5, ':poblacion' => 731200));
	$red = $sth->fetchAll();
	var_dump($red);
	print_r($red);
	print '<br><br><br><br>';
	print $red[0]['name'].'<br>';
	print $red[0]['countrycode'].'<br>';
	print $red[0]['district'].'<br>';
?>
