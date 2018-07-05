
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de affected_rows</h2>";
$mysqli = new mysqli("localhost", "root", "", "world");

/* Comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Inserta filas */
$mysqli->query("CREATE TABLE Language SELECT * from CountryLanguage");
printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
print '<br>';

$mysqli->query("ALTER TABLE Language ADD Status int default 0");

/* Actualiza filas */
$mysqli->query("UPDATE Language SET Status=1 WHERE Percentage > 50");
printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);
print '<br>';
/* Elimina filas */
$mysqli->query("DELETE FROM Language WHERE Percentage < 50");
printf("Affected rows (DELETE): %d\n", $mysqli->affected_rows);
print '<br>';
/* Selecciona todas las filas */
$result = $mysqli->query("SELECT CountryCode FROM Language");
printf("Affected rows (SELECT): %d\n", $mysqli->affected_rows);
print '<br>';
$result->close();

/* Elimina la tabla "Language" */
$mysqli->query("DROP TABLE Language");

/* Cierra la conexión */
$mysqli->close();
?>
