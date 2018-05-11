<?php 
	session_start();
	
	mysql_connect('localhost','root','');
	$sql=mysql_select_db('car_booking');
	$sql="Delete FROM booking_placement1 WHERE Booking_number='$_GET[id]'";
	$records=mysql_query($sql);
	
	if(mysql_query($sql))
	{
	    header("refresh=1;url=booking_profile.php");
		header("location: booking_profile.php");
	}

?>




<h1>Home</h1>

<div><a href="logout.php">Logout</a></div>
</body>
</html>