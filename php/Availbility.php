<?php	
		session_start();
			$memberNameAvailbility  = 	$_GET["uname"];
			$emailAvailbility		= 	$_GET["email"];
			$PasswordCheck			= 	md5($_GET["Oldpassword"]);
			require("connect.php");
			if (!empty($memberNameAvailbility) ){
					
				$availbilityMember = "select `userName` from `members` where userName = '$memberNameAvailbility'";
				$check  = mysql_fetch_assoc(mysql_query($availbilityMember));	
				if($check){
				
					die("Not Available");
					
				}else{
			
				}
						
			}elseif (!empty($emailAvailbility) ){
					
				$availbilityEmail = "SELECT `email` FROM `members` WHERE `email` = '$emailAvailbility'";
				$check1  = mysql_fetch_assoc(mysql_query($availbilityEmail));	
				if($check1){
				
					die("this email already exist");
					
				}
					
						
			}elseif( !empty($PasswordCheck) ){
				
				$checkPassword = "SELECT `password` FROM `members` WHERE `member-id`='".$_SESSION['userId']."' AND `password` = '$PasswordCheck'";
				$check  = mysql_num_rows(mysql_query($checkPassword));	
				if( $check !== 1){
				
					die("Incorrect");
					
				}else{
					
					die("ok ");
			
				}
				
			}



?>