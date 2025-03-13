<?php

    include('include/header.php');
    $MenuName = basename($_SERVER['PHP_SELF']);
    $ProductCategory = $_REQUEST['product_category'];

?>

    <body>
        <!-- main wrapper start -->
        <main>
            <!-- page main wrapper start -->
            <div class="icon-bar" >
                <button class="Show active" ><i class="fa fa-bars"></i></button>
            </div>
            <ul id="download-catalouge">
              <li>
                <a href="download_center.php"><i class="fa fa-download" ></i><br>C<br>A<br>T<br>A<br>L<br>O<br>G<br>U<br>E</a>
              </li>
            </ul>
                        <!-- breadcrumb area start -->
            <div class="breadcrumb-area breadcrumb-area-style_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <h1>BCA Boring Bars</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="finish_boring_bars_product_page.php" style="color: #2a80b9;" >Finish Boring Bars</a></li>
                                                
                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">BCA Boring Bars</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

            <div class="pt-25 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- sidebar area start -->
                        <div class="col-lg-3 order-1 order-lg-1">


                            <?php  if ($ProductCategory == 'products') {  ?>

                               <div class="sidebar-single">
                                <h5 class="entry-title">Products</h5>
                                <ul class="list-group" style="margin: 10px 0px 5px 0px;">
                                    <li class="list-group-item"><a class="first_sub_menu active">Finish Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup" style="display: block;">
                                            <li><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products">Fine Boring Bars with Micro Bore Units</a></li>
                                            <li><a href="eccentric_fine_boring_tools.php?product_category=products">Eccentric Fine Boring Tools</a></li>
                                            <li><a class="second_sub_menu active">BCA Boring Bars</a><i class="second fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                                <ul class="secondLevel" style="display: block;">
                                                    <li class="active_menu" ><a href="bca_boring_bars.php?product_category=products" style="color: white !important;" >Intoduction To BCA Boring Bars</a></li>
                                                    <li><a href="bca_boring_bars_integral_type.php?product_category=products">BCA Boring Bars - Integral Type</a></li>
                                                    <li><a href="bca_boring_bars_modular_type.php?product_category=products">BCA Boring Bars - Modular Type</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="boring_kit.php?product_category=products">Boring Kit</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a class="first_sub_menu">Semi - Finish Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="semi_finish_boring_bars_iso_cartridge_type.php?product_category=products">Semi-Finish Boring Bars - ISO Cartridge Type</a></li>
                                            <li><a href="semi_finish_boring_bars_special_cartridge_type.php?product_category=products">Semi-Finish Boring Bars - Special Cartridge Type</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a class="first_sub_menu">Rough Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="rough_boring_bars_fixed_pocket_type.php?product_category=products">Fixed Pocket type Rough Boring Bars (Core Drills)</a></li>
                                            <li><a class="second_sub_menu">Duo Boring Bars </a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                <ul class="secondLevel">
                                                    <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=products">Intoduction To Duo Boring Bars</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=products">Duo Boring Bars - Integral Type</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=products">Duo Boring Bars - Modular Type</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=products">Duo Boring Bars - Flange Type</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_side_lock_type.php?product_category=products">Duo Boring Bars - Side Lock Type</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_arbor_type.php?product_category=products">Duo Boring Bars - Arbor Type</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a href="antivibration_boring_bars.php?product_category=products">Antivibration Boring Bars</a></li>
                                    <li class="list-group-item"><a href="back_boring_bars.php?product_category=products">Back Boring Bars / Back Spot Facing Tools</a></li>
                                    <li class="list-group-item"><a href="combination_boring_bars.php?product_category=products">Combination Boring Bars</a></li>
                                    <li class="list-group-item"><a class="first_sub_menu">Milling Cutters</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="milling_cutters_face_milling_cutters.php?product_category=products">Face Milling Cutters</a></li>
                                            <li><a href="milling_cutters_modular_milling_cutters.php?product_category=products">Modular Milling Cutters</a></li>
                                            <li><a href="milling_cutters_shoulder_milling_cutters.php?product_category=products">Shoulder Milling Cutters</a></li>
                                            <li><a href="milling_cutters_full_Half_side_and_face_milling_cutters.php?product_category=products">Full / Half - Side & Face Milling Cutters</a></li>
                                            <li><a href="milling_cutters_t_slot_milling_cutters.php?product_category=products">T - Slot Milling Cutters</a></li>
                                            <li><a href="milling_cutters_45_approach_angle_milling_cutters.php?product_category=products">45° Approach Angle Milling Cutters</a></li>
                                            <li><a href="milling_cutters_end_milling_cutters.php?product_category=products">End Mill Cutters</a></li>
                                            <li><a href="milling_cutters_thread_milling_cutters.php?product_category=products">Thread Mill Cutters</a></li>
                                            <li><a href="dovetail_taper_angle_milling_cutters.php?product_category=products">Dovetail / Taper / Angle Milling Cutters</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a href="spot_face_cutters.php?product_category=products">Spot Face Cutters</a></li>
                                    <li class="list-group-item"><a href="centre_spot_face_cutters.php?product_category=products">Centre Spot Face Cutters</a></li>
                                    <li class="list-group-item"><a class="first_sub_menu">Drilling Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="drilling_tools_u_drills.php?product_category=products">U - Drills</a></li>
                                            <li><a href="drilling_tools_trepanning_drills.php?product_category=products">Trepanning Tools</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a class="first_sub_menu">Chamfer Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="chamfer_tools_fixed_pocket_type_chamfer_tools.php?product_category=products">Fixed Pocket Type Chamfer Tools</a></li>
                                            <li><a href="chamfer_tools_adjustable_diameter_chamfer_tools_duo_chamfering_tools.php?product_category=products">Adjustable diameter Chamfer Tools - Duo Chamfering Tools</a></li>
                                            <li><a href="chamfer_tools_cartridge_type_chamfer_tools.php?product_category=products">Cartridge type Chamfer Tools</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a class="first_sub_menu">Cartridges</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="cartridges_micro_bore_units_mbu.php?product_category=products">Micro Bore Units - MBU</a></li>
                                            <li><a href="cartridges_finish_boring_cartridges.php?product_category=products">Finish Boring Cartridges</a></li>
                                            <li><a href="cartridges_special_cartridges.php?product_category=products">Special Cartridges</a></li>
                                            <li><a href="cartridges_iso_cartridges.php?product_category=products">ISO Cartridges</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a class="first_sub_menu">Turning Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                        <ul class="slideup">
                                            <li><a href="turning_tools.php?product_category=products">Introduction To Turning Tools</a></li>
                                            <li><a href="turning_tools_id_boring_tools.php?product_category=products">ID Boring Tools</a></li>
                                            <li><a href="turning_tools_od_turning_tools.php?product_category=products">OD Turning Tools</a></li>
                                            <li><a href="turning_tools_face_grooving_tools.php?product_category=products">Face Grooving Tools</a></li>
                                            <li><a href="turning_tools_id_grooving_tools.php?product_category=products">ID Grooving Tools</a></li>
                                            <li><a href="turning_tools_grooving_and_parting_tools.php?product_category=products">Grooving & Parting Tools</a></li>
                                            <li><a href="turning_tools_threading_tools.php?product_category=products">Threading Tools</a></li>
                                            <li><a href="turning_tools_combination_turning_tools.php?product_category=products">Combination Turning Tools</a></li>
                                            <li><a href="turning_tools_anti_vibration_turning_tool.php?product_category=products">Anti-vibration Turning Tools</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a href="special_adaptors.php?product_category=products">Special Adaptors</a></li>
                                </ul>
                            </div>

                              
                            <?php }else if($ProductCategory == 'std_products') { ?>

                                <div class="sidebar-single">
                                    <h5 class="entry-title">Standard Products</h5>
                                    <ul class="list-group" style="margin: 10px 0px 5px 0px;">
                                        <li class="list-group-item"><a href="cartridges_micro_bore_units_mbu.php?product_category=std_products">Micro Bore Units - MBU</a></li>
                                        <li class="list-group-item"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products">Fine Boring Bars With MBU</a></li>
                                        <li class="list-group-item"><a href="eccentric_fine_boring_tools.php?product_category=std_products">Eccentric Fine Boring Tools</a></li>
<!--                                         <li class="list-group-item"><a href="cartridges_finish_boring_cartridges.php?product_category=std_products">Finish Boring Cartridges</a></li> -->
                                        <li class="list-group-item"><a class="first_sub_menu active">BCA Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;" >
                                                <li class="active_menu" ><a href="bca_boring_bars.php?product_category=std_products" style="color: white !important;" >Intoduction To BCA Boring Bars</a></li>
                                                <li><a href="bca_boring_bars_integral_type.php?product_category=std_products">BCA Boring Bars - Integral Type</a></li>
                                                <li><a href="bca_boring_bars_modular_type.php?product_category=std_products">BCA Boring Bars - Modular Type</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" ><a href="boring_kit.php?product_category=std_products" >Boring Kit</a></li>
                                        <li class="list-group-item"><a class="first_sub_menu">Duo Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=std_products">Intoduction To Duo Boring Bars</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=std_products">Duo Boring Bars - Integral Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=std_products">Duo Boring Bars - Modular Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=std_products">Duo Boring Bars - Flange Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_side_lock_type.php?product_category=std_products">Duo Boring Bars - Side Lock Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_arbor_type.php?product_category=std_products">Duo Boring Bars - Arbor Type</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                               
                            <?php }else {  echo "php error"; } ?>




                        </div>
                        <!-- sidebar area end -->
                        <!-- shop main wrapper start -->
                        <div class="col-lg-9 order-2 order-lg-2">
                            <div style="padding: 25px 15px;">
                                <h5 class="entry-title">BCA Boring Bars</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#bca_boring_bars_tab_one">Introduction</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_tab_two">Standard Range</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_tab_three">Other Applications</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_tab_four">Operating Instructions</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="bca_boring_bars_tab_one">
                                            <div class="tab-one">
                                                <div>
                                                    <h6 class="tab_heading">BCA Boring Bars</h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-1"> </div>
                                                                <div class="col-md-10"> 
                                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                                        <img src="include/img/BCA_Introduction/Introduction/Small 1.jpg" alt="include/img/BCA_Introduction/Introduction/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;" > 
                                                                    </a>
                                                                </div>
                                                            <div class="col-md-1"> </div>
                                                        </div>
                                                    <h6 class="tab_heading">Facts & Advantages</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-12">
                                                            <ul>
                                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Used for finish boring application with a range of diameters from 16mm up to 244mm.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available with fine adjustment option with a Least Count of 10 microns radially.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available with options of selecting either integral or modular type depending on the requirement.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; User friendly & quick adjustment ensures minimum loss time.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Most economic solution for finish boring for a wide range of diameters with precise adjustment in microns.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available on demand for the application of combination boring & OD turning.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp;Apart from standard product range, tailor made Boring Bars & adaptors are also available on demand.</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <h6 class="tab_heading">Nomenclature Code Key for Ordering BCA Finish Boring Bar</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/BCA_Introduction/Nomenclature/Small 1.jpg" alt="include/img/BCA_Introduction/Nomenclature/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>

                                                    <h6 class="tab_heading">Nomenclature Code Key for Ordering Adaptor</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/BCA_Introduction/Nomenclature/Small 2.jpg" alt="include/img/BCA_Introduction/Nomenclature/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="bca_boring_bars_tab_two">

                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="bca_boring_bars_integral_type.php?product_category=products"  target="_blank">
                                                                <img src="include/img/BCA_Introduction/Standrd Range/Small 1.jpg" style="cursor: pointer;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                    <div class="col-md-1"> </div>
                                                </div>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="bca_boring_bars_modular_type.php?product_category=products" target="_blank">
                                                                <img src="include/img/BCA_Introduction/Standrd Range/Small 2.jpg"  style="cursor: pointer;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                              
                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="bca_boring_bars_integral_type.php?product_category=std_products"  target="_blank">
                                                                <img src="include/img/BCA_Introduction/Standrd Range/Small 1.jpg"  style="cursor: pointer;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                    <div class="col-md-1"> </div>
                                                </div>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="bca_boring_bars_modular_type.php?product_category=std_products" target="_blank">
                                                                <img src="include/img/BCA_Introduction/Standrd Range/Small 2.jpg"  style="cursor: pointer;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                    <div class="col-md-1"> </div>
                                                </div>

                                               
                                            <?php }else {  echo "php error"; } ?>


                                        </div>

                                        <div class="tab-pane fade" id="bca_boring_bars_tab_three">
                                            <h6 class="tab_heading">OD Turning Tool</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø12.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All tools with BCA concept for the application of OD turning will be tailor made as per requirements.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 3-6 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    
                                                    <div class="col-md-4"> 
                                                        <center>
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/BCA_Introduction/Other Applications/Small 1.jpg" alt="include/img/BCA_Introduction/Other Applications/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                            </a>
                                                        </center>           
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <center>
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/BCA_Introduction/Other Applications/Small 2.jpg" alt="include/img/BCA_Introduction/Other Applications/Big 2.jpg"  style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                            </a>
                                                        </center>  
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <center>
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/BCA_Introduction/Other Applications/Small 3.jpg" alt="include/img/BCA_Introduction/Other Applications/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                            </a>
                                                        </center>  
                                                    </div>
                                                    

                                                </div>

                                        </div>

                                        <div class="tab-pane fade" id="bca_boring_bars_tab_four">
                                            <h6 class="tab_heading">Operating Instructions</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Follow below instructions to assemble the modular type BCA Boring Bar: a) Clamp the right adaptor on to the boring head with the adaptor bolts provided with the adaptor. b) Post assembly (if required), measure the exact diameter on the pre-setter or by using a precise dial indicator.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/BCA_Introduction/Operating Instructions/Small 1.jpg" alt="include/img/BCA_Introduction/Operating Instructions/Big 1.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The boring bar is initially set on minimum diameter mark. (pic 1)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/BCA_Introduction/Operating Instructions/Small 2.jpg" alt="include/img/BCA_Introduction/Operating Instructions/Big 2.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;" > 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; In case you wish to adjust the diameter, loosen the Locking Screw provided on the rear end of the cartridge with the allen key provided and adjust the diameter using spanner on the nut of the cartridge. (pic 2)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/BCA_Introduction/Operating Instructions/Small 3.jpg" alt="include/img/BCA_Introduction/Operating Instructions/Big 3.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;" > 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Use the dial marking to set the required diameter, adjust accordingly and then recheck if the required size is achieved. (pic 1 & 3).</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; If the required diameter is achieved, tighten the locking screws of cartridges with a sufficient torque for precise repeatability. (pic 2).</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The tool is now ready to use.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; It is recommended to do some periodic lubrication at your end to avoid damage due to rusting.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Please change the locking screw & insert screw ahead in time to avoid accident.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop main wrapper end -->
                    </div>
                </div>
            </div>
            <!-- page main wrapper end -->
        </main>
        <!-- main wrapper end -->
        <?php 
          include ('include/footer.php');
    ?>
    </body>
    <!-- Mirrored from demo.hasthemes.com/gengar-preview/gengar/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 05:14:13 GMT -->

    </html>