<?php 
	include 'header.php';
	include "dbconfig.php";
	error_reporting(0);
	session_start();
	
?>
 <body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<div class="banner">
		<div class="container">
			<h3 style="font-weight: 900;">Electronic Store, <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div style="font-size: 15px; background-color: #DCDCDC; text-align: justify;  font-family: verdana; padding: 30px;"> Welcome to <span style="color: black; font-size: 20px; font-family: verdana">Shlok Electronics</span> , we are leading distributor of electronic components and products.We firmly believe that our customers are the reason for our existence, and greatly respect the trust that they place in us. We grow through creativity and innovation. We integrate honesty, integrity and business ethics into all aspects of our business functioning. Our mission is to build long term relationships with our customers. We strive towards delighting our customers at every opportunity through exceptional customer service. Our future looks bright as we continue developing a strong base of key customers and increasing the assets and investments of the company.



			</div><br><br>
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<!-- pop-up-box -->     
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/BXziSvGT8_U"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Resistor</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Capacitor</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Transistor</a></li>
						<li role="presentation"><a href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">LED</a></li>
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Ic</a></li>
					</ul>

<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='R1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/r1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r1.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_reg1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
	    									</div>
									</div> 
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>  
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='R2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/r2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_reg2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='R3'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/r3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/r3.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_reg3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='C1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/c1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c1.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_cap1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='C2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_cap2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='C3'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/c2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_cap3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='T1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/t1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t1.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_tra1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='T2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/t2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_tra2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='T3'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/t3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/t3.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_tra3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='L1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
						<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/l1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l1.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_LED1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='L2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/l2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_LED2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='L3'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/l3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/l3.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_LED3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='I1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/i1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i1.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_ic1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='I2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/i2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i2.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i2.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_ic2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='I3'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/all_products/i3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i3.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/all_products/i3.png" alt=" " style="height: 220px" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal_ic3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- //banner-bottom --> 
	<!-- modal-video -->
	<div class="modal video-modal fade" id="myModal_reg1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/r1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Resistor</h4>
							<p>A resistor is a passive two-terminal electrical component that implements electrical resistance as a circuit element. In electronic circuits, resistors are used to reduce current flow, adjust signal levels, to divide voltages, bias active elements, and terminate transmission lines, among other uses.
						    </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Resistor-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_reg2" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/r2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Resistor</h4>
							<p>A resistor is a passive two-terminal electrical component that implements electrical resistance as a circuit element. In electronic circuits, resistors are used to reduce current flow, adjust signal levels, to divide voltages, bias active elements, and terminate transmission lines, among other uses.
						    </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Resistor-2"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_reg3" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/r3.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Resistor</h4>
							<p>A resistor is a passive two-terminal electrical component that implements electrical resistance as a circuit element. In electronic circuits, resistors are used to reduce current flow, adjust signal levels, to divide voltages, bias active elements, and terminate transmission lines, among other uses.
						    </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Resistor-3"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_cap1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/c1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Capasitor</h4>
							<p>The capacitor is a component which has the ability or “capacity” to store energy in the form of an electrical charge producing a potential difference (Static Voltage) across its plates, much like a small rechargeable battery. ... The insulating layer between a capacitors plates is commonly called the Dielectric.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Capacitor-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_cap2" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/c2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Capasitor</h4>
							<p>The capacitor is a component which has the ability or “capacity” to store energy in the form of an electrical charge producing a potential difference (Static Voltage) across its plates, much like a small rechargeable battery. ... The insulating layer between a capacitors plates is commonly called the Dielectric.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Capacitor-2"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_cap3" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/c2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Capasitor</h4>
							<p>The capacitor is a component which has the ability or “capacity” to store energy in the form of an electrical charge producing a potential difference (Static Voltage) across its plates, much like a small rechargeable battery. ... The insulating layer between a capacitors plates is commonly called the Dielectric.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Capacitor-3"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_tra1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/t1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Transistor</h4>
							<p>A transistor is a semiconductor device used to amplify or switch electronic signals and electrical power. ... A voltage or current applied to one pair of the transistor's terminals controls the current through another pair of terminals.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Transistor-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_tra2" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/t2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Transistor</h4>
							<p>A transistor is a semiconductor device used to amplify or switch electronic signals and electrical power. ... A voltage or current applied to one pair of the transistor's terminals controls the current through another pair of terminals.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Transistor-2"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_tra3" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/t3.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Transistor</h4>
							<p>A transistor is a semiconductor device used to amplify or switch electronic signals and electrical power. ... A voltage or current applied to one pair of the transistor's terminals controls the current through another pair of terminals.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Transistor-3"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_ic1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/i1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : IC</h4>
							<p>An integrated circuit, or IC, is small chip that can function as an amplifier, oscillator, timer, microprocessor, or even computer memory. An IC is a small wafer, usually made of silicon, that can hold anywhere from hundreds to millions of transistors, resistors, and capacitors.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="IC-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_ic2" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/i2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : IC</h4>
							<p>An integrated circuit, or IC, is small chip that can function as an amplifier, oscillator, timer, microprocessor, or even computer memory. An IC is a small wafer, usually made of silicon, that can hold anywhere from hundreds to millions of transistors, resistors, and capacitors.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="IC-2"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_ic3" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/i3.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : IC</h4>
							<p>An integrated circuit, or IC, is small chip that can function as an amplifier, oscillator, timer, microprocessor, or even computer memory. An IC is a small wafer, usually made of silicon, that can hold anywhere from hundreds to millions of transistors, resistors, and capacitors.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="IC-3"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_LED1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/l1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : LED</h4>
							<p>A light-emitting diode (LED) is a semiconductor light source that emits light when current flows through it. Electrons in the semiconductor recombine with electron holes, releasing energy in the form of photons.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="LED-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_LED2" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/l2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : LED</h4>
							<p>A light-emitting diode (LED) is a semiconductor light source that emits light when current flows through it. Electrons in the semiconductor recombine with electron holes, releasing energy in the form of photons.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="LED-2"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_LED3" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/l3.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : LED</h4>
							<p>A light-emitting diode (LED) is a semiconductor light source that emits light when current flows through it. Electrons in the semiconductor recombine with electron holes, releasing energy in the form of photons.
							</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="LED-3"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_bat1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/b1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Battery</h4>
							<p>Batteries are designed such that the energetically favorable redox reaction can occur only if electrons move through the external part of the circuit. A battery consists of some number of voltaic cells. Each cell consists of two half-cells connected in series by a conductive electrolyte containing metal cations.
						    </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Battery-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal_rel1" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/all_products/rl1.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Electronic Component : Relay</h4>
							<p>Relays are switches that open and close circuits electromechanically or electronically. Relays control one electrical circuit by opening and closing contacts in another circuit. ... When a relay contact is Normally Closed (NC), there is a closed contact when the relay is not energized.
						    </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>1000&#8377;</span> <i class="item_price">500&#8377;</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Relay-1"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 	
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<!-- <div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/36.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner"> 
									<input type="hidden" name="amount" value="920.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/37.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> -->
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3 style="background-color: black;"><span style="color: white; font-weight: 900">20% <i style="color: white;">Discount</i></span></h3>
				<a href="products.php" style="background-color: black;">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>Best Deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid" style="border: 2px solid black;">
						<img src="images/sensor/s2.png" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4 style="color: black; font-weight: 900;">We Offer <span style="font-weight: 900;">Best Products</span></h4>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right" >
					<img src="images/diode/d2.png" style="height: 365px;" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4 style="font-weight: 900">Navratri <span>Special</span></h4>
						<h5 style="font-weight: 900">save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
	
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='R1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>

			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/all_products/r1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/r1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/r1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/r1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/r1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal_reg1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
						</div>
					</div>
				</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='L2'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/all_products/l2.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/l2.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/l2.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/l2.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/l2.png" alt=" " style="height: 340px"  class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal_LED2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
						</div>
					</div>
				</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='B1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/all_products/b1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/b1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/b1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/b1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/b1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal_bat1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
						</div>  
					</div>
				</div>
<?php
    error_reporting(0);

    $con = connect_to_database ('$databaseName');
    $sql = "SELECT * FROM products where pro_uid='RL1'";
    $rs  = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0)
    {
      while($row = $rs->fetch_assoc())
        {            
?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/all_products/rl1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/rl1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/rl1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/rl1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<img src="images/all_products/rl1.png" alt=" " style="height: 340px"  class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal_rel1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html"><?php echo $row['pro_name'];?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $row['old_price'];?>&#8377;</span> <i class="item_price"><?php echo $row['new_price'];?>&#8377;</i></p>
									<form action="insert.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>" />
										<input type="number" name="qnt" min="0" max="100" step="1" value="1" style="width: 3em">   
										<button type="submit" name="pro_insert" class="w3ls-cart">Add to cart</button>
									</form> <?php }} ?>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
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
 
	<!-- //cart-js -->
	<?php include 'footer.php'; ?>   
</body>
</html>
