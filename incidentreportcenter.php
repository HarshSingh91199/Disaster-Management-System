
<html lang="en">
<head>
  <link href="style.css" rel="stylesheet" id="bootstrap-css">
  <title>DMS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <!-- custom stylesheets -->
  <link rel="stylesheet" href="/css/common-layout.css">
  <link rel="stylesheet" href="/css/common-text.css">
  <!-- fontawesome cdn -->
<style>
  .menu {
      float:left;

























      
      width:20%;
      height: 50%;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 10px;
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
    .geomap {
      width: 100%;
      height: 600px;
    }
  </style>
</head>
<body>
 <?php include 'Header.php';?>
<br>
<div class="menu" >
  <h4 align="left">Emergency Contacts-</h4>
 <hr class="rounded">

 <marquee scrollamount="5" direction="up" height="60%" width="100%" onmouseover="stop()" onmouseout="start()">
  <ul>
    <li>National Emergency Number -<b><u>112</u></b></li>
    <li>Police -<b><u>100</u></b></li>
    <li>Fire -<b><u>101</u></b></li>
    <li>Ambulance -<b><u>102</u></b></li>
    <li>Disaster Management Services -<b><u>108</u></b></li>
    <li>EARTHQUAKE / FLOOD / DISASTER(N.D.R.F Headquaters)NDRF HELPLINE NO:
      <b><u> 011-24363260, 9711077372</u></b></li>
  </ul></marquee>
   <hr class="rounded">
  </div>
 <div class="mainContent">
  <h3 align="left">Incident Reporting</h3>
  <hr class="rounded">
    <form action="incidentreportcenterput.php" method="POST">


          <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="input" class="form-control" name="user_name" placeholder="User Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address / Mobile no.</label>
            <input type="input" class="form-control" name="user_email" placeholder="Enter email">
          </div>
          <br>
          <div class="card card-body">
            <div class="geomap">
              <iframe src="https://www.latlong.net/" title ="Ckeck Co-orndinates below" width="100%" height="100%" align="center" ></iframe>
            </div>
            <br><br>
            <div class="form-group">
              <small id="emailHelp" class="form-text text-muted">Copy your Incident location details & paste on Location input field*</small>
              <label for="exampleInputEmail1">Address</label>
              <input type="input" class="form-control" name="address" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Latitude</label>
              <input type="input" class="form-control" name="latitude" placeholder="Enter Latitude">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Longitude</label>
              <input type="input" class="form-control" name="longitude" placeholder="Enter Longitude">
            </div>
            </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Incident Type</label><br>
            <select class="form-control" name="incident">
            <option>Accident</option>
            <option>Earth Quake</option>
            <option>Landslide</option>
            <option>Tsunami</option>
            <option>Flood</option>
             <option>Heat Wave</option>
             <option>Cyclon</option>
             <option>Chemical Leakage</option>
             <option>Fire</option>
            </select>
          </div>

          <br>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Explanation For The Incident</label>
            <textarea class="form-control" name="explanation" rows="3"></textarea>
          </div>
          <br>
          <button class="btn btn btn-warning btn-space my-2 my-sm-0" type="submit" name="submit">Submit</button>
          <br> 
    </form>
      <hr class="rounded">

  </div>

</body>
</html>
