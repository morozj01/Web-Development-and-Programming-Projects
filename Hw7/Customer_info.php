<html>
	<head>
		<meta charset="UTF-8">
		<title> Cellphone Store</title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
		<?php 
			if(isset($_POST['First']) && isset($_POST['Last']) && isset($_POST['Net'])){
				
			$fName = $_POST['First'];
			$lName = $_POST['Last'];
			$Net = $_POST['Net'];
			
			setcookie("First",$fName);
			setcookie("Last",$lName);
			setcookie("Net",$Net);
			}
		?>
	</head>
	
	<body>
		<div id ="item" class= "item"> 
			<h1 class="welcome"> Welcome to the Phone Store! </h1> <hr>
		
			<form id="form" method= "POST" action="Store_front.php">
			<p class="text"> First Name:	<input id = "val1" type="text" name="First"> </input> </p>
			<p class="text"> Last Name:	<input type="text" id ="val2"name="Last"> </input> </p>
			<p class="text"> NYU Net Id:	<input type="text" id = "val3" name="Net" size="10"> </input> @nyu.edu </p>
			<input type="reset" class ="button" value="Reset"> </input>
			<input type="button" id="button" onClick="check()" class="button" value="Check Inputs"> </input>
			
			</form>
		<script type = "text/javascript">
			function check() {
				if(!document.getElementById("val1").value ||!document.getElementById("val2").value|| !document.getElementById("val3").value){
					alert("Must fill in all values!");
				}
				else{
					
					//Identify button parent (the form)
					var parent = document.getElementById("form");
					
					//Identify button to be replaced
					var replace = document.getElementById("button");
					
					replace.parentNode.removeChild(replace);
					
					// Create submit button
					var submit = document.createElement("input");
					submit.setAttribute("type","submit");
					submit.setAttribute("value","Submit");
					submit.setAttribute("class","button");
					document.getElementById("form").appendChild(submit);	
					
			
						var para = document.createElement("P");
						var text = document.createTextNode("Input Cleared: You can now submit");
						para.appendChild(text);
						document.getElementById("item").appendChild(para);			
					}
					
			}
		</script>
		</div>
	</body>
</html>
