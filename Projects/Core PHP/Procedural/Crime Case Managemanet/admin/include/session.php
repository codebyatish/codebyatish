<?php    
session_start();

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include('include/db_config.php');

// Storing Session
$login_username_ses=$_SESSION['login_user'];


if (!isset($login_username_ses)) 
{
	header('Location: login.php');
	mysqli_close($con); // Closing Connection
}

?>