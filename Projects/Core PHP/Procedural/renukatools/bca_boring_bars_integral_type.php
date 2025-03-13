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
                                    <h1>BCA Boring Bars - Integral Type</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="finish_boring_bars_product_page.php" style="color: #2a80b9;" >Finish Boring Bars</a></li>
                                                
                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">BCA Boring Bars - Integral Type</a></li>
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
                                    <h5 class="entry-title">Products</h5>
                                    <ul class="list-group" style="margin: 10px 0px 5px 0px;">
                                        <li class="list-group-item"><a class="first_sub_menu active">Finish Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;">
                                                <li><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products">Fine Boring Bars with Micro Bore Units</a></li>
                                                <li><a href="eccentric_fine_boring_tools.php?product_category=products">Eccentric Fine Boring Tools</a></li>
                                                <li><a class="second_sub_menu active">BCA Boring Bars</a><i class="second fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel" style="display: block;">
                                                        <li><a href="bca_boring_bars.php?product_category=products">Intoduction To BCA Boring Bars</a></li>
                                                        <li class="active_menu"><a href="bca_boring_bars_integral_type.php?product_category=products" style="color: white !important;">BCA Boring Bars - Integral Type</a></li>
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
<!--                                             <li class="list-group-item"><a href="cartridges_finish_boring_cartridges.php?product_category=std_products">Finish Boring Cartridges</a></li> -->
                                            <li class="list-group-item"><a class="first_sub_menu active">BCA Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                                <ul class="slideup" style="display: block;">
                                                    <li><a href="bca_boring_bars.php?product_category=std_products">Intoduction To BCA Boring Bars</a></li>
                                                    <li class="active_menu"><a href="bca_boring_bars_integral_type.php?product_category=std_products" style="color: white !important;">BCA Boring Bars - Integral Type</a></li>
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
                                <h5 class="entry-title">BCA Boring Bars - Integral Type</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#bca_boring_bars_integral_type_tab_one">Integral Brazed Type</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_integral_type_tab_two_bt40">For TC.. Inserts - BT40</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_integral_type_tab_two_bt50">For TC.. Inserts - BT50</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_integral_type_tab_three_bt40">For CC.. Inserts - BT40</a> </li>
                                        <li> <a data-toggle="tab" href="#bca_boring_bars_integral_type_tab_three_bt50">For CC.. Inserts - BT50</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="bca_boring_bars_integral_type_tab_one">
                                            <div class="tab-one">
                                                <h6 class="tab_heading">Integral Brazed Type BCA Finish Boring Bar</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-5">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/Integral Type BCA - brazed/Small 1.jpg" alt="include/img/BCA_Integral/Integral Type BCA - brazed/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/Integral Type BCA - brazed/Small 2.jpg" alt="include/img/BCA_Integral/Integral Type BCA - brazed/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                            <th>Fig No.</th>
                                                            <th>Sr. No.</th>
                                                            <th>Item Code</th>
                                                            <th>Spindle Taper</th>
                                                            <th>Cartridge
                                                                <br> Item Code</th>
                                                            <th>D (Ømin - Ømax)</th>
                                                            <th>Li</th>
                                                            <th>GPL</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="3">
                                                                    <p>Fig 1</p>
                                                                </td>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p>RT BCA IB 16-22.5 BT40</p>
                                                                </td>
                                                                <td>
                                                                    <p>BT40</p>
                                                                </td>
                                                                <td>
                                                                    <p>RTBC01BB (BRAZED)</p>
                                                                </td>
                                                                <td>
                                                                    <p>16 - 22.5</p>
                                                                </td>
                                                                <td>
                                                                    <p>73</p>
                                                                </td>
                                                                <td>
                                                                    <p>105</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>2</p>
                                                                </td>
                                                                <td>
                                                                    <p>RT BCA IB 19-23.0 BT40</p>
                                                                </td>
                                                                <td>
                                                                    <p>BT40</p>
                                                                </td>
                                                                <td>
                                                                    <p>RTBC01AB (BRAZED)</p>
                                                                </td>
                                                                <td>
                                                                    <p>19 - 23.0</p>
                                                                </td>
                                                                <td>
                                                                    <p>88</p>
                                                                </td>
                                                                <td>
                                                                    <p>120</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                                            <th>Cartridge
                                                                <br> Item Code</th>
                                                            <th>Insert</th>
                                                            <th>D (Ømin - Ømax)</th>
                                                            <th>Li</th>
                                                            <th>GPL</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="3">
                                                                    <p>Fig 1</p>
                                                                </td>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p>RT BCA IB 16-22.5 BT50</p>
                                                                </td>
                                                                <td>
                                                                    <p>BT50</p>
                                                                </td>
                                                                <td>
                                                                    <p>RTBC01BB (BRAZED)</p>
                                                                </td>
                                                                <td>
                                                                    <p>16 - 22.5</p>
                                                                </td>
                                                                <td>
                                                                    <p>77</p>
                                                                </td>
                                                                <td>
                                                                    <p>120</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>2</p>
                                                                </td>
                                                                <td>
                                                                    <p>RT BCA IB 19-23.0 BT50</p>
                                                                </td>
                                                                <td>
                                                                    <p>BT50</p>
                                                                </td>
                                                                <td>
                                                                    <p>RTBC01AB (BRAZED)</p>
                                                                </td>
                                                                <td>
                                                                    <p>19 - 23.0</p>
                                                                </td>
                                                                <td>
                                                                    <p>92</p>
                                                                </td>
                                                                <td>
                                                                    <p>135</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h6 class="tab_heading">Notes</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares and cartridges are supplied with the tools. If required additionally, can be ordered separately as well. Inserts not included.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for other spindle tapers / side lock type can also be provided but will be made to order with lead time of 3-6 weeks</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for special diameters can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized BCA boring bars with anti-vibration treatment can be tailor made with a lead time of 3-6 weeks.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="bca_boring_bars_integral_type_tab_two_bt40">
                                            <h6 class="tab_heading">Integral Type BCA Finish Boring Bar for TC.. Inserts - BT40</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Small 1.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Small 2.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Small 3.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Small 4.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Small 5.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT40/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <th>Cartridge
                                                            <br> Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>Li</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 23-29 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03BT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>23-29</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                            <td>
                                                                <p>135</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 29-41 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>29-41</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 38-49 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05BT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>38-49</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 46-66 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>46-66</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 62-87 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>62-87</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">
                                                                <p>Fig 3</p>
                                                            </td>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 83-108 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>83-108</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 98-142 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>98-142</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares and cartridges are supplied with the tools. If required additionally, can be ordered separately as well. Inserts not included.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for other spindle tapers / side lock type can also be provided but will be made to order with lead time of 3-6 weeks</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for special diameters can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized BCA boring bars with anti-vibration treatment can be tailor made with a lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 16T3</p>
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
                                        <div class="tab-pane fade" id="bca_boring_bars_integral_type_tab_two_bt50">
                                            <h6 class="tab_heading">Integral Type BCA Finish Boring Bar for TC.. Inserts - BT50</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Small 1.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Small 2.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Small 3.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Small 4.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Small 5.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH TC.. - BT50/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <th>Cartridge
                                                            <br> Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>Li</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 23-29 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03BT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>23-29</p>
                                                            </td>
                                                            <td>
                                                                <p>107</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 29-41 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>29-41</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 38-49 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05BT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>38-49</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 46-66 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>46-66</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 62-87 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..1102</p>
                                                            </td>
                                                            <td>
                                                                <p>62-87</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="3">
                                                                <p>Fig 3</p>
                                                            </td>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 83-108 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>83-108</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 98-142 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>98-142</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 132-176 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>132-176</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>210</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">
                                                                <p>Fig 4</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 166-210 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>166-210</p>
                                                            </td>
                                                            <td>
                                                                <p>182</p>
                                                            </td>
                                                            <td>
                                                                <p>225</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IT 200-244 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AT</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..16T3</p>
                                                            </td>
                                                            <td>
                                                                <p>200-244</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>210</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares and cartridges are supplied with the tools. If required additionally, can be ordered separately as well. Inserts not included.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for other spindle tapers / side lock type can also be provided but will be made to order with lead time of 3-6 weeks</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for special diameters can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized BCA boring bars with anti-vibration treatment can be tailor made with a lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 16T3</p>
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
                                        <div class="tab-pane fade" id="bca_boring_bars_integral_type_tab_three_bt40">
                                            <h6 class="tab_heading">Integral Type BCA Finish Boring Bar for CC.. Inserts - BT40</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Small 1.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Small 2.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Small 3.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Small 4.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Small 5.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT40/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <th>Cartridge
                                                            <br> Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>Li</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 23-29 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03BC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>23-29</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                            <td>
                                                                <p>135</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 29-41 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>29-41</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 38-49 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05BC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>38-49</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 46-66 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>46-66</p>
                                                            </td>
                                                            <td>
                                                                <p>118</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 62-87 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>62-87</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">
                                                                <p>Fig 3</p>
                                                            </td>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 83-108 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>83-108</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 98-142 BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>98-142</p>
                                                            </td>
                                                            <td>
                                                                <p>133</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares and cartridges are supplied with the tools. If required additionally, can be ordered separately as well. Inserts not included.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for other spindle tapers / side lock type can also be provided but will be made to order with lead time of 3-6 weeks</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for special diameters can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized BCA boring bars with anti-vibration treatment can be tailor made with a lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 09T3</p>
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
                                        <div class="tab-pane fade" id="bca_boring_bars_integral_type_tab_three_bt50">
                                            <h6 class="tab_heading">Integral Type BCA Finish Boring Bar for CC.. Inserts - BT50</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Small 1.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Small 2.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Small 3.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Small 4.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <center>
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Small 5.jpg" alt="include/img/BCA_Integral/INTEGRAL TYPE BCA WITH CC.. - BT50/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <th>Cartridge
                                                            <br> Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D (Ømin - Ømax)</th>
                                                        <th>Li</th>
                                                        <th>GPL</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 23-29 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03BC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>23-29</p>
                                                            </td>
                                                            <td>
                                                                <p>107</p>
                                                            </td>
                                                            <td>
                                                                <p>150</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 29-41 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC03AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>29-41</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 38-49 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05BC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>38-49</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 46-66 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC05AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>46-66</p>
                                                            </td>
                                                            <td>
                                                                <p>122</p>
                                                            </td>
                                                            <td>
                                                                <p>165</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 62-87 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>62-87</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="3">
                                                                <p>Fig 3</p>
                                                            </td>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 83-108 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC07AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>83-108</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 98-142 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>98-142</p>
                                                            </td>
                                                            <td>
                                                                <p>137</p>
                                                            </td>
                                                            <td>
                                                                <p>180</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 132-176 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>132-176</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>210</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">
                                                                <p>Fig 4</p>
                                                            </td>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 166-210 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>166-210</p>
                                                            </td>
                                                            <td>
                                                                <p>182</p>
                                                            </td>
                                                            <td>
                                                                <p>225</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BCA IC 200-244 BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>BT 50</p>
                                                            </td>
                                                            <td>
                                                                <p>RTBC10AC</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>200-244</p>
                                                            </td>
                                                            <td>
                                                                <p>167</p>
                                                            </td>
                                                            <td>
                                                                <p>210</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All required spares and cartridges are supplied with the tools. If required additionally, can be ordered separately as well. Inserts not included.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for other spindle tapers / side lock type can also be provided but will be made to order with lead time of 3-6 weeks</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized BCA boring bars for special diameters can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; For additional cutting length requirement, customized BCA boring bars with anti-vibration treatment can be tailor made with a lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 09T3</p>
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