 
<?php 
	session_start();
	

	
	$db = mysqli_connect("localhost", "root", "", "car_booking");

	if (isset($_POST['login_btn'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		$password = md5($password);
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
         
		if (mysqli_num_rows($result) == 1) {
		     $id="SELECT id FROM users WHERE username='$username' AND password='$password'";
			
             $userid = mysqli_query($db, $id);
             $userid = mysqli_fetch_row($userid);
             $userid = $userid[0];
		   $_SESSION["variable_name"] = $userid;
		   
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: booking_place.php"); 
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"> 
	<h1>Login Page</h1>
</div>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>


<form method="post" action="login.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>