

<link rel="stylesheet" type="text/css" href="../css/accountInformationStyle.css" />




<?php


//to be use to edit what the user ask for it 
$editacount = $_GET['EDIT'];
		switch($editacount){
			
			case 0: 
				userName();
				break;
			case 1: 
				userfnameAndLname();
				break;
			case 2: 
				userEmail();
				break;
			case 3: 
				userPassword();
				break;
			case 4: 
				userDOB();
				break;
			case 5: 
				userCountry();
				break;
			default:
				echo "please contact us";
			
		
		}
		
	
	function userName(){
					// id should be change later
		echo	"<div id = 'userNameEdit' >
					
						User name :  	<input type=\"text\" 		name=\"uname\" 	size =\"11\" maxlength =\"9\"   id = \"id-accuontUser\"	 /> 		<span id ='notUsed1'> </span> <br /> <br /> 
										<input type=\"button\" value=\"Save changes\" onclick =\"return checkUserName('notUsed1','id-accuontUser');\" />
										<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount1')\"	 />
					
				</div>";
				
			 
	}	
	function userfnameAndLname(){
		die("<div id = 'userNameEdit' >
							First name : 			<input type=\"text\" 		name=\"fname\" 		size =\"11\" maxlength =\"10\"	id = \"id-accuontfName\" 	/>		 			<span id = \"notUsed2-1\" > </span>	<br />
							Last name  :			<input type=\"text\" 		name=\"lname\" 		size =\"11\" maxlength =\"10\"	id = \"id-accuontlName\"  />					<span id = \"notUsed2-2\" > </span>	<br /><br /> 
													<input type=\"button\" value=\"Save changes\" onclick =\"return checkNames('notUsed2-1','notUsed2-2','id-accuontfName','id-accuontlName')\" />
													<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount2')\"	 />
		</div>");	
	}
	function userEmail(){
		
		echo	"<div id = 'userNameEdit' >
					
						email :  	<input type=\"text\" 		name=\"email\" 		   id = \"id-accuontEmail\"	 /> 		<span id ='notUsed3'> </span> <br /> <br /> 
										<input type=\"button\" value=\"Save changes\" onclick =\"return checkEmail('notUsed3','id-accuontEmail');\" />
										<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount3')\"	 />
					
				</div>";
				
			 
	}	
	function userPassword(){
		
		echo	"<div id = 'userNameEdit' >
		
						old password :  	<input type=\"password\" 		name=\"Oldpassword\" 	size =\"15\" maxlength =\"17\"	   id = \"id-accuontOldPassword\"	onblur = \"updateEditing('id-accuontOldPassword','Oldpassword','notUsedOld4','php/Availbility.php');\" /> 		<span id ='notUsedOld4'> </span> <br /> <br /> 
						new password :  	<input type=\"password\" 		name=\"password\" 		size =\"15\" maxlength =\"17\"	   id = \"id-accuontPassword\"	 /> 	<br />	<span id ='notUsed4'>  </span> <br /> 
										<input type=\"button\" value=\"Save changes\" onclick =\"return checkPassword('notUsed4','id-accuontPassword');\" />
										<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount4')\"	 />
					
				</div>";
				
			 
	}		
	function userDOB(){
		
		echo	"<div id = 'userNameEdit' >
					
						Date of birth :  	<input type=\"text\" 		name=\"DOB\" 	 size =\"10\" maxlength =\"8\"	   id = \"id-accuontDOB\"	 /> 		<span id ='notUsed5'> </span> <br /> 
											<p id=\"id-examleDOB\"  >ddmmyyyy e.g 30121985 (to be used as surety question ) </p> <br /> 
											<input type=\"button\" value=\"Save changes\" onclick =\"return checkingDOB('notUsed5','id-accuontDOB');\" />
											<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount5')\"	 />
					
				</div>";
				
			 
	}
	function userCountry(){
		
		echo	"<div id = 'userNameEdit' >
					
						Country :  	<input type=\"text\" 		name=\"country\" 	 size =\"10\" maxlength =\"10\"	   id = \"id-accuontCountry\"	 /> 		<span id ='notUsed6'> </span> <br /> <br /> 
											<input type=\"button\" value=\"Save changes\" onclick =\"return chekcCountry('notUsed6','id-accuontCountry');\" />
											<input type=\"button\" value=\"Cancel\"		  onclick = \"cancel('editaccount6')\"	 />
					
				</div>";
				
			 
	}	
?>		