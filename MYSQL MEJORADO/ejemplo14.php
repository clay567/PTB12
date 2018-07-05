
<?php
$mysqli = new mysqli("localhost", "root", "", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";

if ($sentencia = $mysqli->prepare($consulta)) {

    /* ejecutar la sentencia */
    $sentencia->execute();

    /* vincular las variables de resultados */
    $sentencia->bind_result($nombre, $código);

    /* obtener los valores */
    while ($sentencia->fetch()) {
        printf ("%s (%s) <br>", $nombre, $código);
    }

    /* cerrar la sentencia */
    $sentencia->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
