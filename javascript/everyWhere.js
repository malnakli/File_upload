	var websiteName='file-upload';
	
	function titleHeader(){
		document.getElementsByTagName("div")[0].innerHTML=
		"<h1>Welcome to <font color =red> Mo </font> File Upload </h1>";
	
	}
	
	//the main list for non-register user
	function mainGeneral(){
	

			document.getElementById('id-mainGeneral-list').innerHTML= "<ul>"+
				"<li> <a href =\" ../../"+websiteName+"/index.php\"> Home </a> </li> 	"+
				"<li> <a href = \" #\"> About us </a> </li> "+ 
				"<li> <a href = \"../../"+websiteName+"/php/contactForm.php\"> Contact us </a></li> "+
					"</ul>";
					
			
				
	}		
		// the main list for registered users 
		function mainUserList(){
		
		document.getElementById('id-mainUser-list').innerHTML=  "<ul>" +
			"<li><a href =\" ../../"+websiteName+"/index.php\"> Home </a></li>  " +
			"<li><a href = \"../../"+websiteName+"/php/upload.php\">upload your files</a></li> "+
			"<li><a href = \" ../../"+websiteName+"/php/download.php\">Download your files</a></li> "+ 
			"<li><a href = \" ../../"+websiteName+"/php/accountInformation.php\"> Account information </a> "+ 
			"<li><a href =\"../../"+websiteName+"/php/logout.php \"> log out </a></li> "+
			"<li><a href = \" #\"> About us </a></li> "+ 
			"<li><a href = \"../../"+websiteName+"/php/contactForm.php\"> Contact us </a></li> "+
					"</ul>";
	
	
	}
	

function onloading(){
	titleHeader();
	

	
	
}



window.onload= onloading;





