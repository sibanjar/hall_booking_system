<?php include('inc/dbconection.php') ?>

<?php 
if(isset($_GET['userid'])){
	 
	$id1=mysqli_real_escape_string($con,$_GET['userid']);
	$userid=$id1;
 $sql1="DELETE FROM user WHERE user_no='$id1' " ;
			    if(mysqli_query($con ,$sql1)){
			    	 echo "sucess user deleted";
			    }
			  else{
			 echo "No user deleted";
			  }
	
} ?>
<?php 
if(isset($_GET['hall_id'])){
	 
	$id2=mysqli_real_escape_string($con,$_GET['hall_id']);
	
 $sql2="DELETE FROM hall WHERE hallsn='$id2' " ;
			    if(mysqli_query($con ,$sql2)){
			    	 echo "halldeleted";
			    }
			  else{
			 echo "No hall deleted";
			  }
	
} ?>

<?php 
if(isset($_GET['dayuserid'])){
	 
	$duid=mysqli_real_escape_string($con,$_GET['dayuserid']);
    $dateid=mysqli_real_escape_string($con,$_GET['dateid']);    
	
 $sql3="DELETE FROM daybooked WHERE uid='$duid' AND bookdate='$dateid'" ;
			    if(mysqli_query($con ,$sql3)){
			    	 echo "day history clear";
			    }
			  else{
			 echo "No day deleted";
			  }
	
} ?>

<?php 
if(isset($_GET['partialuserid'])){
	 
	 $puid=mysqli_real_escape_string($con,$_GET['partialuserid']);
     $dateid=mysqli_real_escape_string($con,$_GET['dateid']);
     $booktime=mysqli_real_escape_string($con,$_GET['booktime']);
	
 $sql4="DELETE FROM booked WHERE uid=$puid AND bookdate='$dateid' AND booktime='$booktime'";
 
        
         if(mysqli_query($con ,$sql4)){
			    	 echo "partial history clear";
			    }
			  else{
			 echo "No partial deleted";
			  }
	
} ?>





<?php 
if(isset($_GET['partialuserid1'])){
	 
	 $puid1=mysqli_real_escape_string($con,$_GET['partialuserid1']);
     $dateid1=mysqli_real_escape_string($con,$_GET['dateid1']);
     $booktime1=mysqli_real_escape_string($con,$_GET['booktime1']);
	 $que="SELECT * FROM booked WHERE uid=$puid1 AND bookdate='$dateid1' AND booktime='$booktime1'";
	 $result=mysqli_query($con,$que);
	 $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
	 foreach($rows as $row){
					 $name=$row['fullname'];
					 $email=$row['email'];
					 $mobile=$row['mobileno'];
					 $add=$row['city'];
					 $hallno=$row['hallid'];
					 $hallname=$row['rname'];
					 $cancledate1=date("Y/m/d");
					 $format=" %T ";
					 $cancletime1=strftime($format);}
	 $query1="INSERT INTO partialcancle VALUES(NULL,'$name','$email','$mobile','$add','$hallno','$hallname','$dateid1','$booktime1','$cancledate1','$cancletime1')";			 
	 if(!mysqli_query($con,$query1)){
		    echo $errors= "Database connection error";
		    echo "Booking not cancelled";
			exit(0);
			 }	
 $sql14="DELETE FROM booked WHERE uid=$puid1 AND bookdate='$dateid1' AND booktime='$booktime1'";
 
        
         if(mysqli_query($con ,$sql14)){
			    	 $er= "BOOKING CANCELLED";
					header("Location:Booklist.php?error=$er");
					}
			  else{
			 echo "booking not cancelled";
			  }
	
} ?>









<?php 
if(isset($_GET['dayuserid1'])){
	 
	$duid1=mysqli_real_escape_string($con,$_GET['dayuserid1']);
    $dateid2=mysqli_real_escape_string($con,$_GET['dateid2']);    
	$q="SELECT * FROM daybooked WHERE uid='$duid1' AND bookdate='$dateid2'";
	 $result=mysqli_query($con,$q);
	 $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
	 foreach($rows as $row){
					 $name=$row['fullname'];
					 $email=$row['email'];
					 $mobile=$row['mobileno'];
					 $add=$row['city'];
					 $hallno=$row['hallid'];
					 $hallname=$row['rname'];
					 $cancledate=date("Y/m/d");
					 $format=" %T ";
					 $cancletime=strftime($format);}
		$query2="INSERT INTO daycancle VALUES(NULL,'$name','$email','$mobile','$add','$hallno','$hallname','$dateid2','$cancledate','$cancletime')";			 
				if(!mysqli_query($con,$query2)){
					echo $errors= "Database connection error";
					echo "Booking not cancelled";
					exit(0);
				}
$sql13="DELETE FROM daybooked WHERE uid='$duid1' AND bookdate='$dateid2'" ;
 			    if(mysqli_query($con ,$sql13)){
			    	 $er= "BOOKING CANCELLED";
					header("Location:Booklist.php?error=$er");
						 
					}
			  else{
			 echo "Booking not cancelled";
			  }
	
} ?>

