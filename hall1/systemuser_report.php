<?php require('inc/session.php');
require('inc/dbconection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-SU_REPORT</title>
	<?php require('inc/link.php');?>
</head>
<body class="bg-light">
	<?php require('inc/admin_header.php');?>
<?php
$q="SELECT * FROM manager";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;?>


<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">SYSTEM USER REPORT</h2>
    <div class="h-line bg-dark"></div>
    <br>	
    <div class="container">
    <table class="table table-hover shadow" style="border-width: 2px;">
		 		  <thead>
		    <tr>
		      <th scope="col">sn</th>
		      <th scope="col">Fullname</th>
		      <th scope="col">Username</th>
		      <th scope="col">Email</th>
		      <th scope="col">Phone Number</th>
		      <th scope="col">Address</th>
		    </tr>
		</thead>
		  <tbody>
		    <?php
			foreach($rows as $row):
			?>
			<tr><td><?php echo ++$count;?></td>
			<td><?php echo $row['fullname'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['mobile_no:'];?></td>
			<td><?php echo $row['city'];?></td>
			</tr>
		    
			<?php endforeach?>
		  </tbody>
	</table>
	</div>
</div>
</body>
</html>
<?php require('inc/footer.php');?>