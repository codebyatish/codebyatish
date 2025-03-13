<?php 
	
    require_once 'dbconfig.php';
    ob_start();
	session_start();
	$e=$_SESSION['username'];
	// $old=$_SESSION['ii'];

?>
<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css"> body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }
.abc
{
    
    border: 1px black;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
<?php 

include('header.php');
?>  
<br><br><br><br><br><br>
<form method="post" action="">

<br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<center>
    <div class="abc">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4"></div>
            <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                  
                </div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required name="cardno" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                      <!-- Name -->
          <div class="control-group">
            <label class="control-label"  for="username">CARD HOLDER'S NAME</label>
            <div class="controls">
                 <input type="text" class="form-control" id="cardNumber" name="name"
                                required  />
            </div>
          </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                              <label for="expityMonth">
                                    EXPIRY DATE</label>
                                    <div class="form-group">
                              
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" style="background-color: #ccc" id="expityMonth" placeholder="MM" required name="month" />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" style="background-color: #ccc"  placeholder="YY" required name="year" /></div>
                            </div>
                        </div>
                            <div class="col-xs-6 col-lg-6 pl-ziro">                            <div class="form-group">
                                <label for="cvCode">
                                    CVV CODE</label>
                                <input type="password" class="form-control"  placeholder="" required name="cvv" />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <?php
error_reporting(0);
    $con = connect_to_database ('cognifront');
	if($_GET['id']==$old)
	{
    $sql = "SELECT * FROM singal where user_id='$old'";
	}
	else if($_GET['id']==$new)
	{
    $sql = "SELECT * FROM singal where user_id='$new'";
	}
    $rs  = $con->query($sql);
    $total=0;
    if ($rs->num_rows > 0)
    {
      while($row = $rs->fetch_assoc())
        {
            $pr = $row['price'];
            $items=$row['quantity'];
            $total=$total+($pr*$items)+40;
        }
        
 ?>
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span><?php error_reporting(0);
 echo $total; }?></span> Invoice Total</a>
                </li>
            </ul>
            <br/>
            <input type="submit" class="btn btn-success btn-lg btn-block" value="Pay" name="btn">
			</form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php

	
	$cardno=$_POST['cardno'];
	$name=$_POST['name'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$cvv=$_POST['cvv'];
	$con = connect_to_database ('cognifront');
   
	if(isset($_POST['btn']))
	{
	if($_GET['id']==$old)
	{
	$q = "INSERT INTO card (user_id,price,cardno,name,month,year,cvv) VALUES ('$old','$total','$cardno','$name','$month','$year','$cvv')";
	if (mysqli_query($con, $q)) 
  	{
		header("location:thanks.php?id=$old");
    } 
	}
	else if($_GET['id']==$new)
	{
	$q = "INSERT INTO card (user_id,price,cardno,name,month,year,cvv) VALUES ('$new','$total','$cardno','$name','$month','$year','$cvv')";
	if (mysqli_query($con, $q)) 
  	{
		header("location:thanks.php?id=$new");
    } 
	}
  	
    else 
    { 
        echo "Error: " . $q . "<br>" . mysqli_error($con);
    }
		disconnect_from_database ($con);
	}
?>
</body>
</html>	