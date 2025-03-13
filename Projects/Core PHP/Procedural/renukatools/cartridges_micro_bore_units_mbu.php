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
                                    <h1>Micro Bore Units - MBU</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="cartridges_page.php" style="color: #2a80b9;" >Cartridges</a></li>
                                                
                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: pointer;">Micro Bore Units - MBU</a></li>
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
                                        <li class="list-group-item"><a class="first_sub_menu">Finish Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products">Fine Boring Bars with Micro Bore Units</a></li>
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
                                        <li class="list-group-item"><a class="first_sub_menu active">Cartridges</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;">
                                                <li class="active_menu"><a href="cartridges_micro_bore_units_mbu.php?product_category=products" style="color: white !important;">Micro Bore Units - MBU</a></li>
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
                                            <li class="list-group-item active_menu"><a href="cartridges_micro_bore_units_mbu.php?product_category=std_products" style="color: white !important;">Micro Bore Units - MBU</a></li>
                                            <li class="list-group-item"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products">Fine Boring Bars With MBU</a></li>
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
                                <h5 class="entry-title">Micro Bore Units - MBU</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_one">Introduction</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_two">Angular Mounting Type</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_three">Straight Mounting Type</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_four">Applications</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_fifth">Mounting Dimensions for MBU</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_sixth">Working Dimensions for MBU</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_seventh">Operating Instructions</a> </li>
                                        <li> <a data-toggle="tab" href="#cartridges_micro_bore_units_mbu_tab_eighth">Precautionary Measures</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="cartridges_micro_bore_units_mbu_tab_one">
                                            <div class="tab-one">
                                                <h6 class="tab_heading">Micro Bore Units</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Introduction/micro_bore_units_small.jpg" alt="include/img/Micro Bore Units/Introduction/micro_bore_units_big.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Facts & Advantages</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Precision Finish Boring Unit with high accuracy & repeatability.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Used for machining close tolerances.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Facilitates precision adjustment with least count of 1 micron (0.001mm) .</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Can be mounted in blind holes with provision of adjustment from the top.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Self-clamping / Self-locking units i.e. no tightening & loosening of screws involved.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Pre-loaded (pre-tensioned) assembly guaranteeing almost zero backlash.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Adjustment can be done directly while the tool is on the machine, thus reducing downtime or setting time.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available in a wide range of variants and inserts enabling high degree of flexibility & a variety of precision boring applications.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Directly interchangeable in the same tools as R/L148C or T-Max U fine boring unit or equivalent.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering MBU</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Nomenclature/Small 1.jpg" alt="include/img/Micro Bore Units/Nomenclature/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering Fine Boring Bar with MBU</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Nomenclature/Small 2.jpg" alt="include/img/Micro Bore Units/Nomenclature/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_two">
                                            <h6 class="tab_heading">MBU - Angular Mounting Type</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_small1.jpg" alt="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_small2.jpg" alt="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_small3.jpg" alt="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_big3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_small4.jpg" alt="include/img/Micro Bore Units/Angular Mounting Type/angular_mounting_type_big4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2"> Sr. No </th>
                                                            <th colspan="2"> Item Code </th>
                                                            <th rowspan="2"> Insert </th>
                                                            <th rowspan="2"> Db </th>
                                                            <th rowspan="2"> L1 </th>
                                                            <th rowspan="2"> F1 </th>
                                                            <th rowspan="2"> Dmin </th>
                                                            <th rowspan="2"> Mounting
                                                                <br> Screw </th>
                                                            <th rowspan="2"> Insert
                                                                <br> Screw </th>
                                                            <th rowspan="2"> Torx </th>
                                                            <th rowspan="2"> Spanner </th>
                                                            <th colspan="2"> Stock </th>
                                                        </tr>
                                                        <tr>
                                                            <th>LH</th>
                                                            <th>RH</th>
                                                            <th>LH</th>
                                                            <th>RH</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALC 04</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARC 04</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>11.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.00</p>
                                                            </td>
                                                            <td>
                                                                <p>20.0</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS040000</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T7</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS04</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALC 06</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARC 06</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>14.3</p>
                                                            </td>
                                                            <td>
                                                                <p>0.45</p>
                                                            </td>
                                                            <td>
                                                                <p>25.9</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS06</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALC 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARC 09</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>19.1</p>
                                                            </td>
                                                            <td>
                                                                <p>1.00</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALD 07</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARD 07</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..0702</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALT 06</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ART 06</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>14.3</p>
                                                            </td>
                                                            <td>
                                                                <p>0.20</p>
                                                            </td>
                                                            <td>
                                                                <p>25.4</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS06</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALT 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ART 09</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>19.1</p>
                                                            </td>
                                                            <td>
                                                                <p>1.00</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALT 11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ART 11</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>23.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.10</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALT 16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ART 16</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>33.3</p>
                                                            </td>
                                                            <td>
                                                                <p>1.20</p>
                                                            </td>
                                                            <td>
                                                                <p>60.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000016</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS16</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALTP 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARTP 09</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>19.1</p>
                                                            </td>
                                                            <td>
                                                                <p>1.00</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALTP 11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARTP 11</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..1103</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>23.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.10</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ALTP 16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU ARTP 16</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>33.3</p>
                                                            </td>
                                                            <td>
                                                                <p>1.20</p>
                                                            </td>
                                                            <td>
                                                                <p>60.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000016</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS16</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Micro Bore Units are delivered with all required spares such as insert screw, mounting screws, spanner & torx keys. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with Micro Bore Units.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Spares are sold separately as well and can be ordered as per the ordering code shown in above table. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In the above table, <i class="fa fa-star" aria-hidden="true"></i> denotes ready in stock & <i class="fa fa-square" aria-hidden="true"></i> denotes lead time of one week.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum diameter (Dmin) calculated based on 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; MBU variants SL/RDU 07 are specially designed for close tolerance undercut applications. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized MBU for special requirements can also be provided but will be made to order with a lead time of 3-6 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Clamping Torque Chart for Mounting Screw & Insert Screw of RT MBU</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <div class="responsive_table">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <th>Sr. No.</th>
                                                                <th>Mounting Screw</th>
                                                                <th>Torque (N.m)</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p>1</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS040000</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>1.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000609</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>2.2</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>3</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000011</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>4.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>4</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000016</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>5.7</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="responsive_table">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <th>Sr. No.</th>
                                                                <th>Insert Screw</th>
                                                                <th>Torque (N.m)</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p>1</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.0</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>0.6</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>0.8</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>3</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.5</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>1.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>4</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M3.5</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>2.5</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_three">
                                            <h6 class="tab_heading">MBU - Straight Mounting Type</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_small1.jpg" alt="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_small2.jpg" alt="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_small3.jpg" alt="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_big3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_small4.jpg" alt="include/img/Micro Bore Units/Straight Mounting Type/straight_mounting_type_big4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2"> Sr. No </th>
                                                            <th colspan="2"> Item Code </th>
                                                            <th rowspan="2"> Insert </th>
                                                            <th rowspan="2"> Db </th>
                                                            <th rowspan="2"> L1 </th>
                                                            <th rowspan="2"> F1 </th>
                                                            <th rowspan="2"> Dmin </th>
                                                            <th rowspan="2"> Mounting
                                                                <br> Screw </th>
                                                            <th rowspan="2"> Insert
                                                                <br> Screw </th>
                                                            <th rowspan="2"> Torx </th>
                                                            <th rowspan="2"> Spanner </th>
                                                            <th colspan="2"> Stock </th>
                                                        </tr>
                                                        <tr>
                                                            <th>LH</th>
                                                            <th>RH</th>
                                                            <th>LH</th>
                                                            <th>RH</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLC 04</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRC 04</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>11.0</p>
                                                            </td>
                                                            <td>
                                                                <p>4.1</p>
                                                            </td>
                                                            <td>
                                                                <p>22.0</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS040000</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T7</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS04</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLC 06</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRC 06</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>13.3</p>
                                                            </td>
                                                            <td>
                                                                <p>5.1</p>
                                                            </td>
                                                            <td>
                                                                <p>27.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS06</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLC 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRC 09</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>18.3</p>
                                                            </td>
                                                            <td>
                                                                <p>7.2</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLT 06</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRT 06</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>13.3</p>
                                                            </td>
                                                            <td>
                                                                <p>4.1</p>
                                                            </td>
                                                            <td>
                                                                <p>26.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS06</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLT 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRT 09</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>18.3</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLT 11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRT 11</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>22.1</p>
                                                            </td>
                                                            <td>
                                                                <p>7.2</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLT 16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRTC 16</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>10.3</p>
                                                            </td>
                                                            <td>
                                                                <p>69.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000016</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS16</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLTP 09</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRTP 09</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>18.3</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T6/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLTP 11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRTP 11</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..1103</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>22.1</p>
                                                            </td>
                                                            <td>
                                                                <p>7.2</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLTP16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRTP 16</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>10.3</p>
                                                            </td>
                                                            <td>
                                                                <p>69.6</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000016</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS16</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLDU 07 20</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRDU 07 20</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..0702</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>18.3</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000609</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T10</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS09</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SLDU 07 22</p>
                                                            </td>
                                                            <td>
                                                                <p>RT MBU SRDU 07 22</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..0702</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>22.1</p>
                                                            </td>
                                                            <td>
                                                                <p>7.2</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>RTMS000011</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T7/T15</p>
                                                            </td>
                                                            <td>
                                                                <p>RTS11</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Micro Bore Units are delivered with all required spares such as insert screw, mounting screws, spanner & torx keys. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with Micro Bore Units.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Spares are sold separately as well and can be ordered as per the ordering code shown in above table. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In the above table, <i class="fa fa-star" aria-hidden="true"></i> denotes ready in stock & <i class="fa fa-square" aria-hidden="true"></i> denotes lead time of one week.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum diameter (Dmin) calculated based on 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; MBU variants SL/RDU 07 are specially designed for close tolerance undercut applications. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized MBU for special requirements can also be provided but will be made to order with a lead time of 3-6 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Clamping Torque Chart for Mounting Screw & Insert Screw of RT MBU</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <div class="responsive_table">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <th>Sr. No.</th>
                                                                <th>Mounting Screw</th>
                                                                <th>Torque (N.m)</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p>1</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS040000</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>1.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000609</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>2.2</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>3</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000011</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>4.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>4</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>RTMS000016</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>5.7</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="responsive_table">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <th>Sr. No.</th>
                                                                <th>Insert Screw</th>
                                                                <th>Torque (N.m)</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p>1</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.0</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>0.6</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.2</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>0.8</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>3</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M2.5</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>1.0</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>4</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>M3.5</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>2.5</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_four">
                                            <h6 class="tab_heading">Illustrative Applications of Fine Boring using Micro Bore Units</h6>
                                            <div class="product-review-info">
                                                <ul class="nav review-tab">
                                                    <li> <a class="active" data-toggle="tab" href="#applications_of_mbu_tab_one">ID Boring</a> </li>
                                                    <li> <a data-toggle="tab" href="#applications_of_mbu_tab_two">OD Turning & Undercut</a> </li>
                                                    <li> <a data-toggle="tab" href="#applications_of_mbu_tab_three">Back Boring</a> </li>
                                                    <li> <a data-toggle="tab" href="#applications_of_mbu_tab_four">ID Boring & Undercut</a> </li>
                                                </ul>
                                                <div class="tab-content reviews-tab">
                                                    <div class="tab-pane fade show active" id="applications_of_mbu_tab_one">
                                                        <div class="tab-one">
                                                            <h6 class="tab_heading">ID Boring Application using Micro Bore Units </h6>
                                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                                <div class="col-md-1"> </div>
                                                                <div class="col-md-5">
                                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/ID Boring/application_id_boring_small1.jpg" alt="include/img/Micro Bore Units/ID Boring/application_id_boring_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/ID Boring/application_id_boring_small2.jpg" alt="include/img/Micro Bore Units/ID Boring/application_id_boring_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                                </div>
                                                                <div class="col-md-1"> </div>
                                                            </div>
                                                            <h6 class="tab_heading">Notes</h6>
                                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                                <div class="col-md-12">
                                                                    <ul>
                                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø20.0mm</li>
                                                                        <?php  if ($ProductCategory == 'products') {  ?>
                                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Standard range of Fine Boring Tools for ID boring application are available from Renuka Tools. <a href="fine_boring_bars_with_micro_bore_units.php?product_category=products" target="_blank">Click here </a> know more. </li>
                                                                        <?php }else if($ProductCategory == 'std_products') { ?>
                                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Standard range of Fine Boring Tools for ID boring application are available from Renuka Tools. <a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products" target="_blank">Click here </a> to know more. </li>
                                                                        <?php }else {  echo "php error"; } ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="applications_of_mbu_tab_two">
                                                        <h6 class="tab_heading">OD Turning & Undercut Machining Application using Micro Bore Units </h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-1"> </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/OD Turning & Undercut/application_od_turning_and_undercut_small1.jpg" alt="include/img/Micro Bore Units/OD Turning & Undercut/application_od_turning_and_undercut_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/OD Turning & Undercut/application_od_turning_and_undercut_small2.jpg" alt="include/img/Micro Bore Units/OD Turning & Undercut/application_od_turning_and_undercut_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-1"> </div>
                                                        </div>
                                                        <h6 class="tab_heading">Notes</h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-12">
                                                                <ul>
                                                                    <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø12.0mm </li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for OD Turning & Undercut Machining application will be tailor made as per requirements.</li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="applications_of_mbu_tab_three">
                                                        <h6 class="tab_heading">Back Boring Application using Micro Bore Units </h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-1"> </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Back Boring/application_back_boring_small1.jpg" alt="include/img/Micro Bore Units/Back Boring/application_back_boring_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Back Boring/application_back_boring_small2.jpg" alt="include/img/Micro Bore Units/Back Boring/application_back_boring_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-1"> </div>
                                                        </div>
                                                        <h6 class="tab_heading">Notes</h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-12">
                                                                <ul>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø22.0mm </li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for Back Boring application will be tailor made as per requirements.</li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="applications_of_mbu_tab_four">
                                                        <h6 class="tab_heading">ID Boring & Undercut Machining Application using Micro Bore Units </h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-1"> </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/ID Boring & Undercut/application_id_boring_and_undercut_small1.jpg" alt="include/img/Micro Bore Units/ID Boring & Undercut/application_id_boring_and_undercut_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/ID Boring & Undercut/application_id_boring_and_undercut_small2.jpg" alt="include/img/Micro Bore Units/ID Boring & Undercut/application_id_boring_and_undercut_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                            </div>
                                                            <div class="col-md-1"> </div>
                                                        </div>
                                                        <h6 class="tab_heading">Notes</h6>
                                                        <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                            <div class="col-md-12">
                                                                <ul>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø37.1mm </li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Fine Boring Tools for ID Boring & Undercut Machining application will be tailor made as per requirements.</li>
                                                                    <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_fifth">
                                            <h6 class="tab_heading">Mounting Dimensions for Micro Bore Units</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-2"> </div>
                                                <div class="col-md-8">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Mounting Dimensions/mounting_dimmensions_for_mbu_small.jpg" alt="include/img/Micro Bore Units/Mounting Dimensions/mounting_dimmensions_for_mbu_big.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-2"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th> Detail </th>
                                                            <th> Sr.No. </th>
                                                            <th> Insert </th>
                                                            <th> DhH7 </th>
                                                            <th> d1 </th>
                                                            <th> d2 </th>
                                                            <th> d3 </th>
                                                            <th> h3 </th>
                                                            <th> h4 </th>
                                                            <th> h5 </th>
                                                            <th> Th </th>
                                                            <th> hc </th>
                                                            <th> T </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="10">
                                                                <p>A</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>3.7</p>
                                                            </td>
                                                            <td>
                                                                <p>2.7</p>
                                                            </td>
                                                            <td>
                                                                <p>9.3</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>1.2</p>
                                                            </td>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>8.65 &plusmn;0.02</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>19</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>11.5</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>9.65 &plusmn;0.02</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>25</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>15.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>12.50 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>19</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>11.5</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>9.65 &plusmn;0.02</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>25</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>15.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>12.50 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.3</p>
                                                            </td>
                                                            <td>
                                                                <p>24.0</p>
                                                            </td>
                                                            <td>
                                                                <p>5.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.8</p>
                                                            </td>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>15.40 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M4.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..0702</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>25</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>15.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>12.50 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..0702</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.3</p>
                                                            </td>
                                                            <td>
                                                                <p>24.0</p>
                                                            </td>
                                                            <td>
                                                                <p>5.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.8</p>
                                                            </td>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>15.40 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M4.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>25</p>
                                                            </td>
                                                            <td>
                                                                <p>4.6</p>
                                                            </td>
                                                            <td>
                                                                <p>3.2</p>
                                                            </td>
                                                            <td>
                                                                <p>15.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.6</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>12.50 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..1103</p>
                                                            </td>
                                                            <td>
                                                                <p>22</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.5</p>
                                                            </td>
                                                            <td>
                                                                <p>4.3</p>
                                                            </td>
                                                            <td>
                                                                <p>24.0</p>
                                                            </td>
                                                            <td>
                                                                <p>5.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.8</p>
                                                            </td>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>15.40 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M4.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">
                                                                <p>B</p>
                                                            </td>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>46</p>
                                                            </td>
                                                            <td>
                                                                <p>11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>5.4</p>
                                                            </td>
                                                            <td>
                                                                <p>33.0</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3</p>
                                                            </td>
                                                            <td>
                                                                <p>*</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>23.00 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M5.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                            <td>
                                                                <p>46</p>
                                                            </td>
                                                            <td>
                                                                <p>11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>5.4</p>
                                                            </td>
                                                            <td>
                                                                <p>33.0</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3</p>
                                                            </td>
                                                            <td>
                                                                <p>*</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>23.00 &plusmn;0.05</p>
                                                            </td>
                                                            <td>
                                                                <p>M5.0</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_sixth">
                                            <h6 class="tab_heading">MBU - Angular Mounting Type</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3"> </div>
                                                <div class="col-md-6">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Working Dimensions/working_dimmensions_for_mbu_small1.jpg" alt="include/img/Micro Bore Units/Working Dimensions/working_dimmensions_for_mbu_big1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th> Sr.No. </th>
                                                            <th> Insert </th>
                                                            <th> Dmin </th>
                                                            <th> D2 </th>
                                                            <th> Bmin </th>
                                                            <th> h1max </th>
                                                            <th> S1min </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..040104</p>
                                                            </td>
                                                            <td>
                                                                <p>20.0</p>
                                                            </td>
                                                            <td>
                                                                <p>19.0</p>
                                                            </td>
                                                            <td>
                                                                <p>0.50</p>
                                                            </td>
                                                            <td>
                                                                <p>1.5</p>
                                                            </td>
                                                            <td>
                                                                <p>8.3</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..060204</p>
                                                            </td>
                                                            <td>
                                                                <p>25.9</p>
                                                            </td>
                                                            <td>
                                                                <p>22.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.65</p>
                                                            </td>
                                                            <td>
                                                                <p>2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>10.7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T304</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>28.5</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>14.7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T104</p>
                                                            </td>
                                                            <td>
                                                                <p>25.4</p>
                                                            </td>
                                                            <td>
                                                                <p>22.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.45</p>
                                                            </td>
                                                            <td>
                                                                <p>2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>10.6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..090204</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>28.5</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>14.5</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..110204</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>38.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>4.8</p>
                                                            </td>
                                                            <td>
                                                                <p>17.2</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T304</p>
                                                            </td>
                                                            <td>
                                                                <p>60.6</p>
                                                            </td>
                                                            <td>
                                                                <p>55.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.80</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0</p>
                                                            </td>
                                                            <td>
                                                                <p>26.2</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..090204</p>
                                                            </td>
                                                            <td>
                                                                <p>33.1</p>
                                                            </td>
                                                            <td>
                                                                <p>28.5</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>2.8</p>
                                                            </td>
                                                            <td>
                                                                <p>14.5</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..110304</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>38.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>4.8</p>
                                                            </td>
                                                            <td>
                                                                <p>17.2</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..16T304</p>
                                                            </td>
                                                            <td>
                                                                <p>60.6</p>
                                                            </td>
                                                            <td>
                                                                <p>55.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.80</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0</p>
                                                            </td>
                                                            <td>
                                                                <p>26.2</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..070204</p>
                                                            </td>
                                                            <td>
                                                                <p>42.6</p>
                                                            </td>
                                                            <td>
                                                                <p>38.0</p>
                                                            </td>
                                                            <td>
                                                                <p>2.30</p>
                                                            </td>
                                                            <td>
                                                                <p>4.8</p>
                                                            </td>
                                                            <td>
                                                                <p>19.6</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">MBU - Straight Mounting Type</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-3"> </div>
                                                <div class="col-md-6">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Working Dimensions/working_dimmensions_for_mbu_small2.jpg" alt="include/img/Micro Bore Units/Working Dimensions/working_dimmensions_for_mbu_big2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-3"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th> Sr.No. </th>
                                                            <th> Insert </th>
                                                            <th> Dmin </th>
                                                            <th> D2 </th>
                                                            <th> Bmin </th>
                                                            <th> h1max </th>
                                                            <th> S1min </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..040104</p>
                                                            </td>
                                                            <td>
                                                                <p>22.0</p>
                                                            </td>
                                                            <td>
                                                                <p>21.0</p>
                                                            </td>
                                                            <td>
                                                                <p>0.50</p>
                                                            </td>
                                                            <td>
                                                                <p>2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>10.3</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..060204</p>
                                                            </td>
                                                            <td>
                                                                <p>27.6</p>
                                                            </td>
                                                            <td>
                                                                <p>26.0</p>
                                                            </td>
                                                            <td>
                                                                <p>0.55</p>
                                                            </td>
                                                            <td>
                                                                <p>2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>9.6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T304</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>34.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>17.5</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T104</p>
                                                            </td>
                                                            <td>
                                                                <p>26.1</p>
                                                            </td>
                                                            <td>
                                                                <p>25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>0.50</p>
                                                            </td>
                                                            <td>
                                                                <p>1.8</p>
                                                            </td>
                                                            <td>
                                                                <p>9.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..090204</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>34.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>13.6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..110204</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>46.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.0</p>
                                                            </td>
                                                            <td>
                                                                <p>16.4</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T304</p>
                                                            </td>
                                                            <td>
                                                                <p>69.6</p>
                                                            </td>
                                                            <td>
                                                                <p>67.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>10.0</p>
                                                            </td>
                                                            <td>
                                                                <p>25.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..090204</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>34.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>13.6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..110304</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>46.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.0</p>
                                                            </td>
                                                            <td>
                                                                <p>16.4</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>TP..16T304</p>
                                                            </td>
                                                            <td>
                                                                <p>69.6</p>
                                                            </td>
                                                            <td>
                                                                <p>67.0</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>10.0</p>
                                                            </td>
                                                            <td>
                                                                <p>25.0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..070204(20)</p>
                                                            </td>
                                                            <td>
                                                                <p>37.1</p>
                                                            </td>
                                                            <td>
                                                                <p>34.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>13.6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>DC..070204(22)</p>
                                                            </td>
                                                            <td>
                                                                <p>49.1</p>
                                                            </td>
                                                            <td>
                                                                <p>46.5</p>
                                                            </td>
                                                            <td>
                                                                <p>1.30</p>
                                                            </td>
                                                            <td>
                                                                <p>6.0</p>
                                                            </td>
                                                            <td>
                                                                <p>16.4</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_seventh">
                                            <h6 class="tab_heading">Operating Instructions</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Mount the Micro Bore Unit properly in the finish boring tool supplied by Renuka Tools. This can be easily done by simply tightening the mounting screws in a proper manner (Pic1).In case the tool is of any other brand ensure that the manufacturer adheres to the mounting instructions provided by Renuka Tools. Else, it might result in non-efficient working or even tool failure.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Operating Instructions/pic1_small.jpg" alt="include/img/Micro Bore Units/Operating Instructions/pic1_big.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Set the required diameter before clamping the tool on the machine, ideally on a tool pre-setter, or else with the help of a precise dial indicator (Pic2). During this setting, ensure that any one scale marking on the MBU inner scale coincides exactly with the extreme end marking on the outer vernier scale. This will automatically match some other inner scale marking with the other extreme end of the outer vernier scale (Pic3). This will help the user to quickly adjust after initial trial of tool.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Operating Instructions/pic2_small.jpg" alt="include/img/Micro Bore Units/Operating Instructions/pic2_big.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; See if the desired results obtained by running the tool on the machine. In case of any deviation in the desired results, kindly use the spanner for adjustment. For increasing the diameter, rotate in clockwise direction and for decreasing, rotate in counter-clockwise direction. The least count of the inner MBU scale is 20microns on diameter (i.e. 10 microns radially). Now use the vernier scale for adjustment. If the diameter reading has to be increased, kindly match the adjacent marking (of left side) with the nearest vernier scale marking. This will result in increase of 2 microns on the diameter (i.e. 1 micron radially) (Pic 3.1 Zoomed). For reduction of diameter, follow the same procedure in the opposite direction (Pic 3.2 Zoomed).</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Operating Instructions/pic3_small.jpg" alt="include/img/Micro Bore Units/Operating Instructions/pic3_big.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Maximum diameter adjustment can be checked from the rear end of the spanner (Pic4). Do not exceed the maximum limit as it may cause permanent damage to the unit.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Micro Bore Units/Operating Instructions/pic4_small.jpg" alt="include/img/Micro Bore Units/Operating Instructions/pic4_big.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cartridges_micro_bore_units_mbu_tab_eighth">
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
    <!-- Mirrored from demo.hasthemes.com/gengar-preview/gengar/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 05:14:13 GMT -->

    </html>