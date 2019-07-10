<?php

include 'connect.php';

$vehicletitle=$_POST['vehicletitle'];
$vehiclebrand=$_POST['vehiclebrand'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seat=$_POST['seat'];
$vimage=$_POST['vimage'];
$ac=$_POST['ac'];
$cdplayer=$_POST['cdplayer'];
$regdate=$_POST['regdate'];
$updatedate=$_POST['updatedate'];
$status=$_POST['status'];

$status=false;

$sql="INSERT into tblvehicle(vehicletitle,vehiclebrand,priceperday,fueltype,modelyear,seat,vimage,ac,cdplayer,regdate,updatedate,status) 
values('$vehicletitle','$vehiclebrand','$priceperday','$fueltype','$modelyear','$seat','$vimage','$ac','$cdplayer','$regdate','$updatedate','$status')";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
   
     $status=false;
 }

//echo json_encode($status);
 ?>