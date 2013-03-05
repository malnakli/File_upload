						/** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
						 * To delete  folders or files											*
						 * Author: Mohammed Alnakli, Programmer.								*
						 * E-mail Address : mah.hassoun@gmail.com								*
						 * create date 	:	Aug 23,2011											*
						 * last changed : 	Aug 23,2011											*
						 ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
						 
						 
						 
						 
	function sendFileByAJAX(name,value,path){
	
		var con = confirm("Are you sure");
	
		if(con === true){
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
					
					//alert(xmlhttp.responseText);
				
					location.reload();
				}
			
			}	
			
			
			xmlhttp.open("GET","../"+path+"?"+name+"="+value,true);
			
			xmlhttp.send();
			//if(tureOrFalse === 'true' ){
			//	return true;
			//}else{
			//	return false;
			//}
		}
	}
	
	
	