
<?php
/*Este ejemplo obtiene datos basándose en un valor de clave proporcionado por un formulario. La entrada del usuario es entrecomillada automáticamente, con lo cual no hay riesgo de un ataque por inyección de SQL. */
echo "<h2 style=text-align:center;background-color:#ffbf00>Ejecuta una sentencia preparada pasando un array de valores ,uso de marcadores de parametro con ? ,el dato proviene de un formulario de usuario
	</h2>";
$sentencia = $mbd->prepare("SELECT * FROM REGISTRY where name = ?");
if ($sentencia->execute(array($_GET['name']))) {
  while ($fila = $sentencia->fetch()) {
    print_r($fila);
  }
}
?>
