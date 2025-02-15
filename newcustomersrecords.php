<?php
// Establish a connection to MySQL (Assuming you are using XAMPP with default settings)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ath";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data

$CustomerID = $_POST['CustomerID'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];







// SQL to insert data into the table
$sql = "INSERT INTO customers ( CustomerID,FirstName,LastName,Email,Phone) VALUES ( '$CustomerID', '$FirstName','$LastName','$Email','$Phone')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
<script type="text/javascript">
	alert("Data inserted successfully...");
	window.location.href = "customers.php";
</script>