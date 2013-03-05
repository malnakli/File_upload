

<?php
		session_start();
		
	if ( !(isset($_SESSION['userNames'])) && !(isset($_SESSION['password'])) && empty($_SESSION['userNames']) && empty($_SESSION['password']) ){
		$websiteName='file-upload';
			echo "<div id= \"id-mainGeneral-list\"> <img src =\"../../$websiteName/images/onload.gif\"  alt ='contact us' onload=\"mainGeneral()\" /> </div>";
		die("LOG IN FIRST");
	}
?>