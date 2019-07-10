<?php

include 'connect.php';

$id=$_POST['id'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$postdate=$_POST['postdate'];
$name=$_POST['name'];

$status=false;

$sql="UPDATE tblcontact set email='$email',contactno='$contactno',message='$message',postdate='$postdate',name='$name' where id='$id'";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>


