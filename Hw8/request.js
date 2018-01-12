  
  
  var clicks =0;
  function request(clicked_id){	
  var xhr = new XMLHttpRequest();
  

 xhr.onreadystatechange = function() {
    if (this.readyState == 4) {
  
  var id = clicked_id;
  element_ref = document.getElementById(id).textContent.trim();

  var i;
  var response = xhr.responseXML;
  var x = response.querySelectorAll('phone');
  for (i = 0; i <x.length; i++) { 
    if (element_ref == getNodeValue(x[i],"name").trim()){
	
	priceq = getNodeValue(x[i],"price");
	nameq = getNodeValue(x[i],"name");
	quantityq= getNodeValue(x[i],"quantity");
	imgq = getNodeValue(x[i],"image");
	
	document.getElementById('image').src=imgq;
	document.getElementById('name').innerHTML=nameq;
	document.getElementById('price').innerHTML=priceq;
	document.getElementById('quantity').innerHTML=quantityq +"left in stock";


 	
	
	
}
    

 
}
}

clicks++;

}
  xhr.open("GET", "Phone_list.xml", true);
  xhr.send();
  }
function getNodeValue(obj,tag){
	return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
}







