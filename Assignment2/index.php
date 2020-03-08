<!DOCTYPE html>
<html>
<head>
	<title>Assignment 2</title>
	<h1>Assignment 2</h1>
	<hr>
	<br>
</head>
<body>
	<?php
		
		echo '<b>1) Charlie ate my Lunch!</b>';
	?>
<br>
	<?php
	
		function isBitten() {

			$num = rand(0,1);

				if ($num==1) { 
					return true;
				}

				else {
					return false;
				}
		}

		$result = isBitten();

			if ($result == true) {
				print "Charlie ate my lunch!";
			}
			else {
				print "Charlie did not eat my lunch!";
			}

	?>
<br>
<br>
	<?php

		echo '<b>2) Checkerboard</b>';
	?>
<br>
	<?php
		echo '<table style="width=300px" height="35px" border="1" cellspacing="1" cellpadding="1">'; 

		$count=0;
			for($x=0; $x<7; $x++) {

				echo "<tr>";

			for($y=0; $y<7; $y++) {

				$count=$count+1;

				if($count%2 == 0) {

						echo '<td height="35" width="35" style="background-color:red;"></td>'; 
					}

				else {

						echo '<td height="35" width="35" style="background-color:black;>"</td>';
					}

			}

			echo "</tr>";

			}

		echo "</table>";

	?>

<br>
<br>
	<?php

		echo '<b>3) Month</b>';
	?>
<br>
	<?php

		 $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');  

		 for ($i=0; $i < 12; $i++) { 
		 	echo "$month[$i]   ";
		 }
	?>

<br>
	<?php
		 $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');  

		 sort($month);
		 for ($i=0; $i < 12; $i++) { 
		 	echo "$month[$i]   ";
		 }
	?>
<br>
	<?php
		 $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');  

		 foreach ($month as $value) {
		 	echo "$value   ";
		 }
	?>
<br>
	<?php
		 sort($month);
		 foreach ($month as $value) {
		 	echo "$value   ";
		 }

	?>

<br>
<br>
	<?php

		echo '<b>4) Ten Best Restaurants in ATL</b>';
	?>
<br>
	<?php
  			$Restaurants = array(
                      "Chama Gaucha" => 40.50,
                      "Aviva by Kameel" => 15.00,
                      "Bone’s Restaurant" => 65.00,
                      "Umi Sushi Buckhead" => 40.50,
                      "Fandangles" => 30.00,
                      "Capital Grille" => 60.50,
                      "Canoe" => 35.50,
                      "One Flew South" => 21.00,
                      "Fox Bros. BBQ" => 15.00,
                      "South City Kitchen Midtown" => 29.00);

			echo "Name and average cost of restaurants: " . "<br>";
					printTable($Restaurants);


			echo "<br>"."Restaurants sorted by price:" . "<br>";
					sortByPrice($Restaurants);

			echo "<br>"."Restaurants sorted by name:" . "<br>";
					sortByName($Restaurants);


			function sortByPrice($R) {
   				asort($R);
    			printTable($R);
  			}

  			function sortByName($R) {
				ksort($R); 
   				printTable($R);
   			}

			function printTable($R){

				$table = '<table border="1"> <tr>';
    		    $table .= '<th>' . 'Restaurant Name'. '</th>';
	            $table .= '<th>' .'Average Cost'. '</th>';
	   			$table .= '</tr>';
   
   			 foreach( $R as $key=>$value){
        		$table .= '<tr>';
                $table .= '<td>' . $key." " . '</td>';
           		$table .= '<td>' . $value . '</td>';
      			$table .= '</tr>';
   			}

   		$table .= '</table>';
   	    echo $table;

	}

	?>

<br>
<br>
	<?php

		echo '<b>5) What is your Bill Total?</b>';
	?>
<br>
<form action="num5.php">
	<div>
	Quantity of Hamburgers: <input type="number" id="Qhamburger" min="0" name="hamburger">
	<br>
	Quantity of Shakes: <input type="number" id="Qshake" min="0" name="chocolateshake">
	<br>
	Quantity of Colas: <input type="number" id="Qcola" min="0" name="cola">
	<br>
	<!--<button onclick="Cost()">Submit</button>-->
	<input type="Submit" name="Sumbit">
	</div>
</form>

<!--<script>
		function Cost() {
 			var x = document.getElementById("Qhamburger").value;
  			//document.getElementById("demo").innerHTML = x;
}
</script>
-->
<br>
	
</body>

</html>
