<?php session_start();
	//$email=$_POST['email'];
	$type=$_POST['type'];
	$otp=$_POST['otp'];
	if($type=='email'){

	//$_SESSION['EMAIL_OTP']=$otp;
	if($otp==$_SESSION['EMAIL_OTP'])
	{
		echo "done";
	}
	else{
		echo "no";
	}



	}



?>