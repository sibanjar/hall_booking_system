<?php include 'inc/session.php';
    include 'inc/dbconection.php';
       $no1=$_SESSION['name'];

if(!isset($_SESSION['name'])){
  die();
}
if(isset($_POST['update'])){
          $fname =$_POST['fname'];
          //$uname = $_POST['uname'];
          //$phno =  $_POST['num'];
          $city =  $_POST['city'];
          $security=$_POST['security'];

          
  
  
   // $passwod1=password_hash($passwd,PASSWORD_DEFAULT);
    $adminquery="UPDATE user SET Fullname= '{$fname}', city='{$city}',security='{$security}' WHERE email='{$no1}'";
    
 //$adminquery="UPDATE hall SET username='{$uname}',password='{$passwd}',mobile_no:='{$phno}',fullname='{$fname}',city='{$city}',email='{$email}',security='{$security}' WHERE admin_no='{$no2}'";







    $result=mysqli_query($con,$adminquery);

        $er1="DATA UPDATED SUCCESSFULLY.";
    header("Location:user_account1.php?error1=$er1");

   
    echo "success";
    
  
}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-User_Account</title>
	<?php require('inc/link.php');?>
</head>

<body class="bg-light">

	<?php require('inc/user_header.php');?>

<br>
        <h2 class=" mb-2 text-center fw-bold h-font">USER ACCOUNT</h2>
        <div class="h-line bg-dark"><b></div><br>
                 <?php
  
 if(isset($_SESSION['name'])){
     $no=$_SESSION['name'];
    $query = "SELECT * FROM user WHERE email='$no'";
    $result = mysqli_query($con, $query);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($con);
     foreach($rows as $row){
        ?>
  <div class="modal-dialog modal-lg shadow">
    <div class="modal-content">
<center>
			<div class="error" style="color:green;">
				<?php if(isset($_GET['error'])){
					echo $_GET['error']."<br>";
                    }?></div>
                    <div class="error1" style="color: green;">
				<?php if(isset($_GET['error1'])){
					echo $_GET['error1']."<br>";
                    }?></div></center> 
      <form action="user_account1.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i><strong><?php echo $row['username'];?></strong></h5>
        
      </div>
      <div class="modal-body">


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Name</label>
    <input type="text" class="form-control shadow-none" name="fname" value="<?php echo $row['Fullname'];?>" required>  
            </div>
           <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Username</label>
    <input type="text" class="form-control shadow-none" name="uname" value="<?php echo $row['username'];?>" readonly>  
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Email</label>
    <input type="email" class="form-control shadow-none" name="email" value="<?php echo $row['email'];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required readonly>  
            </div>

            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Phone Number</label>
    <input type="number" class="form-control shadow-none" name="num" value="<?php echo $row['mobile_no:'];?>" readonly>  
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Address</label>
    <input class="form-control shadow-none" rows="1" name="city" value="<?php echo $row['city'];?>" required>
            </div>

            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Hobby</label>
    <input  type="text"class="form-control shadow-none" rows="1" name="security" value="<?php echo $row['security'];?>" required>
            </div>
            <!--
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none" name="pass" id="pass" value="<?php echo $row['password'];?>" required>  
            </div>
           <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Confirm Password</label>
      <input type="password" class="form-control shadow-none" name="cpass" value="<?php echo $row['password'];?>">  
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
<?php require('inc/footer.php');?>