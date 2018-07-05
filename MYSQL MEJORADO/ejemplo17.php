<?php 
	/* Abrir una conexión */
$mysqli = new mysqli("localhost", "root", "", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
if ($sentencia = $mysqli->prepare($consulta)) {

    /* ejecutar la consulta */
    $sentencia->execute();

    /* almacenar el resultado */
    $sentencia->store_result();

    printf("Número de filas: %d.\n", $sentencia->num_rows);
    print_r($sentencia);

    /* cerrar la sentencia */
    $sentencia->close();
}

/* cerrar la conexión */
$mysqli->close();
 ?>