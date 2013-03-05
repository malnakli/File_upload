<?php
			
				require("connect.php");
				// to check if the user is already member or not
				require('CheckNonRegisterUser.php');
	
		if ( isset($_GET['uname']) && !empty($_GET['uname']) ){
		
			require("Availbility.php");
			$updateUsername = "UPDATE `members` SET `userName`='".strtolower($_GET['uname'])."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updateUsername);
			$folderName = $_SESSION['userNames'];
			$_SESSION['userNames'] = $_GET['uname'];
			rename( "../uploaded/$folderName/", "../uploaded/".$_SESSION['userNames']."/");
			die();
		
			
			
		} elseif( isset($_GET['fname']) && !empty($_GET['fname'])  ){
			
			$updateNames = "UPDATE `members` SET `firstName`='".$_GET['fname']."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updateNames);
			$_SESSION['fName'] = $_GET['fname'];
			
			die();
			
		} elseif(  isset($_GET['lname']) && !empty($_GET['lname'])  ){
			
			$updatelNames = "UPDATE `members` SET  `lastName`='".$_GET['lname']."'  WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updatelNames);
			
			$_SESSION['lName'] = $_GET['lname'];
			die();
			
		}
		elseif ( isset($_GET['email']) && !empty($_GET['email']) ){
		
			require("Availbility.php");
			$updateEmail = "UPDATE `members` SET `email`='".$_GET['email']."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updateEmail);
			$_SESSION['email'] = $_GET['email'];
			die();
		
		
		} elseif ( isset($_GET['password']) && !empty($_GET['password']) ){
			
			$updatePassword = "UPDATE `members` SET `password`='".md5($_GET['password'])."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updatePassword);
			$_SESSION['password'] = $_GET['password'];
			$_SESSION['PChange'] = "has been changed";
			die();
		
		
		
		} elseif ( isset($_GET['DOB']) && !empty($_GET['DOB']) ){
			
			$updateDOB = "UPDATE `members` SET `dateOfBirth`='".$_GET['DOB']."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updateDOB);
			$_SESSION['DOB'] = $_GET['DOB'];
			
			
		} elseif ( isset($_GET['country']) && !empty($_GET['country']) ){
		
			$updateCountry = "UPDATE `members` SET `country`='".$_GET['country']."' WHERE `member-id`='".$_SESSION['userId']."'";
			mysql_query($updateCountry);
			$_SESSION['country'] = $_GET['country'];
			die();
		}else{
		
			die("contact us for the error 254");
		
		}
	
	
	
	
	
	
	

?>