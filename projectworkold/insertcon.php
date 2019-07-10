<?php

include 'connect.php';

$email=$_POST['email'];

$mblno=$_POST['mblno'];

$name=$_POST['name'];

$message=$_POST['message'];

$status = false;




$sql = "INSERT INTO tblcontact(name,contactno,email,message)
values('$name','$mblno','$email','$message')";

if($conn->query($sql) === TRUE)
{
    $status=True;
}
else{
    $status=false;
}

echo json_encode($status);
?>