//realice sus pruebas en mozila firefox ,OPCION DOM
var arreglo=document.getElementsByClassName("item");
//document.getElementById("contenedor").innerHTML=arreglo;
//document.getElementById("contenedor").innerHTML=arreglo[0];//MOZILA CREA UN ARREGLO DE 3 ELEMENTOS(0,1,2)

//parentNode
document.getElementById("contenedor").innerHTML=arreglo[0].parentNode;

//childNodes vs children
//var arreglo2=document.getElementById("lista").childNodes;//MOZILA CREA UN ARREGLO DE 7 ELEMENTOS(0,...,6)
var arreglo2=document.getElementById("lista").children;
//document.getElementById("contenedor2").innerHTML=arreglo2;
document.getElementById("contenedor2").innerHTML=arreglo2[2];

//firstChild vs firstElementChild
//var primerHijo=document.getElementById("lista").firstChild;
var primerHijo=document.getElementById("lista").firstElementChild;
document.getElementById("contenedor3").innerHTML=primerHijo;

//lastChild vs lastElementChild
//var ultimoHijo=document.getElementById("lista").lastChild;
var ultimoHijo=document.getElementById("lista").lastElementChild;
document.getElementById("contenedor3").innerHTML=ultimoHijo;

/*si uno quiere obtener solo elementos utilice nextElementSibling,
sino utilice nextSibling para obtener todos los nodos y no solo
los de tipo element*/

//nextSibling vs nextElementSibling
//var hermanoSiguiente=document.getElementById("lista").nextSibling;
var hermanoSiguiente=document.getElementById("lista").nextElementSibling;
alert("hermano siguiente al ul con id lista :"+hermanoSiguiente);

//previousSibling vs previousElementSibling
//var hermanoAnterior=document.getElementById("lista").previousSibling;
var hermanoAnterior=document.getElementById("lista").previousElementSibling;
alert("hermano previo al ul con id lista :"+hermanoAnterior);

//nodeName vs tagName
var nombreNodo=document.getElementById("lista").nodeName;
alert("nombre del nodo con id lista :"+nombreNodo);

//nodeType
var tipoNodo=document.getElementById("lista").nodeType;
alert("tipo de nodo:"+ tipoNodo);

//nodeValue
var nodo=document.getElementById("parrafo");
var valorNodo=nodo.nodeValue;
alert(valorNodo);//Devuelve null para nodos de tipo elemento y nodos de documento


/*Tenga en cuenta que esto es sólo una advertencia - pero una buena que debe ser respetada. 
En realidad está siendo generado por un inspector llamado JSLint -
 la base de esto es que "eval es malo" - y que document.write puede usarse para realizar evaluaciones.
Además de esto - y no se menciona en el anterior, evite document.write siempre que sea posible, 
a excepción de quizás pruebas simples. 
Escribe en el DOM después de que se considere que es "completo", 
y las modificaciones en este punto sólo deben hacerse utilizando los métodos DOM soportados. 
Más detalles sobre esto están incluidos en ¿Por qué document.write se considera una "mala práctica"? - 
donde se menciona que es "mucho mejor usar los métodos de manipulación DOM seguros y 
DOM" (document.createElement, element.appendChild, etc.). 
Un buen ejemplo concreto de esto está disponible en https://developer.mozilla.org/en-US/docs/Web/API/Document_object_model/Using_the_W3C_DOM_Level_1_Core.*/


function myFunction() {
    var x = document.getElementById("btn1").form.id;
    document.getElementById("demo").innerHTML = x;
}