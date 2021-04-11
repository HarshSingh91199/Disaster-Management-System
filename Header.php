<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js "></script>
<style type="text/css">
	body{
		background: -webkit-linear-gradient(to left, #7EE8FA, #EEC0C6);
		background: linear-gradient(to left, #7EE8FA, #EEC0C6);
		min-height: 100vh;
		font-family: 'Varela Round', sans-serif;
	}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a{
  float: left;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown {
		float: left;
		background: #fff;
		border: none;
		outline: none;
		line-height: 20px;
		margin-bottom: : 10px;
}
.dropbtn{
		float: left;
		background: #fff;
		border: none;
		outline: none;
		padding: 10px 15px;
		font-size: 14px;
		color: #777;
		font-family: 'Varela Round', sans-serif;
		line-height: 20px;
		padding-top: 15px;
		padding-bottom: 15px;

}
.dropdown-content a:hover {
 color: #eb5844;
}
.dropdown:hover .dropbtn {
  color: #eb5844;
}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #eb5844;
	}
	.navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
		color: #f08373 !important;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
		color: #eb5844 !important;
		background: transparent !important;
	}
	.navbar .nav-item i div{
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		margin-right: 0;
		margin-left: 0;
		border: 0;
	}
	  	.notcontainer {
        float: left;
        width: 75%;
        margin: 0 auto;
        padding: 0px;
    }
    	.notcontainer1 {
     		float: left;
        width: 15%;
        margin: 0 auto;
        padding: 0px;
     
    }
    .notcontainer2 {
    	float: right;
        width: 10%;
        margin: 0 auto;
       padding: 0px;
     
    }
     .maincontainer {
        width: 30%;
        margin: 0 auto;
        padding: 20px;
   
    }
   .lntlng{
	margin: 0 auto 0 auto;
    width: 	200px;
    height: 50px;
    }

	@media (min-width: 992px){
		.form-inline .input-group {
			width: 250px;
			margin-right: 30px;
		}

	}
	@media (max-width: 991px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
			margin-top: 0;
		}
		.input-group {
			width: 100%;
		}
	}

</style>
</head> 
<body>
	<h2 align = "center">Disaster Manegement System</h2><br>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="https://ndma.gov.in/en/"><b>NDMA</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="http://localhost/PBLProject/Home.php"s class="nav-link">Home</a></li>
			<li class="nav-item"><a href="incidentreportcenter.php"class="nav-link">Report Incident</a></li>
				<div class="dropdown">
    			<button class="dropbtn">Disaster Information</button>
			<div class="dropdown-content">
     			 <a href="http://localhost/PBLProject/naturedis.php">Natural Disaster</a>
     			 <a href="http://localhost/PBLProject/manmade.php">Man Made Disaster</a>
    		</div>
    	</div>
			<li class="nav-item"><a href="http://localhost/PBLProject/contact.php" class="nav-link">Contact Us</a></li>
			<li class="nav-item"><a href="http://localhost/PBLProject/about.php" class="nav-link">About Us</a></li>
			<li class="nav-item"><a href="http://localhost/PBLProject/login.php" class="nav-link">Login</a></li>
		</ul>
		</ul>
		<ul class="nav navbar-nav navbar-right ml-auto">	
			<?php
			error_reporting(1);
  			session_start();
  			$user = $_SESSION['Username'];
  			if(isset($user))
  			{
   				 echo "<li class= 'nav-item'><a href='http://localhost/PBLProject/logout.php'class= 'nav-link'>Logout</a></li>";
  			}
			?>
			<li class="nav-item"><a href="https://www.facebook.com/NDMA.in/" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
			<li class="nav-item"><a href="https://twitter.com/ndmaindia/" class="nav-link"><i class="fab fa-twitter"></i></a></li>
		</ul>
		
	</div>
</nav>
</body>
</html>       
