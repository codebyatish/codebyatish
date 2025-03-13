<?php
		

	$name = "Password";
	$value = "TechKshetra@321";
	$expiration = time() + (60*60*24*7);

	setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Reading Cookies in PHP</title>
</head>
<body>

	<?php


		if (isset($_COOKIE["Password"])) {
			
			echo $SomeOne = $_COOKIE["Password"]; // It will Gives the $value i.e. TechKshetra@321
		}else{

			echo "Nothing";
		}




	?>


</body>
</html>