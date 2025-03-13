<?php

// $num = 12345; 

// $sum=0; $remainder=0; 

//   	for ($i =0; $i<=strlen($num);$i++) 
//  	{ 
// 		  $remainder = $num%10; 
// 		  $sum = $sum + $remainder; 
// 		  $num = $num/10; 
//   	} 
//  echo $sum; 




//---------------------------------------------------------------------------------------------------------

$str = "acxz";
$strlen = strlen($str);

$alphabate_array = array_combine(range('a', 'z'), range(1, 26));


	for ($i=0; $i < $strlen; $i++) { 

		foreach ($alphabate_array as $key => $value) {

			if (in_array('a', $alphabate_array)) {
				echo $key;
			}
		}


		
	}




?>