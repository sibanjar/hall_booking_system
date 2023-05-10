<?php
include 'inc/dbconection.php';
require('inc/session.php');

?><html>
  <head>

    <?php require('inc/link.php');?>
<title>KHEC-Booking_History</title>
 </head>
<body class="bg-light">
<?php include 'inc/user_header.php'?>


<?php
$no=$_SESSION['name'];
$q="SELECT * FROM daybooked WHERE email='$no'";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;
?>

    <div class="my-5 px-4">
        <h2 class=" mb-2 text-center fw-bold h-font">My Booking History</h2>

        <div class="h-line bg-dark"></div><br>

<center>
  
  <div class="error fw-bold" style="color: red;">
                <?php if(isset($_GET['error'])){
                    echo $_GET['error']."<br>";
                    }?></div>
                    
  <div class="error fw-bold" style="color:green;">
                <?php if(isset($_GET['sucs'])){
                    echo $_GET['sucs']."<br>";
                    }?></div>
</center>

     <div class="container">
        <table class="table table-hover shadow" style="border-width: 2px;">
          <thead>
                            <h2>Fullday Hall Booked</h2> 
                     <tr><th>sn</th>
                     <th>Fullname</th>
                     <th>Username</th>
                     <th>Email</th>
                     <th>Mobile</th>
                     <th>City</th>
                     <th>Hall name</th>
                     <th>Booked Date</th>
                     <th>price</th>
                  <th>Action</th></tr>
                     <?php
                foreach($rows as $row):
                    ?>
                    
          </thead>
          <tbody rows="1"> 
            <tr>
                <td><?php echo ++$count;?></td>
                   <td><?php echo $row['fullname'];?></td>
                   <td><?php echo $row['username'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['mobileno'];?></td>
                   <td><?php echo $row['city'];?></td>
                   <td><?php echo $row['rname'];?></td>
                   <td><?php echo $row['bookdate'];?></td>
                   <td><?php echo $row['h_price'];?></td>
                   <?php    $ad=strtotime($row['bookdate']);
                            $todate=date("Y/m/d") ;
                            $yrdate=strtotime($todate);
                            if($yrdate<$ad):
                     ?><td><a href="clearcustomer.php?dayuserid1=<?php echo $row['uid'];?>&& dateid2=<?php echo $row['bookdate'];?>" class="delete" style="text-decoration: none;" data-confirm="DO YOU WANT TO CANCEL YOUR BOOKING?"><button class="btn btn-dark shadow-none" style="text-decoration: none;">Cancel</button></a>
                    </td>
                 

                <?php endif ?>
            </tr>
                   <?php endforeach?>

          </tbody>
                </table>
     </div>
    </div> 









<br><br><br>
<?php
$no=$_SESSION['name'];
$qu="SELECT * FROM booked WHERE email='$no'";
$result1=mysqli_query($con,$qu);
$rows1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
$count=0;
?> 

<div class="container">
        <table class="table table-hover shadow" style="border-width: 2px;">
          <thead>
    	<h2>Partial Day Hall Booked</h2> 
	 <tr><th>sn</th>
	 <th>Fullname</th>
    <th>Username</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>City</th>
    <th>Hall name</th>
    <th>Booked Date</th>
    <th>Booked Time</th>
    <th>price</th>
  <th>Action</th></tr>
        <?php
        foreach($rows1 as $row):
        ?>
        </thead>
        <tbody>
   
    <tr><td><?php echo ++$count;?></td>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobileno'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['rname'];?></td>
    <td><?php echo $row['bookdate'];?></td>
    <td><?php echo $row['booktime'];?></td>
    <td><?php echo $row['h_price'];?></td>
    <?php 	$ad=strtotime($row['bookdate']);
            $todate=date("Y/m/d") ;
            $yrdate=strtotime($todate);
            if($yrdate<$ad):
    ?><td><a href="clearcustomer.php?partialuserid1=<?php echo $row['uid']?> && dateid1=<?php echo $row['bookdate'];?>&& booktime1=<?php echo $row['booktime'];?>" class="delete" data-confirm="DO YOU WANT TO CANCEL YOUR BOOKING?"><button class="btn btn-dark shadow-none" style="text-decoration: none;">Cancel</button></a></td>
    
    <?php endif ?>
    </tr></tbody>
        <?php endforeach?>
    </table>
</div>
<script type="text/javascript">

var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
</div></center>
<br>
</body>
</html>

<?php include 'inc/footer.php'; ?>

