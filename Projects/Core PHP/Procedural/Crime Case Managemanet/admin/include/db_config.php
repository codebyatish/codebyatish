<?php

	$host='Localhost';
	$user='iamshwoa_EMS';
	$pass='yX)3S0Q7lOSx';
	$database='iamshwoa_EMS';

	$con = mysqli_connect($host,$user,$pass,$database);
	if(!$con)
	{
	   die('Could not Connect Db : ' . mysqli_error($con));
	}

    mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET names=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET collation_connection=utf8_general_ci');



	date_default_timezone_set('Asia/Kolkata'); 	


?>