
<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* sentencia preparada */
if ($sentencia = $mysqli->prepare("SELECT Code, Name FROM Country ORDER BY Name LIMIT 5")) {
    $sentencia->execute();

    /* vincular variables a la sentencia preparada */
    $sentencia->bind_result($col1, $col2);

    /* obtener valores */
    while ($sentencia->fetch()) {
        printf("%s %s <br>", $col1, $col2);
    }

    /* cerrar la sentencia */
    $sentencia->close();
}
/* cerrar la conexión */
$mysqli->close();

?>
