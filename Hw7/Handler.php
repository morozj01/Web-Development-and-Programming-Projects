<html>
	<head>
		<meta charset="UTF-8">
		<title> Cellphone Store</title>
		<link rel="stylesheet" type="text/css" href="Hw6_style.css"/>
		<script>
			function hide(){
				document.getElementByClassName('check').click{
				if(!this.src()){
				this.style.display='none';
			}
		}
		</script>
	</head>
	
	<body>
<?php
echo("<div class='item'>");
echo("<h3 class = 'name'> Your Order: </h3>");
echo ("<table class ='entry'>");
$t_price = 0;
for($i=0; $i<count($_COOKIE); $i++){
 if (isset($_COOKIE["name".$i])){
	$name="name".$i;
	$img= "img".$i;
	$price = "price".$i;
$table_content =   "<tr>
    				<th><img class ='check' style ='width:100px; height:80px;'  src='$_COOKIE[$img]'></img></th>
    				<th class='entry'>$_COOKIE[$name]</th> 
    				<th class='entry'>$_COOKIE[$price]</th>
 		 			</tr>";
					
					echo($table_content);
					$t_price+= (int)substr($_COOKIE[$price],1,3);
		}
 } 
 echo ("</table>"); 
 echo("<p class='text'> Subtotal: $t_price </p>");
  echo("<p class='text'> Tax: 8.875 </p>");
  $g_total=($t_price*0.08875)+$t_price;
   echo("<p class='text'> Grandtotal: $g_total </p>");
   echo("<a href='last_page.php'><button class='button'>Place Order </button>");
 echo ("</div>");





?>

	</body>

</html>