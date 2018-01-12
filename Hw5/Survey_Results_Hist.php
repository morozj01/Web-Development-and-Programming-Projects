<html>
	<head>
		<meta charset="UTF-8">
		<title> Poll Results </title>
		<link rel="stylesheet" type="text/css" href="Hw5_style.css"/>
		<script type="text/javascript" src="Hw5_script.js"> </script>
		<?php 
						
							$OKC = 0;
							$CAV = 0;
							$GSW = 0;
							$SAS = 0;
							$OTH = 0;
							
					$myFile= file("myfile.txt");
						foreach($myFile as $fline){
							$array = explode(":", $fline);
		

							switch(trim($array[1])){
								case "OKC Thunder":
								$OKC+=1;
								break;
								
								case "The Clevelend Cavaliers":
								$CAV++;
								break;
								
								case "Golden State Warriors":
								$GSW++;
								break;
								
								case "S.A Spurs":
								$SAS++;
								break;
								
								case "Another Team":
								$OTH++;
								break;
						}
					}
						
				?>	
	</head>
	
	<body>
		<div style ="height:600;" class="container">
			<h1 class="title"> Here are the results: </h1>
			<h3 class="title"> How does your team stack up? </h3>
			
			<p class="bar"> OKC Thunder: </p><?php echo('<img style = "height:50px; width:'.($OKC*100). 'px" src="thunder.png" alt="here">')?>  <br> <br>
			<p class="bar"> The Cleveland Cavaliers:</p> <?php echo('<img style = "height:50px; width:'.($CAV*100). 'px" src="cavs.png" alt="here">')?> <br> <br>
			<p class="bar"> The Golden State Warriors:</p><?php echo('<img style = "height:50px; width:'.($GSW*100). 'px" src="warriors.png" alt="here">')?> <br> <br>
			<p class="bar"> The San Antonio Spurs: </p><?php echo('<img style = "height:50px; width:'.($SAS*100). 'px" src="spurs.png" alt="here">')?> <br> <br>
			<p class="bar"> A Different Team: </p> <?php echo('<img style = "height:50px; width:'.($OTH*100). 'px" src="other.png" alt="here">')?>  <br> <br>
				
				
				 <a class="button" href="Survey.html"> Vote Again </a>
				 <a class="button" href="Survey_Results.php"> See List </a>
				
		</div>
		
		<img src="warriors.png" class="img" alt="here">
	</body>

</html>