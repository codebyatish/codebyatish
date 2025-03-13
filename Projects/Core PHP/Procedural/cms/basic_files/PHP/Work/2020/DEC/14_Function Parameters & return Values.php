


<!DOCTYPE html>
<html>
<head>
	<title>Function Parameters & return values</title>
</head>
<body>


<?php

	/*function FunctionName($message)
	{
		echo $message;

	}


	FunctionName("<h1>Hello Students , Hello World...!!</h1>");*/

	function Calculate($val1,$val2)
	{
		return $val1 + $val2;
	}

	$r1 = Calculate(43,87);
	$r2 = Calculate(100,$r1);
	echo $r2;

?>




</body>
</html>