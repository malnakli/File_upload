function checking1(){
	var email 		= document.getElementById("id-formInput3").value;
	

	
	
	if(!email.match(/[\w]+\@[a-zA-Z0-9\.\-]+\.[a-z]{2,4}/g)){
		document.getElementById("format").innerHTML = "example@example.com";
		setTimeout("document.getElementById(\"format\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput3").focus();
		return false;
	
	}
	

	if ( ! checkMessage('format2','id-textMessage')){

		return false;
	}
		return true;

}
function checkMessage(span,id){
	
	var message	= document.getElementById(id).value;

	if( message.length < 10){
		document.getElementById(span).innerHTML= "minimum length 10 characters";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	}
	return true;
}
