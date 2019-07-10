<?php

include 'connect.php';

$id=$_POST['id'];
$username=$_POST['username'];
$vehicleid=$_POST['vehicleid'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$message=$_POST['message'];
$postingdate=$_POST['postingdate'];

$status=false;

$sql="UPDATE tblbook set username='$username',vehicleid='$vehicleid',fromdate='$fromdate',todate='$todate',message='$message',postingdate='$postingdate' where id='$id'";

 if($conn->query($sql)===true)
 {
    $status=true;
 }
 else
 {
    $status=false;
 }

 echo json_encode($status);
 ?>


