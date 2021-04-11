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
  padding-right:20px:
  padding-left: 20px;
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
  justify-content: center
}

.column:hover .overlay {
  opacity: 1;
}
 </style>
</head>
<body id="LoginForm">
	<div class="row">
  <div class="column">
    <a href="http://localhost/PBLProject/earthqinfo.php"><img src="earthquke1.jpg" alt="EARTHQUAKE"  width="100%" height="100%">
    <div class="overlay">Earthquake</div></a>
  </div>
  <div class="column">
    <a href="http://localhost/PBLProject/Flood/floodinfo.php"><img src="flood.jpg" alt="FLOODS" width="100%" height="100%">
    <div class="overlay">Floods</div></a>
  </div>
  <div class="column">
    <a href=""><img src="cyclon1.jpg" alt="Cyclon" width="100%" height="100%">
    <div class="overlay">Cyclons</div></a>
  </div>
</div>
</div>
<br>
<div class="row">
  <div class="column">
    <a href=""><img src="tsunami1.jpg" alt="Tsunami" width="100%" height="100%">
     <div class="overlay">Tsunami</div></a>
  </div>
  <div class="column">
    <a href=""><img src="heatwave1.jpg" alt="Heatwaves" width="100%" height="100%">
    <div class="overlay">Heat Waves</div></a>
  </div>
  <div class="column">
    <a href=""><img src="landslide1.jpg" alt="Landslides" width="100%" height="100%">
    <div class="overlay">Landslides</div></a>
  </div>
</div>
</div>
</body>
</html>