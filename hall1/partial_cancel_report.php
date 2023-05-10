<?php require('inc/dbconection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-Daybook_Cancellation_Report</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<?php require('inc/link.php');?>
    <style type="text/css">
        
  .h-line{
    width: 480px;
    margin: 0 auto;
    height: 1.7px;
  }
    </style>
</head>
<body class="bg-light">
	<?php require('inc/admin_header.php');?>

<?php
$q="SELECT * FROM partialcancle";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;
?>


<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">PARTIAL BOOKING CANCELLATION REPORT</h2>
    <div class="h-line bg-dark"></div>
    <br>    
    <div class="container">
<table id="example" class="table table-hover border-4 shadow" style="width:100%">
        <thead>
            <tr>

      <th>sn</th>
    <th>fullname</th>
    <th>email</th>
    <th>mobile</th>
    <th>City</th>
    <th>Hallname</th>
    <th>Booked Date</th>

    <th>Booked Time</th>
    <th>Cancellation Date</th>
    <th>Camcellation Time</th>
    <!--<th>Hall fare</th>
    <th>Action</th>-->


            </tr>
        </thead>
        <tbody>
            <tr><?php
foreach($rows as $row):
?><
<td class="text-align-center"><?php echo ++$count;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobileno'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['hallname'];?></td>
    <td><?php echo $row['bookeddate'];?></td>
    <td><?php echo $row['bookedtime'];?></td>
    <td><?php echo $row['cancledate'];?></td>
    <td><?php echo $row['cancletime'];?></td>
   <!-- 
    <td><a href="clearcustomer.php?partialuserid=<?//php echo $row['uid'];?>&& dateid=<?//php echo $row['bookdate'];?>&& booktime=<?//php echo $row['booktime']?>" data-toggle="tooltip" data-placement="top" title="DELETE"><button class="btn btn-dark shadow-none custom-bg" >DELETE</button></a></td>  -->    
   </tr>
   <?php endforeach?>

              
        </tbody>
        <tfoot>
            <tr>
      <th>sn</th>
    <th>fullname</th>
    <th>email</th>
    <th>mobile</th>
    <th>City</th>
    <th>Hallname</th>
    <th>Booked Date</th>
    <th>Booked Time</th>
    <th>Cancellation Date</th>
    <th>Cancellation Time</th></tr>
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