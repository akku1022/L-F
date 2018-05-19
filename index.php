<?php
	$con=mysqli_connect("localhost","root","") or die(mysql_error());				
	$db=mysqli_select_db($con,'my_db') or die(mysql_error());

	if(isset($_POST['akarsh']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query = "select * from registration where username='$username' and password='$password' ";
		$query_run = mysqli_query($con,$query);
		if($query_run)
		{
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
					
				header( "Location: found.php");
			}
			else
			{
				echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Database Error")</script>';
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lost & Found</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- fonts -->
	<link rel="stylesheet" type="text/css" href="animate.css">


	
</head>
<body>

	<!-- navbar -->
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
	        <a class="nav-link" href="index.php#about">About Us &emsp;</a>
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
	<div class="lost&found">
		
	<!-- center align -->
	<div class="container">

		<!-- media-banner -->
					<br>

					<div id="demo" class="carousel slide" data-ride="carousel">

					  <!-- Indicators -->
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>
					  
					  <!-- The slideshow -->
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="600" >
					    </div>
					    <div class="carousel-item">
					      <img src="images/2.jpg" alt="Chicago" width="1100" height="600" >
					    </div>
					    <div class="carousel-item">
					      <img src="images/3.jpg" alt="New York" width="1100" height="600">
					    </div>
					  </div>
					  
					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>
					</div>

		












		<br>
		<br>
		
		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/bag.png" alt="...">
		      <div class="caption">
		        <h3>What?</h3>
		        <p>The website - Lost and Found, basically aims at reuniting an owner with his or her lost item. A person who loses a product can easily update the description of it on the website, and another person who happens to find the product, can update the information on the website , thus helping the owner lay his or her hands back on what was always theres.</p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/student.png" alt="...">
		      <div class="caption">
		        <h3>Who?</h3>
		        <p>Due to advancements in technology and in this highly dominated computerised era, it has become critically important for people to let computers help us at possibly all stages of life. Rather than physicall queuing up in the police booth or any kind of booth, the website will help an individual let the world know about the item lost from the comfort of his or her home, which if found by somebody, can be retraced back to the owner, thus aiding in great economical and time savings.</p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/gadgets.png" alt="...">
		      <div class="caption">
		        <h3>How?</h3>
		        <p>A person , who has lost a particular item will need to go to the lost item page on the website, complete a small authentication signup or login procedure, and share the information about the particular product. In return, a person who happens to find the product, will update the database of the website about the location and the details of the product, which will then be notified to the original owner, and can then be traced back to the rightful hands.</p>
		      </div>
		    </div>
		  </div>
		</div>

		<hr>

		<!-- About -->
		<div id="about">

			<h2  class="animated shake">Know the Team</h2>

			<div class="row">

			  <div class="col-md-1"></div>

			  <div class="col-sm-6 col-md-2">
			    <div class="thumbnail">
			      <img src="images/akarsh.png" alt="...">
			      <div class="caption">
			        <h3>Akarsh Mehrotra</h3>
					<br>
		        	<p>Front-end and Back-end Developer</p>
			      </div>
			    </div>
			  </div>
			   <div class="col-sm-6 col-md-2">
			    <div class="thumbnail">
			      <img src="images/akshat.png" alt="...">
			      <div class="caption">
			        <h3>Akshat Vaishya</h3>
			        <br>
		        	<p>UI/UX Designer</p>
			      </div>
			    </div>
			  </div>

			 
			  <div class="col-sm-6 col-md-2">
			    <div class="thumbnail">
			      <img src="images/priyanshu.png" alt="...">
			      <div class="caption">
			        <h3>Priyanshu Srivastava</h3>
			        <br>
		        	<p>Database Manager</p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-2">
			    <div class="thumbnail">
			      <img src="images/simran.png" alt="...">
			      <div class="caption">
			        <h3>Simran<br>Singh&nbspGulati</h3>
			        <br>
		        	<p>Front-end Developer and UI/UX Designer</p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-2">
			    <div class="thumbnail">
			      <img src="images/sourav.jpg" alt="...">
			      <div class="caption">
			        <h3>Sourav Ghosh</h3>
			        <br>
		        	<p>UI/UX Designer</p>
			      </div>
			    </div>
			  </div>


			  <div class="col-md-1"></div>
			</div>

		</div> <!-- id -->

		<hr>

		<div id="report">
			<div class="caption">
				<h2 class="animated fadeInRight">Found Something? <br>  </h2>
				


			</div>
			<div class="pls_login">

				<h5 class="animated fadeInLeft">Please Login to continue.</h5>
			</div>

			<div class="row animated fadeInLeft">
				<div class="col-sm-6 col-md-4">	
					<form class="form-container" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text"  required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Remember me</label>
					  </div><br>
					  <button type="submit" name="akarsh" class="btn btn-primary">Submit</button>
					  <p>
						 	<br>Not Registered? Go register yourself first! <a href="register.php">Register</a>
						 </p>
					</form>
				</div>

				<div class="col-sm-6 col-md-8">	
					<div class="report_content animated fadeInRight">

						<p>Its always a noble cause to help somebody get back what was originally and always theres. If you wish to contribute by being a part of this noble deed, continue to login below and help a person get back what is actually meant to be in there hands.Dont worry! It is a simple procedure and wont take much of your time. Don't stop yourself from clicking the continue to login button below.</p>
					</div>
				</div>

			

		




			</div> 
		</div>
	</div>
		<footer >

				<h5>Designed by CoreTeam, Copyright &copy; 2018</h5>
		</footer>

		
   



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		


	           

	</body>
</html>
