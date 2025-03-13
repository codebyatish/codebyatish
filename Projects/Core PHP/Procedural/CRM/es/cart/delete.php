<?php
	require_once 'dbconfig.php';
?>
	<?php	
		$con = connect_to_database ('$databaseName');
		$sql = "DELETE FROM orders WHERE id=".$_GET['id']."";
		$rs = $con->query($sql);
 		if(mysqli_query($con, $sql))
		{
    		//echo "Records del successfully.";
    		header('location:cart.php');
		}
    	else
    	{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    	 	mysqli_free_result ($rs);
        	disconnect_from_database ($con);
		}
	?>
