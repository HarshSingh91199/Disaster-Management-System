<?php
  session_start();
  $user = $_SESSION['Username'];
  if(!isset($user))
  {
     header("Location:login.php");
  }
?>
<html>
  <head>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
 <?php include 'Header.php';?>
 <style>
  .menu {
      float:left;
      width:20%;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
      background:#fff;
       border-radius: 20px;
    }
    hr.dashed {
  border-top: 3px dashed #bbb;
}
hr.rounded {
  border-top: 6px solid #bbb;
  border-radius: 5px;
}

    .mainContent {
      float:right;
      width:78%;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
      justify-content:left;
      background:#fff;
      border-radius: 20px;
    }
    .user{
    	color:#eb5844;
    }
    p{
      font-size: 24px
    }
 </style>
</head>
<body id="LoginForm">
<div class = "user"><h1 class="form-heading"><?php echo '<p><font color=black>Welcome '.$_SESSION['Username'].'!!!</font></p>';?>
</h1>
</div> 
<div class="menu" >
<h3 align="left">Latest Updates</h3>
 <hr class="rounded">
 <a href="logged.php" target="main"><h4 align="left" color="#000">Messages<h4></a>
    <hr class="dashed">
 <a href="http://localhost/PBLProject/meow.php" target="main"><h4 align="left" color="#000">Incident Map<h4></a>
 	<hr class="dashed">
 <a href="ins.php" target="main"><h4 align="left" color="#000">Incident Data<h4></a>
    <hr class="rounded">
 </div>
 <div class="mainContent">
  <h3 align="left">Messages</h3>
  <hr class="rounded">
  <table border="2">
  	<tr>
  		<th>Id</th>
  		<th>Name</th>
  		<th>Email</th>
  		<th>Phone</th>
  		<th>location</th>
  		<th>Message</th>
  	</tr>
<?php
include_once 'dbConfig.php';
$query = "SELECT * FROM contactus;";
$result =mysqli_query($db, $query);
$check = mysqli_num_rows($result);
if($check > 0){
	while($row = mysqli_fetch_assoc($result))
	{	echo'<tr>';
		echo '<td>'.$row['id'].' </td>';
		echo '<td>'.$row['name'].' </td>';
		echo '<td>'.$row['email'].' </td>';
		echo '<td>'.$row['phone'].' </td>';
		echo '<td>'.$row['location'].' </td>';
		echo '<td>'.$row['message'].' </td></tr>';
	}
}
?></table>
</div>

</body>
</html>