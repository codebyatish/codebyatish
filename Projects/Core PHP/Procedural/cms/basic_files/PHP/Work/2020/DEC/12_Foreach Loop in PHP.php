


<!DOCTYPE html>
<html>
<head>
	<title>Foreach Loop in PHP</title>
</head>
<body>


<?php

	$numbers = array(25,65,47,97,45,12);
	$count = 1;
	foreach($numbers as $number){
		echo $count.":- ".$number."<br>";
		$count++;
	}

?>




</body>
</html>