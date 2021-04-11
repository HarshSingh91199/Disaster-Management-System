
<?php 
require_once 'dbConfig.php'; 
$result = $db->query("SELECT * FROM increport"); 
$result2 = $db->query("SELECT * FROM increport"); 
?>
<html>
<head>
<link href="style.css" rel="stylesheet" id="bootstrap-css">
 <?php include 'Header.php';?>
</head>
<style>
h1
{
	color: red;
}
h4
{	
	align: center;

}
h3
{	
	align: center;
    margin: px 10px;
}
#mapCanvas { 
    width: 	100%;
    height: 100%;
}
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
<body>
<div class="menu" >
<h3 align="left">Latest Updates</h3>
 <hr class="rounded">
  <a href="logged.php" target="main"><h4 align="left" color="#000">Messages<h4></a>
    <hr class="dashed">
 <a href="meow.php" target="main"><h4 align="left" color="#000">Incident Map<h4></a>
    <hr class="dashed">
 <a href="ins.php" target="main"><h4 align="left" color="#000">Incident Data<h4></a>
    <hr class="rounded">
 </div>
 <div class="mainContent">
  <h3 align="left">Incident Map</h3>
  <hr class="rounded">
<div id="mapCanvas"></div></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpNGMP3b_3ARQ1ExMvAkE12Gi7Iq8sXgI"></script>
<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
    	  center: {lat: 19.174, lng: 72.87},
          zoom: 4
        };                 
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(100);    
    var markers = [
        <?php if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){ 
                echo '["'.$row['user_name'].'",'.$row['latitude'].','.$row['longitude'].',"'.$row['address'].'","'.$row['incident'].'","'.$row['incTD'].'"],'; 
            } 
        } 
        ?>
    ];               
    var infoWindowContent = [
        <?php if($result2->num_rows > 0){ 
            while($row = $result2->fetch_assoc()){ ?>
                ['<div class="info_content">' +
                '<h5>Incident :- <?php echo $row['incident']; ?></h5>' +
                '<p><h5>Address:- <?php echo $row['address']; ?></h5></p>' +'<h5>Explanation :- <?php echo $row['explanation']; ?></h5>' +'<h5>Reported By :- <?php echo $row['user_name']; ?></h5>'
                +'<h5>Time & Date :- <?php echo $row['incTD']; ?></h5>' + '</div>'],
        <?php } 
        } 
        ?>
    ];
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: 'https://mt.googleapis.com/vt/icon/name=icons/onion/124-red.png',
            title: markers[i][0]
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
   
 }
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    }); 
 

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            markers = new google.maps.Marker({
            position: pos,
            map: map
        });

            var infowindows = new google.maps.InfoWindow({
    		content: "Your location"
  			});
			markers.addListener('click', function() {
    		infowindows.open(map, markers);
  			});
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindows, map.getCenter());
          });
        } else {
          handleLocationError(false, infoWindows, map.getCenter());
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindows.setPosition(pos);
        infoWindows.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindows.open(map);
      }
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>
</body>
</html>