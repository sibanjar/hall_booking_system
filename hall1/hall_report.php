<?php require('inc/session.php');
require('inc/dbconection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-HALL_REPORT</title>
	<?php require('inc/link.php');?>
	<style type="text/css">
				.h-line{
		    width: 150px;
		    margin: 0 auto;
		    height: 1.7px;
		   }
	</style>
</head>
<body class="bg-light">
	<?php require('inc/admin_header.php');?>
<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">HALL REPORT</h2>
    <div class="h-line bg-dark"></div>
    <br>	
    <div class="container">
    	<table class="table table-hover shadow">
		 		  <thead>
		    <tr>
		      <th scope="col">SN</th>
		      <th scope="col">Room Type</th>
		      <th scope="col">Room Name</th>
		      <th scope="col">seats</th>
		      <th scope="col">Price(FB)</th>
		      <th scope="col">Price(PB)</th>
		      <th scope="col">Facilities</th>
		      <th scope="col">Image</th>
		      <th scope="col" colspan="2" class="text-center">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		   <?php
$q="SELECT * FROM hall";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;
foreach($rows as $row):
?>
		   <tr>  <td><?php echo ++$count;?></td>
    <td><?php echo $row['roomtype'];?></td>

    <td><?php echo $row['rname'];?></td>
    <td><?php echo $row['seats'];?></td>
    <td><?php echo $row['price'];?></td>

    <td><?php echo $row['p_price'];?></td>
    <td><?php echo $row['rdetail'];?></td>
    <td><img src="<?php echo $row['image'];?>" style="width:250px; height:200px; border-radius:20px"></td>


   <td><a href="edithall.php?hall_id=<?php echo $row['hallsn']?>" data-toggle="tooltip" data-placement="top" title="EDIT">

					<button class="btn btn-outline-dark shadow-none custom-bg" >EDIT</button></a></td>
		      <td><a href="clearcustomer.php?hall_id=<?php echo $row['hallsn']?>" data-toggle="tooltip" data-placement="top" title="DELETE">

				<button class="btn btn-outline-dark shadow-none custom-bg" >DELETE</button></a></td>
		    </tr>

<?php endforeach?>
		  </tbody>
	</table>
	


    </div>
</div>
</body>
</html>
<?php require('inc/footer.php');?>