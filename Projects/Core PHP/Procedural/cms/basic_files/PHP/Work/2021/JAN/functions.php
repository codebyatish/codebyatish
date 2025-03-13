<?php
$conn = mysqli_connect('localhost','root','','loginapp');

function SelectData()
{
	global $conn;
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);

	while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { 
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}


function UpdateTable()
{
	global $conn;
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "UPDATE users SET username = '$username' ,password = '$password' WHERE id = $id";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query Failed". mysqli_error($conn));	
	}
}


function DeleteRecord()
{
	global $conn;
	$id = $_POST['id'];

	$query = "DELETE FROM users WHERE id = $id";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query Failed". mysqli_error($conn));	
	}
}



?>