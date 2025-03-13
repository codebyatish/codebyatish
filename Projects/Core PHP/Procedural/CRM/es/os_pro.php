<div class="w3ls_mobiles_grid_right_grid3">
	<div class="col-md-3 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles" style="background-color: white;">
		<div class="agile_ecommerce_tab_left mobiles_grid">
			<div class="hs-wrapper hs-wrapper2">
				<img src="images/all_products/<?php echo $row['photo']?>" name="photo" alt=" " style="height: 300px" class="img-responsive" />
				<img src="images/all_products/<?php echo $row['photo']?>" name="photo" alt=" " style="height: 300px" class="img-responsive" /><img src="images/all_products/<?php echo $row['photo']?>" name="photo" alt=" " style="height: 300px" class="img-responsive" /><img src="images/all_products/<?php echo $row['photo']?>" name="photo" alt=" " style="height: 300px" class="img-responsive" /><img src="images/all_products/<?php echo $row['photo']?>" name="photo" alt=" " style="height: 300px" class="img-responsive" /><div class="w3_hs_bottom w3_hs_bottom_sub1">
					<ul>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal_os1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
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
				</form> 
			</div>
		</div>
	</div>