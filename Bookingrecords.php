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
$CheckInDate = $_POST['CheckInDate'];
$CheckOutDate = $_POST['CheckOutDate'];
$RoomID = $_POST['RoomID'];
$CustomerID = $_POST['CustomerID'];


$sql = "INSERT INTO bookings (CheckInDate, CheckOutDate, RoomID, CustomerID) VALUES ('$CheckInDate','$CheckOutDate','$RoomID','$CustomerID')";

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
	window.location.href = "viewbooking.php";
</script>