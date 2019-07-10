<?php

include 'connect.php';
 
$vehicleid=$_POST['vehicleid'];
$vehicletitle=$_POST['vehicletitle'];
$vehiclebrand=$_POST['vehiclebrand'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seat=$_POST['seat'];
$vimage=$_POST['vimage'];
$ac=$_POST['ac'];
$cdplayer=$_POST['cdplayer'];
$updatedate=$_POST['updatedate'];
$vehstatus=$_POST['vehstatus'];

$status=false;

$sql="UPDATE tblvehicle set vehicletitle='$vehicletitle',vehiclebrand='$vehiclebrand',priceperday='$priceperday',fueltype='$fueltype',modelyear='$modelyear',seat='$seat',vimage='$vimage',ac='$ac',cdplayer='$cdplayer',updatedate='$updatedate',status='$vehstatus' where vehicleid='$vehicleid'";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>


