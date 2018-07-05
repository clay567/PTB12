
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso correcto de los marcadores de parametro, correcto vs incorrecto
	</h2>";
$sentencia = $mbd->prepare("SELECT * FROM REGISTRY where name LIKE '%?%'");
$sentencia->execute(array($_GET['name']));

// los marcadores de posición deben emplearse en el lugar del valor completo
$sentencia = $mbd->prepare("SELECT * FROM REGISTRY where name LIKE ?");
$sentencia->execute(array("%$_GET[name]%"));
?>
