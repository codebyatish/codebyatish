<?php 
	

	spl_autoload_register(function ($class_name) {

		$class_name1 = strtolower($class_name);
		$the_path = "includes/{$class_name1}.php";

		if (is_file($the_path) && class_exists($class_name)) {
			include ($the_path);
		}else{
			die("This File not found $the_path.");
		}

	});


	function redirect($location)
	{
		 header("Location: {$location}");
	}



 ?>
