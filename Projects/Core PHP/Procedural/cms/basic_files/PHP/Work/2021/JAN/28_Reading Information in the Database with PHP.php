<?php
	
		$conn = mysqli_connect('localhost','root','','loginapp');
		

?>


<!DOCTYPE html>
<html>
<head>
	<title>Reading Information in the Database with PHP</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container" style="padding-top: 64px;">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

			<?php

				$query = "SELECT * FROM users";
				$result = mysqli_query($conn,$query);

					while ($row = mysqli_fetch_row($result)) { ?>
						
						<pre>
							<?php print_r($row); ?>
						</pre>

						
					<?php } ?>



			?>

		</div>
		<div class="col-sm-2"></div>
	</div>
	
</div>

</body>
</html>