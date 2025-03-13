
<?php

    include('include/header.php');
    $dir1 = "include/img/Brand Logo/";
    $files1 = array_diff( scandir($dir1,1), array(".", "..") );

?>
<style type="text/css">



body {
  overflow: hidden;
}
/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  background-image: url("include/img/Home Cards/ajax-loader.gif");
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}


</style>
    <!-- main wrapper start -->


<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
    <main>
        <!-- slider area start -->
        <section class="slider-area pb-50">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"> <img class="d-block w-100" src="include/img/Slider/Micro Bore Units.jpg" alt="Micro Bore Units">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">Micro Bore Units</h2> <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="include/img/Slider/Fine Boring Bar With MBU.jpg" alt="Fine Boring Bar With MBU">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">Fine Boring Bar With MBU</h2> <a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="include/img/Slider/Eccentric Fine Boring Tools.jpg" alt="Eccentric Fine Boring Tools">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">Eccentric Fine Boring Tools</h2> <a href="eccentric_fine_boring_tools.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="include/img/Slider/Duo Boring Bars.jpg" alt="Duo Boring Bars">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">Duo Boring Bars</h2> <a href="rough_boring_bars_duo_boring_bars.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="include/img/Slider/Boring Kit.jpg" alt="Boring Kit">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">Boring Kit</h2> <a href="boring_kit.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="include/img/Slider/BCA Boring Bars.jpg" alt="BCA Boring Bars">
                        <div class="carousel-caption fadeInRight">
                            <h2 class="carousel-text">BCA Boring Bars</h2> <a href="bca_boring_bars.php?product_category=std_products" class="btn btn-default" target="_blank">View More</a> </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="fa fa-chevron-circle-left" style="color: #2a80b9;font-size: 30px;"></span> <span class="sr-only">Previous</span> </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="fa fa-chevron-circle-right" style="color: #2a80b9;font-size: 30px;"></span> <span class="sr-only">Next</span> </a>
            </div>
        </section>
        <!-- slider area end -->

        <!-- product details inner end -->
        <div class="container pb-50">
            <div class="product-details-inner">
                <div class="pb-50 mobile-slider-std">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="entry-title" style="font-size: 20px;font-weight: bolder;">Standard Product Offerings</h3> </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-slider-box-wrapper">
                                <div class="product-slider-box slick-row-15 slick-arrow-style">
                                    <div class="pro-large-img"> <img src="include/img/Micro Bore Units/Introduction/micro_bore_units_small.jpg" alt="Micro Bore Units" />
                                        <div class="mini-slider-footer">
                                            <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" target="_blank"><h6>Micro Bore Units</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Fine Boring Bars - MBU/Introduction/Small 1.jpg" alt="Fine Boring Bar With MBU" />
                                        <div class="mini-slider-footer">
                                            <a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products" target="_blank"><h6>Fine Boring Bar With MBU</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Eccentric Fine Boring Tools/Introduction/Small 1.jpg" alt="Eccentric Fine Boring Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="eccentric_fine_boring_tools.php?product_category=std_products" target="_blank"><h6>Eccentric Fine Boring Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/DUO_Introduction/Introduction/Small 1.jpg" alt="Duo Boring Bars" />
                                        <div class="mini-slider-footer">
                                            <a href="rough_boring_bars_duo_boring_bars.php?product_category=std_products" target="_blank"><h6>Duo Boring Bars</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Boring Kit/Introduction/Small 1.jpg" alt="Boring Kit" />
                                        <div class="mini-slider-footer">
                                            <a href="boring_kit.php?product_category=std_products" target="_blank"><h6>Boring Kit</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/BCA_Introduction/Introduction/Small 1.jpg" alt="BCA Boring Bars" />
                                        <div class="mini-slider-footer">
                                            <a href="bca_boring_bars.php?product_category=std_products" target="_blank"><h6>BCA Boring Bars</h6></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-50">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="entry-title" style="font-size: 20px;font-weight: bolder;">Other Product Offerings</h3> </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-slider-box-wrapper">
                                <div class="product-slider-box slick-row-15 slick-arrow-style">
                                    <div class="pro-large-img"> <img src="include/img/Semi - Finish Boring Bars - ISO Cartridge Type/Small 1.jpg" alt="Semi - Finish Boring Bars - ISO Cartridge Type" />
                                        <div class="mini-slider-footer">
                                            <a href="semi_finish_boring_bars_iso_cartridge_type.php?product_category=products" target="_blank"><h6>Boring Bars with ISO Cartridge</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Semi - Finish Boring Bars - Special Cartridge Type/Small 1.jpg" alt="Semi - Finish Boring Bars - Special Cartridge Type" />
                                        <div class="mini-slider-footer">
                                            <a href="semi_finish_boring_bars_special_cartridge_type.php?product_category=products" target="_blank"><h6>Boring Bars with Spl. Cartridge</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Fixed Pocket Type Rough Boring Bars (Core Drills)/Small 1.jpg" alt="Fixed Pocket Type Rough Boring Bars (Core Drills)" />
                                        <div class="mini-slider-footer">
                                            <a href="rough_boring_bars_fixed_pocket_type.php?product_category=products" target="_blank"><h6>Fixed Pocket Type Boring Bars</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Antivibration Boring Bars/Small 1.jpg" alt="Antivibration Boring Bars" />
                                        <div class="mini-slider-footer">
                                            <a href="antivibration_boring_bars.php?product_category=products" target="_blank"><h6>Antivibration Boring Bars</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Back Boring Bars-Back Spot Facing Tools/Small 1.jpg" alt="Back Boring Bars-Back Spot Facing Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="back_boring_bars.php?product_category=products" target="_blank"><h6>Back Boring Bars</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Combination Boring Bars/Small 1.jpg" alt="Combination Boring Bars" />
                                        <div class="mini-slider-footer">
                                            <a href="combination_boring_bars.php?product_category=products" target="_blank"><h6>Combination Boring Bars</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Face Milling Cutters/Small 1.jpg" alt="Face Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_face_milling_cutters.php?product_category=products" target="_blank"><h6>Face Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Modular Milling Cutters/Small 1.jpg" alt="Modular Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_modular_milling_cutters.php?product_category=products" target="_blank"><h6>Modular Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Shoulder Milling Cutters/Small 1.jpg" alt="Shoulder Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_shoulder_milling_cutters.php?product_category=products" target="_blank"><h6>Shoulder Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Full - Half - Side & Face Milling Cutters/Small 1.jpg" alt="Side & Face Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_full_Half_side_and_face_milling_cutters.php?product_category=products" target="_blank"><h6>Side & Face Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/T - Slot Milling Cutters/Small 1.jpg" alt="T - Slot Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_t_slot_milling_cutters.php?product_category=products" target="_blank"><h6>T - Slot Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/45° Approach Angle Milling Cutters/Small 1.jpg" alt="45° Approach Angle Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_45_approach_angle_milling_cutters.php?product_category=products" target="_blank"><h6>45° Angle Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/End Mill Cutters/Small 1.jpg" alt="End Mill Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_end_milling_cutters.php?product_category=products" target="_blank"><h6>End Mill Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Thread Mill Cutters/Small 1.jpg" alt="Thread Mill Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="milling_cutters_thread_milling_cutters.php?product_category=products" target="_blank"><h6>Thread Mill Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Dovetail Taper Angle Milling Cutters/Small 1.jpg" alt="Dovetail Milling Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="dovetail_taper_angle_milling_cutters.php?product_category=products" target="_blank"><h6>Dovetail Milling Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Spot Face Cutters/Small 1.jpg" alt="Spot Face Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="spot_face_cutters.php?product_category=products" target="_blank"><h6>Spot Face Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Centre Spot Face Cutters/Small 1.jpg" alt="Centre Spot Face Cutters" />
                                        <div class="mini-slider-footer">
                                            <a href="centre_spot_face_cutters.php?product_category=products" target="_blank"><h6>Centre Spot Face Cutters</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/U - Drills/Small 1.jpg" alt="U - Drills" />
                                        <div class="mini-slider-footer">
                                            <a href="drilling_tools_u_drills.php?product_category=products" target="_blank"><h6>U - Drills</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Trepanning Tools/Small 1.jpg" alt="Trepanning Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="drilling_tools_trepanning_drills.php?product_category=products" target="_blank"><h6>Trepanning Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Fixed Pocket Type Chamfer Tools/Small 1.jpg" alt="Fixed Pocket Type Chamfer Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="chamfer_tools_fixed_pocket_type_chamfer_tools.php?product_category=products" target="_blank"><h6>Fixed Pocket Type Chamfer Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Adjustable Diameter Chamfer Tools - Duo Chamfering Tools/Small 1.jpg" alt="Adjustable Diameter Chamfer Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="chamfer_tools_adjustable_diameter_chamfer_tools_duo_chamfering_tools.php?product_category=products" target="_blank"><h6>Adjustable Diameter Chamfer Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Cartridge Type Chamfer Tools/Small 1.jpg" alt="Cartridge Type Chamfer Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="chamfer_tools_cartridge_type_chamfer_tools.php?product_category=products" target="_blank"><h6>Cartridge Type Chamfer Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Finish Boring Cartridges/Small 1.jpg" alt="Finish Boring Cartridges" />
                                        <div class="mini-slider-footer">
                                            <a href="cartridges_finish_boring_cartridges.php?product_category=products" target="_blank"><h6>Finish Boring Cartridges</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Special Cartridges/Small 1.jpg" alt="Special Cartridges" />
                                        <div class="mini-slider-footer">
                                            <a href="cartridges_special_cartridges.php?product_category=products" target="_blank"><h6>Special Cartridges</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/ISO Cartridges/Small 1.jpg" alt="ISO Cartridges" />
                                        <div class="mini-slider-footer">
                                            <a href="cartridges_iso_cartridges.php?product_category=products" target="_blank"><h6>ISO Cartridges</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/ID Boring Tools/Small 1.jpg" alt="ID Boring Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_id_boring_tools.php?product_category=products" target="_blank"><h6>ID Boring Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/OD Turning Tools/Small 1.jpg" alt="OD Turning Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_od_turning_tools.php?product_category=products" target="_blank"><h6>OD Turning Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Face Grooving Tools/Small 1.jpg" alt="Face Grooving Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_face_grooving_tools.php?product_category=products" target="_blank"><h6>Face Grooving Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/ID Grooving Tools/Small 1.jpg" alt="ID Grooving Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_id_grooving_tools.php?product_category=products" target="_blank"><h6>ID Grooving Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Grooving & Parting Tools/Small 1.jpg" alt="Grooving & Parting Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_grooving_and_parting_tools.php?product_category=products" target="_blank"><h6>Grooving & Parting Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Threading Tools/Small 1.jpg" alt="Threading Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_threading_tools.php?product_category=products" target="_blank"><h6>Threading Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Combination Turning Tools/Small 1.jpg" alt="Combination Turning Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_combination_turning_tools.php?product_category=products" target="_blank"><h6>Combination Turning Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Anti-vibration Turning Tools/Small 1.jpg" alt="Anti-vibration Turning Tools" />
                                        <div class="mini-slider-footer">
                                            <a href="turning_tools_anti_vibration_turning_tool.php?product_category=products" target="_blank"><h6>Anti-vibration Turning Tools</h6></a></div>
                                    </div>
                                    <div class="pro-large-img"> <img src="include/img/Special Adaptors/Small 1.jpg" alt="Special Adaptors" />
                                        <div class="mini-slider-footer">
                                            <a href="special_adaptors.php?product_category=products" target="_blank"><h6>Special Adaptors</h6></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-50">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="entry-title" style="font-size: 20px;font-weight: bolder;">Statistics</h3> </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter-box"> <i class="fa fa-smile-o"></i> <span class="counter">1000</span>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box"> <i class="fa fa-shopping-cart"></i> <span class="counter">10000</span>
                                <p>Customized Products</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box"> <i class="fa fa-shopping-cart"></i> <span class="counter">500</span>
                                <p>Standard Products</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box"> <i class="fa fa-clock-o"></i> <span class="counter">100000</span>
                                <p>R&D Manhours</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-50">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="entry-title" style="font-size: 20px;font-weight: bolder;">Testimonials & Reviews</h3> </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner text-center">
                                    <!-- Quote 1 -->
                                    <div class="item active" style="border: 2px solid #2a80b91c;" >
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <h6><span style="font-size: 16px;" >"</span>We are thankful and grateful in support to Renuka Tools. We loved the products from Renuka Tools as they are of very high quality. Pre-sales & post-sales support is excellent. Will definitely promote the company in my network.<span style="font-size: 16px;" >"</span></h6> <b>Raju D. Kawa ( Kawa Machine Tools )</b> </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                    </div>
                                    <div class="item" style="border: 2px solid #2a80b91c;">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <h6><span style="font-size: 16px;" >"</span>Renuka Tools has combined excellence in engineering, and sales support with a dedication to fast delivery to enable our company to win more business. Working with the Renuka Team made a real impact on our bottom line.<span style="font-size: 16px;" >"</span></h6> <b>Kamal Ghonia ( Director, Shining Tools Limited )</b> </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                    </div>
                                    <div class="item" style="border: 2px solid #2a80b91c;">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <h6><span style="font-size: 16px;" >"</span> Renuka tools is a vibrant organization which takes up challenging projects. We had developed a complex forging tool which required 5 axis machining and it was developed successfully. Wish them all the best.<span style="font-size: 16px;" >"</span></h6> <b>Dr. Vasant Khisty ( Sammy Consulting )</b> </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                    </div>
                                    <div class="item" style="border: 2px solid #2a80b91c;">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <h6><span style="font-size: 16px;" >"</span> We would like to share you that procured cutting tools and other holders from Renuka Tools, Aurangabad. We have used them and found them to be performing satisfactorily. Manufacturing quality of tools is good and received with appropriate quality certification. Keep it up !<span style="font-size: 16px;" >"</span></h6> <b>Kishore Doke ( Yamazaki Mazak India Pvt. Ltd.)</b> </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                    </div>
                                    <div class="item" style="border: 2px solid #2a80b91c;">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <h6><span style="font-size: 16px;" >"</span> I am thankful to work with Renuka Tools as it supports us to deliver lots of customized tools along with accuracy and productivity. Their supports regarding tools urgency and sales are too much appreciable and fast. Best wishes to them for the long run.<span style="font-size: 16px;" >"</span></h6> <b>Md Khairul Hassan ( 1st  Sr. Deputy Director,Dept. of R&D Compressor,Walton Hi-Tech Industry Ltd.,Bangladesh)</b> </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                    </div>




                                    

                                </div> <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-circle-left" style="color: #2a80b9;font-size: 20px;"></i></a> 
                                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-circle-right" style="color: #2a80b9;font-size: 20px;"></i></a> </div>
                        </div>
                    </div>
                </div>




               <div class="content-wrapper pb-50">

                    <div class="row">

                        <div class="col-md-3" >
                            <div class="news-card">
                                <a href="about_us.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/About us.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">About Us</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">About Renuka Tools, The Company Profile, The Team, The Philosophies & Policies, Important Milestones & Credentials</p>
                                    <a href="about_us.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3" >
                               <div class="news-card">
                                <a href="manufacturing_page.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Manufacturing.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Manufacturing</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">Manufacturing at Renuka Tools - What else do we do.</p>
                                    <a href="manufacturing_page.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3" >
                              <div class="news-card">
                                <a href="library_page.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Library.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Library</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">Get access to the Knowledge Library that includes the Download Centre, the Gallery, Events & Social Media handles.</p>
                                    <a href="library_page.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                       <div class="col-md-3" >
                              <div class="news-card">
                                <a href="download_center.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Download centre.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Download Centre</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">The place where you can get your hands on all the technical literature</p>
                                    <a href="download_center.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-3" >
                             <div class="news-card">
                                <a href="gallery_and_events.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Gallery & Events.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Gallery & Events</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">Showing you glimpses of our products & other events such as exhibitions & training programs</p>
                                    <a href="gallery_and_events.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3" >
                              <div class="news-card">
                                <a href="video_gallery.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Video gallery.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Video Gallery</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">Get to watch what we are sharing on our Youtube Channel. Don't forget to like & subscribe!</p>
                                    <a href="video_gallery.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        

                        <div class="col-md-3" >
                              <div class="news-card">
                                <a href="connect_with_us.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Connect with us.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Connect With Us</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">Get to know us better by joining us on social media handles. Don't miss out on our updates!</p>
                                    <a href="connect_with_us.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-3" >
                             <div class="news-card">
                                <a href="contact_us.php" target="_blank" class="news-card__card-link"></a>
                                <img src="include/img/Home Cards/Contact us.jpg" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                  <h3 class="news-card__title">Contact Us</h3>
                                  <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">No need to wait for physical visit of our engineer</p>
                                    <a href="contact_us.php" target="_blank" class="news-card__read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div>

                    </div>

                </div>





                <!-- brand logo area start -->
                <div class="brand-logo-area bg-white pt-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="entry-title" style="font-size: 20px;font-weight: bolder;">Our Valuable Customers</h3> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brand-logo-slider" style="border: 2px solid #2a80b91c;padding: 15px;">
                                    <div class="brand-logo-carousel">
                                            <?php
                                                 for($i=0;$i<sizeof($files1);$i++){
                                            ?>
                                                      <div class="brand-item"> <img src="<?php echo $dir1.$files1[$i]; ?>" alt="<?php echo $dir1.$files1[$i]; ?>" style="width: 100%;"> </div>
                                            <?php }  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brand logo area end -->

            </div>
        </div>
        <!-- product details inner end -->
    </main>
    <!-- main wrapper end -->

    <?php 
          include ('include/footer.php');
    ?>


    <script type="text/javascript">
        
            $(window).on('load', function() {
              $('#status').fadeOut(); 
              $('#preloader').delay(350).fadeOut('slow'); 
              $('body').delay(350).css({'overflow':'visible'});
            })

    </script>
        </body>


        </html>