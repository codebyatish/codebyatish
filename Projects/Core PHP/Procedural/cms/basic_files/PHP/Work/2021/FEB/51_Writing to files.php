<?php
		

$file = "example.txt";

	if ($handle = fopen($file, "w")) {
		
		fwrite($handle, "I like PHP");


		fclose($handle);

	}else{
		echo "The Application was not able to write on the file";
	}






?>