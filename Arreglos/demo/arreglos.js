/*arreglo vacio*/
var arregloVacio=[];
window.alert(arregloVacio);/*muestra todos los elementos de la matriz separados por la coma,idea utilizada en array bidimensionales*/
window.alert(arregloVacio[0]);/*muestra un elemento especifico ,el de la posicion 0*/
arregloVacio[3]="could and should";
window.alert(arregloVacio[3]);


/*arreglo unidimensional*/

var a=new Array(2);
//undefined dado que la declaracion anterior 
//dice que se declaro un array con dos elementos
alert(a[0]);//indefinido

var b=new Array(3);/*primera forma*/
alert(b);
b[0]=69;
b[1]="true";
b[2]="hello world";
b[3]=2.3;//puedes inicializar mas elementos de los declarados.
alert(b);

//aqui estamos asignado directamente los elementos al array c
var c=new Array(2,3);
alert(c);
alert(c[0]);
alert(c[1]);
var arreglo=[5,'hola mundo',true];/*segunda forma*/
var x=document.getElementById("contenedor");
/*ojo un elemento sobre escribe al otro ,de ahi que 
al final solo observe al ultimo elemento del arreglo*/
for(var i=0;i<arreglo.length;i++){
	x.innerHTML	=arreglo[i];
}

/*arreglo bidimensional*/
//pasos para crear una arreglo bidimensional

/*paso1:construir las columnas
uso del constructor new array(numero de columnas) para crear un numero de celdas dentro de las filas*/ 
var temperaturas_medias_ciudad0=new Array(2);
temperaturas_medias_ciudad0[0]='15 grados en ciudad de lima';
temperaturas_medias_ciudad0[1]='10 grados en la ciudad de ayacucho';

var temperaturas_medias_ciudad1=new Array(2);
temperaturas_medias_ciudad1[0]='18 grados en la ciudad de arequipa';
temperaturas_medias_ciudad1[1]='17 grados en la ciudad de apurimac';

/*paso2:contruir las filas
uso de constructor new array(aqui especificamos en numero de filas...!)*/
var temperaturas=new Array(2);
/*cada elemento del array temperaturas[0] temperaturas[1] representa una fila
cada elemento tiene como valor otro arreglo. 
es decir el nombre de los arreglos creados anteriormente*/ 
temperaturas[0]=temperaturas_medias_ciudad0;
temperaturas[1]=temperaturas_medias_ciudad1;

//var nodo2=document.getElementById("contenedor2");
//alert(temperaturas.length);

/*paso3: recorrer el array con un bucle for anidado 
el primero recorre las filas y segundo las celdas de dicha fila
en cada iteracion se crea un elemento span y un nodo de tipo texto,
el cual se asocia al elemento atraves del metodo appendchild()
finalmente ubicamos el elemento creado dentro del documento
referenciado un nodo del dom y haciendo uso del metodo appendChild()*/
for (i=0; i<temperaturas.length; i++) {
	for (j=0; j<temperaturas.length; j++) {
		var contenedor=document.createElement("span");
		var contenido=document.createTextNode(temperaturas[i][j]);
		contenedor.appendChild(contenido);
		document.getElementById('contenedor2').appendChild(contenedor);
	}
}
		
/*pasos para llenar las celdas de las filas de una tabla con datos 
que provienen de un arreglo bidimensional
paso1: definir la tabla y en su interior creamos un array bidimensional
paso2: dentro del primer bucle for el que recorre las filas del arreglo 
definimos la fila de la tabla ,esta debe circuncribir el bucle for que recorre las columnas
paso3: dentro del bucle for que recorre las columnas de la tabla definimos las celdas de la tabla
recuerde definir haciendo uso de document.write() */

document.write("<table width=200 border=1 cellpadding=1 cellspacing=1>"); 
for (var i=0;i<temperaturas.length;i++){ 
	
   	document.write("<tr>") ;
   	document.write("<td><b>Ciudad " + i + "</b></td>") ;
   	for (var j=0;j<temperaturas.length;j++){ 
      	document.write("<td>" + temperaturas[i][j] + "</td>") ;
      	
   	} 
   	document.write("</tr>") ;
} 
document.write("</table>");


//poniendo en practica el algoritmo anterior
var dato0= new Array(4);
dato0[0]="jose";
dato0[1]="mariano";
dato0[2]="nicolas";
dato0[3]="veronika";

var dato1= new Array(4);
dato1[0]="jose";
dato1[1]="mariano";
dato1[2]="nicolas";
dato1[3]="veronika";

var dato2= new Array(4);
dato2[0]="jose";
dato2[1]="mariano";
dato2[2]="nicolas";
dato2[3]="veronika";

var dato3= new Array(4);
dato3[0]="jose";
dato3[1]="mariano";
dato3[2]="nicolas";
dato3[3]="veronika";

var dato4= new Array(4);
dato4[0]="jose";
dato4[1]="mariano";
dato4[2]="nicolas";
dato4[3]="veronika";

var arregloB=new Array(5);
arregloB[0]=dato0;
arregloB[1]=dato1;
arregloB[2]=dato2;
arregloB[3]=dato3;
arregloB[4]=dato4;

document.write("<table border=1 width=100%>");
	for(var i=0;i<arregloB.length;i++){
		document.write("<tr>");
		for(var j=0;j<dato0.length;j++){
			document.write("<td>"+arregloB[i][j]+"</td>");
		}
		document.write("</tr>");
	}
document.write("</table>");

/*var arreglo =[1,2,3,4]; 
	var vector=new Array();
	vector.push("marcelito odebrecht");
	console.log(vector[0]);*/
	
	/*estructura for in funcionamiento igual a for each sintaxis casi igual*/
	/*for(i in arreglo)
	{
		alert(arreglo[i]);
	}*/
	
	//arreglo.push("tio bigote");//agregamos un nuevo elemento al final de la cola
	//console.log(arreglo[4]);//visualizamos el nuevo elemento
	//arreglos bidimensionales
	/*var matriz=[[1,2,3],['a','b','c']];
	for (var i =0; i < matriz[1].length; i++) {
		console.log(matriz[1][i]);
	};*/