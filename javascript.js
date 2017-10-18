var elementoGirado=0;
var srcImage1;
var srcImage2;

	
function captura_click(event) {  // Funcion para capturar el click del raton
	var element = event.currentTarget.className;
	
	if (elementoGirado == 0 && element == "flip-container"){		
		event.currentTarget.setAttribute("class", "card flip");		
		var id = event.currentTarget.id;			
		alert(id);			

	}
	if(elementoGirado == 1 && element == "flip-container"){		
		event.currentTarget.setAttribute("class", "card flip");	
		var id1 = event.currentTarget.id;			
		alert(id1);
	}
	elementoGirado++;

	//alert(elementoGirado);	
	var volver = comprueba_cartas();
	
	if (volver == false){
		//document.getElementById("card1").lastChild.innerHTML = srcImage1; 
		//document.getElementById("card1").lastChild.innerHTML = srcImage2; 
		//event.currentTarget.setAttribute("class", "flip-container");	
	}

}
// Si hay 2 cartas giradas y son iguales las bloquea, y sino devuelve false para girar
function comprueba_cartas(){
	var comprobado = false;
	if (elementoGirado == 2){
		if (srcImage1 == srcImage2){
			comprobado = true;
		}else{
			comprobado = false;

		}
	}	
	return comprobado;	
}	

function bloquea_cartaGirada(){
	srcImage1 = document.getElementById("card1").lastChild.innerHTML;

}