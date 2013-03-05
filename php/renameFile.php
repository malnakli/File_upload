<?php
		// to check if the user is already member or not
		require('CheckNonRegisterUser.php');
		
		//$websiteName	='file-upload';
		$fileOldName 	= $_GET['oldName'];
		
		$fileNewName	 = $_GET['newName'];
		$folderName 	= $_SESSION['userNames'];
		$uploads_dir 	="../uploaded/$folderName";
		
		if (file_exists("$uploads_dir/$fileNewName")){
			echo " $fileNewName  already exists";
		
		}else{
					
					rename("$uploads_dir/$fileOldName", "$uploads_dir/$fileNewName");
					echo "Has been successfully changed";
				}
				
				
?>