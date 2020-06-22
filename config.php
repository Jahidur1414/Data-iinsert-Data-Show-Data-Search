<?php 

$host="localhost";
$user="root";
$password="";
$db="test";

$mysqli = mysqli_connect($host,$user,$password);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


?>
