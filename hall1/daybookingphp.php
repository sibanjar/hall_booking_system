<?php include 'inc/session.php'; ?>
<?php require('inc/dbconection.php');
?>
<?php

if (isset($_POST['bookroom'])) {
  $uid = $_SESSION['user_no'];
  $fullname = $_POST['fname'];
  $username = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['num'];
  $city = $_POST['city'];
  $bookdate = $_POST['bookdate'];
  $hallid = $_SESSION['hallid'];
  $hallname = $_SESSION['hallname'];
  $hallprice = $_SESSION['hallprice'];
  $email1 = $_SESSION['name'];
  $query1 = "SELECT bookdate FROM daybooked WHERE hallid='$hallid' ";
  $res = mysqli_query($con, $query1);
  $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
  mysqli_free_result($res);
  $ad = strtotime($bookdate);
  foreach ($rows as $row) {
    if ($ad == strtotime($row['bookdate'])) {
      $errors = "HALL IS ALREADY BOOKED FOR SELECTED DATE.TRY CHECKING OTHER AVAILABLE HALL.!!!";
      header("location:daybooking.php?error=$errors");
      exit(0);
    }
  }


  $query2 = "SELECT bookdate FROM booked WHERE hallid='$hallid'";
  $result = mysqli_query($con, $query2);
  $rowes = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach ($rowes as $row) {
    if ($ad == strtotime($row['bookdate'])) {
      $errors = "HALL IS ALREADY BOOKED FOR SELECTED DATE.TRY CHECKING OTHER AVAILABLE HALL.!!!";
      header("location:daybooking.php?error=$errors");
      exit(0);
    }
  }




  $todate = date("Y/m/d");
  $yrdate = strtotime($todate);

  if ($yrdate > $ad) {
    $errors = "DATE IS EXPIRED!!!";
    header("location:daybooking.php?error=$errors");
    exit(0);
  } else {
    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "neharikashrestha33@gmail.com";
    $mail->Password = "12345abcde#";
    $mail->SetFrom("neharikashrestha33@gmail.com");
    $mail->addAddress(" $email1");
    $mail->IsHTML(true);
    $mail->Subject = "Your Booking";
    $mail->Body = "Thank You for booking our hall..";
    $mail->SMTPOptions = array('ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => false
    ));


    if ($mail->Send()) {
      $inquery = "INSERT INTO daybooked VALUES('$uid','$fullname','$username','$email','$phone','$city','$bookdate','$hallid','$hallname','$hallprice')";
      if (!mysqli_query($con, $inquery)) {
        $errors = "Database connection error";
        header("location:daybooking.php?error=$errors");
        exit(0);
      } else {
        $s = "HALL BOOK SUCCESS. CHECK HERE!!!";
        header("location:Booklist.php?sucs='$s'");
      }
      // echo "wow";
    } else {
      echo "something went wrong wow";
    }
  }
}
?>