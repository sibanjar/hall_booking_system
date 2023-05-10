
<style type="text/css">
   .p-viewer1, .p-viewer2{
    float: right;
    margin-top: -55px;
    position: relative;
    z-index: 2;
    cursor:pointer;
    overflow: hidden;
  }
</style>
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
     <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">KHWOPA ENGINEERING COLLEGE</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  me-2" " href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="Login_hall.php">Halls</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="login_contact.php">Contact us</a>
        </li>


      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
      Login
		</button><a href="register.php" style="text-decoration:none;">
    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal"> 
  Register
    </button></a>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action="log.php" method="POST" id="form">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" placeholder="Enter email" id="email" name="username">

            </div>

            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" placeholder="Enter Password" id="password" name="password"/>
              <span class="p-viewer1 mx-2">
                <br>
                  <i class="bi bi-eye-slash-fill" id="pass-status" aria-hidden="true" style="color:#707B7C;" onClick="viewPassword();" ></i>
       </span>
    
            </div>

        <div class="d-flex align-items-center justify-content-between mb-2 ">
          <button type="submit" name="login" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="forget_password.php" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div>

      </div>  
      	</form>
    </div>
  </div>
</div>
<script type="">
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
</script>

<!--
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Username</label>
    <input type="text" placeholder="Enter Username" class="form-control shadow-none" id="username" name="username" required>  
            </div>

            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Email</label>
    <input type="email" class="form-control shadow-none" placeholder="Enter Email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>  
            </div>
           <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Phone Number</label>
    <input type="number" placeholder="Enter phoneno" class="form-control shadow-none" id="mobileno" name="mobileno" required>  
            </div>
            <div class="col-md-12 p-0 mb-3"> 
    <label class="form-label">Address</label>
    <textarea class="form-control shadow-none" rows="1" placeholder="Enter Address" class="form-control shadow-none" id="city" name="city" required></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Password</label>
    <input type="password" placeholder="Enter password" class="form-control shadow-none" id="password" name="password" value="" required>  
            </div>
           <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Confirm Password</label>
      <input type="password" placeholder="confirm password" class="form-control shadow-none"  id="cpass"name="cpass" required>  
            </div>
          </div>
        </div>




        <div class="text-center my-1">
          <button type="submit" name="register" class="btn btn-dark shadow-none">REGISTER</button>
          
        </div>




      </div>  
        </form>
    </div>
  </div>
</div>-->