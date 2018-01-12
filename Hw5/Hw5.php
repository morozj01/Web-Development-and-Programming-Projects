<?php
	
	$email_input = $_POST["email"];
	$radio_submission = $_POST["radio"];
	$line= $email_input.":".$radio_submission;	
	$duplicate = false;	
		$myFile= file("myfile.txt");
			foreach($myFile as $fline){
			$email = explode(":",$fline);
			$entered_email=explode(":",$line);
			if($email[0] == $entered_email[0]){
				$duplicate=true;
				break;
			}
			
			else{
				$duplicate=false;
		}
	}			
		if($duplicate == true){
			echo("Sorry this email has already been entered");
		}
		
		else {
			
		echo("Thank you for your submission");
	
		$myFile1= fopen("myfile.txt","a");
		fwrite($myFile1,"$line \r\n");
		fclose($myFile1);
	}

?>

	<html>
		<body>
		<br> <a href="Survey_Results.php"> See results </a>
		</body>
	</html>