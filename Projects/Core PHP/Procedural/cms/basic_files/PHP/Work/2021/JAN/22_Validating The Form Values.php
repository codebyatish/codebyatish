<?php
	
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$name = ["atishkumar","nayan","shivam","devesh","chetan","vishal","hk"];
		// if (strlen($username) < 5 ) {
		// 	echo "<b>Username should Be Longer Than 5.</b>";
		// }

		if (!in_array($username, $name)) {
			echo "<b>Sorry You are not in database...</b>";
		}else{
			echo "<b>Sorry You are in database...</b>";
		}

	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Validating The Form Values</title>
</head>
<body>

<form action="22_Validating The Form Values.php" method="post" >
	<input type="text" name="username" placeholder="Enter Name">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Submit">
</form>


</body>
</html>