

<!DOCTYPE html>
<html>
<head>
	<h1>Assignment 3</h1>
	<hr>
	<br>
<link rel="stylesheet" type="text/css" href="hw3style.css">
	<br>
	<h2 style="text-align: center;">Your Future Car!</h2>
</head>
<body>

<?php
ob_start();
	require 'Order01.php';
	require 'Order02.php';
	echo "Hi ";
	echo $fname;
	echo htmlspecialchars($fname);
	<br>
	echo "The car you chose is a ";
	echo htmlspecialchars($model);
$output=ob_get_clean();


	?>
	


	</body>
</html>