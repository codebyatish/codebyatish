<?php
		

	
	if (unlink("for_demo_to_delete_file.php")) {
		echo "File Deleted";
	}else{
		echo "File Not Found";
	}



?>