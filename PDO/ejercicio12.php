
<?php
#2 Obtener todos los valores de una única columna de un conjunto de resultados

/*El siguiente ejemplo demuestra cómo devolver todos los valores de una única columna de un conjunto de resultados, incluso si la sentencia SQL podría devolver múltiples columnas por cada fila.*/
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de constantes predefinidas de pdo para la obtencion de resultados con fetchAll()
	</h2>";
$dsn = 'mysql:dbname=world;host=127.0.0.1;port=3306';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
} 
$gsent = $gbd->prepare("SELECT * FROM country");
$gsent->execute();

/* Obtener todos los valores de la primera columna */
$resultado = $gsent->fetchAll(PDO::FETCH_COLUMN, 0);
var_dump($resultado);
?>
