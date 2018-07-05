<?php 
	$mysqli = new mysqli("localhost", "root", "", "world");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

/* crear tabla temporal */
$mysqli->query("CREATE TEMPORARY TABLE myCountry LIKE Country");

$query = "INSERT INTO myCountry SELECT * FROM Country WHERE Code LIKE ?";

/* preparar sentencia */
if ($stmt = $mysqli->prepare($query)) {

    /* Agrega variable para marcador de posición */
    $code = 'A%';
    $stmt->bind_param("s", $code);

    /* ejecutar sentencia */
    $stmt->execute();

    printf("filas insertadas: %d\n", $stmt->affected_rows);
    print_r($stmt);

    /* cerrar sentencia */
    $stmt->close();
}

/* cerrar conexión */
$mysqli->close();

 ?>