<?php include 'inc/session.php';
// MySQL connection string
require "inc/dbconection.php";

 if(isset($_POST['bookroom'])){
	 		$uid=$_SESSION['user_no'];
	 		$fullname=$_POST['fname'];
	 		$username=$_POST['uname'];
	 		$email=$_POST['email'];
	 		$phone=$_POST['num'];
	 		$city=$_POST['city'];
	 		$bookdate=$_POST['bookdate'];
	 		$booktime=$_POST['booktime'];
      $hallid=$_SESSION['hallid'];
      $hallname=$_SESSION['hallname'];
      $hallprice=$_SESSION['hallprice1'];

			 

    $ad=strtotime($bookdate);
    $query2 = "SELECT bookdate FROM daybooked WHERE hallid='$hallid'";
    $result = mysqli_query($con, $query2);
    $rowes=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach ($rowes as $row){
          if ($ad==strtotime($row['bookdate'])){
          $errors="HALL IS ALREADY BOOKED FOR SELECTED DATE.TRY CHECKING OTHER AVAILABLE HALL.!!!";
          header("location:partialbooking.php?error=$errors");
          exit(0);
          }
        }

        $query1 = "SELECT bookdate ,booktime FROM booked WHERE hallid='$hallid' ";
        $res = mysqli_query($con, $query1);
        $rows=mysqli_fetch_all($res,MYSQLI_ASSOC);
        $ad=strtotime($bookdate);
         foreach ($rows as $row){
          if($ad==strtotime($row['bookdate'])&&strcmp($booktime,$row['booktime'])==0){
              $errors="HALL IS ALREDAY BOOKED IN THE SELECTED TIME SLOT.!!!";
              header("location:partialbooking.php?error=$errors");
                exit(0);
              }
            }
      

  $todate=date("Y/m/d") ;
	$yrdate=strtotime($todate);

	if($yrdate>$ad){
		 $errors= "DATE IS EXPIRED!!!";
         header("location:partialbooking.php?error=$errors");
         exit(0);
	}
    else{
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
  $mail->Subject="Your Booking";
  $mail->Body="Thank You for booking our hall..";
  $mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
  ));
      if($mail->Send()){
     
       
     $inquery="INSERT INTO booked VALUES('$uid','$fullname','$username','$email','$phone','$city','$bookdate','$booktime','$hallid','$hallname','$hallprice')";
     $bool=mysqli_query($con,$inquery);  
     if(!$bool){
        $errors= "Database connection error";
        header("location:partialbooking.php?error=$errors");
        exit(0);
     }else{
      $s= "HALL BOOK SUCCESS. CHECK HERE!!!";
            header("location:Booklist.php?sucs='$s'"); 
               //header("location:partialbooking.php");
              
     }
   }
    }
   }
?>