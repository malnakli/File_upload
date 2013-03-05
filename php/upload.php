
	<title>Upload File</title>

<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

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
			
			
				$folderName = $_SESSION['userNames'];
						 
		function displayTheFileAllowed(){	
			
			echo "<div class = 'text-down'><b>File types:</b> jpg , gif, jpeg , mp3 , wav , ram , mp4 , doc , docx , ppt , pdf , zip <br />";
			echo "<b>Max size:</b> 5 MG <br / ><br /></div>";
			
			
			
		}
			displayTheFileAllowed();	
			echo "
					<div id = \"logIn\">
						<form action=\"file_upload.php\" method=\"post\"
						enctype=\"multipart/form-data\">
							<label for=\"file\">Filename:</label>
							<input type=\"file\" name=\"file\" id=\"file\" />
							<br />
							<input type=\"submit\" name=\"submit\" value=\"Upload file\" />
						</form> 
						
						
					</div>";
					
		
	

?>
