<?php
// Ejecución de un lote en una transacción
/*En el siguiente ejemplo, se asume que se ha creado un conjunto de entradas para un nuevo empleado, al cual se le ha asignado el número de ID 23. Además de introducir los datos básicos de una persona, también es necesario registrar su sueldo. Es bastante simple realizar dos actualizaciones independientes, pero realizándolas entre las llamadas a PDO::beginTransaction() y PDO::commit() se garantiza que nadie más será capaz de ver los cambios hasta que se hayan completado. Si algo sale mal, el bloque catch revierte los cambios realizados desde que se creó la transacción y luego imprime un mensaje de error. */
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de beginTransaction(),exec(),commit(),rollback(),exception y setAttribute()</h2>";
try {
  $mbd = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2', 
      array(PDO::ATTR_PERSISTENT => true));
  echo "Conectado\n";
} catch (Exception $e) {
  die("No se pudo conectar: " . $e->getMessage());
}

try {  
  $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $mbd->beginTransaction();
  $mbd->exec("insert into staff (id, first, last) values (23, 'Joe', 'Bloggs')");
  $mbd->exec("insert into salarychange (id, amount, changedate) 
      values (23, 50000, NOW())");
  $mbd->commit();
  
} catch (Exception $e) {
  $mbd->rollBack();
  echo "Fallo: " . $e->getMessage();
}
/*No exite límite al realizar actualizaciones en una transacción. También es posible ejecutar consultas complejas para extraer datos, con al posibilidad de utilizar esa información para construir más actualizaciones y consultas; mientras que la transacción esté activa, se garantiza que nadie más pueda realizar cambios mientras se esté en mitad del trabajo. Para más información sobre transacciones, consulte la documentación proporcionada por su servidor de base de datos. */
?>