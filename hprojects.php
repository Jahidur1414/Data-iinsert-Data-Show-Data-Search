<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search City Country</title>
	<link rel="stylesheet" type="text/css" href="hprojects.css">
</head>
<body>
	<div class="box">
		<h1>Search.....</h1>
		<form action="search.php" method="POST">
			<input type="text" name="country" placeholder="Type...." required="">
			<input type="submit" name="search">
		</form>
	</div>
</body>
</html>