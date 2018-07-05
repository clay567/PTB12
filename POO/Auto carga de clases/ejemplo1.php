
<?php
spl_autoload_register(function ($nombre) {
    echo "Intentando cargar $nombre.\n";
    throw new Exception("Imposible cargar $nombre.");
});

try {
    $obj = new ClaseNoCargable();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>
