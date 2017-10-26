<!DOCTYPE html>
<<head>
		<meta charset="utf-8">
		<title>Juguemos al Memory</title>	
		<script type="text/javascript" src=javascript.js></script>	
	</head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>	
	<body >	
	<br><br>	
	<div id = "ranking" > 
	<h2>Ranking de Memory</h2>
		<?php
							// Abre el fichero  lectura y escritura 
			function escribirFichero(){
				$nombre_archivo = "ranking.txt";  
				$nombre = "Dori";
				$intentos = '3';									
				
				if(file_exists($nombre_archivo)){
					$archivo = fopen($nombre_archivo, "a");	
					fwrite($archivo, $nombre. PHP_EOL);					
					fwrite($archivo, $intentos);								
				}
				else
					echo "Ha habido un problema al escribir en el archivo";
				fclose($archivo);
			}	
						// Abre el fichero solo lectura y printa la tabla 
			function leerFichero(){			
				if(file_exists($nombre_archivo)){
					$archivo = fopen($nombre_archivo, "r");	
					echo "<table id='tabla_ranking'>";
					echo "<tr >";
					echo "<td>Posicion</td>";
					echo "<td>Jugador</td>";
					echo "<td>Puntuacion</td>";
					echo "</tr>";
					echo "<tr>";
					$num = 1;
					
					while(!feof($archivo)) {					
						echo "<td>".$num."</td>";					
						echo "<td>".fgets($archivo)."</td>";
						echo "<td>".fgets($archivo)."</td>";
						echo "</tr>";
						$num++;
					}				
					echo "</table>";
				}else
					echo "Ha habido un problema al abrir el archivo";
				fclose($archivo);					
			}				 
		?>
	</div>
</body>
</html>




