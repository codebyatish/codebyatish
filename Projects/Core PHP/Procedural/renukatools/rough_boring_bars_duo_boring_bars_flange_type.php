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
                                    <h1>Duo Boring Bars - Flange Type</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="rough_boring_bars_page.php" style="color: #2a80b9;" >Rough Boring Bars</a></li>

                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">Duo Boring Bars - Flange Type</a></li>
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
                                        <li class="list-group-item"><a class="first_sub_menu active">Rough Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;">
                                                <li><a href="rough_boring_bars_fixed_pocket_type.php?product_category=products">Fixed Pocket type Rough Boring Bars (Core Drills)</a></li>
                                                <li><a class="second_sub_menu active">Duo Boring Bars </a><i class="second fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel" style="display: block;">
                                                        <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=products">Intoduction To Duo</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=products">Duo Boring Bars - Integral Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=products">Duo Boring Bars - Modular Type</a></li>
                                                        <li class="active_menu"><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=products" style="color: white !important;">Duo Boring Bars - Flange Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_side_lock_type.php?product_category=products">Duo Boring Bars - Side Lock Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_arbor_type.php?product_category=products">Duo Boring Bars - Arbor Type</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a href="antivibration_boring_bars.php?product_category=products">Antivibration Boring Bars</a></li>
                                        <li class="list-group-item"><a href="back_boring_bars.php?product_category=products">Back Boring Bars</a></li>
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
                                                <li><a href="dovetail_taper_angle_milling_cutters.php?product_category=products">Dovetail Taper Angle Milling Cutters</a></li>
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
                                                <li><a href="turning_tools_parting_and_od_turning_tools.php?product_category=products">Parting & OD Turning Tools</a></li>
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
                                            <li class="list-group-item"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products">Fine Boring Bars - MBU</a></li>
                                            <li class="list-group-item"><a href="eccentric_fine_boring_tools.php?product_category=std_products">Eccentric Fine Boring Tools</a></li>
         <!--                                    <li class="list-group-item"><a href="cartridges_finish_boring_cartridges.php?product_category=std_products">Finish Boring Cartridges</a></li> -->
                                            <li class="list-group-item"><a class="first_sub_menu">BCA Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                <ul class="slideup">
                                                    <li><a href="bca_boring_bars.php?product_category=std_products">Intoduction To BCA</a></li>
                                                    <li><a href="bca_boring_bars_integral_type.php?product_category=std_products">BCA Boring Bars - Integral Type</a></li>
                                                    <li><a href="bca_boring_bars_modular_type.php?product_category=std_products">BCA Boring Bars - Modular Type</a></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item"><a href="boring_kit.php?product_category=std_products">Boring Kit</a></li>
                                            <li class="list-group-item"><a class="first_sub_menu active">Duo Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                                <ul class="slideup" style="display: block;">
                                                    <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=std_products">Intoduction To Duo</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=std_products">Duo Boring Bars - Integral Type</a></li>
                                                    <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=std_products">Duo Boring Bars - Modular Type</a></li>
                                                    <li class="active_menu"><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=std_products" style="color: white !important;">Duo Boring Bars - Flange Type</a></li>
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
                                <h5 class="entry-title">Duo Boring Bars - Flange Type</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#rough_boring_bars_duo_boring_bars_flange_type_tab_one">Assembly details</a> </li>
                                        <li> <a data-toggle="tab" href="#rough_boring_bars_duo_boring_bars_flange_type_tab_two">For TC.. Inserts</a> </li>
                                        <li> <a data-toggle="tab" href="#rough_boring_bars_duo_boring_bars_flange_type_tab_three">For CC.. Inserts</a> </li>
                                        <li> <a data-toggle="tab" href="#rough_boring_bars_duo_boring_bars_flange_type_tab_four">Adaptors for Flange Type</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="rough_boring_bars_duo_boring_bars_flange_type_tab_one">
                                            <div class="tab-one">
                                                <h6 class="tab_heading">Assembly Details - Schematic Drawing</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/Assembly details/Small 1.jpg" alt="include/img/DUO_Flange/Assembly details/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering Flange</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Introduction/Nomenclature/Small 3.jpg" alt="include/img/DUO_Introduction/Nomenclature/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rough_boring_bars_duo_boring_bars_flange_type_tab_two">
                                            <h6 class="tab_heading">Flange Type Duo Boring Bar for TC.. Inserts</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/For TC Inserts/Small 1.jpg" alt="include/img/DUO_Flange/For TC Inserts/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/For TC Inserts/Small 2.jpg" alt="include/img/DUO_Flange/For TC Inserts/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Flange Item Code</th>
                                                        <th>Adaptor Item Code</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>D1</th>
                                                        <th>D2</th>
                                                        <th>GPL</th>
                                                        <th>Total Tool Weight</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 200-250 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40120</p>
                                                            </td>
                                                            <td>
                                                                <p>200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>4.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 200-250 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50120</p>
                                                            </td>
                                                            <td>
                                                                <p>200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>5.2Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 250-300 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40120</p>
                                                            </td>
                                                            <td>
                                                                <p>250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>4.8Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 250-300 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50120</p>
                                                            </td>
                                                            <td>
                                                                <p>250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>5.4Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 300-350 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>5.6Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 300-350 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 350-400 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>6.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 350-400 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>7.4Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 400-450 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>7.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 400-450 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>8.9Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 450-500 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>7.9Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FT 450-500 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>9.4Kg</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Suitable Inserts for all the above models are TC..16T3.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Cartridge part number for all above models is CART DUO FT (2nos. in each tool). </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Working length for all the above tools is 140mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Material used for Flange is Aluminium for weight reduction. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares are supplied with the tools. If required, can be ordered separately as well. Inserts not included. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range “D” calculated considering 0.8mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized boring bars with anti-vibration treatment can be tailor made with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the tables below these notes for the cartridge details and spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Cartridge details for Flange Type Duo Boring Bar</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Cartridge Item Code</th>
                                                            <th>Insert</th>
                                                            <th>Screw</th>
                                                            <th>Torx</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CART DUO FT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>(M3.5)</p>
                                                            </td>
                                                            <td>
                                                                <p>T-15</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Insert</th>
                                                            <th>Insert Screw</th>
                                                            <th>Torx</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>M3.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-15</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rough_boring_bars_duo_boring_bars_flange_type_tab_three">
                                            <h6 class="tab_heading">Flange Type Duo Boring Bar for CC.. Inserts</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/For CC Inserts/Small 1.jpg" alt="include/img/DUO_Flange/For CC Inserts/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/For CC Inserts/Small 2.jpg" alt="include/img/DUO_Flange/For CC Inserts/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Flange Item Code</th>
                                                        <th>Adaptor Item Code</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>D1</th>
                                                        <th>D2</th>
                                                        <th>GPL</th>
                                                        <th>Total Tool Weight</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 200-250 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40120</p>
                                                            </td>
                                                            <td>
                                                                <p>200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>4.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 200-250 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50120</p>
                                                            </td>
                                                            <td>
                                                                <p>200-250</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>5.2Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 250-300 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40120</p>
                                                            </td>
                                                            <td>
                                                                <p>250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>4.8Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 250-300 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50120</p>
                                                            </td>
                                                            <td>
                                                                <p>250-300</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>5.4Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 300-350 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>5.6Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 300-350 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>300-350</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>6.3Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 350-400 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>6.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 350-400 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>350-400</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>7.4Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 400-450 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>7.1Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 400-450 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>400-450</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>8.9Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 450-500 BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>F 450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>7.9Kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT DUO FC 450-500 BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>F 450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>450-500</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>178</p>
                                                            </td>
                                                            <td>
                                                                <p>9.4Kg</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp;Suitable Inserts for all the above models are CC..1204.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Cartridge part number for all the above mentioned models is CART DUO FC (2nos. in each tool). </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Working length for all the above tools is 140mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Material used for Flange is Aluminium for weight reduction. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares are supplied with the tools. If required, can be ordered separately as well. Inserts not included. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range “D” calculated considering 0.8mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized boring bars with anti-vibration treatment can be tailor made with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the tables below these notes for the cartridge details and spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Cartridge details for Flange Type Duo Boring Bar</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</td>
                                                                <th>Cartridge Item Code</th>
                                                                <th>Insert</th>
                                                                <th>Screw</th>
                                                                <th>Torx</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CART DUO FT</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 1204</p>
                                                            </td>
                                                            <td>
                                                                <p>(M4.5)</p>
                                                            </td>
                                                            <td>
                                                                <p>T-20</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</td>
                                                                <th>Insert</th>
                                                                <th>Insert Screw</th>
                                                                <th>Torx</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..1204</p>
                                                            </td>
                                                            <td>
                                                                <p>M4.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-20</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rough_boring_bars_duo_boring_bars_flange_type_tab_four">
                                            <h6 class="tab_heading">Adaptor Details for Flange Type Duo Boring Bar</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/Adaptors/Small 1.jpg" alt="include/img/DUO_Flange/Adaptors/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/DUO_Flange/Adaptors/Small 2.jpg" alt="include/img/DUO_Flange/Adaptors/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <h6 class="tab_heading">Specification Chart</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;">All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Adaptor Item Code</th>
                                                        <th>Spindle Taper</th>
                                                        <th>Adaptor OD dA</th>
                                                        <th>D2</th>
                                                        <th>L</th>
                                                        <th>GPL of Adaptor</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40120</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>89</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT40150</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 40</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>89</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50120</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>120</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>ADPF BT50150</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Customized adaptors of any spindle taper can also be provided but will be made to order with lead time of 3-6 weeks</li>
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