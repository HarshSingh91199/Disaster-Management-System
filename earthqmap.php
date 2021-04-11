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
    p{
      font-size: 16px
    }
 </style>
</head>
<body id="LoginForm">
   <div class="menu" >
    <h3 align="left">Earthquake</h3>
    <hr class="rounded">
   <a href="earthqinfo.php" target="main"><h4 align="left" color="#000">Information<h4></a>
    <hr class="dashed">
   <a href="earthqmap.php" target="main"><h4 align="left" color="#000">Zone Map<h4></a>
    <hr class="dashed">
  <a href="earthqvmap.php" target="main"><h4 align="left" color="#000">Vulnerability Map<h4></a>
    <hr class="dashed">
  <a href="earthqdos.php" target="main"><h4 align="left" color="#000">Do's and Dont's<h4></a>
    <hr class="dashed">
  <a href="earthqrec.php" target="main"><h4 align="left" color="#000">Recover and Build<h4></a>
  <hr class="dashed">
  <a href="earthqemer.php" target="main"><h4 align="left" color="#000">Emergency Kit<h4></a>
  <hr class="rounded">
  </div>
  <div class="mainContent">
  <h3 align="left">Zone Map</h3>
  <hr class="rounded">
  <img src="EarthQuakeZoneMap.jpg" alt="ZoneMap" width="60%" height="100%" align="center">
<hr class="rounded">
  </div>
</body>
</html>