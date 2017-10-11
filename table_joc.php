<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jugemos al Memory</title>	
		<script type="text/javascript" scr=javascript.js></script>	
	</head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>	
	<body>		
		<div id="table_juego">
		  <table>
			<?php  
				$fil = 6;
				$col = 6;
				$num = 0;
				$numeros = range(1, 37);
				shuffle($numeros);	
			
				for ($y = 1; $y <= $col; $y++) {			
					echo"<tr>";					
						for ($x = 1; $x <= $fil; $x++) {
							$num++;				
							echo "<td>
								<div class='flip-container'>
									<div id='card1' class='card'>
									    <figure class='front'></figure>
									    <figure class='back'></figure>
								  </div>
								</section>
							</td>";			
	   					}
	   				echo "</tr>";						
				}
			?>					
		  </table>
			</div>
	</body>
</html>
