//objeto array()
matriz =new Array("ado.net","asp.net","ajax",18);
vector =new Array(15,20);
var x=matriz.concat(vector);
for (var i = 0; i < x.length; i++) {
	document.write(x[i]+"<br>");
};
arreglo=matriz.join();
document.write(arreglo);
