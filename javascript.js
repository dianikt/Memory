var elementoGirado=0;
var srcImage1;
var srcImage2;

	
function captura_click(event) {  // Funcion para capturar el click del raton
	var element = event.currentTarget.className;

	var p = 1;

	if (elementoGirado == 0 && element == "flip-container"){
		elementoGirado++;	
		event.currentTarget.setAttribute("class", "card flip");		
		srcImage1 = document.getElementById("card1").lastChild.innerHTML;				
		alert(srcImage1);	
	}

	else if(elementoGirado == 1 && element == "flip-container"){
		elementoGirado++;
		event.currentTarget.setAttribute("class", "card flip");	
		srcImage2 = document.getElementById("card1").lastChild.innerHTML; 
		alert(srcImage2);	
	}


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
		if (srcImage1 == srcImage1){
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



