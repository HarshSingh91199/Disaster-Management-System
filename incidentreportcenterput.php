<?php
if(isset($_POST['submit'])){

  require_once 'dbConfig.php'; 

  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $address = $_POST['address'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $incident = $_POST['incident'];
  $explanation = $_POST['explanation'];
  $incdatetime = date("H:i:s") ."   ".date("d/m/Y");
echo "$incdatetime";

if(empty($user_name) || empty($user_email) || empty($address) || empty($latitude) || empty($longitude) || empty($incident) || empty($explanation)){
  header("Location:incidentreportcenter.php?signup=Fields_Empty");
  echo "y2";
}
else{

  if (!preg_match("/^[a-zA-Z]*$/",$user_name)){
      header("Location:incidentreportcenter.php?signup=Invalid");
      echo "y3";
}
else{

    $sql = "SELECT * FROM increport WHERE address='$address'";
    $result = mysqli_query($db,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
    echo '<script>alert("Already Reported");</script>';
    header("Location:incidentreportcenter.php?signup=Already_Reported");
      echo "y4";
}
else {
  //INSERT THE USAER INTO THE DATABASE
  $sql = "INSERT INTO increport (user_name, user_email,address,latitude,longitude,incident,explanation,incTD) VALUES ('$user_name','$user_email','$address','$latitude','$longitude','$incident','$explanation','$incdatetime');";
  mysqli_query($db,$sql);
  echo '<script>alert("Incident Reported Successfully");</script>';
  header("Location:incidentreportcenter.php?signup=Incident_Reported_Thank_You");
}
    }
   }
}
else{
  header("Location:incidentreportcenter.php");
  echo "y6";
}
?>
