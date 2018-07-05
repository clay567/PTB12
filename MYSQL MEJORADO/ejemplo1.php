
<?php
	echo "<h2 style=text-align:center;background-color:#ffbf00>conexion a MySQL</h2>";
	$mysqli = new mysqli("localhost", "root", "", "discos");
	if ($mysqli->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
?>
