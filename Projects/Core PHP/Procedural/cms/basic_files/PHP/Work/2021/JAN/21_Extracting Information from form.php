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
	<title>Extracting Information from form</title>
</head>
<body>

<form action="21_Extracting Information from form.php" method="post" >
	<input type="text" name="username" placeholder="Enter Name">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Submit">
</form>


</body>
</html>