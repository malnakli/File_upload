
<title>Upload File successfully</title>
<script type ="text/javascript" src="..//javascript/everyWhere.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/file_upload.css" />
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
			 
				 
		function uploadDetils(){
		
				$folderName = $_SESSION['userNames'];
				$fileName =$_FILES["file"]["name"];
				$fileType = substr($fileName,strpos($fileName,'.' ) + 1 );
				$fileType = strtolower($fileType);
				$fileSize = $_FILES["file"]["size"]/ 1024;
				$fileTmpName= $_FILES['file']['tmp_name'];
				$numberError =$_FILES["file"]["error"];
				$uploads_dir ="../uploaded/$folderName";
				
				if( (file_exists("$uploads_dir/$fileName")) && (is_uploaded_file($fileTmpName)) )
				{
					echo"<span class = 'text-down'><b>$fileName</b> already exists</span>";
				
			
				}else{
				
					if(  ( ($fileType == 'jpg')		|| ($fileType == 'gif')  	|| ($fileType == 'jpeg') 
						|| ($fileType == 'mp3')  	|| ($fileType == "wav")		|| ($fileType == 'ram') 
						|| ($fileType == 'mp4')  	|| ($fileType == 'doc')		|| ($fileType == 'docx')
						|| ($fileType == 'ppt')  	|| ($fileType == 'pdf')		|| ($fileType == 'zip'))
						&& ($fileSize <= 5000) ) {	 
						function calculatTotalSpaceDir(){
							
							
							$dir = opendir( "../uploaded/".$_SESSION['userNames']."/");
					
							$q = -2; //to skip the fist two when the $file is reding
							
								while( ($file = readdir($dir) )  && ($q<25) ) {
										
									
									if($q>0 and $file !== "index.php"){
											
										
										
											$file = basename($file);//  strip off directory information for security
											$file = "../uploaded/".$_SESSION['userNames']."/".$file;// to read the file
											
											$filesize0=	filesize($file) / 1024; // calculate the file by kb
											$sum = $sum + $filesize0;
											
									
									} 	
									$q++;
									
								 }
								 
							
								 closedir($dir);
							return $sum;
						}
						
						if ( calculatTotalSpaceDir() + $fileSize > 20000){
							
							
							echo "<b >you have exceed your 20 MG limit <br / >";
							die("CONTACT US FOR MORE SPACE </b>");
						
						}
						if( ($numberError== 0) && (is_uploaded_file($fileTmpName)) )
						{	
						
							echo "<div class = 'text-down' id = 'id-fileDetils'>";
							echo 'The file has been uploaded successfully <br/>';
							echo "<b>File name:</b> $fileName.".'<br/>';
							echo "<b>File type:</b> $fileType.".'<br/>';
							echo "<b>file size:</b> $fileSize ".' kb <br/>';
							 move_uploaded_file($fileTmpName, "$uploads_dir/$fileName");
							 echo "</div>";
						}else
						{
			
							switch($numberError)
							{
								case 1:
									echo 'UPLOAD_ERR_I NI _SI ZE';
									break;
								case 2:
									echo 'UPLOAD_ERR_FORM_SIZE,';
									break;
								case 3:
									echo'UPLOAD_ERR_PARTI AL';
									break;
								case 4:
									echo'UPLOAD_ERR_NO_FI LE,';
									break;
								case 6:
									echo 'UPLOAD_ERR_NO_TMP_DIR';
									break;
								default:
									if($fileSize!=0)
									{
											echo'error is not recognized';
										
		
									}
							}
						}				
					}else{
						echo"the type or the size is not allowed";
					
					}
				}
		}
		
		uploadDetils();
		
	?>