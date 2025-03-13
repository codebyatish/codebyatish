<?php
	
	if (isset($_POST['submit'])) {
		# 
		echo "Yes It is Worked...!!";
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Checking for Form Submission</title>
</head>
<body>

<form action="20_Checking for Form Submission.php" method="post" >
	<input type="text" name="fname" placeholder="Enter Name">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Submit">
</form>


</body>
</html>