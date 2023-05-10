<html>
<head>
  
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
     <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">KHWOPA ENGINEERING COLLEGE</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administration
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="halladd.php">Add New Hall</a></li>
            <li><a class="dropdown-item" href="adminadd.php">Add New Admin</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Report
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="systemuser_report.php">SystemUser Report</a></li>
            <li><a class="dropdown-item" href="customer_report.php">Customer Report</a></li>
            <li><a class="dropdown-item" href="Hall_report.php">Hall Report</a></li>
            <li class="dropdown-submenu">
        <a class="test dropdown-item" tabindex="-1" href="#">Cancellation Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" tabindex="-1" href="day_cancel_report.php">FullDay Cancellation</a></li>
          <li><a class="dropdown-item" tabindex="-1" href="partial_cancel_report.php">Partialday Cancellation</a></li>
          </ul>
      </li>
       <li class="dropdown-submenu">
        <a class="test dropdown-item" tabindex="-1" href="#">Booking Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" tabindex="-1" href="daybook_report.php">FullDay Booking</a></li>
          <li><a class="dropdown-item" tabindex="-1" href="partialbook_report.php">Partial Booking</a></li>
          </ul>
      </li>
            
          </ul>
        </li>

      </ul>
      <div class="d-flex">

          <a href="admin_account.php"><button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2 " data-bs-toggle="modal" data-bs-target="#accountModal">
        Account
          </button></a>

        <a href="logout.php"><button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
      LogOut
		</button></a>
    <!--<button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
    </button>-->
      </div>
    </div>
  </div>
</nav>

<!--<div class="modal fade" id="accountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>#UserAccountName</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Name</label>
    <input type="text" class="form-control shadow-none">  
            </div>
            <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Email</label>
    <input type="email" class="form-control shadow-none">  
            </div>
           <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Username</label>
    <input type="text" class="form-control shadow-none">  
            </div>

            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Phone Number</label>
    <input type="number" class="form-control shadow-none">  
            </div>
            <div class="col-md-12 p-0 mb-3"> 
    <label class="form-label">Address</label>
    <textarea class="form-control shadow-none" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3"> 
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none">  
            </div>
           <div class="col-md-6 p-0 mb-3"> 
    <label class="form-label">Confirm Password</label>
      <input type="password" class="form-control shadow-none">  
            </div>
          </div>
        </div>




        <div class="text-center my-1">
          <button type="submit" class="btn btn-dark shadow-none">UPDATE</button>
          
        </div>





      </div>  
        </form>
    </div>
  </div>
</div>-->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  });
</script>


</body>
</html>