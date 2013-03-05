<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Download Files</title>
	
	
	<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
	<script type ="text/javascript" src="..//javascript/includeFile.js" ></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/styleDownload.css" />
	

</head>

		



<body>
<?php 

	
 	require('everyWhere.php');
	session_start();
	//this div is control by javascript to show the welecom massege
	echo 	"<div class= 'cl-welcomMassege'>
				control by javascript
			</div>";
			// to check if the user is already member or not
		require('CheckNonRegisterUser.php');
		// the main list for register users
				mainUserList();	
		// the welcome message for the user
				 welcome();
				 
	
	
		
		
	
			$folderName = $_SESSION['userNames'];
			
			$dir = opendir( "../uploaded/$folderName/");
					
			$q = -2; //to skip the fist two when the $file is reding 
			
			echo "<div id = \"download\">";
			echo 	"<table border=\"1\" >";
			echo		"<tr> 
							<th>count</th><th>file name</th> <th> file type</th> <th>file size</th><th>rename </th><th> delete </th>";
			
				while( ($file = readdir($dir) )  && ($q<20) ) {
						
					
					if($q>0 and $file != "index.php"){
							 echo "<tr><td> ".$q." </td>";
							$fileName = substr($file,0,strpos($file,'.'));
							$fileType = substr($file,(strpos($file , '.' ) + 1));
							echo " <td><a href=\" ../uploaded/$folderName/$file \">$fileName </a></td>";
							$file = basename($file);//  strip off directory information for security
							$file = "../uploaded/$folderName/".$file;// to read the file
							
							$filesize=	filesize($file) / 1024; // calculate the file by kb
							echo "<td>".$fileType."</td>";
							$sum = $sum + $filesize;
     						printf( "<td> %.2f kb.</td>", $filesize );
     						
     						echo "<td><input type='button' value = 'Rename' onclick =\" return renameFile('oldName','newName','".$fileName.".".$fileType."','php/renameFile.php'); \" /></td>";
     						echo "<td><input type='button' value = 'Delete' onclick =' sendFileByAJAX(\"delFile\",\"$fileName".".$fileType\",\"php/deleteFile.php\"); ' /></td> </tr>";
     				} 	
 				 	$q++;
 				 }
 				
					
				echo 		"</tr>";
				echo 	"</table>";
				echo "</div>";
				function calculteFreeSpace(){
				
					$free = 20000 -	$GLOBALS['sum'] ;
					return $free;
				
				}
				// to display the total size of user files 
				printf("<div id ='totlaSize'>	
							<table border= '1'> 
								<tr>
									<th>Total size</th><th> used </th><th>free</th>
										<tr>
											<td> 20000 kb </td><td>%.2f</td><td>%.2f</td>
										</tr>
								</tr>
							
							</table>	
						</div>",$sum,calculteFreeSpace());
				
		 	closedir($dir);
	
		
?>
</body>
</html>