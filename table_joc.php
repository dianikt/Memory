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

				//$fil =  $_POST["fil"];
				//$col =  $_POST["col"];

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
						   	echo "<td>
								<div class='flip-container' id ="?><?php echo "$array[$num]" ?>
								<?php echo"onclick='captura_click(event)'>
									<div id='card1' class='card' >
									    <figure id='' class='front' ></figure>
									    <figure id ='' class='back' >"?>
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
