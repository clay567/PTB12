<?php
$mysqli = new mysqli('localhost', 'root', '', 'world');

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
$stmt->bind_param('sssd', $code, $language, $official, $percent);

$code = 'DEU';
$language = 'Bavarian';
$official = "F";
$percent = 11.2;

/* ejecuta sentencias prepradas */
$stmt->execute();

printf("%d Fila insertada.<br>", $stmt->affected_rows);

/* cierra sentencia y conexión */
$stmt->close();

/* Limpia la tabla CountryLanguage */
$mysqli->query("DELETE FROM CountryLanguage WHERE Language='Bavarian'");
printf("%d Fila borrada.<br>", $mysqli->affected_rows);

/* cierra la conexión */
$mysqli->close();
?>