
<!DOCTYPE html
<html>
<head>
	<title>Lost & Found</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:#2c333a;">
	  <a class="navbar-brand" href="index.php">
	    <img src="images/logo.png" alt="Octopus with magnifying glass">
	  </a>
	  <!-- toggle button for small screens -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">&emsp;Home &emsp;<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=index.php#about">About Us &emsp;</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Report Item
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="lost.php">Lost Something</a>
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

					<form class="form-container" method="post" action="register.php">
						
							<br>

							<h2>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;Register</h2>
							<div class="form-group">
							    <label>Name</label>
							    <input type="text" name="name" required class="form-control"  placeholder="Name">
							 </div>
							<div class="form-group">
							    <label>Username</label>
							    <input type="text" name="username" required class="form-control"   placeholder="Username">
							 </div>

							 <div class="form-group">
							    <label>Email</label>
							    <input type="email" name="email" required class="form-control"   placeholder="Email">
							 </div>
							 <div class="form-group">
							 	<label>Password</label>
							 	<input type="password" name="password" required class="form-control"   placeholder="Password">
							 </div>
							 <div class="form-group">
							 	<label>Confirm Password</label>
							 	<input type="password" name="cpassword" required class="form-control"   placeholder="Confirm Password">
							 </div>
							 
							 <button type="submit" value="submit" name="submit" class="btn btn-success btn-block">Register</button>
							 <p>
							 	<br>Already Registered! <a href="index.php#report">Sign In</a>
							 </p>
						</div>
					</form>


					
				</div>
			
				


		</div>
	</div>
	<br>
	
	<footer>
				<h5>Designed by CoreTeam, Copyright &copy; 2018</h5>
		</footer>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		
</body>

</html>

<?php
	$con=mysqli_connect("localhost","root","") or die(mysql_error());				
	$db=mysqli_select_db($con,'my_db') or die(mysql_error());
	if(isset($_POST['submit']))	
	{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password==$cpassword)
		{
			$query= "select * from registration WHERE username='$username'";
			$query_run= mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0)
			{
				//user already exists
				echo '<script type="text/javascript"> alert("User already exist.Please try another username")</script>';
			} 
			else{

				$sec_pass=$password;
			
				$query="insert into registration(name,username,email,password) values ('$name','$username','$email','$sec_pass')";
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User registered !!!")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error")</script>';
				}
			
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("Passwords does not match. Please re-enter the passwords")</script>';
		}
		
	}	

						

						



?>
