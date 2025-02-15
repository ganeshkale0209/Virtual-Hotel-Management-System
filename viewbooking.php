<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"ath");
	$BookingID = "";
	$CheckInDate = "";
	$CheckOutDate = "";
	$RoomID = "";
	$CustomerID = "";
	$query = "select * from bookings";
?>


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
	
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<center><h3><u>Booking List</u></h3></center>
			<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>BookingID</th>
							<th>CheckInDate</th>
							<th>CheckOutDate</th>
							<th>RoomID</th>
							<th>CustomerID</th>
						</tr>
						
						
						<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$BookingID = $row['BookingID'];
							$CheckInDate = $row['CheckInDate'];
							$CheckOutDate = $row['CheckOutDate'];
							$RoomID = $row['RoomID'];
							$CustomerID = $row['CustomerID'];
					?>
						<tr>
							<td><?php echo $BookingID;?></td>
							<td><?php echo $CheckInDate;?></td>
							<td><?php echo $CheckOutDate;?></td>
							<td><?php echo $RoomID;?></td>
							<td><?php echo $CustomerID;?></td>
							
						</tr>
					<?php
						}
					?>	
				
					
				</table></div>
				</div>
	
			
</body>
</html>
