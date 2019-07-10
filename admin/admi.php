<?php

include 'connect.php';

$name=$_POST['name'];
$pass=$_POST['password'];

$check = " SELECT * FROM adminlogin where name = '$name' and password = '$pass'";

$result = $conn->query($check);
$status = false;

if($result->num_rows > 0)
{
   session_start();
   $_SESSION["name"] = $name;
   $_SESSION["pass"] = $pass;
    $status = true;
}
else
{
   
    $status = false;
}

echo json_encode($status);

?>