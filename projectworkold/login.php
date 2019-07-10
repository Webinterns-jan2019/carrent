<?php

include 'connect.php';


$username=$_POST['username'];
$password=$_POST['password'];

// $name='pavan';
// $password='123';

$check = " SELECT * FROM tbluser where name = '$username' and password = '$password'";

$result = $conn->query($check);
$status = false;

if($result->num_rows > 0)
{
   session_start();
   $_SESSION["username"] = $username;
   $_SESSION["password"] = $password;
    $status = true;
}
else
{
   
    $status = false;
}

echo json_encode($status);

?>