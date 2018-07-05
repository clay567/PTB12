
<?php
//Llamar a un procedimiento almacenado con un parámetro de salida
/*Si el controlador de la base de datos lo admite, una aplicación podría también vincular parámetros para salida y para entrada. Los parámetros de salida se emplean típicamente para recuperar valores de procedimientos almacenados. Los parámetros de salida son ligeramente más complejos de usar que los de entrada, de manera que el desarrollador debe conocer la magnitud de un parámetro dado cuando se vincula. Si el valor resulta ser más grande que el tamaño indicado, se emitirá un error. */
echo "<h2 style=text-align:center;background-color:#ffbf00>Llamar a un procedimiento almacenado con un parámetro INOUT</h2>";
$sentencia = $mbd->prepare("CALL sp_returns_string(?)");
$sentencia->bindParam(1, $valor_devuleto, PDO::PARAM_STR, 4000); 

// llamar al procedimiento almacenado
$sentencia->execute();

print "El procedimiento devolvió $valor_devuleto\n";
?>
