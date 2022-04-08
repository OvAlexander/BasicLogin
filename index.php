<?php
session_start();
	include("connection.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Check</title>
</head>
<body>
	<a href="login.php">login</a>
	<h1>Index page</h1>
	<br>
	Past Users<br>
	<?php
		//read from database
		$query = "SELECT id, user, date FROM users";
		$result = $con->query($query);
		if($result->num_rows>0){
		echo "<table>";
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>$row[id]</td>";
				echo "<td>$row[user]</td>";
				echo "<td>$row[date]</td>";
				echo "</tr>";
			}
		echo "</table";
		} else {
			echo "no results";
		}
	?>
</body>