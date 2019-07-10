<?php

include 'connect.php';


$admname=$_POST['admname'];
$admpassword=$_POST['admpassword'];
$admconpass=$_POST['admconpass'];


$status=false;

$sql="UPDATE adminlogin set password='$admconpass' where name='$admname' and password='$admpassword'";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>


