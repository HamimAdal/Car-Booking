<?php session_start();
	$id= $_SESSION["variable_name"];

	
	$db = mysqli_connect("localhost", "root", "", "car_booking");
	

	if (isset($_POST['booking_btn'])) {
	  
	  	$destination = mysql_real_escape_string($_POST['Destination']);
		$carnumber = mysql_real_escape_string($_POST['Carnumber']);
		$bookingtime = mysql_real_escape_string($_POST['Bookingtime']);
		$returntime = mysql_real_escape_string($_POST['Returntime']);
		$pickupform = mysql_real_escape_string($_POST['Pickupfrom']);
		$passenger = mysql_real_escape_string($_POST['Passengers']);
	
	   
		
		if ($carnumber==' ')
		 {
		    
			 $sql = "INSERT INTO booking_placement1(id,Destination, Carnumber, Bookingtime, Returntime, Pickupfrom, Passengers )  VALUES('$id', '$destination', '$carnumber', '$bookingtime', '$returntime', '$pickupform', '$passenger')";
			mysqli_query($db, $sql);
			
			header("location: booking_profile.php"); 
			
			 
            
		   
		}
		
         
		else if ($carnumber=='Car-1')
		 {
		      $booking_time_car1="SELECT Bookingtime FROM booking_placement1 WHERE Carnumber='Car-1'";
			  $booking_time_car1 = mysqli_query($db, $booking_time_car1);
              $returning_time_car1="SELECT Returntime FROM booking_placement1 WHERE Carnumber='Car-1'";
			  $returning_time_car1 = mysqli_query($db, $returning_time_car1);
          
		  $x=1;
			 while($booking_time_car11= mysqli_fetch_array($booking_time_car1))
	      {
		        $returning_time_car11= mysqli_fetch_array($returning_time_car1);
	                        
	                    
			 if ($bookingtime >=  $booking_time_car11[0] && $returntime <= $returning_time_car11[0] )
			 {
			            $x=0;
			 }
			 
		
			 
           }   
		   
		          if($x==1)
				  {
				          
				          $sql = "INSERT INTO booking_placement1(id,Destination, Carnumber, Bookingtime, Returntime, Pickupfrom, Passengers )  VALUES('$id', '$destination', '$carnumber', '$bookingtime', '$returntime', '$pickupform', '$passenger')";
			              mysqli_query($db, $sql);
			
			              header("location: booking_profile.php"); 
				  }
				  else
				  {
				          $_SESSION['message'] = "It is reserved!!!";
				  } 
		   
			
		
		}
    
		
		else if ($carnumber=='Car-2')
		 {
		     $booking_time_car1="SELECT Bookingtime FROM booking_placement1 WHERE Carnumber='Car-2'";
			  $booking_time_car1 = mysqli_query($db, $booking_time_car1);
           
			 $returning_time_car1="SELECT Returntime FROM booking_placement1 WHERE Carnumber='Car-2'";
			  $returning_time_car1 = mysqli_query($db, $returning_time_car1);
           
		  $y=1;
			 while($booking_time_car11= mysqli_fetch_array($booking_time_car1))
	      {
		        $returning_time_car11= mysqli_fetch_array($returning_time_car1);
	                        
	                    
			 if ($bookingtime >=  $booking_time_car11[0] && $returntime <= $returning_time_car11[0] )
			 {
			            $y=0;
			 }
			 
		
			 
           }   
		   
		          if($y==1)
				  {
				          
				          $sql = "INSERT INTO booking_placement1(id,Destination, Carnumber, Bookingtime, Returntime, Pickupfrom, Passengers )  VALUES('$id', '$destination', '$carnumber', '$bookingtime', '$returntime', '$pickupform', '$passenger')";
			              mysqli_query($db, $sql);
			
			              header("location: booking_profile.php"); 
				  }
				  else
				  {
				          $_SESSION['message'] = "It is reserved!!!";
				  } 
		   
		
		}
		else if ($carnumber=='Car-3')
		 {
		     $booking_time_car1="SELECT Bookingtime FROM booking_placement1 WHERE Carnumber='Car-3'";
			  $booking_time_car1 = mysqli_query($db, $booking_time_car1);
           
			 $returning_time_car1="SELECT Returntime FROM booking_placement1 WHERE Carnumber='Car-3'";
			  $returning_time_car1 = mysqli_query($db, $returning_time_car1);
           
		  $z=1;
			 while($booking_time_car11= mysqli_fetch_array($booking_time_car1))
	      {
		        $returning_time_car11= mysqli_fetch_array($returning_time_car1);
	                        
	                    
			 if ($bookingtime >=  $booking_time_car11[0] && $returntime <= $returning_time_car11[0] )
			 {
			            $z=0;
			 }
			 
		
			 
           }   
		   
		          if($z==1)
				  {
				          
				          $sql = "INSERT INTO booking_placement1(id,Destination, Carnumber, Bookingtime, Returntime, Pickupfrom, Passengers )  VALUES('$id', '$destination', '$carnumber', '$bookingtime', '$returntime', '$pickupform', '$passenger')";
			              mysqli_query($db, $sql);
			
			              header("location: booking_profile.php"); 
				  }
				  else
				  {
				          $_SESSION['message'] = "It is reserved!!!";
				  } 
		   
			
		
		}	
	
			 
		
	}
	
	if (isset($_POST['profile_btn'])) {

		
			header("location: booking_profile.php");
			
		
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Car Booking Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"> 
	<h1>Car Booking Page</h1>
</div>

<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>

<form method="post" action="booking_place.php">
	<table>
		<tr>
		
			<td>Destination:</td>
			
			<td>
			<select name="Destination">
             <option value="Location-1">Location-1</option>
             <option value="Location-2">Location-2</option>
             <option value="Location-3">Location-3</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Carnumber:</td>
			<td>
			<select name="Carnumber">
             <option value="Car-1">Car-1</option>
             <option value="Car-2">Car-2</option>
             <option value="Car-3">Car-3</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Bookingtime:</td>
			<td><input type="time" name="Bookingtime" class="textInput"></td>
		</tr>
		<tr>
			<td>Returntime:</td>
			<td><input type="time" name="Returntime" class="textInput"></td>
		</tr>
		<tr>
			<td>Pickupfrom:</td>
			<td><select name="Pickupfrom">
             <option value="Location-1">Location-1</option>
             <option value="Location-2">Location-2</option>
             <option value="Location-3">Location-3</option>
            </select></td>
		</tr>
		<tr>
			<td>Passengers:</td>
			<td><input type="number" name="Passengers" class="textInput"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="booking_btn" value="Booking"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="profile_btn" value="profile"></td>
		</tr>
	</table>
</form>
</body>
</html>