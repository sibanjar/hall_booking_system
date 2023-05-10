<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Admin_panel - Dashboard
	</title>
	<?php require('inc/link.php');?>
</head>
<body class="bg-light">

	<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
		<h3 class="mb-0 h-font">
			Khec
		</h3>
		<a href="logout.php " class="btn btn-light btn-sm">Log Out</a>		
	</div>

	<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
			<nav class="navbar navbar-expand-lg navbar-dark">
					  <div class="container-fluid flex-lg-column align-items-stretch">
					    <h4 class="mt-2 text-light">Admin Panel</h4>
					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admindropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="admindropdown">
					    	<ul class="nav nav-pills flex-column">
					  
							  <li class="nav-item">
							    <a class="nav-link text-white" href="#">Dashboard</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link text-white" href="#">Link</a>
							  </li>
					  		</ul>
					    </div>
					  </div>
			</nav>
	</div>






<!--	<div class="container">
		<div class="row">
			<div class="col-lg-3">
<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2" href="#">Filter</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="filterdropdown">
    	<div class="border bg-light p-3 rounded mb-3">
    	<h5 class="mb-3">chcka available</h5>
    	</div>
    </div>
  </div>
</nav>
			</div>
		</div>
	</div>


-->
</body>
</html>