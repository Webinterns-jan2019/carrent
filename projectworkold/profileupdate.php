<?php

include 'connect.php';

$email=$_POST['pemail'];

$mblno=$_POST['pmblno'];

// $dob=$_POST['dob'];

$address=$_POST['paddress'];

$state=$_POST['pstate'];

$pin=$_POST['ppin'];

$pdob=$_POST['pdob'];
$Book_id=$_POST['Book_id'];


$status = false;




$sql = "update tbluser set email='$email',contactno='$mblno',state='$state',address='$address',pin=$pin,dob='$pdob' where userid='$Book_id'";

if($conn->query($sql) === TRUE)
{
    $status=True;
}
else{
    $status=false;
}

echo json_encode($status);
?>