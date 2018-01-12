<html>
	<head>
		<meta charset="UTF-8">
		<title> Cellphone Store</title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
	</head>
	
	<body>
		<div id="ancestor" class="item">
		<h2 class="name"> Pick a phone for more information: </h2> <hr>
			<form class="form">
				<p class="text" id ="1" onclick="request(this.id)">	<input type="radio" name="phone" value="phone"> Samsung Galaxy S7 Edge </p> 
				<p class="text" id ="2" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> Google Pixel </p> 
				<p class="text" id ="3" onclick="request(this.id)">	<input type="radio" name="phone" value="phone"> Apple iPhone 7 </p> 
				<p class="text" id ="4" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> LG G6 </p> 
				<p class="text" id ="5" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> OnePlus 3T </p> 
				<p class="text" id ="6" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> Honor 8 Pro </p> 
				<p class="text" id ="7" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> HTC 10 </p> 
				<p class="text" id ="8" onclick="request(this.id)">	<input  type="radio" name="phone" value="phone"> Huawei P10 Plus </p> 
			</form>
		
		<div style="width:30%; margin:0;">
		  <img class="snapshot_i" id="image"></img>
			<ul id="parent_list" style="list-style-type:none">
				<li id="name" class="text"></li>
				<li id="price" class="text"></li>
				<li id="quantity" class="text"></li>
			</ul>	
		</div>
	</div>
			<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src = "request.js"> </script>
	</body>
</html>