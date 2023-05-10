<?php include 'inc/session.php';
    include 'inc/dbconection.php';
       $no1=$_SESSION['name'];
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
			<div class="error" style="color:red;">
				<?php if(isset($_GET['error'])){
					echo $_GET['error']."<br>";
                    }?></div>
                    <div class="error1" style="color: green;">
				<?php if(isset($_GET['error1'])){
					echo $_GET['error1']."<br>";
                    }?></div></center> 
      <form action="update.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i><strong><?php echo $row['username'];?></strong></h5>
        
      </div>
      <div class="modal-body">


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Name</label>
    <input type="text" class="form-control shadow-none" name="fname" value="<?php echo $row['Fullname'];?>" readonly>  
            </div>
           <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Username</label>
    <input type="text" class="form-control shadow-none" name="uname" value="<?php echo $row['username'];?>" readonly>  
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Email</label>
    <input type="email" class="form-control shadow-none" name="email" value="<?php echo $row['email'];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" readonly>  
            </div>

            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Phone Number</label>
    <input type="number" class="form-control shadow-none" name="num" value="<?php echo $row['mobile_no:'];?>" readonly>  
            </div>
            <div class="col-md-12 p-0 mb-3"> 
    <label class="form-label">Address</label>
    <input class="form-control shadow-none" rows="1" name="city" value="<?php echo $row['city'];?>"  readonly>
            </div>
          </div>
        </div>




        <div class="text-center my-1">
          <button type="button" name="update" class="btn btn-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#buttonModal">
      UPDATE
		</button>
        </div>

        
      <div class="modal fade" id="buttonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="update.php" method="POST" id="form">
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i><strong><?php echo $row['username'];?></strong></h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">what is your hobby?</label>
                    <input type="text" class="form-control shadow-none" placeholder="enter your hobby to enable change" id="security" name="security" required>

                  </div>


              <div class="d-flex align-items-center justify-content-between mb-2 ">
                <button type="submit" name="enter" class="btn btn-dark shadow-none">ENTER</button>
                <a href="Hobby.php" class="text-secondary text-decoration-none">Forgot ?</a>
              </div>

            </div>  
              </form>
          </div>
        </div>
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