
<?php
spl_autoload_register(function ($nombre) {
    echo "Intentando cargar $nombre.\n";
    throw new ExcepciónAusente("Imposible cargar $nombre.");
});

try {
    $obj = new ClaseNoCargable();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
//resultado
/*Intentando cargar ClaseNoCargable.
Intentando cargar ExcepciónAusente.

Fatal error: Class 'ExcepciónAusente' not found in testExcepcionAusente.php on line 4*/
?>
