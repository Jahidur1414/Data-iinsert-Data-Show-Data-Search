<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>City information insert</title>
	<link rel="stylesheet" type="text/css" href="hproject.css">
</head>
<body>
	<div class="wrap">
		<h2>Enter the (City Name) and The (Country Name) of that city</h2>
		<form action="insert.php" method="POST">
			<input type="city" placeholder="city_name" name="city" requirecd>
			<input type="country" placeholder="country_name" name="country" required>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>