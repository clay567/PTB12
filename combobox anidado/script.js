document.getElementById('cbo1').onchange=function(){

	var lista=document.getElementById('cbo1').children;
	var valor="";
	for(var i=0;i<lista.length;i++){
		if(lista[i].selected===true){
			valor=lista[i].value;
		}
	}

	var xhr=new XMLHttpRequest();
	var nodo=document.getElementById('cbo2');
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var respuesta=xhr.responseText;
			nodo.innerHTML=respuesta;
		}
	} ;
	xhr.open('get','server.php?v='+valor,'true');
	xhr.send();

};