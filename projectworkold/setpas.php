<?php

include 'connect.php';


$npas=$_POST['npas'];


$name=$_POST['name'];

$status = false;




$sql = "update tbluser set password='$npas' where name='$name'";

if($conn->query($sql) === TRUE)
{
    $status=True;
}
else{
    $status=false;
}

echo json_encode($status);
?>