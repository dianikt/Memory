var arrayId2 = [];
var arrayId3 = [];
var intentos=0;
var block = false;
     
function captura_click(event) {  // Funcion para capturar el click del raton 
    
    if(arrayId2.length < 2){
    	var cardid = event.currentTarget.getAttribute("cartaid");
    	if(arrayId3.length == 0 || (arrayId3.length == 1 && arrayId3[0] != cardid)){
		    var element = event.currentTarget.className;     
		    event.currentTarget.setAttribute("class", "card flip"); 		
			
			arrayId2.push(event.currentTarget.getAttribute("id"));
			arrayId3.push(cardid);
		}
	}

	if(arrayId3.length == 2 && !block){
		block = true;
		// Si hay 2 cartas giradas y son iguales las bloquea, y sino devuelve false para girar
		if (compruebaParejas()){
			event.currentTarget.setAttribute("class", "card flip");
			event.currentTarget.removeAttribute("onclick");	
			
		    arrayId2 = [];
		    arrayId3 = [];
		    block = false;
		}else{ // si no son parejas
			setTimeout(function(){
				alert(arrayId2);
				alert(arrayId3);
			    document.getElementById(arrayId2[0]).className = "flip-container";
			    document.getElementById(arrayId2[1]).className = "flip-container";
			    arrayId2 = [];
			    arrayId3 = [];
			    block = false;
			 }, 1000);
	    }
	}	
}
// Comprueba los id de las cartas si son pareja o no
function compruebaParejas(){	
	if (arrayId2[0] != arrayId2[1])
		return false;
	else
		return true;
}