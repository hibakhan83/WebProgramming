<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "hkhan14";
$password = "hkhan14";
$database = "hkhan14";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful!";

?>

<link rel="stylesheet" type="text/css" href="assignment5style.css">
<head>
<title>Assignment 5</title>
	<h1>Assignment 5</h1>
	<hr>
	<br>
</head>

<body>
	<div class="tabs">
		<tr><a href="index.html">Home</a></tr>
		<tr><a href="newpurchase.php">Add_Product</a></tr>
		<tr><a href="query.php">Search_by_Supplier_ID</a></tr>
	</div>

	<h3 style="text-align: center;">NIKE Products List</h3>
<?php

$sql = "SELECT product_number, supplier_id, date, quantity, description, price FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    	echo "<table>";
    	echo "<tr>";
    	echo "<th> Product Number </th>";
    	echo "<th> Supplier ID </th>";
    	echo "<th> Date </th>";
    	echo "<th> Quantity </th>";
    	echo "<th> Description </th>";
    	echo "<th> Price </th>";
    	echo "</tr>";

  while($row = $result->fetch_assoc()) {
  		echo "<tr>";
  		echo "<td>" . $row["product_number"] . "</td>";
  		echo "<td>" . $row["supplier_id"] . "</td>";
  		echo "<td>" . $row["date"] . "</td>";
  		echo "<td>" . $row["quantity"] . "</td>";
  		echo "<td>" . $row["description"] . "</td>";
  		echo "<td>" . $row["price"] . "</td>";
  		echo "</tr>";
  
		}

        echo "</table>";
    
} 
else {
    echo "0 results";
}
$conn->close();


?>

<br>
<br>
<br>



</body>

</html>