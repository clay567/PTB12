
<?php
$enlace = mysqli_connect("localhost", "root", "", "world");

/* comprobar la conexión */
if (!$enlace) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* sentencia preparada */
if ($sentencia = mysqli_prepare($enlace, "SELECT Code, Name FROM Country ORDER BY Name LIMIT 5")) {
    mysqli_stmt_execute($sentencia);

    /* vincular variables a la sentencia preparada */
    mysqli_stmt_bind_result($sentencia, $col1, $col2);

    /* obtener valores */
    while (mysqli_stmt_fetch($sentencia)) {
        printf("%s %s <br>", $col1, $col2);
    }

    /* cerrar la sentencia */
    mysqli_stmt_close($sentencia);
}

/* cerrar la conexión */
mysqli_close($enlace);
?>
