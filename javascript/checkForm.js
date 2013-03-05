

function checking(){

	if( checking1() && checking2() && checking3()){
		return true;
	}
	
	return false;
}
function checking1(){
	var userName 	= document.getElementById("id-formInput0").value;
	var firstName	= document.getElementById("id-formInput1").value;
	var lastName 	= document.getElementById("id-formInput2").value;

	if( (userName.length < 3) ){
		
		document.getElementById("minLength").innerHTML = "minimum length 3 characters";
		 setTimeout("document.getElementById(\"minLength\").innerHTML=\"\"", 4000);
		 	document.getElementById("id-formInput0").focus();
			return false;
		
	}
	if( !userName.match(/[a-z]/i)){
		document.getElementById("minLength").innerHTML = "Should have at least one letter ";
		setTimeout("document.getElementById(\"minLength\").innerHTML=\"\"", 4000);
		 	document.getElementById("id-formInput0").focus();
			return false;
	
	}
	checkavailability('id-formInput0','uname','minLength');
	
	if(firstName.length > 0 && firstName.length < 3){
		document.getElementById("minLength1").innerHTML= "minimum length 3 characters";
		setTimeout("document.getElementById(\"minLength1\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput1").focus();
		return false;
	}
	if( firstName.match(/[0-9]/)){
		document.getElementById("minLength1").innerHTML="should not have a number ";
		setTimeout("document.getElementById(\"minLength1\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput1").focus();
		return false;
	
	}
	if(lastName.length > 0 && lastName.length < 3){
		document.getElementById("minLength2").innerHTML= "minimum length 3 characters";
		setTimeout("document.getElementById(\"minLength2\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput2").focus();
		return false;
	}
	if(lastName.match(/[0-9]/)){
		document.getElementById("minLength2").innerHTML="should not have a number ";
		setTimeout("document.getElementById(\"minLength2\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput2").focus();
		return false;
	
	}

	return true;
	
}

function checking2(){
	var email 		= document.getElementById("id-formInput3").value;
	var password 	= document.getElementById("id-formInput4").value;
	var rePassword 	= document.getElementById("id-formInput5").value;

	
	
	if(!email.match(/[\w]+\@[a-zA-Z0-9\.\-]+\.[a-z]{2,4}/g)){
		document.getElementById("format").innerHTML = "example@example.com";
		setTimeout("document.getElementById(\"format\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput3").focus();
		return false;
	
	}
	checkavailability('id-formInput3','email','format');

	
	if(password.length < 6){
		document.getElementById("check1").innerHTML= "minimum length 6 characters";
		setTimeout("document.getElementById(\"check1\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput4").focus();
		return false;	
	}
	if (!password.match(/[0-9]/) || !password.match(/[A-Z]/) || !password.match(/[a-z]/)){
			document.getElementById("check1").innerHTML="should have numbers and letters and at least one upper case letter ";
			setTimeout("document.getElementById(\"check1\").innerHTML=\"\"", 6000);
			document.getElementById("id-formInput4").focus();
			return false;	
	}
	if(rePassword !== password){
		document.getElementById("check2").innerHTML= "dose not match";
		setTimeout("document.getElementById(\"check2\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput4").focus();
		return false;	
	}
		return true;

}

function checking3(){
	var counrty 	= document.getElementById("id-formInput6").value;
	var DOB 		= document.getElementById("id-formInput7").value;
	var checkbox	= document.forms[0]['agree'];
	
	
	
	if(counrty.length <3){
		document.getElementById("check3").innerHTML= "minimum length 3 characters";
		setTimeout("document.getElementById(\"check3\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput6").focus();
		return false;
	}
	if(counrty.match(/[0-9]/)){
		document.getElementById("check3").innerHTML="should not have a number ";
		setTimeout("document.getElementById(\"check3\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput6").focus();
		return false;
	
	}
	if (DOB.match(/[^0-9]/)){
		document.getElementById("check4").innerHTML="should have only numbers ";
		setTimeout("document.getElementById(\"check4\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput7").focus();
		return false;
	}
	if(DOB.length != 8){
		document.getElementById("check4").innerHTML="8 numbers";
		setTimeout("document.getElementById(\"check4\").innerHTML=\"\"", 4000);
		document.getElementById("id-formInput7").focus();
		return false;
	
	}
	if(checkbox.checked == false){
		document.getElementById("checkbox").innerHTML= "check the box";
		setTimeout("document.getElementById(\"checkbox\").innerHTML=\"\"", 4000);
		 document.forms[0]['agree'].focus();
		return false;	
	}
		return true;

}











function checkavailability(id,name,span){
	
	var checkName = document.getElementById(id).value;
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		 xmlhttp = new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
	
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
	  		
			document.getElementById(span).innerHTML = xmlhttp.responseText;
			setTimeout("document.getElementById('"+span+"').innerHTML=''", 4000);
			if(xmlhttp.responseText !== " "){
				//document.getElementById(id).focus();
				return false;
			}
			
			return true;
		}
	}
	xmlhttp.open("GET","../php/Availbility.php?"+name+"="+checkName,true);
	
	xmlhttp.send();
	
}