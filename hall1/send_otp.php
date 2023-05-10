<?php include 'inc/session.php';
include 'inc/dbconection.php';
	$email=$_POST['email'];
	$type=$_POST['type'];
	if($type=='email'){

	$email=$_POST['email'];
	$check_user=mysqli_num_rows(mysqli_query($con,"select * from user where email='$email'"));
	if($check_user>0)
	{
		echo "Email_Already_Present";
		die();
	}
	$otp=rand(1111,9999);
	$_SESSION['EMAIL_OTP']=$otp;

	$_SESSION['EMAIL']=$email;
	$html="<strong>$otp<strong> is your otp";


	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="neharikashrestha33@gmail.com";
	$mail->Password="12345abcde#";
	$mail->SetFrom("neharikashrestha33@gmail.com");
	$mail->addAddress("$email");
	$mail->IsHTML(true);
	$mail->Subject="New OTP";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Done";
	}else{
		//echo "Error occur";
	}




	}



?>