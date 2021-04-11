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
      width:78%;
      margin: auto;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
      padding-top: 20px;
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
<div class="mainContent">
  <h3 align="left">About Us</h3>
  <hr class="rounded">  
  <div class="about-section">
  <h2>UnHook</h2>
  <h2>Disaster Management System.</h2>
  <p>"To build a safer and disaster resilient India by a holistic, pro-active, technology driven and sustainable development strategy that involves all stakeholders and fosters a culture of prevention, preparedness and mitigation." </p>
</div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Swastik Sharma</h2>
        <p class="title">swastiksharma88@gmail.com</p>
        <p>Third Year, Computer Engineering, TCET.</p>
        <p>India</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Nimesh Tripathi</h2>
        <p class="title">tripathinimesh2000@gmail.com</p>
        <p>Third Year, Computer Engineering, TCET.</p>
        <p>India</p>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Harsh Tiwari</h2>
        <p class="title">tiwariharsh782@gmail.com</p>
        <p>Third Year, Computer Engineering, TCET.</p>
        <p>India</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Harsh Singh</h2>
        <p class="title">singhharsh91199@gmail.com</p>
        <p>Third Year, Computer Engineering, TCET.</p>
        <p>India</p>
    </div>
  </div>
</div>
</div>

</body>
</html>