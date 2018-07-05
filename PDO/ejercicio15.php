
<?php
// Llamar a un procedimiento almacenado con un parámetro de entrada/salida
/*Un desarrollador podría también especificar parámetros que contienen valores tanto de entrada como de salida; la sintaxis es similar a la de los parámetros de salida. En el siguiente ejemplo, la cadena 'hola' es pasada al procedimiento almacenado, y cuando éste finaliza, 'hola' es reemplazada con el valor de retorno del procedimiento. */
echo "<h2 style=text-align:center;background-color:#ffbf00>Llamar a un procedimiento almacenado con un parámetro INOUT</h2>";
$sentencia = $mbd->prepare("CALL sp_takes_string_returns_string(?)");
$valor = 'hola';
$sentencia->bindParam(1, $valor, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 

// llamar al procedimiento almacenado
$sentencia->execute();

print "El procedimiento devolvió $valor\n";
?>
