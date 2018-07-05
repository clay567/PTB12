<?php  
//uso de echo para dibujar controles
echo "<h2 style=text-align:center;background-color:#ffbf00>uso de echo para imprimir tags</h2>";
echo 	'<p>soy un parrafo</p>';
echo 	"<table border='1'>
			<tr>
				<td>entretenimiento</td>
			</tr>
			<tr>
				<td>
					<input type='text' name='caja' value='serie de netflix'>
				</td>
			</tr>
		</table>";

//salto de linea
echo "<br>";

$valor="stranger things";
echo 	"<form action='' method=''>
			<table border='1'>
				<tr>
					<td>serie favorita</td>
				</tr>
				<tr>
					<td>
						<input type='text' name='caja' value=\"$valor\">
					</td>
				</tr>
			</table>
		</form>";

//uso de construcciones del lenguaje:echo,print,printf
echo "<h2 style=text-align:center;background-color:#ffbf00>USO DE CONSTRUCCIONES DEL LENGUAJE:echo , print</h2>";

print "Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. 
Repellendus, tempora.".'<br>';

$cadena="hola mundo de \nphp";
print '<b style=color:#ffde7b>primer resultado de cadena:</b>'.nl2br($cadena);
echo "<br>";
print '<b style=color:#ffde7b>segundo resultado de cadena:</b>'."hola mundo de \"php\"";
echo "<br>";
$cadena2='<b style=color:#ffde7b>tercer resultado de cadena:</b>'."hola"."\n"."mundo de php";
echo nl2br($cadena2);

//manipular cadenas y expresiones regulares
echo "<h2 style=text-align:center;background-color:#ffbf00>MANIPULAR CADENAS Y EXPRESIONES REGULARES</h2>";

$cadena=" hola mundo de php \n\t\r";
echo "<h2 style=background-color:#ffbf00;width:20%>funcion strlen()</h2>";
print 'la longitud de la cadena es:'.strlen($cadena).'<br>';

echo "<h2 style=background-color:#ffbf00;width:20%>nota</h2>";
$cadena1="Lorem ipsum dolor \nsit amet.";
print $cadena1.'->'.'el navegador no interpreta \n como salto de linea: '.'<br>';

echo "<h2 style=background-color:#ffbf00;width:20%>funcion nl2br()</h2>";
print 'para pasar de \n a br utilice nl2br dado que el navegador interpreta br como salto de linea:'.'<br>'.nl2br($cadena1).'<br>';

//trim()
echo "<h2 style=background-color:#ffbf00;width:20%>funcion trim()</h2>";
$cadena2=trim($cadena);
print 'la longitud de la cadena:'.$cadena.'<br>'.'despues de recortar espacios en blanco es:'.'<br>'.strlen($cadena2);
print '<br>';
//print_r()
echo "<h2 style=background-color:#ffbf00;width:20%>uso de print_r()</h2>";
print_r($cadena1);
print '<br>';
//var_dump()
echo "<h2 style=background-color:#ffbf00;width:20%>uso de var_dump</h2>";
var_dump($cadena1);
print '<br>';

$cadena3="hola";
echo "<h2 style=background-color:#ffbf00;width:20%>strtoupper()</h2>";
print 'funcion strtoupper:'.strtoupper($cadena3).'<br>';
echo "<h2 style=background-color:#ffbf00;width:20%>funcion ucfirst()</h2>";
print 'funcion ucfirst:'.ucfirst($cadena3).'<br>';

$cadena4="hola mundo de mysql";
echo "<h2 style=background-color:#ffbf00;width:20%>ucwords()</h2>";
print 'funcion ucwords:'.ucwords($cadena4);
print '<br>';
//addslashes()
echo "<h2 style=background-color:#ffbf00;width:20%>addslashes()</h2>";
print get_magic_quotes_gpc();
print '<br>';
$cadena5=addslashes("hola mundo de 'c' y a\o  \"peru\" ");
print 'USO DE addslashes: '.$cadena5;
print '<br>';
//stripslashes()
echo "<h2 style=background-color:#ffbf00;width:20%>stripslashes()</h2>";
print 'USO DE stripslashes: '.stripslashes($cadena5);

//explode()
echo "<h2 style=background-color:#ffbf00;width:20%>explode()</h2>";
$email="cal-soa.7@live.com@peru";
$matrixxx=explode("@", $email);
echo $matrixxx[0]."<br>".$matrixxx[1]."<br>".$matrixxx[2];
print '<br>';
//implode()
echo "<h2 style=background-color:#ffbf00;width:20%>implode()</h2>";
print implode("@", $matrixxx);
print '<br>';
//strtok()
echo "<h2 style=background-color:#ffbf00;width:20%>strtok()</h2>";
$cadena6="tengo examen de economia digital y examen de taller de tesis";
print strtok($cadena6, "i");
print '<br>';
print $cadena6;
print '<br>';
print strtok($cadena6, "t");
print '<br>';
print $cadena6;
print '<br>';
print strtok($cadena6, "n");
print '<br>';
print strtok($cadena6, "ita");
print '<br>';

$string = "Hello world. Beautiful day today.";
 $token = strtok($string, " ");
 var_dump($token);
 print '<br>';
 print $string;
 print '<br>';
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }

//substr()
echo "<h2 style=background-color:#ffbf00;width:20%>substr()</h2>";
print substr($cadena6,5,7);
print '<br>';
//strcmp()
echo "<h2 style=background-color:#ffbf00;width:20%>strcmp()</h2>";
print strcmp('hol','hola');
print '<br>';
//strstr()
echo "<h2 style=background-color:#ffbf00;width:20%>strstr()</h2>";
print strstr($cadena6	,'examen');
//print strrstr($cadena6	,'examen');
print '<br>';
//strpos()
echo "<h2 style=background-color:#ffbf00;width:20%>strpos()</h2>";
$intereses="holamusica";//conteo es desde cero de izquierda a derecha
print strpos($intereses,'musica').'<br>';
print '<br>';
//str_replace
echo "<h2 style=background-color:#ffbf00;width:20%>str_replace()</h2>";
print str_replace('examen', 'final', $cadena6).'<br>';
print '<br>';

//printf()
//%% - Returns a percent sign
echo "<h2 style=background-color:#ffbf00;width:20%>funcion printf()</h2>";
$val1=5;$val2=10.5;$val3="Lorem ipsum dolor sit amet.";
printf("todos los codigos de formato inician con el signo de %%,ahora los resultados son: %3\$d %1\$.2f ,%2\$s",$val2,$val3,$val1);
?>