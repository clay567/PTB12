//appendChild
var elemento=document.createElement('li');
var contenido=document.createTextNode('item de reemplazo');
elemento.appendChild(contenido);
document.getElementById('lista').appendChild(elemento);

//removeChild
var padre=document.getElementsByTagName('li')[0].parentNode;
var referencia=document.getElementsByTagName('li')[0];
var devolucion=padre.removeChild(referencia);
alert(devolucion);
alert(typeof devolucion);

//replaceChild
var parent = document.getElementById("div1");
var child = document.getElementById("p1");
var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);
parent.replaceChild(para,child);