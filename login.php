
<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$username = $_POST['username'];
		if(!empty($username)){
			$query = "insert into users (user) values ('$username')";
			mysqli_query($con, $query);
			header("Location: index.php");
			die;
		}
		else {
			echo "Enter username";
		}
	
	}
?>




<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel ="stylesheet" href="style.css">
	</head>
	<body>
	<div id="box">
		<form method="POST">
			<div class="form_input">Login</div><br><br>
			<input id="text" type="text" name="username" placeholder="Enter name to be logged here"/><br><br>
			<input id="button" type="submit" name="submit" value="LOGIN"/><br><br>
		</form>
	</div>	
	</body>
</html>