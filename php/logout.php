	
	<title>log out</title>
<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<?php 
	require('everyWhere.php');
	session_start();
	
	//this div is control by javascript to show the welecom massege
	echo "<div class= 'cl-welcomMassege'>
				control by javascript
		</div>";
		// the main list for register users
		mainUserList();
		// the welcome message for the user
				 welcome();
	session_destroy();
	echo "<div class = \"text-down\">your are log out successfully <br/>
		 <a href =\" ../index.php \"> click here </a> to go back <br/>
		 </div>";
	echo "<META HTTP-EQUIV=Refresh CONTENT=\"3; URL=../index.php\">";


?>