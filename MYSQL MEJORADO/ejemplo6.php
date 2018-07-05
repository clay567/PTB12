<?php
$mysqli = new mysqli("localhost", "root", "", "world");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 3";
$result = $mysqli->query($query);
//obtenemos 3 filas:con el primer fetch_array() obtenemos la primera fila ,con el segundo fetch_array() obtenemos la segunda fila y con el tercer fetch_array() obtenemos la tercer fila, por tanto si queremos obtener todas las filas de golpe utilicemos un bucle while 
/* array numérico */
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de fetch_row()</h2>";
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);
print '<br>';

/* array asociativo */
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de fetch_assoc()</h2>";
$row = $result->fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
print '<br>';

/* array numérico y asociativo */
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de fetch_assoc() y fetch_row</h2>";
$row = $result->fetch_array(MYSQLI_BOTH);
printf ("%s (%s)\n", $row[0], $row["CountryCode"]);
print '<br>';

/* liberar la serie de resultados */
$result->free();

/* cerrar la conexión */
$mysqli->close();
?>
