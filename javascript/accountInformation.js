var sumbiting ; // for not save some feild if it is false.



//-------------user name functtions---------------
function checkUserName(span,id){

	var userName 	= document.getElementById(id).value;
					  document.getElementById(span).style.fontSize="11pt";
	if( (userName.length < 3) ){
		
		document.getElementById(span).innerHTML = "minimum length 3 characters";
		 setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		 	document.getElementById(id).focus();
			return false;
		
	}
	if( !userName.match(/[a-z]/i)){
		document.getElementById(span).innerHTML = "Should have at least one letter ";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		 	document.getElementById(id).focus();
			return false;
	
	}
	
	updateEditing('id-accuontUser','uname','notUsed1','php/accountUpdate.php');
	return true;
}
function editAccount1(){

	editWindow('edit1','editaccount1','php/accounteditStyle.php');
	document.getElementById('editaccount2').innerHTML = "";
	document.getElementById('editaccount3').innerHTML = "";
	document.getElementById('editaccount4').innerHTML = "";
	document.getElementById('editaccount5').innerHTML = "";
	document.getElementById('editaccount6').innerHTML = "";
	
}
//--------------names functions-------------------
function checkNames(span,span2,id,id2){
	
	var firstName	= document.getElementById(id).value;
	var lastName 	= document.getElementById(id2).value;
					 	 document.getElementById(span).style.fontSize="11pt";
					   document.getElementById(span2).style.fontSize="11pt";

	
	if( firstName.length < 3){
		document.getElementById(span).innerHTML= "minimum length 3 characters";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	}
	if( firstName.match(/[0-9]/)){
		document.getElementById(span).innerHTML="should not have a number ";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	
	}
	if(lastName.length < 3){
		document.getElementById(span2).innerHTML= "minimum length 3 characters";
		setTimeout("document.getElementById('"+span2+"').innerHTML=\"\"", 4000);
		document.getElementById(id2).focus();
		return false;
	}
	if(lastName.match(/[0-9]/)){
		document.getElementById(span2).innerHTML="should not have a number ";
		setTimeout("document.getElementById('"+span2+"').innerHTML=\"\"", 4000);
		document.getElementById(id2).focus();
		return false;
	
	}
	
		updateEditing(id,'fname',span,'php/accountUpdate.php');
		updateEditing(id2,'lname',span2,'php/accountUpdate.php');
		
	return true;
	
}
function editAccount2(){

	editWindow('edit2','editaccount2','php/accounteditStyle.php');
	document.getElementById('editaccount1').innerHTML = "";
	document.getElementById('editaccount3').innerHTML = "";
	document.getElementById('editaccount4').innerHTML = "";
	document.getElementById('editaccount5').innerHTML = "";
	document.getElementById('editaccount6').innerHTML = "";
}
//--------------END OF names functions-------------------

//---------------email functions-----------------
function checkEmail(span,id){


	var email 		= document.getElementById(id).value;
	document.getElementById(span).style.fontSize="11pt";
	if(!email.match(/[\w]+\@[a-zA-Z0-9\.\-]+\.[a-z]{2,4}/g)){
		document.getElementById(span).innerHTML = "example@example.com";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	
	}
	updateEditing('id-accuontEmail','email','notUsed3','php/accountUpdate.php');
	return true;
}
function editAccount3(){

	editWindow('edit3','editaccount3','php/accounteditStyle.php');
	document.getElementById('editaccount1').innerHTML = "";
	document.getElementById('editaccount2').innerHTML = "";
	document.getElementById('editaccount4').innerHTML = "";
	document.getElementById('editaccount5').innerHTML = "";
	document.getElementById('editaccount6').innerHTML = "";
}
//------------password functions-------------------
function checkPassword(span,id){
		var password 	= document.getElementById(id).value;
		document.getElementById(span).style.fontSize="11pt";
	if(password.length < 6){
			
		document.getElementById(span).innerHTML= "minimum length 6 characters <br />";
		
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 3000);
		document.getElementById(id).focus();
		return false;	
	}
	if (!password.match(/[0-9]/) || !password.match(/[A-Z]/) || !password.match(/[a-z]/)){
			document.getElementById(span).innerHTML=" numbers, lower and upper case letters <br />";
			setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 6000);
			document.getElementById(id).focus();
			return false;	
	}
	//to check old password
	
	if(sumbiting === 0){
		updateEditing('id-accuontOldPassword','Oldpassword','notUsedOld4','php/Availbility.php');
		return false;
	
	}
	// to update old password with new one.
	updateEditing('id-accuontPassword','password','notUsed4','php/accountUpdate.php');
	return true;
}
function editAccount4(){

	editWindow('edit4','editaccount4','php/accounteditStyle.php');
	document.getElementById('editaccount2').innerHTML = "";
	document.getElementById('editaccount3').innerHTML = "";
	document.getElementById('editaccount1').innerHTML = "";
	document.getElementById('editaccount5').innerHTML = "";
	document.getElementById('editaccount6').innerHTML = "";
}
//------------END OF password functions-------------------

//------------date of birth functions-------------------
function checkingDOB(span,id){

	var DOB 		= document.getElementById(id).value;
	document.getElementById(span).style.fontSize="11pt";
	if (DOB.match(/[^0-9]/)){
		document.getElementById(span).innerHTML="should have only numbers ";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	}
	if(DOB.length != 8){
		document.getElementById(span).innerHTML="8 numbers";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	
	}
	updateEditing(id,'DOB',span,'php/accountUpdate.php');
	return true;
}
function editAccount5(){

	editWindow('edit5','editaccount5','php/accounteditStyle.php');
	document.getElementById('editaccount2').innerHTML = "";
	document.getElementById('editaccount3').innerHTML = "";
	document.getElementById('editaccount4').innerHTML = "";
	document.getElementById('editaccount1').innerHTML = "";
	document.getElementById('editaccount6').innerHTML = "";
}
//------------EDN OF date of birth functions-------------------

//------------Country functions----------------------- 
function chekcCountry(span,id){
	var counrty 		= document.getElementById(id).value;
	document.getElementById(span).style.fontSize="11pt";
	
	if(counrty.length <3){
		document.getElementById(span).innerHTML="minimum length 3 characters";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	
	}
	if (counrty.match(/[0-9]/)){
		document.getElementById(span).innerHTML="should not have a number ";
		setTimeout("document.getElementById('"+span+"').innerHTML=\"\"", 4000);
		document.getElementById(id).focus();
		return false;
	}
	
	updateEditing(id,'country',span,'php/accountUpdate.php');
	
	
	return true;

}
function editAccount6(){

	editWindow('edit6','editaccount6','php/accounteditStyle.php');
	document.getElementById('editaccount2').innerHTML = "";
	document.getElementById('editaccount3').innerHTML = "";
	document.getElementById('editaccount4').innerHTML = "";
	document.getElementById('editaccount5').innerHTML = "";
	document.getElementById('editaccount1').innerHTML = "";
}
//------------END OF Country functions----------------------- 



function cancel(span){

	document.getElementById(span).innerHTML = "";

}






function updateEditing(id,name,span,path){
	
	var checkValue = document.getElementById(id).value;

	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		 xmlhttp = new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function(){
	
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
	  		
	
				
				var x =	document.getElementById(span).innerHTML = xmlhttp.responseText;
						
					if (x.indexOf(" ",0) > 0){
					
							setTimeout("document.getElementById('"+span+"').innerHTML=''", 4000);
							
						if(xmlhttp.responseText === "ok"){
						
							sumbiting = 1;// 1 mean eveything is ok
							return true;
						}else{
						
							sumbiting = 0;
						
						}
						return false;
						
					}
					
				
					
					location.reload();
					
				
		}

	}	
	
	
	
	xmlhttp.open("GET","../"+path+"?"+name+"="+checkValue,true);
	
	xmlhttp.send();
	

}
	





















function editWindow(id,span,path){
	
	var checkName;
	
	switch(id){
		case 'edit1':
			 checkName = 0;
			 break;
		case 'edit2':
			 checkName = 1;
			 break;
		case 'edit3':
			 checkName = 2;
			 break;
		case 'edit4':
			 checkName = 3;
			 break;
	 	case 'edit5':
			 checkName = 4;
			 break;
	 	case 'edit6':
			 checkName = 5;
			 break;
	
	
	}
	//var checkName = document.getElementById(id).innerHTML;
	
	
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
			 	
			
		}
	
	}	
	
	
	xmlhttp.open("GET","../"+path+"?EDIT="+checkName,true);
	
	xmlhttp.send();
	

}