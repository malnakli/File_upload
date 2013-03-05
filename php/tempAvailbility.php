<?php	
	
			$memberNameAvailbility  = 	$_GET["uname"];
			$emailAvailbility		= 	$_GET["email"];
			require("connect.php");
			
			
			if (!empty($memberNameAvailbility) &&  !empty($emailAvailbility) ){
					
				$availbility = "SELECT `email`,`userName` FROM `members` WHERE `email` = '$emailAvailbility' AND 
				`userName` = '$memberNameAvailbility' ";
				//change it later to better format
				
				$check  =  mysql_num_rows(mysql_query($availbility));	
				if($check == 1){
								

					die(" ");
								

					
				}else{
				
					die("this user name  and email don't match");
				}
			}else{
			
				die("please fill out the missing fields ");

			
			}
						
		
				
				
		



?>