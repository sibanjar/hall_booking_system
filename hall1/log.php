
<?php  include 'inc/session.php';
require('essentials.php'); 
include ('inc/dbconection.php');
$error = array('login' => '' );
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $passwd = $_POST ['password'];
 

  $query="SELECT user_no,email,password FROM user " ;
  $result=mysqli_query($con,$query);
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
      mysqli_close($con); 

foreach($rows as $row){
  
  if($row['email']==$username&&$row['password']==$passwd){
       $_SESSION['success'] = "You are Now loged in ";
       $_SESSION['name'] = $username;
       $_SESSION['user_no']=$row['user_no'];
    header("location:hall.php?");
}
  else{
    alert('erro','Password or Email is incorrect.');
// $error['login']= "Password or Email is incorrect.";
  }
}
}
//$img="photo/a.jpg";
 ?>
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>KHEC-User_Login</title>
  <?php require('inc/link.php');?>
</head>
<body class="bg-light">
  <?php require('inc/header.php');?>


  <div class="modal-dialog shadow">
    <div class="modal-content">
      <form action="log.php" method="POST" id="form">
      <div class="modal-header">

        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
      </div>
      <br>

    <center> <div style="color:red;">
           <?php if(isset($_GET['error'])){echo $_GET['error'];}
                echo $error['login'];
              ?>
                
              </div> </center>


      <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control shadow-none" placeholder="Enter email" id="username" name="username">

            </div>

            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" placeholder="Enter Password" id="password" name="password">
            </div>

        <div class="d-flex align-items-center justify-content-between mb-2 ">
          <button type="submit" name="login" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div>

      </div>  
        </form>
    
  </div>
</div>
</body>
</html>
<?php require('inc/footer.php');





 //$error= "Password or Email is incorrect.";
    //header("location:loginerror.php?error=$error");

 

