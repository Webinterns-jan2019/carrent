<?php

include 'connect.php';

$username=$_POST['username'];
$vehicleid= $_POST['Bookcls_id'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$message=$_POST['message'];

$status = false;



$sql = "INSERT INTO tblbook(username,vehicleid,fromdate,todate,message)
values('$username','$vehicleid','$fromdate','$todate','$message')";

if($conn->query($sql))
{
    echo 'success';
    $status = true;
}
else
{
    echo 'error';
    $status = false;
}

echo json_encode($status);

?>