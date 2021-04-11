<html>
  <head>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
 <?php include 'Header.php';?>
 <style>
 	/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
	position: relative;
  float: left;
  width: 33.33%;
  height: 100%;
}
.row {
  display: flex;
  padding-top: 40px;
  padding-right:20px:
  padding-left: 10px;
  height: 50%;
}
.column {
  flex: 33.33%;
  padding-left: 30px;
  padding-right: 30px: 
}
img {
  border: 5px solid #fff;
   vertical-align: middle; 
}
.overlay { 
	position: absolute;
  bottom: 1; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  transition: .5s ease;
  opacity:0;
  height: 100%;
  width:94%; 
  color: white;
  font-size: 32px;
  padding: 20px;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}





.column:hover .overlay {
  opacity: 1;
}
 </style>
</head>
<body id="LoginForm">
	<div class="row">
  <div class="column">
    <a href="http://localhost/PBLProject/Nuclear/nuinfo.php"><img src="nuclear1 .jpg" alt="Nuclear Disaster" width="100%" height="100%">
    <div class="overlay">Nuclear Disaster</div></a>
  </div>
  <div class="column">
    <a href="http://localhost/PBLProject/Biological/bioinfo.php"><img src="biological.jpg" alt="Biological Disaster" width="100%" height="100%">
    <div class="overlay">Biological Disaster</div></a>
  </div>
  <div class="column">
    <a href="#"><img src="chemical.jpg" alt="Chemical Disaster" width="100%" height="100%">
    <div class="overlay">Chemical Disaster</div></a>
  </div>
</div>
</body>
</html>