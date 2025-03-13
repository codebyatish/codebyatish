
<?php
	$dateToTest = "2020-10-01";

		$arr =explode('-', $dateToTest);
		$y = $arr[0];
		$m = $arr[1];
		$d = $arr[1];


 $lastday = date('t',strtotime($dateToTest));

echo $LastMD = $lastday.'-'.$m.'-'.$y;


?>

