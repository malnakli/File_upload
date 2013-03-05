	<title>Registration </title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
 <script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<script type ="text/javascript" src="..//javascript/checkForm.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/signUpstyle.css" />

<?php 
	require('everyWhere.php');
	//this div is control by javascript to show the welecom massege
	echo "<div class= 'cl-welcomMassege'>
				control by javascript
		</div>";
		
	// the main list for non-register users
					mainGenralUserList();
					
	echo" <div id =\"idRegistrationForm\">
				<form action =\"sginSuccessfully.php\" onsubmit=\"return checking()\" method =\"post\"  >
					<fieldset>
						<legend>Welcome to Registration Form</legend>
							please fill out the required field with red * <br />
								User name :			<b style=\"color:red;\">*</b>	<input type=\"text\" 		name=\"uname\" 		size =\"11\" maxlength =\"9\"   id = \"id-formInput0\"	onblur =\"checking1() \"/> 						<span id = \"minLength\" > </span>	<br /> 
								First name : 										<input type=\"text\" 		name=\"fname\" 		size =\"11\" maxlength =\"10\"	id = \"id-formInput1\" 	onblur ='checking1()'/>		 					<span id = \"minLength1\" > </span>	<br />
								Last name : 										<input type=\"text\" 		name=\"lname\" 		size =\"11\" maxlength =\"10\"	id = \"id-formInput2\"  onblur ='checking1()' />							<span id = \"minLength2\" > </span>	<br />
								Email : 			<b style=\"color:red;\">*</b>	<input type=\"text\" 		name=\"email\" 		size =\"15\" maxlength =\"30\"	id = \"id-formInput3\" 	onblur ='checking2()'/>							<span id = \"format\" > </span>		<br />
								Password:  			<b style=\"color:red;\">*</b>	<input type=\"password\" 	name=\"password\" 	size =\"15\" maxlength =\"17\"	id = \"id-formInput4\" 	onblur ='checking2()'/>							<span id = \"check1\" > </span>		<br />
								re-type password:	<b style=\"color:red;\">*</b>	<input type=\"password\" 	name=\"rePassword\" size =\"15\" maxlength =\"17\"	id = \"id-formInput5\" 	onblur ='checking2()'/>							<span id = \"check2\" > </span>		<br />
								Country	:			<b style=\"color:red;\">*</b>	<input type=\"text\"		name=\"country\" 	size =\"10\" maxlength =\"10\"  id = \"id-formInput6\"  onblur ='checking3()' />							<span id = \"check3\" > </span>		<br />
								Date of birth		<b style=\"color:red;\">*</b>	<input type=\"text\" 		name=\"DOB\" 		size =\"10\" maxlength =\"8\"	id = \"id-formInput7\"	onblur ='checking3()'  title =\"ddmmyyyy\"/>		<span id = \"check4\" > </span>		<br />
							
							<dd><font size=\"2\" >ddmmyyyy e.g 30121985 (to be used as surety question )</font></dd><br /><br />
							
							<textarea rows=\"5\" cols=\"30\"  disabled=\"disabled\" >
							Terms and conditions template for website usage
							Welcome to our website. If you continue to browse and use this website, 
							you are agreeing to comply with and be bound by the following terms and conditions of use.
							The use of this website is subject to the following terms of use:
							-The content of the pages of this website is for your general information and use only. 
							It is subject to change without notice.
							-This terms and conditions could change any time	
							</textarea><br />
							
							Agree <input type=\"checkbox\" name=\"agree\" /> <span id = \"checkbox\" > </span><br /><br />		
							
							<input type=\"submit\" value=\"Submit\" />
							
							<input type=\"reset\" value=\"Reset\" />
					</fieldset>
				</form>	
			
			</div>
			";
			
				
					 
?>