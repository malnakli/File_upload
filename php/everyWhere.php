<?php
	$websiteName='file-upload';
	session_start();
	 $nameA = $_SESSION['userNames'];
	
	function welcome(){
	// for the name 
		global $nameA;
		echo 	"<div id='welcome' >
							Welcome <b> $nameA </b> 
					 		</div>";

	}
	
	function mainUserList(){
	global $websiteName;
		echo 	" <div id =\"id-mainUser-list\"> 	<img src =\"../../$websiteName/images/onload.gif\"  alt ='contact us' onload=\"mainUserList()\" /></div>";

	}
	
	
	function mainGenralUserList(){
				global $websiteName;	
				echo "<div id= \"id-mainGeneral-list\"> <img src =\"../../$websiteName/images/onload.gif\"  alt ='contact us' onload=\"mainGeneral()\" /> </div>";

	}
?>