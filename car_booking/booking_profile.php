<?php 
	session_start();
	$id= $_SESSION["variable_name"];
	
	mysql_connect('localhost','root','');
	mysql_select_db('car_booking');
	$sql="SELECT * FROM booking_placement1 WHERE id='$id'";
	$records=mysql_query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile/Booking Record</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"> 
	<h1>Profile/Booking Record</h1>
</div>


<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Destination</th>
<th>Carnumber</th>
<th>Bookingtime</th>
<th>Returntime</th>
<th>Pickupfrom</th>
<th>Passengers</th>
<th>Remove</th>
<tr>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
	
	while($employee=mysql_fetch_assoc($records))
	{
	echo "<tr>";
	echo "<td>".$employee["Destination"]."</td>";
	echo "<td>".$employee["Carnumber"]."</td>";
	echo "<td>".$employee["Bookingtime"]."</td>";
	echo "<td>".$employee["Returntime"]."</td>";
	echo "<td>".$employee["Pickupfrom"]."</td>";
	echo "<td>".$employee["Passengers"]."</td>";
	echo "<td><a href=delete.php?id=".$employee["Booking_number"].">Delete</a></td>";
	
	echo "</tr>";
	}

?>


<h1>Booking</h1>

<div><a href="logout.php">Logout</a></div>
</body>
</html>
