<?php 
include('conexion.php');
$codigoUsuario=$_REQUEST['CodigoUsuario'];
$codigoAccion=$_REQUEST['CodigoAccion'];
$f_inicio=$_REQUEST['FechaInicial'];
$f_fin=$_REQUEST['FechaFinal'];
$arregloAcciones=array('0' => 'modificar','1' => 'eliminar','2' => 'crear','3' => 'duplicar','4' => 'todos');
$arregloNombres=array('1' => 'vanessa','2' => 'miluska','3' => 'melissa','4' => 'karen','5' => 'sheila');

if($codigoAccion==4){
$consulta="select u.nombre,s.nombreArchivo,s.rutaArchivo,s.fecha,s.accion from sesion as s inner join usuario as u on s.codigoUsuario=u.codigo where s.codigoUsuario=$codigoUsuario and date_format(s.fecha,'%Y-%m-%d') between '$f_inicio' and '$f_fin'";
}else{
$consulta="select u.nombre,s.nombreArchivo,s.rutaArchivo,s.fecha,s.accion from sesion as s inner join usuario as u on s.codigoUsuario=u.codigo where s.codigoUsuario=$codigoUsuario and s.accion=$codigoAccion and date_format(s.fecha,'%Y-%m-%d') between '$f_inicio' and '$f_fin'";	
}
//echo $consulta;
$resultado=$objcnx->query($consulta);
//var_dump($resultado);
//print_r($resultado);
echo "<br>";
$fila=mysqli_fetch_object($resultado);
//print_r($fila);
?>
<?php 
	require 'conexion.php';
	//header("content-type:application/vnd.ms-excel");
	//header("content-disposition:attachment;filename=libros.xls");
?>
<!DOCTYPE html>
<html>
<head>
<title>reporte</title>
<style type="text/css">
*{
	font-family: arial;
	font-size: 15px;
}
table.reporte,table.reporte th,table.reporte td{
	border: 1px solid #004B8C;
	border-collapse: collapse;
}

table.reporte{
	border-collapse: collapse;
	width: 100%;
}

table.reporte th{
	/*height: 50px;*/
	/*text-align: left;*/
	/*padding: 0px;*/
	background-color:#004B8C;
	color: white;
}

table.reporte td{
	/*text-align:left;
	padding: 10px;*/
}

th,td{
	/*border-bottom: 1px solid #004B8C;*/
}

table.reporte tr:hover{
	background-color: #eee;
}
/*table responsive*/
div{
	overflow: auto;
	/*overflow-x:auto;*/
}

table.cabecera,table.cabecera td,table.cabecera th{
	/*width: 50%;*/
	border: 1px solid #004B8C;
	border-collapse: collapse;
}
table.cabecera th{
	background-color: #004B8C;
	text-align:left;
	color: white;
}
table.cabecera td{
	background-color: #eee;
}

</style>
</head>
<body>
<table class="cabecera">
<tbody>
	<tr>
		<th>usuario</th>
		<td>
		<?php if(is_object($fila)){
			echo $fila->nombre;
		}else{
		echo $arregloNombres[$codigoUsuario];	
		}
		?>			
		</td>
	</tr>
	<tr>
		<th>tipo de doc.</th>
		<td><?php echo $arregloAcciones[$codigoAccion]; ?></td>
	</tr>
	<tr>
		<th>fecha</th>
		<td align="left">desde <?php echo $f_inicio;?> hasta <?php echo $f_fin; ?></td>
	</tr>
</tbody>
</table>
<br><br>
<?php 
$r=$objcnx->query($consulta); 
//print_r($r);
?>
<table class="reporte">
<thead>
	<tr>
		<th>archivo</th>
		<th>ruta</th>
		<th>fecha</th>
		<th>accion</th>
	</tr>
</thead>
<tbody>
<?php while($f=mysqli_fetch_object($r)){ ?>
	<tr>
		<td><?php  echo $f->nombreArchivo?></td>
		<td><?php  echo $f->rutaArchivo;?></td>
		<td><?php  echo $f->fecha;?></td>
		<td><?php  echo $arregloAcciones[$f->accion];?></td>
	</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>