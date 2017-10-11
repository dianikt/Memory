var elementoGirado=0;

function girarImagen(event){	
	var element = event.currentTarget; 
	elementoGirado = element.classList.add("f1_container");
	
	alert("he cliki");
	element.classList.remove("f1_container");

}