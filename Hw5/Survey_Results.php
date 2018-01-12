<html>
	<head>
		<meta charset="UTF-8">
		<title> Poll Results </title>
		<link rel="stylesheet" type="text/css" href="Hw5_style.css"/>
		<script type="text/javascript" src="Hw5_script.js"> </script>
		
	</head>
	
	<body>
		<div class="container">
			<h1 class="title"> Here are the results: </h1>
			<h3 class="title"> What Basketball team are you rooting for this season? </h3>
			
			<ol>
				<?php 
					$myFile= file("myfile.txt");
						foreach($myFile as $fline){
							$array = explode(":", $fline);
							echo("<li class='list'> $array[0] says $array[1]</li>");
						}
				?>
			</ol>	
				
				 <a class="button" href="Survey.html"> Vote Again </a>
				 <a class="button" href="Survey_Results_Hist.php"> Look at the Histogram </a>
				
		</div>
	</body>

</html>