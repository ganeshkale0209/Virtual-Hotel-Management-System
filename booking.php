
<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	body{
		background-image:url('vasu.jpg');
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">Hotel Management System (HMS)</a>
			</div>
			 <ul class="nav navbar-nav navbar-right">
			 <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Bookings </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="booking.php">New Booking</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="viewbooking.php">View Bookings</a>
	        	</div>
		      </li>
			  <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Customers </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="newcustomers.php">Add New Customer</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="customers.php">View Customers</a>
	        	</div>
		      </li>
			 			  
			  <li class="nav-item">
		        <a class="nav-link" href="rooms.php">Rooms</a>
		      </li>
		      
		    </ul>
		    
		</div>
	</nav><br>
	<div class="row">
		
		
		<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Table Example</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

	<div class="container">
<div class="column">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ath";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$RoomID = $_POST['RoomID'];
    // Fetch student details from the database
    $sql = "SELECT * FROM rooms WHERE RoomID = '$RoomID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Display auto-filled student details
        $row = $result->fetch_assoc();
        echo "<h3>Room Details:</h3>";
		echo "RoomID: " . $row["RoomID"] . "<br>";
        echo "RoomNumber: " . $row["RoomNumber"] . "<br>";
		echo "RoomType: " . $row["RoomType"] . "<br>";
		echo "Price: " . $row["Price"] . "<br>";

        // Add other fields as needed
    } else {
        echo "That's Id Room is Not Currently Available";
    }
}
$conn->close();
?>
</div>
<div class="column">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ath";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$CustomerID = $_POST['CustomerID'];
    // Fetch student details from the database
    $sql = "SELECT * FROM customers WHERE CustomerID = '$CustomerID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Display auto-filled student details
        $row = $result->fetch_assoc();
        echo "<h3>Author Name:</h3>";
        echo "CustomerID: " . $row["CustomerID"] . "<br>";
	    echo "FirstName: " . $row["FirstName"] . "<br>";
	    echo "LastName: " . $row["LastName"] . "<br>";
	    echo "Email: " . $row["Email"] . "<br>";
	    echo "Phone: " . $row["Phone"] . "<br>";


        // Add other fields as needed
    } else {
        echo "That's Id Customer is Not Currently Available";
    }
}
$conn->close();
?>
</div>

</div>
</div>

	<div class="col-md-2"></div>
	<div class="popup">
		<center><h3> </u></h3></center><br>
	<div class="popup">

    <form action="Bookingrecords.php" method="post">
	<div class="form-group">
		<label for="CheckInDate">CheckInDate:</label>
		<input type="date" id="CheckInDate" name="CheckInDate" required>
	</div>
	<div class="form-group">
		<label for="CheckOutDate">CheckOutDate:</label>
		<input type="date" id="CheckOutDate"  name="CheckOutDate" >
	</div>
	
	<div class="form-group">
		<label for="RoomID">RoomID:</label>
		<input type="text" id="RoomID" value="<?php echo $RoomID; ?>" name="RoomID" required>
	</div>
	<div class="form-group">
		<label for="CustomerID">CustomerID:</label>
		<input type="text" id="CustomerID" value="<?php echo $CustomerID; ?>" name="CustomerID" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Insert New Booking</button>
	</div>
    </form>
	</div>
	</div>
</body>
</html>
