<!DOCTYPE html>
<html>
<head>
	<h1>Assignment 3</h1>
	<hr>
	<br>
	<link rel="stylesheet" type="text/css" href="hw3style.css">
</head>
<body>

	<form method="post" action="Order03.php">

	<div class="container">
		<h2 style="text-align: center;">Your Future Car!</h2>

<div class="center">Color:
	<select id="color" required>	
	<option>Select</option>
	<option value="red" name="red" required value="red">Red</option>
	<option value="white" name="white" required value="white">White</option>
	<option value="blue" name="blue" required value="blue">Blue</option>
</select>
</div>
	<br>
	<br>
	<br>
	<button type="Submit" name="Submit02" value="Continue">Continue</button>
	<br>
	<br>
	<button type="submit" name="validate" value="Submit without HTML5 validation" formnovalidate>Submit without HTML5 validation</button>
	<br>
	<br>
	<a href="http://codd.cs.gsu.edu/~hkhan14/Assignments/3/Order02.php">Reload Page</a>
</div>

</form>
<?php

	$red = $_POST['red'];
	$white = $_POST['white'];
	$blue = $_POST['blue'];

?>

</body>

</html>


