<?php
include ('inc/dbconection.php');

if(isset($_POST['add'])){
          $fname =$_POST['fname'];
          $uname = $_POST['uname'];
          $passwd =  $_POST['password'];
          $passwd2 =  $_POST['cpass'];
          $email =  $_POST['email'];
          $phno =  $_POST['num'];
          $city =  $_POST['city'];


          $check_query="SELECT username FROM manager";
          $results=mysqli_query($con,$check_query);
          $datas=mysqli_fetch_all($results,MYSQLI_ASSOC);
           mysqli_free_result($results);
        
          foreach($datas as $data){
             echo $data['username']."<br>";
            if($data['username'] == $uname ){
                $er="*username already exists*";
                header("Location:adminadd.php?error=$er");
                exit(0);
             }
          }

  
  if(strlen($fname)<8){
	  $er="*full name should be more than 8 character.";
	 header("Location:adminadd.php?error=$er");
  }
  else if(strlen($uname)<4){
	$er="*username should be more than 4 character.";
   header("Location:adminadd.php?error=$er");  
  }
  else if(strlen($phno)<10){
    $er="*phone number must 10 character.";
      header("Location:adminadd.php?error=$er"); 
    }
  else if(strlen($passwd) <8){
	$er="*password should be more than 8 character.";
    header("Location:adminadd.php?error=$er");
  }
  else if(strcmp($passwd,$passwd2)!=0){
	$er="*Password do not match.";
  	header("Location:adminadd.php?error=$er");  
  }
  
  else{
   // $passwod1=password_hash($passwd,PASSWORD_DEFAULT);
	$adminquery="INSERT INTO manager VALUES(NULL,'$uname','$passwd','$phno','$fname','$city','$email')";
	$result=mysqli_query($con,$adminquery);
  mysqli_close($con);
	if(!$result){
	$er="error";
	header("Location:adminadd.php?error=$er");
	}
	else{$er1="Admin added successfully";
    header("Location:adminadd.php?error1=$er1");

	echo "success";
	}
  }

}
?>