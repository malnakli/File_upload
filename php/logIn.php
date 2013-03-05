	<title>log in</title>

<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />


<?php 

	require('everyWhere.php');
		echo "<div class= 'cl-welcomMassege'>
						control by javascript
				</div>";
				
			// the main list for non-register users
					mainGenralUserList();
		
	
	
			
			//declare variables   
			$userName = htmlentities ($_POST["fname"]); //not able to use html tags
			$password =	$_POST["password"]; 
			$passwordMD5 = md5($password);
			  // check for the variables 
			  if( !(isset($userName)) || !(isset($password)) || empty($userName) || empty($password) ){
			  
			 		 die("please write your user name and password");
			  
			  }else{
					// connect to database
				
					require("connect.php");
					$checkNamePassword	= "SELECT * FROM `members` WHERE `userName` = '$userName' AND `password` = '$passwordMD5' ";
					$rowNamePassword  = mysql_num_rows(mysql_query($checkNamePassword ));
						
		
				
					if($rowNamePassword == 1){
						session_start();
						$_SESSION['userNames'] = $userName;
						$_SESSION['password'] = $passwordMD5 ;
						
						$userInforamtion =  mysql_fetch_assoc(mysql_query($checkNamePassword)) ;
						$_SESSION['userId'] = $userInforamtion['member-id']; 
						$_SESSION['email'] 	= $userInforamtion['email']; 
						$_SESSION['fName']	= $userInforamtion['firstName']; 
						$_SESSION['lName']	= $userInforamtion['lastName']; 
						$_SESSION['DOB']	= $userInforamtion['dateOfBirth']; 
						$_SESSION['country']= $userInforamtion['country']; 
						$_SESSION['PChange'] = '**********';
						echo"<div class = \"text-down\">
								your have log in successfully <br/>
								<a href =\" ../index.php \"> click here </a> to go back <br/> 
								 </div>";
								
							echo "<META HTTP-EQUIV=Refresh CONTENT=\"3; URL=../index.php\">";
					
			
					}else{
					
						die("your user name or password are incorrect");
							
						
					}
					
					
				
				}
			
			
			
			
		


?>
