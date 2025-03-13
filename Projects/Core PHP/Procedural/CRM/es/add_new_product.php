<?php
	include "left.php";
    include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.form-style-2{
	max-width: 500px;
	padding: 20px 12px 10px 20px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2 label{
	display: block;
	margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
	width: 100px;
	font-weight: bold;
	float: left;
	padding-top: 8px;
	padding-right: 5px;
}
.form-style-2 span.required{
	color:red;
}
.form-style-2 .tel-number-field{
	width: 40px;
	text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
	width: 48%;	
}
.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
	border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
	height:100px;
	width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
	border: none;
	padding: 8px 15px 8px 15px;
	background: #FF8500;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
	background: #EA7B00;
	color: #fff;
}
</style>
</head>
<body bgcolor="black">
<center><br><br>
<h1 style="color: white;">ADD NEW PRODUCT</h1>
	<br><br><br><br>
	<div class="form-style-2" style="background-color: white;">
		<form action="" method="post">
			<h3>Add New Product</h3><br>
			<label for="field1"><span>Product Category <span class="required">*</span></span>
				<select name="pro_category" required style="width: 225px;">
						<option>Select</option>
					    <option>Resistor</option>
					    <option>Capacitor</option>
					    <option>Diode</option>
					    <option>Transistor</option>
					    <option>Battery</option>
					    <option>IC</option>
					    <option>LED</option>
					    <option>Sensor</option>
					    <option>Oscillator</option>
					    <option>MOSFET</option>
					    <option>Relay</option>
					</select> 
			</label><br>
			<label for="field1"><span>Product Name <span class="required">*</span></span>
				<input type="text" class="input-field" name="pro_name" value="" />
			</label>
			<label for="field1"><span>Product ID <span class="required">*</span></span>
				<input type="text" class="input-field" name="pro_uid" value="" />
			</label>
			<label for="field1"><span>Quantity <span class="required">*</span></span><input type="text" class="input-field" name="pro_quantity" value="" /></label>
			<label for="field2"><span>Old Price <span class="required">*</span></span><input type="text" class="input-field" name="old_price" value="" /></label>
			<label for="field1"><span>New Price <span class="required">*</span></span><input type="text" class="input-field" name="new_price" value="" /></label>
			<label><span> </span><input type="submit" value="insert" name="btn" /></label>
		</form>
	</div>
</body>
</html>


<?php

	error_reporting(0);        
	if(isset($_POST["btn"]))
	{
		$con = connect_to_database ('$databaseName');

		$q ="insert into products(pro_uid,pro_category,pro_name,old_price,new_price,pro_quantity)values('".$_POST["pro_uid"]."','".$_POST["pro_category"]."','".$_POST["pro_name"]."','".$_POST["old_price"]."','".$_POST["new_price"]."','".$_POST["pro_quantity"]."')";
	  
		if (mysqli_query($con, $q))
		{   
			echo "<script> alert('Data Added Succesfully.'); </script>";
		}
		else
		{
			echo "Error: " . $q . "<br>" . mysqli_error($con);
		}
		mysqli_free_result ($q);
		disconnect_from_database ($con);
	}
?>