
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de constantes predefinidas de pdo para la obtencion de resultados con fetch()
	</h2>";
$dsn = 'mysql:dbname=world;host=127.0.0.1;port=3306';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
#1 Obtención de filas usando diferentes tipos de obtención
$gsent = $gbd->prepare("SELECT * FROM city");
$gsent->execute();

/* Prueba de tipos de PDOStatement::fetch */
print("PDO::FETCH_ASSOC: ");
print("Devolver la siguiente fila como un array indexado por nombre de colunmna <br>");
$result = $gsent->fetch(PDO::FETCH_ASSOC);
print_r($result);
print("<br><br>");

print("PDO::FETCH_BOTH: ");
print("Devolver la siguiente fila como un array indexado por nombre y número de columna <br>");
$result = $gsent->fetch(PDO::FETCH_BOTH);
print_r($result);
print("<br><br>");

print("PDO::FETCH_LAZY: ");
print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades <br>");
$result = $gsent->fetch(PDO::FETCH_LAZY);
print_r($result);
print("<br><br>");

print("PDO::FETCH_OBJ: ");
print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades <br>");
$result = $gsent->fetch(PDO::FETCH_OBJ);
print $result->Name;
print("<br><br>");

/*
PDO::FETCH_ASSOC: Devolver la siguiente fila como un array indexado por nombre de colunmna
Array
(
    [name] => apple
    [colour] => red
)

PDO::FETCH_BOTH: Devolver la siguiente fila como un array indexado por nombre y número de columna
Array
(
    [name] => banana
    [0] => banana
    [colour] => yellow
    [1] => yellow
)

PDO::FETCH_LAZY: Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades
PDORow Object
(
    [name] => orange
    [colour] => orange
)

PDO::FETCH_OBJ: Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades
kiwi
*/



?>
