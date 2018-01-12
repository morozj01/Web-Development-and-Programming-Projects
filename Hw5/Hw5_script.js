
function validateEmail(){
	emailToTest= document.getElementById("email").value;
    var atSymbol = emailToTest.indexOf("@");
    if(atSymbol < 1){
		return false;
	}
    var dot = emailToTest.indexOf(".");
    
	if(dot <= atSymbol + 2){
		return false;
	}
    if (dot === emailToTest.length - 1){
		return false;
	}
    return true;
}

	
function validateRadio(){
		var chx = document.forms[0];
			for (var i=0; i<chx.length; i++) {
				if (chx[i].type == 'radio' && chx[i].checked) {
					return true;
					
			} 
		}
			return false;
		
}
			
	
function checkSubmission(){
	if (validateRadio() == true && validateEmail() == true ){
		document.getElementById("submit").innerHTML='<input class="button" type="submit" value= "Submit">';
		document.getElementById("message").innerHTML="Your email is valid, hit submit to send in your survey choice";
		document.getElementById("check").innerHTML="";
	}
	else{
		document.getElementById("message").innerHTML="Not valid submission, please reset and try again";
	}
}
	