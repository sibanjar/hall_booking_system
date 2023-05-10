<?php require('inc/session.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	KHEC-PARTIAL_BOOK
	</title>
	<?php require('inc/link.php');
    require('inc/dbconection.php')?>
	<style type="text/css">
		
.container1{
	max-width: 700px;
	width: 100%;
	background-color: #E6E6FA;
	padding: 25px 30px;
	border-radius: 5px;
	margin: 0 auto;

}
	</style>
</head>
<body class="bg-light">
	<?php require('inc/user_header.php');?>



<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">BOOK HALL(Review Your Booking Details)</h2>
    <div class="h-line bg-dark"></div>
    <br>

        <div class="text-center fs-3" style="color:RED;"><strong><center> 
    <?php if(isset($_GET['error'])){
             echo $_GET['error'];
           }
        ?>
        </strong></center></div><br>
  <div class="container">
  	<div class="row">
  		<?Php
                ////////////////////////////////////////////
                // Collecting data from query string
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $_SESSION['hallid']=$id;
                // Checking data it is a number or not
                if(!is_numeric($id)){
                echo "Data Error";
                exit;
                }
                }
                $hallid=$_SESSION['hallid'];
                $count="SELECT *  FROM hall where hallsn=$hallid";

                if($stmt = $con->prepare($count)){
                //  $stmt->bind_param('i',$hallid);
                $stmt->execute();

                $result = $stmt->get_result();

                $row=$result->fetch_object();
                ?>
        
                <div class="col-lg-6 col-md-6 mb-5">
        <div class="card border-0 shadow align-items-center" style="max-width: 350px; margin: auto;">
             <img src="<?php echo "$row->image";?>" class="card-img-top" >
        </div>
    </div>
    <div class="col-lg-5 col-md-6 mb-5">
        <div class="card border-0 shadow" >
        	<table class="table table-hover">
        	<tr><td id="id1"><b>Room type</b></td><td id="id2"><?php echo "$row->roomtype";?></td></tr> 

        <td  id="id1"><b>Room Name  </b></td><td id="id2"><?php $_SESSION['hallname']=$row->rname; echo "$row->rname"; ?></td> </tr> 
        <tr><td  id="id1"><b>Total Seats</b></td><td id="id2"><?php echo "$row->seats";?></td></tr>
        <tr><td id="id1"><b>Price of Hall</b></td><td id="id2"><?php $_SESSION['hallprice1']=$row->p_price;echo "$row->p_price";?></td></tr>
        <tr><td id="id1"><b>Room Facility</b></td><td id="id2"><?php echo "$row->rdetail";?></td></tr> 
            </table>
       
        </div>
    </div>
                            <?php
                }else{
                echo $connection->error;
                }
            ?>

  	</div>
 </div>
</div>



                                <?php
                $no=$_SESSION['name'];
                $q="SELECT * FROM user WHERE email='$no'";   
                $result=mysqli_query($con,$q);
                $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($rows as $row):
                ?>

<div class="my-5 px-4">
    	<h2 class=" mb-2 text-center fw-bold h-font">BOOK HALL(Review Your Booking Details)</h2>
    	<div class="h-line bg-dark"><b></div><br>
            <form action="partialbookingphp.php" method="POST">
	<div class="container1 shadow align-items-center">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
                        <label class="form-label">FullName</label>
                        <input type="text" class="form-control shadow-none" name="fname"  value="<?php echo $row['Fullname'];?>" readonly>  
                    </div>
                    <div class="col-md-6 ps-0 mb-3"> 
                        <label class="form-label">Userame</label>
                        <input type="text" class="form-control shadow-none" name="uname" value="<?php echo $row['username'];?>" readonly>  
                    </div>
                    <div class="col-md-6 ps-0 mb-3"> 
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none" name="email" value="<?php echo $row['email'];?>" readonly>  
                    </div>
                <div class="col-md-6 ps-0 mb-3"> 
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control shadow-none" name="num" value="<?php echo $row['mobile_no:'];?>" readonly>  
                    </div>
                    <div class="col-md-12 p-0 mb-3"> 
                        <label class="form-label">Address</label>
                        <input class="form-control shadow-none" rows="1" name="city" id="city" value="<?php echo $row['city'];?>" readonly>
                    </div>
                <div class="col-md-6 ps-0 mb-3"> 
                        <label class="form-label">Booking Date</label>
                        <input type="date" class="form-control shadow-none" name="bookdate" required>  
                    </div>
                
                    <div class="col-md-6 ps-0 mb-3 shadow-none"> 
                <label class="form-label">Booking Time</label>
                    <select class="form-select shadow-none" name="booktime" placeholder="Select The Time SLot"required aria-label="Default select example">
                    <option value="08:00-10:00">08:00-10:00</option>
                    <option value="10:30-12:30">10:30-12:30</option>
                    <option value="01:00-03:00">01:00-03:00</option>
                    </select>
                </div>
                <div class="text-center my-1 mt-4">
                <button type="submit" name="bookroom"class="btn btn-dark shadow-none">BOOK</button>
                
        </div>
          </div>


</form>
	</div>
</div>

    <?php endforeach;?>


<?php require('inc/footer.php');?>
</body>
</html>