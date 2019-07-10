<?php
include 'connect.php';


$userid=$_POST['userid'];

$status=false;

$sql="DELETE from tbluser where userid=$userid";
 if($conn->query($sql)===true)
 {
     $status=true;
 }
 else{
     $status=false;
 }
 echo json_encode($status);
 ?> 