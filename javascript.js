var elementoGirado=0;

// Creamos un array vacio
var ElementosClick = new Array();
// Capturamos el click y lo pasamos a una funcion
document.onclick = captura_click;
	
function captura_click(e) {  // Funcion para capturar el click del raton
	var HaHechoClick;
	if (e == null) { // Si hac click un elemento, lo leemos		
		HaHechoClick = event.srcElement;		
	} else {   // Si ha hecho click sobre un destino, lo leemos		
		HaHechoClick = e.target;
	}
	// Añadimos el elemento al array de elementos
	ElementosClick.push(HaHechoClick);
	console.log(HaHechoClick);
}