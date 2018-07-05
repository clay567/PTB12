<?php
 #1 Crear una instancia PDO a través de una invocación al controlador
/* Conectar a una base de datos de MySQL invocando al controlador */
echo "<h2 style=text-align:center;background-color:#ffbf00>API PDO conexion a MySQL</h2>";
$dsn = 'mysql:dbname=test;host=127.0.0.1;port=3306';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
    echo "conexion exitosa a mysql";
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>
