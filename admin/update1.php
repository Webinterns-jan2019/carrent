<?php

include 'connect.php';
 
$userid=$_POST['userid'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$dob=$_POST['dob'];
$regdate=$_POST['regdate'];
$updatedate=$_POST['updatedate'];
$status=false;

$sql="UPDATE tbluser set name='$name',password='$password',email='$email',contactno='$contactno',address='$address',state='$state',pin='$pin',dob='$dob',regdate='$regdate',updatedate='$updatedate' where userid='$userid'";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>


