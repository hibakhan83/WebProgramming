<!DOCTYPE html>
<html>
<head>
	<title>InClass Assignment 5</title>
	<h1>In-Class Assignment 5</h1>
	<hr>
</head>
<body>
	<?php
		
		echo '1) <i>"Good morning, Dave,"</i> said Hal.';
		
	?>

<br>
<br>

	<?php
		
		echo '2) ';

		$radius = 5;
		$area = $radius * $radius * pi(); //formula for area of a circle
		print "The area of a circle with the radius of $radius is $area.";
	?>
	
<br>
<br>

	<?php
		
		echo '3) ';

		$celFahr = 75.5;
		$FahrtoCel = (5/9) * ($celFahr - 32);
		print "$celFahr degrees Fahrenheit is equivalent to $FahrtoCel degrees Celsius";

	?>

<br>
<br>

	<?php
		
		echo '4) ';

		$str = ' PHP is fun ';
		$length = strlen($str) - 2; //2 for the spaces at beginning and end
		print "The string ' PHP is fun ' has $length characters! (not including the space at the beginning or end)";
		
	?>

<br>
<br>

	<?php
		
		echo '5) ';

		$letter = substr("THISISTHEHAYSTACKWITHTHENEEDLE", 4, 1);
		print 'The letter after "THIS" in the phrase "THISISTHEHAYSTACKWITHTHENEEDLE" is ';
		print "$letter.";
		
		
	?>

<br>
<br>

	<?php
		
		echo '6) ';

		function check_palindrome($string) 
			{
			  if ($string == strrev($string))
			      print "$string is a Palindrome";
			  else
				  print "$string is not a Palindrome";
			}

		echo check_palindrome('madam');
		print ", ";
		echo check_palindrome('racecar');
		print ", ";
		echo check_palindrome('meow');

	?>

<br>
<br>

	<?php
		
		echo '7) ';
		
		$num = 7;
		
			if ($num % 2 == 0) 
				{
					print "$num is an even number.";		
				}
			else 
				{
					print "$num is an odd number.";
				}

	?>

<br>
<br>

	<?php

		echo '8) ';

		echo date("Y") ; 

			if((0 == $Y % 4) & (0 != $Y % 100) | (0 == $Y % 400))
				{
					echo "  <strong>It is.</strong>";    
				}
			else  
				{  
					echo "  <strong>It is not.</strong>";    
				}
	?>

</body>
</html>
