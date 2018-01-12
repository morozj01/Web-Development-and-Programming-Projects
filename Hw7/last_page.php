<html>
	<head>
		<meta charset="UTF-8">
		<title> Cellphone Store</title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
	</head>
	
	
	<body>
		<div class="item">
			<?php
				$fname = $_COOKIE['First'];
				$lname = $_COOKIE['Last'];
				$net = $_COOKIE['Net'];
				echo("<p class='text'> Thank you for your purchase $fname $lname </p>");
				echo("<p class= 'text'> A confirmation email is being sent to $net@nyu.edu </p>");
				
				$to = $net."@nyu.edu";
				$subject = "Your Order";
				$message = "Thank you for ordering with us. Your order will arrive shortly";
				mail($to,$subject,$message);
			?>
		</div>
	</body>