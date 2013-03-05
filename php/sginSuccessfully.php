
<title>Thank you </title>

<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<?php
	require('everyWhere.php');
	//this div is control by javascript to show the welecom massege
	echo "<div class= 'cl-welcomMassege'>
				control by javascript
		</div>";
		
		
	// the main list for non-register users
					mainGenralUserList();
				$memberName			=  	strtolower($_POST["uname"]);
				$fisrtName			=  	$_POST["fname"];
				$lastName			=  	$_POST["lname"];
				$email				=  	$_POST["email"];
				$memberPassword		=  	md5($_POST["password"]); 
				$country			=  	$_POST["country"];
				$dateOfBirth		=  	$_POST["DOB"];
				$agree				=	$_POST["agree"];
				$createDate			=	date("l dS \of F Y");
				
				
				$checkIsset = isset($memberName) && isset($email) && isset($memberPassword ) && isset($country) && 
							isset($dateOfBirth)  && isset($createDate) && isset($agree);
		
				$checkIsNotEmpty = ( empty($memberName ) || empty($agree) || empty($email) ||
								empty($memberPassword) || empty($country) || empty($dateOfBirth) 
								|| empty($createDate)  );
								
				if( !$checkIsset || $checkIsNotEmpty  ){
					
					die("You have to fill out the required field");
			
				}else{
				
					require("connect.php");
					$existMember	= "select * from `members` where userName = '$memberName'";
					$row  = mysql_fetch_assoc(mysql_query($existMember ));	
					if($row) {
						
						die("This member already exist!");
						
					}else{
					
						 mysql_query("INSERT INTO `members` VALUES('','$memberName','$fisrtName','$lastName','$email','$memberPassword','$country','$dateOfBirth','$createDate')");
						$to = $email;
						$subject = "Welcome to Mo file upload";
						$message = "HI $memberName \n we are very happy to have you with us \n Best Wishes Mo file upload  ";
						$from = "mah.hassoun@gmail.com";
						$headers = "From:" . $from;
						mail($to,$subject,$message,$headers);
						echo"<div class = 'text-down'>you have successfully sign up $memberName. an email has been sent to $email. <br/></div>";
						echo"<a href ='../index.php'>back to home page</a>";
						// make folder for each user with his or her unique user name.
						mkdir("../../file-upload/uploaded/$memberName");
						 fopen("../../file-upload/uploaded/$memberName/index.php", 'w') or die("can't open file");
						 fclose( (fopen("../../file-upload/uploaded/$memberName/index.php", 'w')));
						 
						 session_start();
						$_SESSION['userNames'] = $memberName;
						$_SESSION['password'] = $memberPassword ;
						mysql_close($connect);
		
					}
				}
?>