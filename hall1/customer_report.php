<?php require('inc/dbconection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-CUSTOMER_REPORT</title>
	<?php require('inc/link.php');?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<style type="text/css">
		
	</style>
</head>
<body class="bg-light">
	<?php require('inc/admin_header.php');?>
	<?php
$q="SELECT * FROM user";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;
?>

<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">CUSTOMER REPORT</h2>
    <div class="h-line bg-dark"></div>
    <br>	
    <div class="container">


			<table id="example" class="table table-hover border-4 shadow" style="width:100%">
			    <br>
			        <thead>
			    <tr>

			      <th>sn</th>
			    <th>fullname</th>
			    <th>username</th>
			    <th>email</th>
			    <th>mobile</th>
			    <th>City</th>
			
			            </tr>
			        </thead>
			        <tbody>
			        	 <tr><?php
foreach($rows as $row):
?>

    <td><?php echo ++$count;?></td>
    <td><?php echo $row['Fullname'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobile_no:'];?></td>
    <td><?php echo $row['city'];?></td>
    
      </tr>
   <?php endforeach?>


			              
			        </tbody>
			        <tfoot>
			            <tr>
			              
			      <th>sn</th>
			    <th>fullname</th>
			    <th>username</th>
			    <th>email</th>
			    <th>mobile</th>
			    <th>City</th>
			</tr>
			        </tfoot>
			    </table>



    </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js
"></script>

    <script type="text/javascript">
            
         $(document).ready(function() {
       $('#example').DataTable({
        "pagingType":"full_numbers",
        "LengthMenu": [
                [10,25,50,-1],
                [10,25,50,"ALL"]
        ],
        responsive: true,
        language:{
            search:"_INPUT_",
            searchPlaceholder: "search records",
        }
    	});
       } );
    </script>

</body>
</html>
<?php require('inc/footer.php');?>