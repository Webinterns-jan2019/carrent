<?php

include 'connect.php';

$username=$_POST['username'];
$mblno= $_POST['mblno'];
$email=$_POST['email'];
$password=$_POST['password'];
$conpass=$_POST['conpass'];

$status = false;



$sql = "INSERT INTO tbluser(name,contactno,email,password)
values('$username','$mblno','$email','$password')";

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