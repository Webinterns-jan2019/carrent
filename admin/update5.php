<?php

include 'connect.php';
 
$vehicleid=$_POST['vehicleid'];


$status=false;

$sql="UPDATE tblvehicle set status='0' where vehicleid='$vehicleid'";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>


