
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de beginTransaction(),exec(),commit()
	</h2>";
#1 Consignar una transacción básica
/* Iniciar una transacción, desactivando 'autocommit' */
$gbd->beginTransaction();

/* Insertar múltiples registros según "todo o nada" */
$sql = 'INSERT INTO fruit
    (name, colour, calories)
    VALUES (?, ?, ?)';

$gsent = $gbd->prepare($sql);

foreach ($frutas as $fruta) {
    $gsent->execute(array(
        $fruta->name,
        $fruta->colour,
        $fruta->calories,
    ));
}

/* Consignar los cambios */
$gbd->commit();

/* La conexión a la base de datos ahora a vuelto al modo 'autocommit' */

 #2 Consignar una transacción DDL


/* Iniciar una transacción, desactivando 'autocommit' */
$gbd->beginTransaction();

/* Cambiar el esquema de la base de datos */
$gsent = $gbd->exec("DROP TABLE fruit");

/* Consignar los cambios */
$gbd->commit();

/* La conexión a la base de datos ahora a vuelto al modo 'autocommit' */

/* No todas las bases de datos permitirán que las transacciones operen sobre sentencias DDL: algunas generarán errores, mientras que otras (incluida MySQL) automáticamente consignarán la transacción después de encontrar la primera sentencia DDL. */
?>
