<?php 
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de prepare</h2>";
	$mysqli = new mysqli("localhost", "root", "", "world");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$city = "Amersfoort";

/* crear una sentencia preparada */
if ($stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?")) {

    /* ligar parámetros para marcadores */
    $stmt->bind_param("s", $city);

    /* ejecutar la consulta */
    $stmt->execute();

    /* ligar variables de resultado */
    $stmt->bind_result($district);

    /* obtener valor */
    $stmt->fetch();

    printf("%s is in district %s\n", $city, $district);

    /* cerrar sentencia */
    $stmt->close();
}

/* cerrar conexión */
$mysqli->close();
 ?>