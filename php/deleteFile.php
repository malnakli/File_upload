<?php

	// to check if the user is already member or not
		require('CheckNonRegisterUser.php');

	 $fileName2 = $_GET['delFile'];
	 $folderName2 = $_SESSION['userNames'];
	$deleteFile = "../uploaded/$folderName2/$fileName2";
	
	if( unlink($deleteFile) ){
		echo "has been deleted";
	}else{
		
		echo"you have no permission to delete file contact us";
	
	}
?>