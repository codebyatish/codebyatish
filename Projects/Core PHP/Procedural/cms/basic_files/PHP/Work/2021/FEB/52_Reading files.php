<?php
		

$file = "example.txt";

	if ($handle = fopen($file, "r")) {
		
		 //fwrite($handle, "I like PHP");
		$content = fread($handle, filesize($file)); // Each byte equals a character

		echo $content;
		fclose($handle);

	}else{
		echo "The Application was not able to write on the file";
	}






?>