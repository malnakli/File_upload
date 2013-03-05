<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head >
	
	<title>Mo Upload File</title>
	
	<meta name="description" content="Private file upload" />
	<meta name="author" content="Mohammed Alnakli" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script type ="text/javascript" src="javascript/everyWhere.js" ></script>
	

</head>
<body>
		
<!--this div is control by javascript to show the welecom massege-->
	<div class= "cl-welcomMassege" >
		control by javascript
	</div>
	
	<div>
	<?php
	require('php/everyWhere.php');
		
		//echo session_name("userNames");
		//session_start();
		
			if ( (isset($_SESSION['userNames'])) && (isset($_SESSION['password'])) && !empty($_SESSION['userNames']) && !empty($_SESSION['password']) ){
			 		
				// the main list for register users
				mainUserList();			
				// the welcome message for the user
				 welcome();
				 
			}else{
				
					// the main list for non-register users
					mainGenralUserList();
			
					// for the user to log in website 
					echo "<div id = \"logIn\">
							<form action =\"php/logIn.php\" method =\"post\"  >
								<p>
									User name:  <input type=\"text\" name=\"fname\"/> <br/>
									Password:   <input type=\"password\" name=\"password\"/> <br/>
									<input type=\"submit\" value=\"log in\"/>
									<input type=\"reset\" value=\"Reset\"/>
								</p>	
							</form> 
									<a href=\"php/forgetPassword.php\" >Forget password.</a>
									<p>If you have never been a member of <b>Mo</b> please sign up first</p>
									<a href=\"../../$websiteName/php/sginUp.php\">Sign up</a><br/><br/>
								</div>";
			
				}
			?>
	</div>
</body>
</html>