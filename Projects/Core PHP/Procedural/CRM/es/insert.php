
<?php
	error_reporting(0);
	session_start();
	require_once 'dbconfig.php';



	$pro_id = $_REQUEST["id"];

	$email = $_SESSION['UserName'];

	$con = connect_to_database ('$databaseName');

		$product_qry ="SELECT * FROM products WHERE pro_id = $pro_id;";
		$product_qry_result=mysqli_query($con,$product_qry);
		$product_qry_result_row = mysqli_fetch_array($product_qry_result,MYSQLI_BOTH);

			$pro_name = $product_qry_result_row['pro_name'];
			$price = $product_qry_result_row['new_price'];


?>


<div>
	
	<h1>Id : <?php  echo $pro_id; ?></h1>
	<h1>Product Name : <?php  echo $pro_name; ?></h1>
	<h1>Quantity : <?php  echo $_REQUEST['qnt']; ?></h1>
	<h1>Price : <?php  echo $price; ?></h1>
	<a href="payment_process.php?id=<?php echo $pro_id; ?>" class="w3ls-cart" >Proceed To Pay</a>
</div>