<?php 
$arregloDocentes=array(array('nomAp'=>'raul tola','area'=>'ciencias','curso'=>'fisica','correo'=>'raul@hotmail.com'),array('nomAp'=>'el cholo barzola','area'=>'artes marciales','curso'=>'defensa personal','correo'=>'barzola@hotmail.com'),array('nomAp'=>'la infame bettie page por hbo new movie','area'=>'cinematografia','curso'=>'artes escenicas','correo'=>'bettie@hotmail.com'));
$longitudArregloDocentes=count($arregloDocentes);
sort($arregloDocentes);
//echo "$longitudArregloDocentes";
//echo $arregloDocentes[0]['nomAp'];
//return;
?>
<!DOCTYPE html>
<html>
<head>
	<!--http://www.ribosomatic.com/articulos/ordenar-registros-de-una-tabla-con-php-y-ajax/-->
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<table class="w3-table-all">
		<thead>
			<tr class="w3-red">
				<th>nombre y apellido</th>
				<th>area</th>
				<th>curso</th>
				<th>correo</th>
				<th>usuario</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				for($i=0;$i<$longitudArregloDocentes;$i++){
				?>
				<tr>
					<td><?php 
					if(strlen($arregloDocentes[$i]['nomAp'])>30){
						echo "...";
					}else{
						echo $arregloDocentes[$i]['nomAp'];
					}
					?>						
					</td>
					<td><?php  echo $arregloDocentes[$i]['area'];?></td>
					<td><?php  echo $arregloDocentes[$i]['curso'];?></td>
					<td><?php  echo $arregloDocentes[$i]['correo'];?></td>
					<td><?php 
						$r=explode("@",$arregloDocentes[$i]['correo']);
						echo $r[0]; 
						?>							
					</td>
				</tr>
				<?php
			}
			 ?>
		</tbody>
	</table>
</body>
</html>