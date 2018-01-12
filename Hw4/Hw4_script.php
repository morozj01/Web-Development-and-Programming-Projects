<?php

// Create array of vowels to test against
	$vowels = array("a", "e", "i", "o", "u", "y");

// Create array of constonant clusters to test against
	$clusters = array ("bl", "br", "ch", "cl", "cr", "dr", "fl", "fr", "gl", "gr", "pl",
	"pr", "sc", "sh", "sk", "sl", "sm", "sn", "sp", "st", "sw", "th", "tr", "tw", "wh", 
	"wr", "sch", "scr", "shr", "sph", "spl", "spr","squ", "str", "thr");

// Get user text from HTML form and explode it into an array 	
	$user_text = trim($_POST['user_text']);
		$user_text_array =  explode(" ", $user_text); 
			
// Iterate through every word in user's statement			
			for ($x = 0; $x < count($user_text_array); $x++) { 
				$word = $user_text_array[$x];
// If first letter is a vowel append "way"				
				if (in_array(strtolower(substr($word,0,1)),$vowels)){
					$word .= "-". "way";
				}

// If constonant cluster move first two letters and append "ay"				
				else if (in_array(strtolower(substr($word,0,2)),$clusters)){
					$character = substr($word,0,2);
					$word = substr($word,2)."-". $character;
					$word.="ay";
				}
				
// If constonant move only first letter and append "ay"				
				else {
					$character = strtolower(substr($word,0,1));
					$word = substr($word,1)."-". $character;
					$word.= "ay";
				}
				
				$pig_latin[$x] = $word;
		} 
  
	$pig_latin = implode(" ",$pig_latin);
	

?>

<html>
	<head>
		<title> Your Pig Latin </title>
		<link rel="stylesheet" type="text/CSS" href="Hw4_style.css">
	</head>
	
	<body>
		<div class="box">
			<h2> Here is your phrase in Pig Latin: </h2>
			<p> <?php echo $pig_latin ?> </p>
			<br>
			<a href="Hw4.html"> <button class="buttons"> Try Again </button> </a>
		</div>
	</body>
</html>