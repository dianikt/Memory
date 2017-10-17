<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Juguemos al Memory</title>	
		<script type="text/javascript" src=javascript.js></script>	
	</head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>	
	<body onload="">		
		<div id="table_juego">
		  <table>
			<?php  
				$fil = 6;
				$col = 6;
				$num = 0;
				$numeros = range(1, 19);
				shuffle($numeros);	
					
				$numer = range(1, 19);
				shuffle($numer);	
				
				$array = array();
				for($i=1;$i<19;$i++){ 					
					$array[$i] = '<img src="images/'.$numeros[$i].'.jpg" />';
					//echo $i."\n"; 					
				}
				$n = 1;
				for($i=19;$i<=36;$i++){ 					
					$array[$i] ='<img src="images/'.$numer[$n].'.jpg" />';
					$n++;
					//echo $i; 
				}				
				shuffle($array);					
							
				for ($y = 1; $y <= $col; $y++) {			
					echo"<tr>";					
						for ($x = 1; $x <= $fil; $x++) {
						    //$evento = 0;
							echo "<td>
								<div class='flip-container'>
									<div id='card1' class='card' onclick='captura_click(this.e)'>
									    <figure class='front'></figure>
									    <figure class='back' >"?>
										<?php										
										echo "$array[$num]</figure>";
										$num++;
								echo "</div>
								</section>
							</td>"?>	
	   					<?php } 
	   				echo "</tr>" ?>					
				<?php } ?>								
		  </table>
		</div>
	</body>
</html>
