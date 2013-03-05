	/** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
						 * To delete  folders or files											*
						 * Author: Mohammed Alnakli, Programmer.								*
						 * E-mail Address : mah.hassoun@gmail.com								*
						 * create date 	:	Aug 24,2011											*
						 * last changed : 	Aug 24,2011											*
						 ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
						 
						 
			
			
			function renameFile(oldName,newName,Oldvalue,path){
					
				var pro = 	prompt("write your new file name",Oldvalue);
				
				var oldType = Oldvalue.substr( Oldvalue.indexOf(".") +1 ,5) ;
				var newType = pro.substr( pro.indexOf(".") +1 ,5) ;
				
				if (pro != null && pro !==""){
					
					
					if ( (pro.indexOf(".") > 0) && (pro.lastIndexOf(".")  == pro.indexOf(".") ) ){
						
						if( oldType == newType){
					
						
							if(pro == Oldvalue){
									
								alert("you have not change the name");
								
							}else{
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
										
									
										
											alert(xmlhttp.responseText);
									
											location.reload();
											
									}
								
								}	
								
								
								xmlhttp.open("GET","../"+path+"?"+oldName+"="+Oldvalue+"&"+newName+"="+pro,true);
								
								xmlhttp.send();
							}
						}else{
								alert("types don't match ");
						}
					}else{
					
						alert("illegal name 'write the type' ");

					}
				}	
			}					 
						 
	
	