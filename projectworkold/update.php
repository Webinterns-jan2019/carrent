<?php

include 'connect.php';

$email=$_POST['email'];

$mblno=$_POST['mblno'];

$password=$_POST['password'];

$status = false;




$sql = "update tbluser set password='$password' where email = '$email' and contactno='$mblno'";

if($conn->query($sql) === TRUE)
{
    $status=True;
}
else{
    $status=false;
}

echo json_encode($status);
?>