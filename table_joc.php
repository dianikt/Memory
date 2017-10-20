<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Juguemos al Memory</title>	
		<script type="text/javascript" src=javascript.js></script>	
	</head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>	
	<body >		
		<div id="table_juego">
		  <table>
			<?php 
				//$fil =  $_POST["fil"];
				//$col =  $_POST["col"];

				$fil = 4;
				$col = 4;
				$num = 0;
							
				$array = array();
				$cont = 0;
				for($i=1;$i<=8;$i++){ 
					$array2 = array();
					$array2[] = '<img class="imagen" id="'.$i.'" src="images/'.$i.'.jpg"/>';
					$array2[] = $cont;
					$array[] = $array2;

					$array2 = array();
					$array2[] = '<img class="imagen" id="'.$i.'" src="images/'.$i.'.jpg"/>';
					$array2[] = $cont;
					$array[] = $array2;

					$cont++;
				}
				
				/*$n = 0;
				for($j=9;$j<=16;$j++){ 	
					$n++;				
					$array[$j] ='<img class="imagen" id="'.$n.'" src="images/'.$n.'.jpg"/>';
				}	*/

				//shuffle($array);

				$cont = 0;						
				for ($y = 1; $y <= $col; $y++) {			
					echo"<tr>";					
						for ($x = 1; $x <= $fil; $x++) {
						   	echo "<td>";
								echo "<div cartaid='".$cont."' class='flip-container' id='cardId".$array[$cont][1]."' onclick='captura_click(event)'>";
									echo "<div class='card'>";
									    echo "<figure class='front' ></figure>";
									    echo "<figure class='back' >".$array[$cont][0]."</figure>";
								echo "</div>";
								echo "</div>";
							echo "</td>";
	   						$cont++;
	   					} 

	   				echo "</tr>";					
				 }

				 ?>								
		  </table>
		</div>
	</body>
</html>
