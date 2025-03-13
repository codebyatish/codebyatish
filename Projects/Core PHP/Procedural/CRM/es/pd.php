<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/Capacitor/1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/Capacitor/1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/Capacitor/1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/Capacitor/1.png" alt=" " style="height: 220px" class="img-responsive" />
										<img src="images/Capacitor/1.png" alt=" " style="height: 220px" class="img-responsive" />
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
										<button type="submit" name="pro_insert" class="w3ls-cart">Addttt to cart</button>
									</form> 
								</div>
								</div>

								<div class="clearfix"> </div>
							</div>
						</div>