
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		KHEC-Hall_ADD
	</title>
	<?php require('inc/link.php');?>
 <style type="text/css">
		.container1{
		max-width: 700px;
		width: 100%;
		background-color: #E6E6FA;
		padding: 25px 30px;
		border-radius: 5px;
		margin: 0 auto;

	}
	.h-line{
    width: 150px;
    margin: 0 auto;
    height: 1.7px;
   }
   .error{
		size:15px;
		color:#e74c3c;
		margin-left:150px;
	}
 </style>
</head>
<body  class="bg-light">
<?php require('inc/admin_header.php');?>
	

<form action="halladdphp.php" method="POST" enctype="multipart/form-data">
<div class="my-5 px-4">
		<div class="container">                 

					<h2 class=" mb-2 text-center fw-bold h-font">ADD NEW HALL</h2>
					<div class="h-line bg-dark"><b></div><br>
				<div class="container1 shadow align-items-center">
					<div class="row">
                    
                    <center>   <!-- error -->
            <div class="error align-items-center" style="color: green;">
				<?php if(isset($_GET['error'])){
					echo $_GET['error']."<br>";
                    }?></div>
                  </center>
							<div class="col-md-6 ps-0 mb-3 shadow-none"> 
				       <label class="form-label">Room Type</label>
						<select class="form-select shadow-none" name="type" aria-label="Default select example">
						<option value="Simple">Simple</option>
						<option value="Classic">Classic</option>
						<option value="Modern">Modern</option>
						</select>
					</div>
						<div class="col-md-6 ps-0 mb-3"> 
				<label class="form-label">Room Name</label>
				<input type="text" name="rname" required class="form-control shadow-none">  
						</div>
						<div class="col-md-6 ps-0 mb-3"> 
				<label class="form-label">Number of Seats</label>
				<input type="number" class="form-control shadow-none"  name="seat" required>  
						</div>
						<div class="col-md-6 ps-0 mb-3"> 
				<label class="form-label">Price(FB)</label>
				<input type="number" class="form-control shadow-none" name="price" id="fare" required>  
						</div>
					<div class="col-md-6 ps-0 mb-3"> 
				<label class="form-label">Price(PB)</label>
				<input type="number" class="form-control shadow-none" name="price1" id="fare1" required>  
						</div>

					<div class="col-md-6 ps-0 mb-3"> 
				<label class="form-label">Image</label>
				<input type="file" class="form-control shadow-none" name="file" id="image"  required>  
						</div>
						<div class="col-md-12 p-0 mb-3"> 
				<label class="form-label">Details</label>
				<textarea class="form-control shadow-none" rows="1" name="rdetail" id="rdetail" required></textarea>
						</div>
						<div class="col-md-6 p-0 mb-3"> 

						<label class="form-label">Facilities</label>
								<div class="form-check form-control shadow-none ">
				<input class="form-check-input p-1 mx-1 shadow-none" type="checkbox" name="facility" value="wifi" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
					Free Wifi
				</label><br>
				<input class="form-check-input p-1 mx-1 shadow-none" type="checkbox" name="facility" value="projector" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
					Projectors
				</label><br>
				<input class="form-check-input p-1 mx-1 shadow-none" type="checkbox" name="facility" value="speaker" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
					Camera
				</label>
							</div>
						</div>
				

        <div class="text-center my-1 mt-4">
          <button type="submit" name="addr" class="btn btn-dark shadow-none">ADD HALL</button>
          
        </div>
          </div></div>
	</div>
</div>
				</form>
</body>
</html>
<?php require('inc/footer.php');?>