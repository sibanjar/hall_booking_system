<?php
require('inc/session.php');
require('inc/dbconection.php');
if(!isset($_SESSION['name'])){
  die();
}
if(isset($_POST['enter'])){
          $ss =  $_POST['security'];
          
          //if(isset($_SESSION['user_no'])){
            $no=$_SESSION['name']; 
            $check_query="SELECT * FROM user WHERE email='$no'";
            $all=mysqli_query($con,$check_query);
            $datas=mysqli_fetch_all($all,MYSQLI_ASSOC);
            
             mysqli_free_result($all);
          
            foreach($datas as $data){
              $sex=$data['security'];
               if($ss== $data['security'] ){

                  $error="*you can edit now*";
                  header("location:user_account1.php?error='$error'"); 
                  break;
               }
               else{
                $error="Wrong Answer!!";
                //echo $sex;
                header("location:user_account.php?error='$error'"); 
               }
           // }
          }
          
            
            
            }

            
            ?>