<html>
<head>
	
		<title>Contact us</title>

	<script type ="text/javascript" src="../javascript/everyWhere.js" ></script>
	<script type ="text/javascript" src="../javascript/contactForm.js" ></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

	
</head>
<body>

<?php
		require('everyWhere.php');
		session_start();
		echo "<div class= 'cl-welcomMassege'>
				control by javascript
		</div>";
		



		//if "email" is filled out, send email 
	if (isset($_POST['email']) && !empty($_POST['email'])){
	
		//send email
		$email = $_POST['email'] ;
		$subject = $_POST['subject'] ;
		$message = $_POST['message'] ;
		mail("mah.hassoun@gmail.com", $subject,
		$message, "From:" . $email);
		echo "Thank you, we have get your message";
	  }
	  //if "email" is not filled out, display the form
	else{
		if ( (isset($_SESSION['userNames'])) && (isset($_SESSION['password'])) && !empty($_SESSION['userNames']) && !empty($_SESSION['password']) ){
			// the main list for register users
				mainUserList();			
				// the welcome message for the user
				 welcome();
				 
			$memberName = $_SESSION['userNames'];
			//get the user email
				require("connect.php");
				$existEmail	=  mysql_fetch_assoc(mysql_query("SELECT `email` from `members` where userName = '$memberName'"));
		}else {
			// the main list for non-register users
					mainGenralUserList();
			
		}
			echo "<div class = 'text-down'>";
			echo 	"<form method='post'	onsubmit=\" return checking1();\"	 action='contactForm.php'>
						<fieldset>
							<legend>SEND MESSAGE TO US</legend>
								Email : <b style=\"color:red;\">*</b>	<input type=\"text\" 		name=\"email\"		value = '".$existEmail['email']."'		size =\"15\" maxlength =\"30\"	id = \"id-formInput3\" 	onblur ='checking1()'/>			<span id =\"format\" > </span>		<br />
					
								Subject: <input name='subject' type='text' /><br />
								Message:<br />
								<textarea name='message' rows='15' cols='40' id ='id-textMessage'>
								</textarea> <span id =\"format2\" > </span><br />
								<input type='submit' value = 'Send' />
						</fieldset>
					</form>";
			echo "</div>";
	  }
?>

</body>
</html>