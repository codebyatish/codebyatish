<?php
		
		if (isset($_POST["submit"])) {
			echo $_POST["fname"];
		}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Using the Post Super Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container" style="padding-top: 64px;">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form action="38_Using the Post Super Global.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Submit">
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	
</div>

</body>
</html>