<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>KHEC-ADMIN_ADD</title>
  <?php require('inc/link.php'); ?>
  <style>
    .container1 {
      max-width: 700px;
      width: 100%;
      background-color: #E6E6FA;
      padding: 25px 30px;
      border-radius: 5px;
      margin: 0 auto;

    }

    .h-line {
      width: 100px;
      margin: 0 auto;
      height: 1.7px;
    }

    .p-viewer1,
    .p-viewer2 {
      float: right;
      margin-top: -55px;
      position: relative;
      z-index: 2;
      cursor: pointer;
      overflow: hidden;
    }
  </style>
</head>

<body class="bg-light">
  <?php require('inc/admin_header.php'); ?>


  <center><?php
          if (isset($_SESSION['success'])) : ?>
      <script>
        alert("<?php echo "WELCOME TO KHWOPA HALL ADMIN PAGE " . $_SESSION['adname']; ?>");
      </script>
      <div><strong><?php echo $_SESSION['success'];
                    echo $_SESSION['adname'];
                    unset($_SESSION['success']);
                    ?></strong></div>
    <?php endif ?>
  </center>

  <div class="my-5 px-4">
    <div class="container">
      <form action="adminaddphp.php" method="POST">

        <h2 class=" mb-2 text-center fw-bold h-font">Admin Add</h2>
        <div class="h-line bg-dark"><b></div><br>

        <div class="error fw-bold" style="color: red;">
          <?php if (isset($_GET['error'])) {
            echo $_GET['error'] . "<br>";
          } ?></div>

        <div class="container1 shadow align-items-center">
          <center>
            <div class="error1 fw-bold" style="color: green;">
              <?php if (isset($_GET['error1'])) {
                echo $_GET['error1'] . "<br>";
              } ?></div>
          </center>
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control shadow-none" name="fname" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control shadow-none" name="uname" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Phone Number</label>
              <input type="number" class="form-control shadow-none" name="num" required>
            </div>
            <div class="col-md-12 p-0 mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control shadow-none" rows="1" name="city" required></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control shadow-none" required>
              <span class="p-viewer1 mx-2">
                <br>
                <i class="bi bi-eye-slash-fill" id="pass-status" aria-hidden="true" style="color:#707B7C;" onClick="viewPassword();"></i>
              </span>

            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" id="cpass" name="cpass" class="form-control shadow-none" required>
              <span class="p-viewer2 mx-2">
                <br>
                <i class="bi bi-eye-slash-fill" id="pass-status1" aria-hidden="true" style="color:#707B7C;" onClick="viewPassword1();"></i>
              </span>
            </div>


            <div class="text-center my-1 mt-4">
              <button type="submit" name=" add" class="btn btn-dark shadow-none">ADD ADMIN</button>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>


  <script type="text/javascript">
    function viewPassword1() {
      var passwordInput = document.getElementById('cpass');
      var passStatus = document.getElementById('pass-status1');

      if (passwordInput.type == 'password') {
        passwordInput.type = 'text';
        passStatus.className = 'bi-eye-fill';

      } else {
        passwordInput.type = 'password';
        passStatus.className = 'bi-eye-slash-fill';
      }
    }



    function viewPassword() {
      var passwordInput = document.getElementById('password');
      var passStatus = document.getElementById('pass-status');

      if (passwordInput.type == 'password') {
        passwordInput.type = 'text';
        passStatus.className = 'bi-eye-fill';

      } else {
        passwordInput.type = 'password';
        passStatus.className = 'bi-eye-slash-fill';
      }
    }
  </script>

</body>

</html>
<?php require('inc/footer.php'); ?>