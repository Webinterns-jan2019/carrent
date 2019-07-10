<?php
include 'connect.php';

$vehicleid=$_POST['vehicleid'];

$status=false;

$sql="DELETE from tblvehicle where vehicleid=$vehicleid";
 if($conn->query($sql)===true)
 {
     $status=true;
 }
 else{
     $status=false;
 }
 echo json_encode($status);
 ?> 