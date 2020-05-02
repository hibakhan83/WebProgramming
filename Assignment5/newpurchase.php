<!DOCTYPE html>
<html>
<head>
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

	<title>Assignment 5</title>
	<h1>Assignment 5</h1>
	<hr>
	<br>

	</head>
<body>
	
	<div class="tabs">
		<tr><a href="index.html">Home</a></tr>
		<tr><a href="display.php">Products_List</a></tr>
		<tr><a href="query.php">Search_by_Supplier_ID</a></tr>
	</div>
<div class="add">
<form action = "display.php" method = "post">
				<h3> Add a Product </h3>
				<input type = "text" id = "product_number" name = "product_number" cols=75 minlength="4" maxlength="4" placeholder = "Product Number" required>
				<br>
				<input type = "text" id = "supplier_id" name = "supplier_id" cols=75 minlength="4" maxlength="4" placeholder = "Supplier ID">
				<br>
				<input type = "text" id = "date" name = "date" cols=75 placeholder = "yyyy-mm-dd">
				<br>
				<input type = "number" id = "quantity" name = "quantity" cols=75 placeholder = "Quantity">
				<br>
				<input type = "text" id = "description" name = "description" cols=75 maxlength="50" placeholder = "Description">
				<br>
				<input type = "text" id = "price" name = "price" cols=75 placeholder = "Price">
				<br>
				<button type = "submit" name = "submit" cols=75 value = "Add"> Add Product to Database </button>
			</form>
</div>
<br>
<br>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
 $product_number = mysqli_real_escape_string($conn, $_POST['product_number']);
 $supplier_id = mysqli_real_escape_string($conn, $_POST['supplier_id']);
 $date = mysqli_real_escape_string($conn, $_POST['date']);
 $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
 $description = mysqli_real_escape_string($conn, $_POST['description']);
 $price = mysqli_real_escape_string($conn, $_POST['price']);

 $sql = "INSERT INTO products (product_number, supplier_id, date, quantity, description, price) VALUES ('$product_number', '$supplier_id', '$date', '$quantity', '$description', '$price')";


 if(mysqli_query($conn, $sql)) {
     echo "";
 } else {
     echo ""; 
 }
 
}
 mysqli_close($conn);

?>

<br>
<br>
<div class="center">
Here is an example of the query:
<br>
<br>

<img src="added_data.PNG">
</div>
	
</body>

</html>