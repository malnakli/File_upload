
function forgetPassword(){
 
	return checkavailability('id-forgetPassword-email','id-forgetPassword-userName','email','uname','check1','php/tempAvailbility.php');

 	
}







	
var tureOrFalse; // to reutrn  ture or false  for this function
function checkavailability(id,id2,name,name2,span,path){
	
	var checkName = document.getElementById(id).value;
	var checkName2 = document.getElementById(id2).value;
	
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
				
				document.getElementById(id2).focus();
				tureOrFalse =  'false';
			}else{
 				tureOrFalse =   'true' ;
 				}
		}
	
	}	
	
	
	xmlhttp.open("GET","../"+path+"?"+name+"="+checkName+"&"+name2+"="+checkName2,true);
	
	xmlhttp.send();
	if(tureOrFalse === 'true' ){
		return true;
	}else{
		return false;
	}

}