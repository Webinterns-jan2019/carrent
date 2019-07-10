<?php

include 'connect.php';

$email=$_POST['email'];
$mblno=$_POST['mblno'];

// $name='pavan';
// $password='123';

$check = " SELECT * FROM tbluser where email = '$email' and contactno = '$mblno'";

$result = $conn->query($check);
$status = false;

if($result->num_rows > 0)
{
   session_start();
   $_SESSION["email"] = $email;
   $_SESSION["mblno"] = $mblno;
    $status = true;
}
else
{
   
    $status = false;
}

echo json_encode($status);

?>