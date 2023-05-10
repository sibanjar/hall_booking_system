


<?php include('includes/header.php'); ?>
<?php
    unset($_SESSION['admin_no']);
    unset($_SESSION['user_no']);
    unset($_SESSION['edithall']);
    unset($_SESSION['adname']);
    unset($_SESSION['hallname']);
    unset($_SESSION['hallprice']);
      unset($_SESSION['hallprice1']);
    unset($_SESSION['hallid']);
    unset($_SESSION['name']);
    unset($_SESSION['user_no']);
    unset($_SESSION['user_no']);
    session_unset();
    session_destroy();
    header("location:index.php");
?>
<?php include ('includes/footer.php');?>