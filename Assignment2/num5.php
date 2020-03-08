<!DOCTYPE html>
<html>
<head>
	<title>Number 5</title>
</head>
<body>

<?php

		$hamburger = 4.95;
		$chocolateshake = 1.95;
		$cola = .85;
		$tax = .075;
		$tip = .16;
		$subtotal = ($hamburger*2)*($chocolateshake*1)*($cola*1);
		$taxTotal = $subtotal*$tax;
		$tipTotal = $subtotal*$tip;
		$Total = $subtotal+$taxTotal+$tipTotal;
		$CostTotal = number_format($Total,2);

		print "Hamburger Cost: $$hamburger <br>";
		print "Shake Cost: $$chocolateshake <br>";
		print "Cola Cost: $$cola <br>";
		print "**7.5% tax <br>";
		print "**16% tip <br><br>";
		print "Total Bill: $";
		print $CostTotal;

	?>

</body>
</html>