<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cardata';

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die('Connection failed: ' .$conn->connect_error);
}
else{
    //echo "connection successfull\n ".'<br>';
}

// echo gettype($conn);

// $dept_name='cs';

// $sql = "INSERT INTO department (dept_name)VALUES('$dept_name')";



// $conn->close();
?>