<?php
$link = mysqli_connect("localhost", "root", "", "world");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$city = "Amersfoort";

/* crear una sentencia preparada */
if ($stmt = mysqli_prepare($link, "SELECT District FROM City WHERE Name=?")) {

    /* ligar parámetros para marcadores */
    mysqli_stmt_bind_param($stmt, "s", $city);

    /* ejecutar la consulta */
    mysqli_stmt_execute($stmt);

    /* ligar variables de resultado */
    mysqli_stmt_bind_result($stmt, $district);

    /* obtener valor */
    mysqli_stmt_fetch($stmt);

    printf("%s is in district %s\n", $city, $district);

    /* cerrar sentencia */
    mysqli_stmt_close($stmt);
}

/* cerrar conexión */
mysqli_close($link);
?>