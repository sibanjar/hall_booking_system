<?php include 'inc/session.php';
include 'inc/dbconection.php';
	$email=$_POST['email'];
	$type=$_POST['type'];
	if($type=='email'){

	$email=$_POST['email'];
	$res=mysqli_query($con,"select * from user where email='$email'");
	$check_user=mysqli_num_rows($res);
	if($check_user>0)
	{
		$row=mysqli_fetch_assoc($res);
		$pwd=$row['security'];
	//$_SESSION['EMAIL']=$email;
	$html="Your Updation code for your profile is <strong>$pwd<strong>";


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
	$mail->Subject="Your Hobby";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Please check your email id for hobby";
	}else{
		//echo "Error occur";
	}

}
else{
		echo "Email id not registered with us";
	
	}
	

	}



?>