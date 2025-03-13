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
                                    <h1>Fine Boring Bars with Micro Bore Units</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="finish_boring_bars_product_page.php" style="color: #2a80b9;" >Finish Boring Bars</a></li>

                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">Fine Boring Bars with Micro Bore Units</a></li>
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
                                                <li class="active_menu"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products" style="color: white !important;">Fine Boring Bars with Micro Bore Units</a></li>
                                                <li><a href="eccentric_fine_boring_tools.php?product_category=products">Eccentric Fine Boring Tools</a></li>
                                                <li><a class="second_sub_menu">BCA Boring Bars</a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel">
                                                        <li><a href="bca_boring_bars.php?product_category=products">Intoduction To BCA Boring Bars</a></li>
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
                                                <li><a class="second_sub_menu">Duo Boring Bars</a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
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
                                                <li><a href="cartridges_micro_bore_units_mbu.php?product_category=products">Micro Bore Units With MBU</a></li>
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
                                            <li class="active_menu list-group-item"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products" style="color: white !important;">Fine Boring Bars With MBU</a></li>
                                            <li class="list-group-item"><a href="eccentric_fine_boring_tools.php?product_category=std_products">Eccentric Fine Boring Tools</a></li>
<!--                                             <li class="list-group-item"><a href="cartridges_finish_boring_cartridges.php?product_category=std_products">Finish Boring Cartridges</a></li> -->
                                            <li class="list-group-item"><a class="first_sub_menu">BCA Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                <ul class="slideup">
                                                    <li><a href="bca_boring_bars.php?product_category=std_products">Intoduction To BCA Boring Bars</a></li>
                                                    <li><a href="bca_boring_bars_integral_type.php?product_category=std_products">BCA Boring Bars - Integral Type</a></li>
                                                    <li><a href="bca_boring_bars_modular_type.php?product_category=std_products">BCA Boring Bars - Modular Type</a></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item"><a href="boring_kit.php?product_category=std_products">Boring Kit</a></li>
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
                                <h5 class="entry-title">Fine Boring Bars with Micro Bore Units</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_one">Introduction</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_two_bt40">Std. Range For ID Boring - BT40</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_two_bt50">Std. Range For ID Boring - BT50</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_three">Back Boring Tool</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_four">ID Boring & Undercut Machining</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_fifth">OD Turning & Undercut Machining</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_sixth">Operating Instructions</a> </li>
                                        <li> <a data-toggle="tab" href="#fine_boring_bars_with_micro_bore_units_tab_seventh">Precautionary Measures</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="fine_boring_bars_with_micro_bore_units_tab_one">
                                            <div class="tab-one">
                                                <div>
                                                    <h6 class="tab_heading">Fine Boring Bars with Micro Bore Units</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10">
                                                            <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Introduction/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Introduction/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>
                                                    <h6 class="tab_heading">Facts & Advantages</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-12">
                                                            <ul>
                                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Precision Finish Boring Bar with high accuracy & repeatability.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Used for machining close tolerances.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Facilitates precision adjustment with least count of 1 micron (0.001mm) radially.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Used for finish boring application with a range of diameters from 20mm to 168mm.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available on demand for the application of Back Boring, OD Turning & Undercut machining.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Pre-loaded (pre-tensioned) assembly of MBU guaranteeing almost zero backlash.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Adjustment can be done directly while the tool is on the machine, thus reducing downtime or setting time.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available in a wide range of variants and inserts enabling high degree of flexibility & a variety of precision boring applications.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Apart from the standard product range, tailor made fine boring bars are also manufactured on demand.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h6 class="tab_heading">Nomenclature Code Key for Ordering Fine Boring Bar with MBU</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10">
                                                            <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Nomenclature/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Nomenclature/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>
                                                    <h6 class="tab_heading">Nomenclature Code Key for Ordering MBU</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10">
                                                            <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Nomenclature/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/Nomenclature/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_two_bt40">
                                            <h6 class="tab_heading">Fine Boring Bar with MBU</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 3.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 4.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 5.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Small 6.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 40/Big 6.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Spindle Taper</th>
                                                        <th>MBU Item Code</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>L</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="4">Fig No.1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>RTFBB 20-22 BT40</td>
                                                            <td>BT40</td>
                                                            <td rowspan="3">RTMBU ALC 04</td>
                                                            <td>20-22</td>
                                                            <td>60</td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>RTFBB 22-24 BT40</td>
                                                            <td>BT40</td>
                                                            <td>22-24</td>
                                                            <td>60</td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>RTFBB 24-26 BT40</td>
                                                            <td>BT40</td>
                                                            <td>24-26</td>
                                                            <td>60</td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="8">Fig No.2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>RTFBB 25.4-28 BT40</td>
                                                            <td>BT40</td>
                                                            <td rowspan="3">RTMBU ALT 06 / RTMBU ALC 06</td>
                                                            <td>25.4-28</td>
                                                            <td>80</td>
                                                            <td>112</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>RTFBB 28-31 BT40</td>
                                                            <td>BT40</td>
                                                            <td>28-31</td>
                                                            <td>80</td>
                                                            <td>112</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>RTFBB 31-34 BT40</td>
                                                            <td>BT40</td>
                                                            <td>31-34</td>
                                                            <td>100</td>
                                                            <td>122</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>RTFBB 33.1-38 BT40</td>
                                                            <td>BT40</td>
                                                            <td rowspan="2">RTMBU ALT 09 / RTMBU ALTP 09</td>
                                                            <td>33.1-38</td>
                                                            <td>100</td>
                                                            <td>122</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>RTFBB 38-43 BT40</td>
                                                            <td>BT40</td>
                                                            <td>38-43</td>
                                                            <td>100</td>
                                                            <td>122</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>RTFBB 42.6-51 BT40</td>
                                                            <td>BT40</td>
                                                            <td rowspan="13">RTMBU ALT 11 / RTMBU ALTP 11 / RTMBU ALC 09</td>
                                                            <td>42.6-51</td>
                                                            <td>100</td>
                                                            <td>122</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>RTFBB 51-59 BT40</td>
                                                            <td>BT40</td>
                                                            <td>51-59</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="8">Fig No.3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>RTFBB 59-67 BT40</td>
                                                            <td>BT40</td>
                                                            <td>59-67</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>RTFBB 67-75 BT40</td>
                                                            <td>BT40</td>
                                                            <td>67-75</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>RTFBB 75-83 BT40</td>
                                                            <td>BT40</td>
                                                            <td>75-83</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>RTFBB 83-91 BT40</td>
                                                            <td>BT40</td>
                                                            <td>83-91</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>RTFBB 91-99 BT40</td>
                                                            <td>BT40</td>
                                                            <td>91-99</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>RTFBB 99-107 BT40</td>
                                                            <td>BT40</td>
                                                            <td>99-107</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>RTFBB 107-115 BT40</td>
                                                            <td>BT40</td>
                                                            <td>107-115</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="3">Fig No.4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td>RTFBB 115-124 BT40</td>
                                                            <td>BT40</td>
                                                            <td>115-124</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td>RTFBB 124-132 BT40</td>
                                                            <td>BT40</td>
                                                            <td>124-132</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="6">Fig No.3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>RTFBB 60.6-72 BT40</td>
                                                            <td>BT40</td>
                                                            <td rowspan="6">RTMBU ALT 16 / RTMBU ALTP 16</td>
                                                            <td>60.6-72</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>RTFBB 72-84 BT40</td>
                                                            <td>BT40</td>
                                                            <td>72-84</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td>RTFBB 84-96 BT40</td>
                                                            <td>BT40</td>
                                                            <td>84-96</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td>RTFBB 96-108 BT40</td>
                                                            <td>BT40</td>
                                                            <td>96-108</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>RTFBB 108-120 BT40</td>
                                                            <td>BT40</td>
                                                            <td>108-120</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fig No.4</td>
                                                            <td>29</td>
                                                            <td>RTFBB 120-132 BT40</td>
                                                            <td>BT40</td>
                                                            <td>120-132</td>
                                                            <td>100</td>
                                                            <td>132</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools do not include Micro Bore Units and inserts. Order for Micro Bore Units to be placed separately.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized fine boring bars for other spindle tapers / Side-Lock type can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized fine boring bars for special diameter ranges can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range "D" calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized fine boring bars with anti-vibration treatment can be tailor made with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above standard variants are for Left hand cutting only and for ID boring application only. Other Fine Boring Tools for Right hand cutting & other applications such as OD Turning, Undercut Machining & Back Boring can be tailor made as per requirement. For all these applications, standard Micro Bore Units are available from Renuka Tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Renuka Tools strongly recommend using these Fine Boring Tools for one particular diameter only. Too much of fiddling with adjustments, may result in permanent damage of the Micro Bore Unit and thus need to be used with precautions.</li>
                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer to Renuka Tools' Micro Bore Unit's catalogue / webpage for details of Micro Bore Units used in above Fine Boring Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here</a> for further details on Micro Bore Units </li>
                                                            <?php }else if($ProductCategory == 'std_products') { ?>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer to Renuka Tools' Micro Bore Unit's catalogue / webpage for details of Micro Bore Units used in above Fine Boring Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" target="_blank">Click here</a> for further details on Micro Bore Units </li>
                                                                <?php }else {  echo "php error"; } ?>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal of 0.5mm diametrically.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_two_bt50">
                                            <h6 class="tab_heading">Fine Boring Bar with MBU</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 3.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 4.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 5.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Small 6.jpg" alt="include/img/Fine Boring Bars - MBU/Std Range for id boring/Std Range BT 50/Big 6.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Spindle Taper</th>
                                                        <th>MBU Item Code</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>L</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="4">Fig No.1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>RTFBB 20-22 BT50</td>
                                                            <td>BT50</td>
                                                            <td rowspan="3">RTMBU ALC 04</td>
                                                            <td>20-22</td>
                                                            <td>60</td>
                                                            <td>103</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>RTFBB 22-24 BT50</td>
                                                            <td>BT50</td>
                                                            <td>22-24</td>
                                                            <td>60</td>
                                                            <td>103</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>RTFBB 24-26 BT50</td>
                                                            <td>BT50</td>
                                                            <td>24-26</td>
                                                            <td>60</td>
                                                            <td>103</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="8">Fig No.2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>RTFBB 25.4-28 BT50</td>
                                                            <td>BT50</td>
                                                            <td rowspan="3">RTMBU ALT 06 / RTMBU ALC 06</td>
                                                            <td>25.4-28</td>
                                                            <td>80</td>
                                                            <td>123</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>RTFBB 28-31 BT50</td>
                                                            <td>BT50</td>
                                                            <td>28-31</td>
                                                            <td>80</td>
                                                            <td>123</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>RTFBB 31-34 BT50</td>
                                                            <td>BT50</td>
                                                            <td>31-34</td>
                                                            <td>90</td>
                                                            <td>133</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>RTFBB 33.1-38 BT50</td>
                                                            <td>BT50</td>
                                                            <td rowspan="2">RTMBU ALT 09 / RTMBU ALTP 09</td>
                                                            <td>33.1-38</td>
                                                            <td>90</td>
                                                            <td>133</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>RTFBB 38-43 BT50</td>
                                                            <td>BT50</td>
                                                            <td>38-43</td>
                                                            <td>90</td>
                                                            <td>133</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>RTFBB 42.6-51 BT50</td>
                                                            <td>BT50</td>
                                                            <td rowspan="17">RTMBU ALT 11 / RTMBU ALTP 11 / RTMBU ALC 09</td>
                                                            <td>42.6-51</td>
                                                            <td>90</td>
                                                            <td>133</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>RTFBB 51-59 BT50</td>
                                                            <td>BT50</td>
                                                            <td>51-59</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="8">Fig No.3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>RTFBB 59-67 BT50</td>
                                                            <td>BT50</td>
                                                            <td>59-67</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>RTFBB 67-75 BT50</td>
                                                            <td>BT50</td>
                                                            <td>67-75</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>RTFBB 75-83 BT50</td>
                                                            <td>BT50</td>
                                                            <td>75-83</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>RTFBB 83-91 BT50</td>
                                                            <td>BT50</td>
                                                            <td>83-91</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>RTFBB 91-99 BT50</td>
                                                            <td>BT50</td>
                                                            <td>91-99</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>RTFBB 99-107 BT50</td>
                                                            <td>BT50</td>
                                                            <td>99-107</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>RTFBB 107-115 BT50</td>
                                                            <td>BT50</td>
                                                            <td>107-115</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="7">Fig No.4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td>RTFBB 115-124 BT50</td>
                                                            <td>BT50</td>
                                                            <td>115-124</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td>RTFBB 124-132 BT50</td>
                                                            <td>BT50</td>
                                                            <td>124-132</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>20</td>
                                                            <td>RTFBB 132-140 BT50</td>
                                                            <td>BT50</td>
                                                            <td>132-140</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>RTFBB 140-148 BT50</td>
                                                            <td>BT50</td>
                                                            <td>140-148</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td>RTFBB 148-156 BT50</td>
                                                            <td>BT50</td>
                                                            <td>148-156</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td>RTFBB 156-164 BT50</td>
                                                            <td>BT50</td>
                                                            <td>156-164</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="6">Fig No.3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>RTFBB 60.6-72 BT50</td>
                                                            <td>BT50</td>
                                                            <td rowspan="10">RTMBU ALT 16 / RTMBU ALTP 16</td>
                                                            <td>60.6-72</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>RTFBB 72-84 BT50</td>
                                                            <td>BT50</td>
                                                            <td>72-84</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td>RTFBB 84-96 BT50</td>
                                                            <td>BT50</td>
                                                            <td>84-96</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td>RTFBB 96-108 BT50</td>
                                                            <td>BT50</td>
                                                            <td>96-108</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>RTFBB 108-120 BT50</td>
                                                            <td>BT50</td>
                                                            <td>108-120</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="5">Fig No.4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>29</td>
                                                            <td>RTFBB 120-132 BT50</td>
                                                            <td>BT50</td>
                                                            <td>120-132</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30</td>
                                                            <td>RTFBB 132-144 BT50</td>
                                                            <td>BT50</td>
                                                            <td>132-144</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>31</td>
                                                            <td>RTFBB 144-156 BT50</td>
                                                            <td>BT50</td>
                                                            <td>144-156</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                        <tr>
                                                            <td>32</td>
                                                            <td>RTFBB 156-168 BT50</td>
                                                            <td>BT50</td>
                                                            <td>156-168</td>
                                                            <td>100</td>
                                                            <td>143</td>
                                                        </tr>
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools do not include Micro Bore Units and inserts. Order for Micro Bore Units to be placed separately.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized fine boring bars for other spindle tapers / Side-Lock type can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized fine boring bars for special diameter ranges can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range "D" calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized fine boring bars with anti-vibration treatment can be tailor made with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above standard variants are for Left hand cutting only and for ID boring application only. Other Fine Boring Tools for Right hand cutting & other applications such as OD Turning, Undercut Machining & Back Boring can be tailor made as per requirement. For all these applications, standard Micro Bore Units are available from Renuka Tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Renuka Tools strongly recommend using these Fine Boring Tools for one particular diameter only. Too much of fiddling with adjustments, may result in permanent damage of the Micro Bore Unit and thus need to be used with precautions.</li>
                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer to Renuka Tools' Micro Bore Unit's catalogue / webpage for details of Micro Bore Units used in above Fine Boring Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here</a> for further details on Micro Bore Units </li>
                                                            <?php }else if($ProductCategory == 'std_products') { ?>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer to Renuka Tools' Micro Bore Unit's catalogue / webpage for details of Micro Bore Units used in above Fine Boring Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" target="_blank">Click here</a> for further details on Micro Bore Units </li>
                                                                <?php }else {  echo "php error"; } ?>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal of 0.5mm diametrically.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_three">
                                            <h6 class="tab_heading">Back Boring Tool</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Back Boring/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Back Boring/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Back Boring/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/Back Boring/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø22.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for Back Boring application will be tailor made as per requirements. </li>
                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; For Back Boring applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here </a> to know more </li>
                                                            <?php }else if($ProductCategory == 'std_products') { ?>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; For Back Boring applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" target="_blank">Click here </a> to know more </li>
                                                                <?php }else {  echo "php error"; } ?>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_four">
                                            <h6 class="tab_heading">ID Boring & Undercut Machining</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/ID Boring & Undercut/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/ID Boring & Undercut/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/ID Boring & Undercut/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/ID Boring & Undercut/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø37.1mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for ID Boring & Undercut Machining application will be tailor made as per requirements. </li>
                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; For ID Boring & Undercut Machining applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here </a> to know more. </li>
                                                            <?php }else if($ProductCategory == 'std_products') { ?>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; For ID Boring & Undercut Machining applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" target="_blank">Click here </a> to know more. </li>
                                                                <?php }else {  echo "php error"; } ?>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_fifth">
                                            <h6 class="tab_heading">OD Turning & Undercut Machining</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/OD Turning & Undercut/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/OD Turning & Undercut/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/OD Turning & Undercut/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/OD Turning & Undercut/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø12.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for OD Turning & Undercut Machining application will be tailor made as per requirements. </li>
                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For OD Turning & Undercut Machining applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here </a> to know more. </li>
                                                        <?php }else if($ProductCategory == 'std_products') { ?>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For OD Turning & Undercut Machining applications, standard Micro Bore Units are available from Renuka Tools. <a href="cartridges_micro_bore_units_mbu.php?product_category=products" target="_blank">Click here </a> to know more. </li>
                                                        <?php }else {  echo "php error"; } ?>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_sixth">
                                            <h6 class="tab_heading">Operating Instructions</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Mount the Micro Bore Unit properly in the finish boring tool supplied by Renuka Tools. This can be easily done by simply tightening the mounting screws in a proper manner (Pic1).In case the tool is of any other brand ensure that the manufacturer adheres to the mounting instructions provided by Renuka Tools. Else, it might result in non-efficient working or even tool failure.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Operating Instructions/Small 1.jpg" alt="include/img/Fine Boring Bars - MBU/Operating Instructions/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Set the required diameter before clamping the tool onthe machine, ideally on a tool pre-setter, or else with the help of a precise dial indicator (Pic2). During this setting, ensure that any one scale marking on the MBU inner scale coincides exactly with the extreme end marking on the outer vernier scale. This will automatically match some other inner scale marking with the other extreme end of the outer vernier scale (Pic3). This will help the user to quickly adjust after initial trial of tool..</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Operating Instructions/Small 2.jpg" alt="include/img/Fine Boring Bars - MBU/Operating Instructions/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; See if the desired results obtained by running the tool on the machine. In case of any deviation in the desired results, kindly use the spanner for adjustment. For increasing the diameter, rotate in clockwise direction and for decreasing, rotate in counter-clockwise direction. The least count of the inner MBU scale is 20microns on diameter (i.e. 10 microns radially). Now use the vernier scale for adjustment. If the diameter reading has to be increased, kindly match the adjacent marking (of left side) with the nearest vernier scale marking. This will result in increase of 2 microns on the diameter (i.e. 1 micron radially) (Pic 3.1 Zoomed). For reduction of diameter, follow the same procedure in the opposite direction (Pic 3.2 Zoomed).</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Operating Instructions/Small 3.jpg" alt="include/img/Fine Boring Bars - MBU/Operating Instructions/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Maximum diameter adjustment can be checked from the rear end of the spanner (Pic4). Do not exceed the maximum limit as it may cause permanent damage to the unit.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Fine Boring Bars - MBU/Operating Instructions/Small 4.jpg" alt="include/img/Fine Boring Bars - MBU/Operating Instructions/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fine_boring_bars_with_micro_bore_units_tab_seventh">
                                            <h6 class="tab_heading">Precautionary Measures</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Due to constraints in the assembly tolerances, it is recommended that units, if damaged, are returned to Renuka Tools for assessment/repair in a controlled environment. Commercials for repair can only be determined after detailed assessment of the damaged unit.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Renuka Tools Micro Bore Unit cannot be adjusted beyond its range and the maximum range can be checked from the thickness of the end portion of the spanner provided along with the unit. Exceeding the range might result in permanent damage to the unit.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Kindly change the mounting screws and insert screws ahead in time to avoid accidents.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In case of any observed decrease in accuracy over the time of usage, kindly request Renuka Tools for servicing the unit.</li>
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

    </html>