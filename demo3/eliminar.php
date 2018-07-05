<?php 
$id=$_GET['id'];
$mysqli=new mysqli("localhost","root","","personal");
$consulta="delete from personas where id=$id";
$estado=$mysqli->query($consulta);
if($estado==true){
$mensaje="eliminado";
//header("location:index.php?mensaje=$mensaje");
header("location:index.php?");

}else{
echo "error al intentar eliminar un registro";
}
 ?>

