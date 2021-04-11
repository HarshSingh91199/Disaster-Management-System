<html>
  <head>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
 <?php include 'Header.php';?>

 	<style>

    .column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.center1{
  margin: auto;
  width: 50%;
  padding: 0 8px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
.about-section {
  padding: 30px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.container {
  padding: 0 16px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
  .menu {
      float:left;
       height: 50%;
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
   .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 </style>
</head>
<body id="LoginForm">
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
  <h3 align="left">About Us</h3>
  <hr class="rounded">  
  <div class="about-section">
  <h2>Group No. :- 20.</h2>
  <h2>Disaster Management System.</h2>
  <p>"To build a safer and disaster resilient India by a holistic, pro-active, technology driven and sustainable development strategy that involves all stakeholders and fosters a culture of prevention, preparedness and mitigation." </p>
</div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Harsh Singh</h2>
        <p class="title">Roll No. :- 72 (19-COMPB72-22)</p>
        <p>TE-B, Computer Engineering, TCET.</p>
        <p>singhharsh91199@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Arif Chawdhary</h2>
        <p class="title">Roll No. :- 73 (19-COMPB73-22)</p>
        <p>TE-B, Computer Engineering, TCET.</p>
        <p>aarif1851998@gmail.com</p>
    </div>
  </div>
</div>
</div>
<div class="row">
    <div class="center1">
    <div class="card">
      <div class="container">
        <h2>Hrutuja Saswade</h2>
        <p class="title">Roll No. :- 71 (19-COMPB71-22)</p>
        <p>TE-B, Computer Engineering, TCET.</p>
        <p>hrutuja2000@gmail.com</p>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>