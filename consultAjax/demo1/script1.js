/*function peticion(){
	var valor=document.getElementsByTagName('input')[0].value;
	var xhr=new XMLHttpRequest();
	var almacen=document.getElementById('contenedor2');
	var respuesta="";
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4 && xhr.status==200){
			respuesta=xhr.responseText;
			almacen.innerHTML=respuesta;
		}
	};
	xhr.open('get','server.php?v='+valor,true);
	xhr.send();
}*/
/*
https://www.returngis.net/2014/02/comprobar-los-eventos-asociados-a-un-elemento-en-javascript/
*/
function peticion(){
	var valor=document.getElementsByTagName('input')[0].value;
	var almacen=document.getElementById('contenedor2');
	$.get('server.php',{v:valor},function(respuesta,status){
		$('#contenedor2').html(respuesta);
	});
}