<?php
		
session_start();

$_SESSION["name"] = "Atishkumar Jaiwal";

?>


<!DOCTYPE html>
<html>
<head>
	<title>How use Sessions in PHP</title>
</head>
<body>

	<?php

	echo $_SESSION["name"] ;

	?>


</body>
</html>