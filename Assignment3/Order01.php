<!DOCTYPE html>
<html>
<head>
	<h1>Assignment 3</h1>
	<hr>
	<br>
	<link rel="stylesheet" type="text/css" href="hw3style.css">
</head>
<body>


	<form method="post" action="Order02.php">

	<div class="container">
		<h2 style="text-align: center;">Your Future Car!</h2>



	<div class="col-25">
		First Name:
	</div>

	<div class="col-75">
		<input type="type" name="fname" placeholder="Name" required minlength="2" maxlength="20" pattern="[A-Za-z'-]{2,20}">
	</div>


	<br>
	<br>

	<div class="col-25">
		Car Model:
	</div>
	<br>

	<div class="button">
		<input type="radio" name="model" required value="mustang"> Ford Mustang
		<br>	
		<input type="radio" name="model" required value="suburu"> Suburu WRX STI
		<br>
		<input type="radio" name="model" required value="corvette"> Corvette
		<br>
	</div>

	<br>
	<br>
	<br>
	<button type="Submit" name="Submit01" value="Continue">Continue</button>
	<br>
	<br>
	<button type="submit" name="validate" value="Submit without HTML5 validation" formnovalidate>Submit without HTML5 validation</button>
	<br>
	<br>
	<a href="http://codd.cs.gsu.edu/~hkhan14/Assignments/3/Order01.php">Reload Page</a>
</div>
</form>

<?php

	$fname = $_POST['fname'];
	$model = $_POST['model'];

?>


</body>
</html>