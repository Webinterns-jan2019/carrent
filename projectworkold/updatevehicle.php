<?php

include 'connect.php';

$vehicleid=$_POST['vehicleid'];



$status = false;




$sql = "update tblvehicle set status='1' where vehicleid = '$vehicleid'";

if($conn->query($sql) === TRUE)
{
    $status=True;
}
else{
    $status=false;
}

echo json_encode($status);
?>