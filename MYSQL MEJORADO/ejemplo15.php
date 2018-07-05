
<?php
$link = mysqli_connect("localhost", "root", "", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";

if ($sentencia = mysqli_prepare($link, $consulta)) {

    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

    /* vincular las variables de resultados */
    mysqli_stmt_bind_result($sentencia, $nombre, $código);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {
        printf ("%s (%s)\n", $nombre, $código);
    }

    /* cerrar la sentencia */
    mysqli_stmt_close($sentencia);
}

/* cerrar la conexión */
mysqli_close($link);
?>
