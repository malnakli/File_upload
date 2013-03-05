
	<title>Account Information</title>

<script type ="text/javascript" src="../javascript/accountInformation.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/accountInformationStyle.css" />
<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>

<?php
		
		require('everyWhere.php');
		
		
		//this div is control by javascript to show the welecom massege
		echo "<div class= 'cl-welcomMassege'>
					control by javascript
			</div>";
			// to check if the user is already member or not
		require('CheckNonRegisterUser.php');
			// the main list for register users
			mainUserList();
			// the welcome message for the user
					 welcome();
				
					 
			echo"<div id ='id-acountList'>
					<dl id ='id-list'>
						<dt>Account Information</dt><br />
							<dd> user name  	<span class = 'cl-informationEdit'>$nameA</span> 										<b class ='cl-editWord' 	id = 'edit1'			onclick = 'editAccount1()'> Edit</b>	</dd> <span id= \"editaccount1\" ></span>
							<dd> name			<span class = 'cl-informationEdit'>".$_SESSION['fName']." ".$_SESSION['lName']."</span>	<b class ='cl-editWord'		id = 'edit2'			onclick = 'editAccount2()'> Edit</b>	</dd> <span id= \"editaccount2\" ></span>
							<dd> email  		<span class = 'cl-informationEdit'>".$_SESSION['email']."						</span>	<b class ='cl-editWord'		id = 'edit3'			onclick = 'editAccount3()'> Edit</b>	</dd> <span id= \"editaccount3\" ></span>
							<dd> password		<span class = 'cl-informationEdit'>".$_SESSION['PChange']."						</span>		<b class ='cl-editWord'		id = 'edit4'		onclick = 'editAccount4()'> Edit</b>	</dd> <span id= \"editaccount4\" ></span>
							<dd> date of birth 	<span class = 'cl-informationEdit'>".$_SESSION['DOB']."							</span>		<b class ='cl-editWord'		id = 'edit5'		onclick = 'editAccount5()'> Edit</b>	</dd> <span id= \"editaccount5\" ></span>
							<dd> country		<span class = 'cl-informationEdit'>".$_SESSION['country']."						</span>	<b class ='cl-editWord'		id = 'edit6'			onclick = 'editAccount6()'> Edit</b>	</dd> <span id= \"editaccount6\" ></span>
							
					</dl>
							
					
					
					
				</div>";		 
					 
					 
					 
		 
		 
				 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>