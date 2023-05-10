<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<?php require('inc/link.php');?>
</head>
<body class="bg-light">
     <?php
include 'inc/dbconection.php';

include 'inc/admin_header.php';
?>
<?php
$q="SELECT * FROM booked";
$result=mysqli_query($con,$q);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$count=0;
?>

<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">PARTIAL-DAY BOOKING REPORT</h2>
    <div class="h-line bg-dark"></div>
    <br>    
    <div class="container">
<table id="example" class="table table-hover border-4 shadow" style="width:100%">
        <thead>
            <tr>

      <th>sn</th>
    <th>fullname</th>
    <th>username</th>
    <th>email</th>
    <th>mobile</th>
    <th>City</th>
    <th>bookdate</th>
    <th>booktime</th>
    <th>Room name</th>
    <th>Hall fare</th>
   

            </tr>
        </thead>
        <tbody>
            <tr><?php
foreach($rows as $row):
?>
<td><?php echo ++$count;?></td>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobileno'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['bookdate'];?></td>
    <td><?php echo $row['booktime'];?></td>
    <td><?php echo $row['rname'];?></td>
    <td><?php echo $row['h_price'];?></td>
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
    <th>bookdate</th>
    <th>booktime</th>
    <th>Room name</th>
    <th>Hall fare</th>

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
    <br>
<?php include 'inc/footer.php';?>

</body>
</html>

