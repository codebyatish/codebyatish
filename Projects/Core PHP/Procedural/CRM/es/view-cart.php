<?php
error_reporting(0);
	require_once 'dbconfig.php';
	session_start();
	$e=$_SESSION['username'];
	if($e==true)
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	<style type="text/css">
	div.a
	{
		width: 75%;
		height: 160px;
		border: solid 1px #ccc;
	}
	.b
	{	
		margin-top: -100px;
		width: 25%;
		float: right;
		
		border: solid 1px;
		top: 0;
		background-color: #ccc;
		padding: 10px;
		font-size: 20px;
		position: fixed;
		top: 50%;
		-webkit-transform: translateY(-100%);
		-ms-transform: translateY(-100%);
	}
	.w
	{
		//width:50px;
		height:80px;
		color:black;
		font-size:22px;
		margin-left:10px;
		text-align:center;
		font-family:Franklin Gothic Book;
		text-align: left;
	}
	.cc
	{
		float: left;
	}

	.dd
	{
		float: right;
	}
	.header{

	min-height:32px;
	top:0;
	margin-top:10px;
	position: fixed;
	z-index: 9999;
	width: 100%;
	clear: both;
	border-bottom:1px solid rgba(128, 128, 128, 0.17);
	}

	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background: #FFF" >
	<div id="myElement">
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header">
						<input type="button" style="color: green; width:90%; " value="PLACE YOUR ORDER" onclick="window.location.href='payment/payment_form.php'"> 		 
						<br><!-- <h2 align="left">
						Shopping cart</h2> -->
					</div>
				</div>
			</div>
		</div>	
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
		
<?php
		$conn = connect_to_database ('$databaseName');
		$sql = "SELECT * FROM orders where cust_id='$e'";
		$rss = $conn->query($sql);

		$query = $conn->query("SELECT * FROM orders where cust_id='$e'") or die(mysql_error());
		
        $rss->num_rows > 0;
      
        $rows = $rss->fetch_assoc();
          
		$total = 0;
		$itemsa=0;
		while($fetch = $query->fetch_array())
		{
		$price=$fetch['pro_price'];
		$items=$fetch['pro_quantity'];
		$itemsa=$items+$itemsa;
		$total=$total+($price*$items);
		}
	 
		?>
		<h2 style="color: red">Order Total:
		<?php 
		$t=0;
		$t=$t+$total+40;
		echo $t;
		?>
</div>
</div>
</div>
<?php
		
		$con = connect_to_database ('$databaseName');
	    $sql = "SELECT * FROM orders where cust_id='$e'";
	    $rs  = mysqli_query($con,$sql);
	    if(mysqli_num_rows($rs) > 0)
	    {
	    	while($row = $rs->fetch_assoc())
	   		{
				$pr = $row['pro_price'];
		    	$pn = $row['pro_name'];

	?>

				<form method="post">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="container">
						<div class="row">
							<div class="col-sm-2">
					
								<!-- <img class="im" src = "photo/<?php echo $row['photo']?>" height = "100" width = "100"/>
						 --></div>
							<div class="col-sm-10">
								<p class="w">
									<?php echo $row['pro_name']?>
									<br>
									<?php echo "Price:" .$row['pro_price']?>
									<br>
									<?php echo "Quantity:" .$row['pro_quantity']?>
									<input type="button"  style="color: red; " value="Delete" onclick="window.location.href='delete.php?id=<?php echo $row['id'];?>'">
									</h3>
								</p>

							</div>
						</div>
					</div>
				</form>

	<?php
			}	
			}
			}

	else
			{
				header("location:log.php");
			}
			?>
	<!-- <script src="https://hammerjs.github.io/dist/hammer.js"></script>
		<script>
		var myElement = document.getElementById('myElement');

		// create a simple instance
		// by default, it only adds horizontal recognizers
		var mc = new Hammer(myElement);

		// let the pan gesture support all directions.
		// this will block the vertical scrolling on a touch-device while on the element
		mc.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });

		// listen to events...
		mc.on("swiperight", function(ev) {
			myElement = ev.type +"";
			window.location.replace("shop.php");
		});
		mc.on("swipeleft", function(ev) {
			myElement = ev.type +" ";
			window.location.replace("log.php");
		});
		
		</script>
	 -->	</div>
</body>
</html>