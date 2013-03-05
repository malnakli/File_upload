<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<script type ="text/javascript" src="..//javascript/checkavailbility.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/forgetPasswordStyle.css" />

<?php
		require('everyWhere.php');
		echo "<div class= 'cl-welcomMassege'>
						control by javascript
				</div>";
				
			// the main list for non-register users
					mainGenralUserList();
					  
	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['uname']) && !empty($_POST['uname'])){
		
		$email 		=	$_POST['email'];
		$userNaem 	=	$_POST['uname'];
		$newPassword = md5("mahsme123A");
		$message = " your new password: mahsme123A /n after you log in please change it for scrutiny reason";
			require("connect.php");
			$updatePassword = "UPDATE `members` SET `password`='$newPassword' WHERE `email`='$email'";
			mysql_query($updatePassword);
		//change it later
		mail("mah.hassoun@gmail.com", "new passwored",$message, "From:" . $email);
		echo	"<div class = 'text-down'>
				we have sent your new password.
				
				</div>";
	
	}else{




				
					
			echo 	"<div class = 'text-down'>
						<form method = 'post' 	onsubmit= \"return forgetPassword()\"		action = 'forgetPassword.php'>
							<fieldset>
								<legend>Fill the fields out</legend>
									<span id = \"id-forgetPassword\"  >
										User name   <input type=\"text\" 		name=\"uname\"  	size =\"15\" maxlength =\"30\"	id=\"id-forgetPassword-userName\" /> <br /> <br />
										 <dd id= \"id-and\"> AND</dd> <br />
										
										Email 		<input type=\"text\" 		name=\"email\" 		size =\"15\" maxlength =\"30\"	id=\"id-forgetPassword-email\"	/>  
									</span>
										<br /><br />
										<span id ='check1'> </span>
										<br />
									<input type=\"submit\" value=\"Send\"/>
									<input type=\"reset\" value=\"Reset\"/>
							</fieldset>
						</form>
					</div>";


	}


?>