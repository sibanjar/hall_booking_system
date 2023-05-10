
<?php
include_once ('inc/session.php');
include ('inc/dbconection.php');
$errors = array('a'=>'','b'=>'','c'=>'','d'=>'','e'=>'','f'=>'','g'=>'','h'=>'');
$count=0;

 

if(isset($_POST['register'])){

      $fullname = $_POST['Fullname'];
      $username = $_POST['username'];
      $passwod = $_POST['password'];
      $mobileno =$_POST['mobileno'];
      $email = $_SESSION['EMAIL'];
      $pass2 = $_POST['cpass'];
      $city =  $_POST['city'];
      $security =  $_POST['security'];
     
    
      $check_query="SELECT username FROM user";
      $all=mysqli_query($con,$check_query);
      $datas=mysqli_fetch_all($all,MYSQLI_ASSOC);
      
       mysqli_free_result($all);
    
      foreach($datas as $data){
         if($data['username']== $username ){
            $errors['g']="*username already exists*";
            $count++;
            break;
         }
      }


   if(strlen($fullname)<8){
     $errors['a'] = "*Full Name must be more than 8 character*";
     $count++;
   }
   else if(strlen($username)<4){
      $errors['b'] = "*Username must be more than 4 character*";
     
      $count++;
   }
   else if(strlen($passwod)<8){
      
     $errors['c']= "*Password must be more than 8 character*";
      $count++;
   }
   else if(strlen($mobileno)!=10){
     
      $errors['d'] = "*Mobile number must be 10 character*";
      $count++;
   }
   else if(!preg_match('/^[98]\d{9}$/', $mobileno)){
     
      $errors['h'] = "*Invalid mobile number.*";
      $count++;
   }
   else if(strcmp($passwod,$pass2)!=0){
     
      $errors['e'] = "*Password do not match*";
      $count++;
   }
   else{
      //$passwod1=password_hash($passwod,PASSWORD_DEFAULT);
      $query= "INSERT INTO user VALUES (NULL,'$username','$passwod','$mobileno','$email','$fullname','$city','$security')";
      $result=mysqli_query($con,$query);
      mysqli_close($con);
      if(!$result){
         $errors['f'] = "something went wrong";
         echo "vaag mulaa!!"; 
      }
      else{
         $_SESSION['success'] = "You are Now loged in ";
         $_SESSION['name'] = $email;
         header('location:hall.php');
      }

   }
 

}
?>


<!DOCTYPE html>
<html>
<head>
   <?php require('inc/link.php');?>
   <meta charset="utf-8">
   <title>KHEC-Register</title>
   <style type="text/css">
      .er{
         color: red;
      }
      .email_verify_otp{
         display: none;
      }
       .p-viewer1, .p-viewer2{
     float: right;
     margin-top: -55px;
     position: relative;
     z-index: 2;
     cursor:pointer;
     overflow: hidden;
   }
   </style>
</head>
<body class="bg-light">
<?php require('inc/header.php');?>
     <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <form action="register.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-plus-fill fs-3 me-2"></i>User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Note: your details must match with your ID(Citizenship, Passport, Driving License,etc.) that will be required during booking.
        </span>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Fullname</label>
    <input type="text" placeholder="Enter Fullname" class="form-control shadow-none" id="fullname" name="Fullname" required>  
     <small class="er"><?php if($errors['a']!=""):?> <i  class="fas fa-exclamation-circle"><?php endif ?> </i> <?php echo $errors['a'];?></small>

            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Username</label>
    <input type="text" placeholder="Enter Username" class="form-control shadow-none" id="username" name="username" required>  
     <small class="er"><?php echo $errors['b'];
                      echo $errors['g'];?></small>
 
            </div>

           <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Phone Number</label>
    <input type="number" placeholder="Enter phoneno" class="form-control shadow-none" id="mobileno" name="mobileno" required>  
    <small class="er"> <?php echo $errors['d'];
    echo $errors['h'];?></small>

            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Address</label>
    <textarea class="form-control shadow-none" rows="1" placeholder="Enter Address" class="form-control shadow-none" id="city" name="city" required></textarea>
            </div>



            <div class="col-md-4 ps-0 mb-3"> 
    <label class="form-label">Email</label>
    <input type="email" class="form-control shadow-none" placeholder="Enter Email" id="email1" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>  
    <small style="color:red;" id="email_error"></small>
    
            </div>
            
            <div class="col-md-2  mt-2">
            <br>
               <button type="button" class="btn btn-outline-danger shadow-none email_sent_otp" onclick="email_sent_otp()">send otp</button>
            </div>
            <div class="col-md-4 ps-0 mt-2">
               <br>
               <input type="text" id="email_otp" placeholder="enter otp" class="email_verify_otp form-control shadow-none">
               <small style="color:green;" id="email_otp_result"></small>
      
            </div>

            <div class="col-md-2 ps-0 mt-2 mb-3">
               <br>
               <button type="button"  onclick="email_verify_otp()" class="btn btn-outline-success shadow-none email_verify_otp">Verify otp</button>
            
      
            </div>










            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Password</label>
    <input type="password" placeholder="Enter password" class="form-control shadow-none" id="password" name="password"  required>  
     <small class="er"><?php echo $errors['c'];?></small>
                <span class="p-viewer1 mx-2">
                <br>
                  <i class="bi bi-eye-slash-fill" id="pass-status" aria-hidden="true" style="color:#707B7C;" onClick="viewPassword();" ></i>
       </span>
    
    
    
            </div>
           <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Confirm Password</label>
      <input type="password" placeholder="confirm password" class="form-control shadow-none"  id="cpass"name="cpass" required> 
      <small class="er"><?php echo $errors['e'];?></small>
                    <span class="p-viewer2 mx-2">
                        <br>
                  <i class="bi bi-eye-slash-fill" id="pass-status1" aria-hidden="true" style="color:#707B7C;" onClick="viewPassword1();" ></i>
       </span>
   
            </div>
                        <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Hobby</label>
    <input type="text" placeholder="Enter Hobby" class="form-control shadow-none" id="security" name="security" required>  
            </div>

          </div>
        </div>




        <div class="text-center my-1">
          <button type="submit" disabled id="register" name="register" class="btn btn-dark shadow-none">REGISTER</button>
          
        </div>




      </div>  
        </form>
    </div>
  </div>
<script type="text/javascript">
function viewPassword()
   {
  var passwordInput = document.getElementById('password');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='bi-eye-fill';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='bi-eye-slash-fill';
  }
   }



   function email_sent_otp(){
      jQuery('#email_error').html('');
      var email=jQuery('#email1').val();
      if(email=='')
      {jQuery('#email_error').html('Please enter email id');
      }
      else{
         jQuery('.email_sent_otp').html('Please Wait...');
         jQuery('.email_sent_otp').attr('disabled',true);
         jQuery('.email_sent_otp');
         jQuery.ajax({
            url:'send_otp.php',
            type:'post',
            data:'email='+email+'&type=email',
            success:function(result){
               result=result.trim();
               if(result=='done') {
                  //jQuery('#email_error').html('done');
                  
               
                  
               }

               else if(result=='Email_Already_Present')
               {
                  jQuery('.email_sent_otp').html('send otp');
         jQuery('.email_sent_otp').attr('disabled',false);
         
                  jQuery('#email_error').html('Email id Alreday Exist'); 
               }
               else{
                  jQuery('.email_sent_otp').html('send otp');
         jQuery('.email_sent_otp').attr('disabled',false);
         
                  jQuery('#email').attr('disabled',true);
                  jQuery('.email_verify_otp').show();
                  jQuery('.email_sent_otp').hide();
                  

                  //jQuery('#email_error').html('Please try after sometime');
                  
               }

            }

         });
      }
   }

   function email_verify_otp(){
      jQuery('#email_error').html('');
      var email_otp=jQuery('#email_otp').val();
      if(email_otp=='')
      {jQuery('#email_error').html('Please enter otp');


      }

      else{jQuery.ajax({
            url:'check_otp.php',
            type:'post',
            data:'otp='+email_otp+'&type=email',
            success:function(result){
               if (result=='done') {
                  jQuery('.email_verify_otp').hide();
                      jQuery('#email_otp_result').html('Email id Verified');
                      jQuery('#is_email_verified').val('1');
                      if(jQuery('#is_email_verified').val()==1)
                      {
                        jQuery('#register').attr('disabled',false);
                      }
      
               }

               else{
                  jQuery('#email_error').html('Please enter valid otp');
               }

            }

         });
      

      }
   }


 function viewPassword1()
   {
  var passwordInput = document.getElementById('cpass');
  var passStatus = document.getElementById('pass-status1');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='bi-eye-fill';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='bi-eye-slash-fill';
  }
   }



 

</script>
   <input type="textbox" id="is_email_verified" hidden />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
<?php require('inc/footer.php');?>
