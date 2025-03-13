<?php
session_start();
 include('dbconfig.php');
 include('header.php');


$con = connect_to_database ('$databaseName');


			 $txnid=mysqli_real_escape_string($con,$_POST["txnid"]);
			$status=mysqli_real_escape_string($con,$_POST["status"]);
			$firstname=mysqli_real_escape_string($con,$_POST["firstname"]);;
			$amount=mysqli_real_escape_string($con,$_POST["amount"]);
			$txnid=mysqli_real_escape_string($con,$_POST["txnid"]);
			$posted_hash=mysqli_real_escape_string($con,$_POST["hash"]);
			$key=mysqli_real_escape_string($con,$_POST["key"]);
			$productinfo=mysqli_real_escape_string($con,$_POST["productinfo"]);
			$email=mysqli_real_escape_string($con,$_POST["email"]);
			$phone=mysqli_real_escape_string($con,$_POST["phone"]);
			$payment_mode=mysqli_real_escape_string($con,$_POST["mode"]);
			$udf1=mysqli_real_escape_string($con,$_POST["udf1"]);

			$udf2=mysqli_real_escape_string($con,$_POST["udf2"]);
			$udf3=mysqli_real_escape_string($con,$_POST["udf3"]);
?>




	<?php

		if (!$txnid) { 
			?>


                     <div  style=" font-size: 50px;background-image: linear-gradient(0deg,#ffffff,#3c43a4);border: 1px solid black;border-bottom: none;" class="panel-heading">
                                <h3 style="padding-left:200px;" class="panel-title">
                                   </h3>

                                   <span  class="pay_header"  style="    display: block;font: bold 22px/41px Georgia, Serif;background: #fff;height: 86px;    margin: 24px auto;padding: 0px;width: 206px;-moz-border-radius: 100px;-moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;-webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;box-shadow: 0 5px 20px #f3f3f3 inset, 0 3px 0 #fff2f2 inset; ">
                                  <?php echo  "Payment <br> ". strtoupper($status); ?></span>

                           </div>

                           <div>
                           	<p class="text-center">Your Payment is Faild.</p>
                           	<a href="http://cleanfoot.in/es/products.php">Exit</a>
                           </div>

	<?php } ?>
