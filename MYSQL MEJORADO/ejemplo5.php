
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de fetch_assoc()</h2>";
$mysqli = new mysqli("localhost", "root", "", "world");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

$consulta = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        printf ("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
        print('<br>');
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

/* cerrar la conexión */
$mysqli->close();
?>
