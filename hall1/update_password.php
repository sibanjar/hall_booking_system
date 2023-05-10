<?php
require('inc/session.php'); 
require('inc/dbconection.php');
$current_pass=$_POST['current_password'];
$new_pass=$_POST['new_password'];
$uid=$_SESSION['name'];
//echo $uid;
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT password from user where email='$uid'"));
if($row['password']!=$current_pass){
echo "Please enter your current valid password";
}
else{
	$result1="UPDATE user set password='$new_pass' where email='$uid'";
mysqli_query($con,$result1);
echo "password updated";
}
?>