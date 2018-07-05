<?php
$link = mysqli_connect('localhost', 'root', '', 'world');

/* verificar conexión */
if (!$link) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$stmt = mysqli_prepare($link, "INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'sssd', $code, $language, $official, $percent);

$code = 'DEU';
$language = 'Bavarian';
$official = "F";
$percent = 11.2;

/* ejecuta sentencias preparadas */
mysqli_stmt_execute($stmt);

printf("%d Fila insertada.\n", mysqli_stmt_affected_rows($stmt));

/* cierra sentencia y conexión */
mysqli_stmt_close($stmt);

/* Limpia la tabla CountryLanguage */
mysqli_query($link, "DELETE FROM CountryLanguage WHERE Language='Bavarian'");
printf("%d Fila borrada.\n", mysqli_affected_rows($link));

/* cierra la conexión */
mysqli_close($link);
?>