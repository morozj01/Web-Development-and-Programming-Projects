<html>
	<head>
	<meta charset="UTF-8">
		<title> Cellphone Store</title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
	</head>
	
	<body>
		<div class="container">
			<h1 class="welcome"> Welcome to the Phone Store </h1> <hr>
			
				<?php 
				if(isset($_POST['First']) && isset($_POST['Last']) && isset($_POST['Net'])){
				
			$fName = $_POST['First'];
			$lName = $_POST['Last'];
			$Net = $_POST['Net'];
			
			setcookie("First",$fName);
			setcookie("Last",$lName);
			setcookie("Net",$Net);
			}
				
				
					$myFile= file("Phones.txt");
						foreach($myFile as $fline){
							$array = explode("|", $fline);
								$name=$array[0];
								$image=$array[1];
								$price=$array[2];
								$quantity=$array[3];
								$id=0;
				
								if(isset($_POST["price"]) || isset($_POST["quantity"])){
									if ($name == $_POST["phone"]){
									
									$name = $_POST["phone"];
									$price = $_POST["price"];
									$quantity = $_POST["quantity"];
								}
							}
							
							echo("<div class='item'>");  
							if ($quantity == '0'){
									echo ("<img class ='image' src='Phone_Pics/out_of_stock.jpg'> </img>");}
								else{
									echo ("<img src='$image' class='image'>");}
									
							echo ("<h2 class='name'> $name </h2>");
							echo ("<h3 class='text'> Stock on Hand: $quantity </h3>");
							echo ("<h3 class='text'> $price </h3>");
							if ($quantity>0){
								echo ("<button id='submit' class='button'> Add to Cart </button> <br>");
							}
							echo ("</div>");
						}
						echo ("<a href='Handler.php'> <button class=button value='Submit Order'> Submit Order</button></a>");
				?>
			</div>
			
		</div>
		
		
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
				var order = 0
				$("button").click(function(){
				if($(this).css('background-color') == 'rgb(209, 26, 255)'){
					$(this).css('background-color', 'red');
					$(this).text("In cart");
				order+=1;
				var price_line = $(this).prev();
				var quantity_line = $(price_line).prev();
				var name_line= $(quantity_line).prev();
				var img_line = $(name_line).prev();
				
				var price = $(price_line).text();
				var quantity = $(quantity_line).text();
				var name = $(name_line).text();
				var img = $(img_line).attr('src');
				var list = [name,price,img];
				document.cookie = "name"+order +"="+name; "price ="+price; "img="+img;
				document.cookie = "price"+order +"="+price; 
				document.cookie =  "img"+order +"="+img;
					
    } 
	
				else {
					$(this).css('background-color', '#d11aff');
					$(this).text("Add to Cart");
					document.cookie = "'name'+order+'='; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/Hw7/"; 
					document.cookie = "'price'+order+'='; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/Hw7/ "; 
					document.cookie = "'img'+order+'='; expires=Thu, 01 Jan 1970 00:00:00 UTC; path= /Hw7/ "; 
					order-=1;
    }  
	
});
				
				
		

	
	
		
		</script>
	</body>
</html>