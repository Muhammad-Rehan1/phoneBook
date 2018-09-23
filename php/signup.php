<?php

    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");
	
/* 	
	// define variables and set to empty values
	$fnameErr = $lnameErr = $dobErr = $mobileErr = $emailErr = $passwordErr = "";
	$fname = $lname = $dob = $mobile = $email = $pass = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//first name filed checking the integirty of info provided by user
		 if (empty($_POST["txtfname"])) {
			$nameErr = "First Name is required";
		  } else {
			$fname = check_fields($_POST["txtfname"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			  $fnameErr = "Only letters and white space allowed"; 
			}
		  }
		//last name filed checking the integirty of info provided by user
		 if (empty($_POST["txtlname"])) {
			$nameErr = "Last Name is required";
		  } else {
			$lname = check_fields($_POST["txtlname"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			  $lnameErr = "Only letters and white space allowed"; 
			}
		  }
		  
		  //checking whether user enters right email address or not
		 if (empty($_POST["txtemail"])) {
			$emailErr = "Email is required";
		  } else {
			$email = check_fields($_POST["txtemail"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format"; 
			}
		}
	  
			  //date of birth integrity
				if (empty($_POST['txtdob'])) {
					$dobErr = "Date of birth is required";
			}else{
				$dob = check_fields($_POST["txtdob"]);
				//check if it contain the date expression
				 
			if (!preg_match('(/^((([1-2][0-9])|([1-9]))/([2])/[0-9]{4})|((([1-2][0-9])|([1-9])|(3[0-1]))/((1[0-2])|([3-9])|([1]))/[0-9]{4})$/)', $dob)){
				$dobErr = "invalid date of birth format";
			}
			}	
			
			//password integrity
				if (empty($_POST['txtpassword'])) {
					$passwordErr = "Password is empty";
				}else{
				$pass = check_fields(md5($_POST["txtpassword"]));
				
			}	
		
	}
	function check_fields($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
} */

    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $dob = $_POST['txtdob'];
    $mobile = $_POST['txtmobile'];
    $email = $_POST['txtemail'];
    $pass = md5($_POST['txtpassword']);
 

   $sql = " insert into _users(fname,lname,dob,mobile,email,pass) values ('$fname','$lname','$dob',$mobile,'$email',MD5('$pass'));";
   
        $_SESSION['success']="true";
		if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
		header("Location: ..\index.php");
		} else {
			echo "Error: " /* . $sql .  "<br>" */ . $con->error;
		} 

   mysqli_close($con) or die(" Connection failed to close ! ") ;


?>