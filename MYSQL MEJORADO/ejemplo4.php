
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de fetch_row()</h2>";
$mysqli = new mysqli("localhost", "root", "", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";
	
if ($resultado = $mysqli->query($consulta)) {
	var_dump($resultado);
	/*$fila = $resultado->fetch_row();
	var_dump($fila);
	$fila = $resultado->fetch_row();
	var_dump($fila);
	$fila = $resultado->fetch_row();
	var_dump($fila);
	$fila = $resultado->fetch_row();
	var_dump($fila);
	$fila = $resultado->fetch_row();
	var_dump($fila);
	$fila = $resultado->fetch_row();
	var_dump($fila);*/
	
    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
        printf ("%s (%s)\n", $fila[0], $fila[1]);
        echo "<br>";
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
