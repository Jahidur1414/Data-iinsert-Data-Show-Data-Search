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

mysqli_select_db($mysqli, $db);

if(isset($_POST['submit']))
{

    $city=$_POST['city'];
    $country=$_POST['country'];
    

     $result=mysqli_query($mysqli, "INSERT into data values('','$city','$country')");

     if($result==1){
        header("Location: hprojectm.php");
    }
    else{
        echo " Something Wrong";
    }
}

?>