<?php 
	session_start();
	require_once("connect.php");
	
	$uid = $_SESSION['uid'];
	
	# Extract Form values
	$fname = $_POST['txtfname'];
	$lname = $_POST['txtlname'];
	$mobile = $_POST['txtmobile'];
	$landline = $_POST['txtLandline'];
	$contactEmail = $_POST['txtemail'];
	$public = $_POST['txtpublic'];
	
	$sql = " insert into _contact(contact_id,cf_name,cl_name,mobile,landline,contactEmail,public,email) values ('','$fname','$lname',$mobile,$landline,'$contactEmail','$public','$uid');";
	if ($con->query($sql) === TRUE){
		
		$_SESSION['insert_success']=1;
		echo "new record added successfull";
		header("Location: ..\create.php");
		
	}else{
		$_SESSION['insert_success']=0;
		echo "does not added record";
		header("Location: ..\create.php");
	}
	
	#echo $fname . $lname . $mobile . $landline . $email . $public;
	
	/* if( mysqli_query($con," insert into _contact values('$fname','$lname',$mobile,$landline,'$contactEmail','$public','$uid')"))
	{
		if($public == "yes")
			 mysqli_query($con," insert into _public values('$fname','$lname',$mobile,$landline,'$email') ") or die(" Error in insertion of public"); 
			
		$_SESSION['insert_success']=1;
		header("Location: ..\create.php");
	}
	else
	{
		$_SESSION['insert_success']=0;
		header("Location: ..\create.php");
	}	 */
	mysqli_close($con);
?>