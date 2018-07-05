
<?php
/*Una buena característica de PDO::query() es que permite iterar sobre el conjunto de filas devueltos por una ejecución de una sentencia SELECT con éxito. */
echo "<h2 style=text-align:center;background-color:#ffbf00>llamando a una funcion que ejecuta una consulta y obtiene resultados
	</h2>";
function getFruit($conn) {
    $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
    }
}
?>
