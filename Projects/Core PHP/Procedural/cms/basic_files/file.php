<?php


	echo __FILE__."<br>";  // gives the whole path - including the file name
	echo __LINE__."<br>"; 
	echo __DIR__."<br>";  // dirctory name

	if (file_exists(__DIR__)) {
		echo "YES DIR";
		echo "<br>";
	}

	if (file_exists(__FILE__)) {
		echo "YES FILE";
		echo "<br>";
	}

	if (is_file(__DIR__)) {
		echo "Yes";
		echo "<br>";
	}else{
		echo "No it is directiry";
		echo "<br>";
	}


	echo (is_dir(__DIR__)) ? "Yes it is directory" : "No it is directiry" ;

?>