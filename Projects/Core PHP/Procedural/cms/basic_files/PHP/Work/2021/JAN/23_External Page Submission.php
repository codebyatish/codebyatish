<?php
	
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		echo "Hello ".$username."<br>";
		echo $password;

	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>External Page Submission</title>
</head>
<body>

<form action="23_External Page Submission Process.php" method="post" >
	<input type="text" name="username" placeholder="Enter Name">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Submit">
</form>


</body>
</html>