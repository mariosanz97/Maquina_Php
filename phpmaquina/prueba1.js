function mostrar(varclik) {

var c = varclik.innerHTML;
var cantidad;
var nombre;


var paso;
for (paso = 0; paso < 2; paso++) {
c = c.replace('<td>', '');
c = c.replace('</td>', '');

for (pas = 0; pas < 2; pas++) {
c = c.replace("\"","");
};
};

var y = c.split(" ");
var n = y[1]+" "+y[2];
var c = y[4];


document.getElementById("cantidad").value = c;
document.getElementById("nombre").value = n;

//	document.getElementById("txtNombre").innerHTML = ;
}