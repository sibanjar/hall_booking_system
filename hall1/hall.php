<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-Halls</title>
	<?php require('inc/link.php');?>
    <?php 
require "inc/dbconection.php";?>
    <style type="text/css">
        
  .h-line{
    width: 150px;
    margin: 0 auto;
    height: 1.7px;
  }
    </style>
</head>
<body class="bg-light">
	<?php require('inc/user_header.php');?>


  
    <?php   if(isset($_SESSION['name'])):?>
    <script>
    alert("<?php echo "WELCOME TO KHWOPA HALL ".$_SESSION['name'];?>");
    </script>
    <div><strong><?php echo $_SESSION['success'];
    echo $_SESSION['name'].".<br>";
   // $name1=$_SESSION['name'];
    echo "NOW YOU CAN BOOK A HALL OR CHECK YOUR PREVIOUS BOOKINGS.ENJOY".$_SESSION['name'].".<br>";
    //unset($_SESSION['name']);
    unset($_SESSION['success']) ;

    ?>
        <?php  endif ?>

<div class="my-5 px-4">
    <h2 class="mb-2 text-center fw-bold h-font">OUR HALLS</h2>
    <div class="h-line bg-dark"></div>
    <br>
<div class="container">
  <div class="row">
    <?php
    $query="SELECT * FROM hall";
    $results=mysqli_query($con,$query);
    $rows=mysqli_fetch_all($results,MYSQLI_ASSOC);
    foreach($rows as $row):
  ?>
    <div class="col-lg-4 col-md-6 my-3 mb-5">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="<?php echo $row['image'];?>" class="card-img-top" >
                <div class="card-body">
                                  <h5><?php echo $row['roomtype']; ?></h5>
                 <h6 class="mb-4">रू <?php echo $row['price'];?> per day</h6>

                 <h6 class="mb-4">रू <?php echo $row['p_price'];?> for 2 hour</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                   
                       <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                       <?php echo $row['seats'];?> seats
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                     <?php echo $row['facility'];?>
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    6 Speakers
                    </span>
                </div>  
                 <div class="rating mb-4">
                   <h6 class="mb-1">Rating</h6>
                   <span class="badge rounded-pill bg-light">
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                    </span>                 
                 </div>

                 <div class="d-flex justify-content-evenly mb-2">
                   
                   <a href="daybooking.php?id=<?php echo $row['hallsn']?>" class="btn btn-sm text-white custom-bg shadow-none">Fullday Book</a>
                   <a href="partialbooking.php?id=<?php echo $row['hallsn']?>" class="btn btn-sm btn-outline-dark shadow-none">Partial Book</a></div>

                </div>
        </div>
    </div>

    <?php endforeach;?>
    


    <div class="col-lg-12 text-center mt-5">
    </div>
  </div>
</div>
</div>
<?php require('inc/footer.php');?>
</body>
</html>