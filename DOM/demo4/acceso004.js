/*crear uno nodo tipo elemento y nodo tipo texto
y uso de la funcion appendChild de nodos
*/
var elemento=document.createElement('li');
var contenido=document.createTextNode('nuevo item');
elemento.appendChild(contenido);
document.getElementById('lista').appendChild(elemento);
//document.body.appendChild(elemento);


/*insertar antes de :sirve para insertar nodos antes de un nodo 
tomado como referencia*/
var elemento2=document.createElement('a');
var contenido2=document.createTextNode('link');
elemento2.setAttribute('href',"#");
elemento2.appendChild(contenido2);
var padre=document.getElementById('lista2');
var nodoReferente=document.getElementsByTagName('a')[2];
padre.insertBefore(elemento2,nodoReferente);
//padre.appendChild(elemento);