<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lost & Found</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="found.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


	
</head>
<body>

	<!-- navbar -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">
	    <img src="images/logo.png" alt="Octopus with magnifying glass">
	  </a>
	  <!-- toggle button for small screens -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">&emsp;Home &emsp;</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php#about">About Us &emsp;</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Report Item<span class="sr-only">(current)</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Lost Something</a>
	          <a class="dropdown-item" href="index.php#report">Found Something</a>
	        </div>
	      </li>
	    </ul>
	    
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<div class="container">
		<div class="row">
			
			<div class="col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4">

					<form class="form-container" method="post" action="found.php">
						
						<h4>Help Someone to find his/her lost item.</h4>
						<br>
						<div class="form-group">
						  

						  <div class="form-group">
							    <label>Enter the registered Username</label>
							    <input type="text" name="username" required class="form-control"   placeholder="Username">
							 </div>

							 <div class="form-group">
							    <label>Enter the registered Email</label>
							    <input type="email" name="email" required class="form-control"   placeholder="Email">
							 </div>
						 <div class="form-group">
						    <label>Item</label>
						    <input type="text" name="item" required class="form-control"   placeholder="Enter the item found">
						    <small id="itemHelp" class="form-text text-muted">Ex: Phone,Wallet,Earphone,Laptop</small>
						 </div>
						<div class="form-group">
							<label>Location</label>
							<input type="text" name="location" required class="form-control"   placeholder="Enter the location of the found item">
						    <small id="locationHelp" class="form-text text-muted">Ex: UB,TechPark,Java</small>
						</div>

						</div>
						<div class="form-group">
							<label>Color</label>
							<input type="text" name="color" required class="form-control"   placeholder="Enter the color of the found item">
						    <small id="colorHelp" class="form-text text-muted">Ex: Black,Blue,Grey,Red</small>
						</div>

						<div class="form-group">
							<label>Date:&emsp;</label>
							
							<input id="datepicker" name="date" type="text" size="8">
						</div>

						 <button type="submit" value="submit" name="submit" class="btn btn-success btn-block">Submit</button>
						 
					</form>


					
				</div>
			
				


		</div>
	</div>



			
			
</form>
</div>
</div>
</div>
<br>
<footer >

					<h5>Designed by CoreTeam, Copyright &copy; 2018</h5>
			</footer>

</body>



		


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>
</body>
</html>
<?php
	$con=mysqli_connect("localhost","root","") or die(mysql_error());				
	$db=mysqli_select_db($con,'my_db') or die(mysql_error());
	if(isset($_POST['submit']))	
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$item=$_POST['item'];
		$location=$_POST['location'];
		$color=$_POST['color'];
		$date=$_POST['date'];

		$query="insert into found(username,email,item,location,color,date) values('$username','$email','$item','$location','$color','$date') ";
		$query_run = mysqli_query($con,$query);
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Data about the found item is with us. Thank you !!")</script>';

		}
		else 
		{
			echo '<script type="text/javascript"> alert("Error !!")</script>';
		}
	}
	?>