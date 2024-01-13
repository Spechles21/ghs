<?php
// error_reporting(0);


// Database conection
$conn = new mysqli('localhost','root','','hello');
if($conn->connect_error){
die('connection failed :'.$conn->connect_error);
}else{
// echo "Connection successful";
}


