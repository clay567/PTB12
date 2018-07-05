<?php 

	$x=print_r($_GET['v'],true);
	settype($x,"integer");
	/*echo gettype($x);
	echo $x;*/
	
	//$x=1;
	$mysqli=new mysqli("localhost","root","","personal");
	if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}
	$sentencia=$mysqli->prepare("select nombre from personas where id=?");
	$sentencia->bind_param("i",$x);
	$sentencia->execute();
	$sentencia->bind_result($nombre);
	$sentencia->fetch();
	if ($nombre=="") {
		echo "no existe nombre asociado al id enviado";
	}else{
	echo $nombre;	
	}
	
 ?>