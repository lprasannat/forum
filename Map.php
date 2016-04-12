<?php

include('connection.php');
session_start();
$id = $_SESSION['id'];
$query = "select AddressLine1,AddressLine2 from UserTable where Id='$id'";
$result = mysqli_query($link, $query);
$Address = mysqli_fetch_array($result);
//$addressLineOne = $row[7];
//$addressLineTwo = $row[8];
//$city = $row[9];
//$state = $row[10];
//$country = $row[11];
//$zipcode = $row[12];

$Variable=$Address['AddressLine1']."&nbsp".$Address['AddressLine2'];
//$variable="madhapur";
echo $Variable;

 ?>

<!DOCTYPE html>
<html>
<head>
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script
src="http://maps.googleapis.com/maps/api/js">
</script>
    <script type="text/javascript">

var geocoder = new google.maps.Geocoder();
var address = "<?php echo $Variable;?>";

    
geocoder.geocode( { 'address': address}, function(results, status) {


  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();
    
  }
  
  
 
var myCenter=new google.maps.LatLng(latitude,longitude);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

            $("#myModal").on("shown", function () {
                google.maps.event.trigger(map, "resize");
                return map.setCenter(markerLatLng); //
            });


  
});

</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>






</html>