var arrayId2 = []; //contine las dos cartas giradas 
var arrayId3 = [];
var intentos=1;
var aciertos=1;
     
function captura_click(event) {  // Funcion para capturar el click del raton 
    
    if(arrayId2.length < 2){
    	var cardid = event.currentTarget.getAttribute("cartaid");

    	if((arrayId3.length == 0 || arrayId3.length == 1 ) || arrayId3[0] !== cardid){
		    var element = event.currentTarget.className;     
		    event.currentTarget.setAttribute("class", "card flip"); 	
			
			arrayId2.push(event.currentTarget.getAttribute("id"));
			arrayId3.push(event.currentTarget);
		}
			
	}

	if(arrayId2.length == 2 && arrayId3.length == 2){
		
		// Si hay 2 cartas giradas y son iguales las bloquea
		if (!compruebaParejas()){	
			intentosGastados(); // cada intento suma 1;
			setTimeout(voltearCartas, 1000);		

		}else{ // si  son parejas
			aciertosp();		
			event.currentTarget.setAttribute("class", "card flip");
			event.currentTarget.removeAttribute("onclick");				
		    arrayId2 = [];
		    arrayId3 = [];
		    intentosGastados(); //cada intento suma 1;
		     // cada acierto suma 1;
	    }
	}	 
	
}

function voltearCartas(){  // gira las dos cartas por que son diferentes 
	
	arrayId3[0].className = 'flip-container';
	arrayId3[1].className = 'flip-container';
				
	arrayId2 = [];
	arrayId3 = [];	
}

// Comprueba los id de las cartas si son pareja o no
function compruebaParejas(){	
	if (arrayId2[0] === arrayId2[1])
		return true; // retorna true si las dos son iguales 
	else
		return false; //retorna false si son diferentes
}

function intentosGastados(){		
        document.getElementById('intentos').innerHTML ="Intentos: "+intentos;
        intentos++;
}
function aciertosp(){		
        document.getElementById('aciertos').innerHTML ="Aciertos: "+aciertos;
        aciertos++;
}