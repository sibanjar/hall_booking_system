<?php 
  include 'inc/session.php';
  include 'inc/dbconection.php';

    $error = array('login' => '' );
if(isset($_POST['login1'])){
    $username1 = $_POST['username'];
    $paswd = $_POST ['password'];

    $quer="SELECT * FROM manager " ;
    $result=mysqli_query($con,$quer);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
            mysqli_close($con); 

    foreach($rows as $row){

      if($row['email']==$username1 && $row['password']==$paswd){
        $_SESSION['success'] = "You are Now loged in ";
        $_SESSION['adname'] = $username1;
        $_SESSION['admin_no']=$row['admin_no'];
      header("location:adminadd.php");
    }
      else{
    $error['login']= "*Password or Email is incorrect.*";
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-Admin_Login</title>
	<?php require('inc/link.php');?>
  <style type="text/css">
       .p-viewer, .p-viewer2{
     float: right;
     margin-top: -55px;
     position: relative;
     z-index: 2;
     cursor:pointer;
     overflow: hidden;
   }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body class="bg-light">
	<?php require('inc/header.php');?>


  <div class="modal-dialog shadow">
    <div class="modal-content">
    	<form action="adminlogin.php" method="post" id="form">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>Admin Login</h5>
      </div>


    <center> <div style="color:red;"><?php echo $error['login'];?></div> </center>
      <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" placeholder="Enter email" id="username" name="username">

            </div>

            <div class="mb-4">
              <label class="form-label">Password</label>
               <input type="password" class="form-control shadow-none" placeholder="Enter Password" id="password" name="password"/>

               <span class="p-viewer mx-2">
                      <br>
                  <i class="bi bi-eye-slash-fill" aria-hidden="true" style="color:#707B7C;" onclick="viewPassword();" id="pass-status"></i>
                </span>
    
             
        </div>

        <div class="d-flex align-items-center justify-content-between mb-2 ">
          <button type="submit" name="login1" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="forget_password.php" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div>

      </div>  
      	</form>
    
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
        function viewPassword()
{
  //
  var passwordInput = document.getElementById('password');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='bi-eye-fill';
    //alert("hello");
  }
  else{
    passwordInput.type='password';
    passStatus.className='bi-eye-slash-fill';
    //alert("HELLO");
  }
  
}


</script>
</body>
</html>
<?php require('inc/footer.php');?>