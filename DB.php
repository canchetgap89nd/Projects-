<!doctype html>
<html>
<head>
	<title>Demo_DB</title>
	<meta charset = "utf-8" />	
</head>
<body>
	<?php
	$conn = mysqli_connect('localhost','root','') or die("Failed");
	SELECT *FROM sv;
	?>
</body>
</html>