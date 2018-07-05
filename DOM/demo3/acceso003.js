//textContent y innerHTML
/*
innertHTML es un setter and getter. es decir permite acceder tanto al contenido
como establecer un nuevo contenido
*/
var contenido=document.getElementById("contenedor").textContent;
document.getElementById("contenedor2").innerHTML=contenido;

//acceso a atributo de un nodo element
document.getElementById("informacionSecundaria").id="sideBar";
var valorAtributo=document.getElementById("sideBar").id;
alert(valorAtributo);

//creando un nuevo atributo para un nodo element
document.querySelector("body p").setAttribute("class","parrafo");

//estilos css 
document.querySelector("body aside").style.backgroundColor="#ffbf00";
document.querySelector("body aside").setAttribute("style","background-color:#ffbf00;color:white");

