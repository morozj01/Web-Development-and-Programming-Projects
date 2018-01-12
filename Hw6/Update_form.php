<html> 
	<head>
	<meta charset="UTF-8">
		<title> Store Update </title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
	</head>
	
	<body>
		<div class="item">
			<h1 class="name"> Update our store information! </h1> <hr>
			
			<form method="post" action="Store_front.php" class="form" name="form">
				<p class="text"> What item would you like to update? <select name="phone">
					<option value="Samsung Galaxy S7 Edge">Samsung Galaxy S7 Edge </option>
					<option value="Google Pixel">Google Pixel </option>
					<option value="Apple iPhone 7">Apple iPhone 7 </option>
					<option value="LG G6">LG G6 </option>
					<option value="OnePlus 3T">OnePlus 3T </option>
					<option value="Honor 8 Pro">Honor 8 Pro </option>
					<option value="HTC 10">HTC 10 </option>
					<option value="Huawei P10 Plus">Huawei P10 Plus </option>
				</select> </p>
				
				
				<p class="text"> What is the new price? <input class = "input" type="text" name="price"> </input> </p>
				<p class="text"> What is the new quantity? <input class="input" type="text" name="quantity"> </input> </p>
				<input class = "button" type="submit" value="Submit"></input>
			</form>
		</div>
	</body>
</html>