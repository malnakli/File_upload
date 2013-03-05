<?php
	
	$serverName= 'localhost';
	$username= 'Mohammed';
	$passwordData='carrental';

	$connect= mysql_connect($serverName,$username,$passwordData);
	if(!$connect){
		die("connect to database fail".mysql_error());
	}
	mysql_select_db("fileupload",$connect);
		

?>