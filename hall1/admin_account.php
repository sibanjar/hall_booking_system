<?php include 'inc/session.php';
include 'inc/dbconection.php';

if (isset($_POST['update'])) {
  $fname = $_POST['fname'];
  //$uname = $_POST['uname'];
  // $passwd =  $_POST['pass'];
  //$passwd2 =  $_POST['cpass'];
  //$email =  $_POST['email'];
  //$phno =  $_POST['num'];
  $city =  $_POST['city'];


  $no2 = $_SESSION['admin_no'];


  if (strlen($fname) < 8) {
    $er = "*full name should be more than 8 character.";
    header("Location:admin_account.php?error=$er");
  }
  /*else if(strlen($phno)<10){
    $er="*phone number must 10 character.";
      header("Location:admin_account.php?error=$er"); 
    }
  else if(strlen($passwd) <8){
    $er="*password should be more than 8 character.";
    header("Location:admin_account.php?error=$er");
  }*/ else {
    // $passwod1=password_hash($passwd,PASSWORD_DEFAULT);
    $adminquery = "UPDATE manager SET fullname= '{$fname}',city='{$city}' WHERE admin_no='{$no2}'";

    //$adminquery="UPDATE hall SET username='{$uname}',password='{$passwd}',mobile_no:='{$phno}',fullname='{$fname}',city='{$city}',email='{$email}',security='{$security}' WHERE admin_no='{$no2}'";







    $result = mysqli_query($con, $adminquery);
    //mysqli_close($con);
    if (!$result) {
      $er = "DATA NOT UPDATED!!!  ERROR!!";
      header("Location:admin_account.php?error=$er");
    } else {
      $er1 = "DATA UPDATED SUCCESSFULLY.";
      header("Location:admin_account.php?error1=$er1");


      echo "success";
    }
  }
}
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>KHEC-Admin_Account</title>
  <?php require('inc/link.php'); ?>
</head>

<body class="bg-light">
  <?php require('inc/admin_header.php'); ?>
  <?php

  if (isset($_SESSION['admin_no'])) {
    $no = $_SESSION['admin_no'];
    $query = "SELECT * FROM manager WHERE admin_no=$no";
    $result = mysqli_query($con, $query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($con);
    foreach ($rows as $row) {
  ?>


      <div class="modal-dialog modal-lg shadow">
        <div class="modal-content">
          <center>
            <div class="error" style="color:red;">
              <?php if (isset($_GET['error'])) {
                echo $_GET['error'] . "<br>";
              } ?></div>
            <div class="error1" style="color: green;">
              <?php if (isset($_GET['error1'])) {
                echo $_GET['error1'] . "<br>";
              } ?></div>
          </center>
          <form action="admin_account.php" method="POST">
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i><strong><?php echo $row['username']; ?></strong></h5>

            </div>
            <div class="modal-body">


              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none" name="fname" value="<?php echo $row['fullname']; ?>" required>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control shadow-none" name="uname" value="<?php echo $row['username']; ?>" readonly>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control shadow-none" name="email" value="<?php echo $row['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" readonly>
                  </div>

                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control shadow-none" name="num" value="<?php echo $row['mobile_no:']; ?>" readonly>
                  </div>
                  <div class="col-md-12 p-0 mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control shadow-none" rows="1" name="city" value="<?php echo $row['city']; ?>" required>
                  </div>
                  <!--  <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none" name="pass" id="pass" value="<?php echo $row['password']; ?>" required>  
            </div>
           <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Confirm Password</label>
      <input type="password" class="form-control shadow-none" name="cpass" value="<?php echo $row['password']; ?>">  
            </div>-->
                </div>
              </div>




              <div class="text-center my-1">
                <button type="submit" name="update" class="btn btn-dark shadow-none">UPDATE</button>

              </div>





            </div>
          </form>
        </div>
      </div>
  <?php
    }
  }
  ?>
</body>

</html>
<?php require('inc/footer.php'); ?>