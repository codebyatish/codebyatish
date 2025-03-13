


<!DOCTYPE html>
<html>
<head>
	<title>Global Variable and Scope</title>
</head>
<body>


<?php
	
	$x = "Outside";

	function convert(){
		global $x;
		$x = "inside";

	}

	
	echo $x."<br>";

	convert();

	echo $x;

?>




</body>
</html>