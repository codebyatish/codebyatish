<?php
	
		$conn = mysqli_connect('localhost','root','','loginapp');
		
	if (isset($_POST['submit'])) {

		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);


		$hash_format = "$2y$10$";
		$salt = "mynameisnature98765432";
		$h_nd_s = $hash_format.$salt;
		$password = crypt($password,$h_nd_s);



/*		if ($conn) {
			echo "We Are connected";
		}else{
			die("We Are Not connected");
		}


		if ($username && $password) {
			echo $username." - - - ".$password;
		}else{
			echo "Please Enter Username & Password";
		}*/


		$query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
		$result = mysqli_query($conn,$query);

		if (!$result) {
			die("Query FAILED".mysqli_error());
		}else{
			echo "Query EXECUTE";
		}

	}







?>


<!DOCTYPE html>
<html>
<head>
	<title>Password Encryption</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container" style="padding-top: 64px;">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form action="36_Password Encryption.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
				</div>
				<hr>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	
</div>

</body>
</html>