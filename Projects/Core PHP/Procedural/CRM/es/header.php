<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="assets/vendor/venus/css/venus.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">


<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head>
<body>
		<?php
		error_reporting(0);
		session_start();
		$a=$_SESSION['username'];
 
		if($a==true)
		{
			// echo $a;
		}
		else
		{
			// echo "not login ";
		}
		?>
<!-- <a href="logout.php">logout</a> -->
<!-- 	<img src="images/logo/logo.png" height="150px" style="float: left;"> -->
	<div class="header" id="home1" style="padding-top: 3px;">
		<div class="container"><center>
			<div class="row">
				<div  class="col-sm-4"></div>
				<div  class="col-sm-4">
				<img src="images/logo/logo.jpeg" height="120px" >
				</div>
				<div  class="col-sm-4" style="padding-top: 30px;">
					<div class="collapse navbar-collapse " >
	                    <ul>  
	                        <a  href="#"  data-toggle="dropdown"  aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" height="40" ></a>
	                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
	                            <div class="nav-user-info" style="background-color:  #2e86c1 ; color: white;">
	                                <h5 class="mb-0 text-white nav-user-name" style="font-weight: 700;"><?php echo "$a"; ?></h5>
	                                <span class="status"></span><span class="ml-2">Available</span>
	                            </div>
	                            <a class="dropdown-item" href="log.php"><i class="fas fa-user mr-2"></i>Login</a><br>
	                            <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
	                        </div>
	                    </ul>
	                </div>
				</div>
			</div></center>
			<div class="row">
			<div class="w3l_login">
				<a href="log.php"><span class="glyphicon glyphicon-user" ></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">Shlok Electronics<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="cart/cart.php" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Electronic Components</h6>
											<li><a href="products.php">Resistor</a></li>
											<li><a href="products.php">Capacitor <span>New</span></a></li>
											<li><a href="products.php">Diode</a></li> 
											<li><a href="products.php">Transistor</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Electronic Components</h6>
											<li><a href="products.php">Battery</a></li>
											<li><a href="products.php">IC</a></li>
											<li><a href="products.php">LED<span>New</span></a></li>
											<li><a href="products.php">Relay</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Electronic Components</h6>
											<li><a href="products.php">Ultrasonic Sensor</a></li>
											<li><a href="products.php">Crystal Oscillator</a></li>
											<li><a href="products.php">MOSFET</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/led/l2.png" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li> 
						
						<li><a href="article.php">Articles</a></li>  
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</body>
</html>