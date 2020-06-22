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

if(isset($_POST['search']))
{
  $country=$_POST['country'];

  $query = "SELECT * FROM data where country='$country'";

  $query_run = mysqli_query($mysqli, $query);

  while($row = mysqli_fetch_array($query_run))
  {
    ?>
      <form action="" method="POST">
        <input type="text" name="country" value="<?php echo $row['country'] ?>" />
        <input type="text" name="city" value="<?php echo $row['city'] ?>"/><br>
      </form>
    <?php

  }
}

?>