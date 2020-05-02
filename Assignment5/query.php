<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="assignment5style.css">
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
	<title>Assignment 5</title>
	<h1>Assignment 5</h1>
	<hr>
	<br>

</head>
<body>
	
	<div class="tabs">
		<tr><a href="index.html">Home</a></tr>
		<tr><a href="display.php">Products_List</a></tr>
		<tr><a href="newpurchase.php">Add_Product</a></tr>
		
	</div>
<div class="searchform">
<form method = "post">
				<h3> Search for Products with Supplier ID </h3>
				<input type = "text" id = "supplier_id" name = "supplier_id" cols=75 minlength="4" maxlength="4" placeholder = "Supplier ID">
				<br>
			
				<button type = "submit" name = "submit" cols=75 value = "submit"> Search Product Database </button>
			</form>


<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
//session_start();
//	$supplier_id = $_POST["supplier_id"];


		if(isset($_POST['supplier_id'])) {
					$_POST['supplier_id'] = 'supplier_id';


 $sql = "SELECT supplier_id, date, description, price FROM products WHERE supplier_id = '" . $_POST['supplier_id' . "'"];
$result = $conn->query($sql);

 		if ($result->num_rows > 0) { 

    				echo "<br>";
			    	echo "<table>";
			    	echo "<tr>";
			    	echo "<th> Supplier ID </th>";
			    	echo "<th> Date </th>";
			    	echo "<th> Description </th>";
			    	echo "<th> Price </th>";
			    	echo "</tr>"; 

		while($row = $result->fetch_assoc()) {

			    	echo "<tr>";
			  		echo "<td>" . $row["supplier_id"] . "</td>";
			  		echo "<td>" . $row["date"] . "</td>";
			  		echo "<td>" . $row["description"] . "</td>";
			  		echo "<td>" . $row["price"] . "</td>";
			  		echo "</tr>";
			  }
			  		echo "</table>";
				}
 }

 	else {
     	echo "No Results Found"; 
	}

}


    // output data of each row
  
    	
*/
if($_SERVER["REQUEST_METHOD"] == "POST") { //Product category sent from form
				//Check which product category is to be displayed
				if(isset($_POST['supplier_id'])) {
					$_SESSION['supplier_id'] = 'supplier_id';
					$sql = "SELECT supplier_id, date, description, price FROM products WHERE supplier_id = '" . $_SESSION['supplier_id'] . "'";
$sql = "SELECT supplier_id, date, quantity, description, price FROM products";
$result = $conn->query($sql);

					echo "<br>";
			    	echo "<table>";
			    	echo "<tr>";
			    	echo "<th> Supplier ID </th>";
			    	echo "<th> Date </th>";
			    	echo "<th> Description </th>";
			    	echo "<th> Price </th>";
			    	echo "</tr>";
			    	echo "<tr>";
			  		echo "<td>" . $row["supplier_id"] . "</td>";
			  		echo "<td>" . $row["date"] . "</td>";
			  		echo "<td>" . $row["description"] . "</td>";
			  		echo "<td>" . $row["price"] . "</td>";
			  		echo "</tr>";
			  		echo "</table>";
			  	}
  
			else {
					echo "No Results Found"; 
				}	

	} 
	

	mysqli_close($conn);
?>


</div>
<br>
<br>
<br>
<div class="center">
Here is an example of the query:
<br>
<br>

<img src="supplier_id.PNG">
</div>
</body>

</html>