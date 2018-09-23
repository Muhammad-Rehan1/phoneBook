<?php

	$username = "root";
	$password = "";
	$servername = "localhost";
	$dbname = "phonebookdirectory";
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);
?>