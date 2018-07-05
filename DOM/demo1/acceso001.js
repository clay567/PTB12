document.getElementById("header").innerHTML="<p>"+"TITULO"+"</p>";

var arreglo=document.getElementsByClassName("item");
arreglo[0].innerHTML="html dom";
arreglo[1].innerHTML="xml dom";
arreglo[2].innerHTML="ajax";	


var arreglo2=document.getElementsByTagName("a");
for (var i = 0; i < arreglo2.length; i++) {
	arreglo2[i].innerHTML="numero de enlace: "+i;
}

/*
deprecated,obsoleto
var vector=document.getElementsByName();
vector[0].value="hola";
*/

//mediante una accion de parte del usuario crear un elemento en el dom
//pasos
//1. crear el nodo elemento
var elemento=document.createElement('span');
//2. crear el nodo texto
var contenido=document.createTextNode('contenido principal');
//3. agregar el nodo texto al nodo elemento
elemento.appendChild(contenido);
//4. agregar atributos al elemento
elemento.setAttribute('align','center');
//5. agregar el elemento al documento
document.getElementById('contenido').appendChild(elemento);
//document.body.appendChild(elemento);


function myFunction() {
    document.getElementById("demo").innerHTML =
    document.anchors[0].innerHTML;
}
//coleccion de imagenes:document.images.length

function disableElement() {
    document.getElementById("btn01").disabled = true;
}
