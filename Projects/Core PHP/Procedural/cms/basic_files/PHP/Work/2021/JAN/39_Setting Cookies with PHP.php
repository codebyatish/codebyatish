<?php
		

	$name = "AnyName";
	$value = 100;
	$expiration = time() + (60*60*24*7);

	setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Setting Cookies with PHP</title>
</head>
<body>


</body>
</html>