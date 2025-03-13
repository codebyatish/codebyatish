<?php 
	include "dbconfig.php";
	error_reporting(0);
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store</title>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

body {
    background: #eee;
    font-family: 'Ubuntu', sans-serif
}

.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.our-services {
    margin-top: 75px;
    padding-bottom: 30px;
    padding: 0 60px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}

.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
}

.our-services:hover h4,
.our-services:hover p {
    color: #fff
}

.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
}

.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
}

.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
}

.backups:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
}

.ssl:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
}

.database:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
}
    </style>


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
                    <ul >  
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
						<li><a href="index.php">Home</a></li>
						<li><a class="act" href="about.php">About Us</a></li>
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
	<!-- banner -->
	
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<div class=" banner10" style="background-image: url('images/products/9.png'); background-repeat: no-repeat; height: 500px; background-size: cover;">
		<div class="container">
			<h2 style="font-weight: 900;">About Us</h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- about -->

	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-12 w3ls_about_grid_left">
					<p style="text-align: justify;">Shlok Electronics is a globally renowned organization that is offering premium quality electrical products. The company is one of the top notch electrical panel manufacturers, suppliers & exporters. We offer wide range of panels. Our complete range includes LT Panels, Power Control Panel, HT panels, VCB panels, electrical panels and PLC panels. These are perfect for safe & secure power distribution in the domestic as well as in the commercial application.</p><br>
				</div>
				<div class="col-md-6 w3ls_about_grid_left" >
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p style="text-align: justify;">Being a foremost Electrical Panel Manufacturers, we have used premium quality raw materials while manufacturing our products. We have also employed advanced engineering technology during production to ensure international quality standards. Moreover, our quality maintenance cell has also tested our products to ensure durability, reliability & long operating life.</p><br>
					</div>
					<div class="clearfix"> </div>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p style="text-align: justify;">Our industry friendly products are available at competitive rates. Our in house manufacturing facility is fully equipped with latest technology in order to manufacture products par in excellence to international standards. In addition to this, we manufacture our products strictly in accordance to industry guidelines to ensure durability, reliability & long operating life.</p><br>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="images/products/7.png" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>




	

	<!-- //about --> 
	<!-- team -->
	<!-- team-bottom -->
	<div class="team-bottom">
		<div class="container">
			<h3>Are You Ready For Deals? Flat <span>30% Offer </span>on Electronic Components</h3>
			<p style="text-align: justify;">An Electrical Panel is a major component of the electricity supply system used for supplying current from panel to different sub-panels and then to different circuits. One should get the device installed for preventing any damage, short circuit or fire accidents. Make the right choice as per the voltage need of your industry. Browse our range and pick an ideal device. For more details. Shop Now.</p><br>
			<a href="products.php">Shop Now</a>
		</div>
	</div>
	<!-- //team-bottom -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p style="text-align: justify;">Excepteur sint occaecat cupidatat non proident, sunt.</p><br>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer"  style="padding-top: 10px;">
		<div class="containero" style="height: 270px;">
			<div class="row">
			<div class="w3_footer_grids" style="padding-top: 0px;">
				<div class="col-md-4 w3_footer_grid" style="padding-left: 80px;">
					<h3>Contact</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Plot No:07, Nivrutthi Nagar,Ozar Mig, <span>Niphad,Nashik 422207</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">surajkamod2647@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 77092 43557 <span>+91 75071 46911 </span></li>
					</ul>
					<h4><b>Follow Us</b></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 w3_footer_grid" style="padding-left: 80px;">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="#">xyz</a></li>
						<li><a href="products.php">Home</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_footer_grid" style="padding-left: 80px;">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.php">Resistors</a></li>
						<li><a href="products.html">Capacitors</a></li>
						<li><a href="products.php">Transistors</a></li>
						<li><a href="products.html">LED</a></li>
						<li><a href="products.html">IC</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="navigation"  style="height: 50px; padding: 10px;">
			<p style="color: white;">&copy; 2020 Shlok Electronics. All rights reserved | Design by suraj @Nakshatra Technology</p><br>
			</div>
		</div>
	</div>
	
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>