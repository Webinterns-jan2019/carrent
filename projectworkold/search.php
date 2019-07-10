<?php

include 'connect.php';

$password=$_POST['password'];
$name=$_POST['name'];

// $name='asha';
// $password='123';

$check = " SELECT * FROM tbluser where password = '$password' and name = '$name'";

$result = $conn->query($check);
$status = false;

if($result->num_rows > 0)
{
   session_start();
   $_SESSION["name"] = $name;
   $_SESSION["password"] = $password;
    $status = true;
}
else
{
   
    $status = false;
}

echo json_encode($status);

?>