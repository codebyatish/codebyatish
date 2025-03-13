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
                                    <h1>Boring Kit</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="finish_boring_bars_product_page.php" style="color: #2a80b9;" >Finish Boring Bars</a></li>

                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">Boring Kit</a></li>
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
                                        <li class="list-group-item"><a class="first_sub_menu active">Finish Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;">
                                                <li><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products">Fine Boring Bars with Micro Bore Units</a></li>
                                                <li><a href="eccentric_fine_boring_tools.php?product_category=products">Eccentric Fine Boring Tools</a></li>
                                                <li><a class="second_sub_menu">BCA Boring Bars</a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel">
                                                        <li><a href="bca_boring_bars.php?product_category=products">Intoduction To BCA Boring Bars</a></li>
                                                        <li><a href="bca_boring_bars_integral_type.php?product_category=products">BCA Boring Bars - Integral Type</a></li>
                                                        <li><a href="bca_boring_bars_modular_type.php?product_category=products">BCA Boring Bars - Modular Type</a></li>
                                                    </ul>
                                                </li>
                                                <li class="active_menu"><a href="boring_kit.php?product_category=products" style="color: white !important;">Boring Kit</a></li>
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
                                            <li class="list-group-item"><a class="first_sub_menu">BCA Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                <ul class="slideup">
                                                    <li><a href="bca_boring_bars.php?product_category=std_products">Intoduction To BCA Boring Bars</a></li>
                                                    <li><a href="bca_boring_bars_integral_type.php?product_category=std_products">BCA Boring Bars - Integral Type</a></li>
                                                    <li><a href="bca_boring_bars_modular_type.php?product_category=std_products">BCA Boring Bars - Modular Type</a></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item active_menu"><a href="boring_kit.php?product_category=std_products" style="color: white !important;">Boring Kit</a></li>
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
                                <h5 class="entry-title"  >Boring Kit</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#boring_kit_tab_one">Introduction</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_two">Assembly details</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_three">Boring Head</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_four">Boring Bars For TC.. Inserts</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_fifth">Boring Bars For CC.. Inserts</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_sixth">Adaptors for Boring Kit</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_seventh">Operating Instructions</a> </li>
                                        <li> <a data-toggle="tab" href="#boring_kit_tab_eight">Precautionary Measures</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="boring_kit_tab_one">
                                            <div class="tab-one">
                                                <h6 class="tab_heading">Boring Kit</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Introduction/Small 1.jpg" alt="include/img/Boring Kit/Introduction/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Facts & Advantages</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Used for finish boring application from diameter 6mm to 205mm with a least count of 10 microns radially.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available with options of selecting one or many boring bars & different adaptors depending on requirement.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; User friendly & quick assembly & quick adjustment ensures minimum loss time.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Comes with fine adjustment setting ensuring zero backlash.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Most economic solution for the complete range of diameters for finish boring application.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Ideal finish boring tool for tool - room set-ups.</li>
                                                            <li><i class="fa fa-dot-circle-o"></i> &nbsp; Apart from standard product range, tailor made boring heads & adaptors are also available on demand.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering Boring Head for Boring Kit</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Nomenclature/Small 1.jpg" alt="include/img/Boring Kit/Nomenclature/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering Boring Bars for Boring Kit</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Nomenclature/Small 2.jpg" alt="include/img/Boring Kit/Nomenclature/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                                <h6 class="tab_heading">Nomenclature Code Key for Ordering Adaptor</h6>
                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-10">
                                                        <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Nomenclature/Small 3.jpg" alt="include/img/Boring Kit/Nomenclature/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_two">
                                            <h6 class="tab_heading">Assembly Details - Schematic Drawing</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-10">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Assembly Details/Small 1.jpg" alt="include/img/Boring Kit/Assembly Details/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-10">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Assembly Details/Small 2.jpg" alt="include/img/Boring Kit/Assembly Details/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-10">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Assembly Details/Small 3.jpg" alt="include/img/Boring Kit/Assembly Details/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-1"> </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_three">
                                            <h6 class="tab_heading">Boring Head for Boring Kit</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Head/Small 1.jpg" alt="include/img/Boring Kit/Boring Head/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Head/Small 2.jpg" alt="include/img/Boring Kit/Boring Head/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Item Code </th>
                                                            <th> Diameter Range </th>
                                                            <th> Least Count </th>
                                                            <th> Boring Bar Clamping Screw (Qty) </th>
                                                            <th> Boring Head Locking Bolt </th>
                                                            <th> Allen Keys </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BH 6-205</p>
                                                            </td>
                                                            <td>
                                                                <p>6-205</p>
                                                            </td>
                                                            <td>
                                                                <p>10 microns</p>
                                                            </td>
                                                            <td>
                                                                <p>M8 (3)</p>
                                                            </td>
                                                            <td>
                                                                <p>M10</p>
                                                            </td>
                                                            <td>
                                                                <p>4mm / 8mm</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Spares for Boring Head will be provided along with the Boring Head.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; If required additionally, all spares can be orderd seperately as well. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Required Boring Bars to be orderd seperately.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_four">
                                            <h6 class="tab_heading">Boring Bars for Boring Kit For TC.. Inserts</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Bar for TC.. Insert/Small 1.jpg" alt="include/img/Boring Kit/Boring Bar for TC.. Insert/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Bar for TC.. Insert/Small 2.jpg" alt="include/img/Boring Kit/Boring Bar for TC.. Insert/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Item Code </th>
                                                            <th> Insert </th>
                                                            <th> Diameter Range
                                                                <br> Ømin - Ømax
                                                                <br> D </th>
                                                            <th> Working Length </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 0811</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>8-11</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 1013</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>10-13</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 1217</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>12-17</p>
                                                            </td>
                                                            <td>
                                                                <p>53</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 1621</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>16-21</p>
                                                            </td>
                                                            <td>
                                                                <p>68</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 20125</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>20-125</p>
                                                            </td>
                                                            <td>
                                                                <p>83</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 25130</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>25-130</p>
                                                            </td>
                                                            <td>
                                                                <p>96</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 30135</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>30-135</p>
                                                            </td>
                                                            <td>
                                                                <p>115</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBT 120205</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>120-205</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Insert Screws and Torx keys will be provided along with the Boring Bars. Inserts not included. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; If required additionally, all spares can be ordered separately as well. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized boring bars can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Insert </th>
                                                            <th> Insert Screw </th>
                                                            <th> Torx </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>M2</p>
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
                                                                <p>3</p>
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
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_fifth">
                                            <h6 class="tab_heading">Boring Bars for Boring Kit with CC.. Inserts</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Bar for CC.. Insert/Small 1.jpg" alt="include/img/Boring Kit/Boring Bar for CC.. Insert/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Boring Bar for CC.. Insert/Small 2.jpg" alt="include/img/Boring Kit/Boring Bar for CC.. Insert/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Item Code </th>
                                                            <th> Insert </th>
                                                            <th> Diameter Range
                                                                <br> Ømin - Ømax
                                                                <br> D </th>
                                                            <th> Working Length </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 0609</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0400</p>
                                                            </td>
                                                            <td>
                                                                <p>6-9</p>
                                                            </td>
                                                            <td>
                                                                <p>26</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 0811</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>8-11</p>
                                                            </td>
                                                            <td>
                                                                <p>32</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 1013</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>10-13</p>
                                                            </td>
                                                            <td>
                                                                <p>40</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 1217</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>12-17</p>
                                                            </td>
                                                            <td>
                                                                <p>53</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 1621</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>16-21</p>
                                                            </td>
                                                            <td>
                                                                <p>68</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 20125</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>20-125</p>
                                                            </td>
                                                            <td>
                                                                <p>83</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 25130</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 09T3</p>
                                                            </td>
                                                            <td>
                                                                <p>25-130</p>
                                                            </td>
                                                            <td>
                                                                <p>96</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 30135</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 1204</p>
                                                            </td>
                                                            <td>
                                                                <p>30-135</p>
                                                            </td>
                                                            <td>
                                                                <p>115</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT BKBBC 120205</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 1204</p>
                                                            </td>
                                                            <td>
                                                                <p>120-205</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Insert Screws and Torx keys will be provided along with the Boring Bars. Inserts not included. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; If required additionally, all spares can be ordered separately as well. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range ‘D’ calculated considering 0.4mm insert nose radius</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized boring bars can also be provided but will be made to order with lead time of 3-6 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Insert </th>
                                                            <th> Insert Screw </th>
                                                            <th> Torx </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0400</p>
                                                            </td>
                                                            <td>
                                                                <p>M2</p>
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
                                                                <p>3</p>
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
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 1204</p>
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
                                        <div class="tab-pane fade" id="boring_kit_tab_sixth">
                                            <h6 class="tab_heading">Adaptor Details for Boring Kit</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-1"> </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Adaptors for Boring Kit/Small 1.jpg" alt="include/img/Boring Kit/Adaptors for Boring Kit/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Adaptors for Boring Kit/Small 2.jpg" alt="include/img/Boring Kit/Adaptors for Boring Kit/Big 4.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Adaptors for Boring Kit/Small 3.jpg" alt="include/img/Boring Kit/Adaptors for Boring Kit/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Adaptors for Boring Kit/Small 4.jpg"  alt=" include/img/Boring Kit/Adaptors for Boring Kit/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Adaptors for Boring Kit/Small 5.jpg" alt="include/img/Boring Kit/Adaptors for Boring Kit/Big 5.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> </a>
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
                                                        <tr>
                                                            <th> Sr. No </th>
                                                            <th> Item Code </th>
                                                            <th> Spindle Taper </th>
                                                            <th> GPL of Adaptor </th>
                                                            <th> Stock </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>ADP BT40 40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT40</p>
                                                            </td>
                                                            <td>
                                                                <p>77.0</p>
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
                                                                <p>ADP BT50 40</p>
                                                            </td>
                                                            <td>
                                                                <p>BT50</p>
                                                            </td>
                                                            <td>
                                                                <p>88.0</p>
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
                                                                <p>ADP BBT40 40</p>
                                                            </td>
                                                            <td>
                                                                <p>BBT40</p>
                                                            </td>
                                                            <td>
                                                                <p>75.0</p>
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
                                                                <p>ADP BBT50 40</p>
                                                            </td>
                                                            <td>
                                                                <p>BBT50</p>
                                                            </td>
                                                            <td>
                                                                <p>85.0</p>
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
                                                                <p>ADP SK40 40</p>
                                                            </td>
                                                            <td>
                                                                <p>SK40</p>
                                                            </td>
                                                            <td>
                                                                <p>69.1</p>
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
                                                                <p>ADP SK50 40</p>
                                                            </td>
                                                            <td>
                                                                <p>SK50</p>
                                                            </td>
                                                            <td>
                                                                <p>69.1</p>
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
                                                                <p>ADP ISO40 40</p>
                                                            </td>
                                                            <td>
                                                                <p>ISO40</p>
                                                            </td>
                                                            <td>
                                                                <p>60.0</p>
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
                                                                <p>ADP ISO50 40</p>
                                                            </td>
                                                            <td>
                                                                <p>ISO50</p>
                                                            </td>
                                                            <td>
                                                                <p>62.0</p>
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
                                                                <p>ADP ISO60 40</p>
                                                            </td>
                                                            <td>
                                                                <p>ISO60</p>
                                                            </td>
                                                            <td>
                                                                <p>66.0</p>
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
                                                                <p>ADP HSKA50 40</p>
                                                            </td>
                                                            <td>
                                                                <p>HSKA50</p>
                                                            </td>
                                                            <td>
                                                                <p>76.0</p>
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
                                                                <p>ADP HSKA63 40</p>
                                                            </td>
                                                            <td>
                                                                <p>HSKA63</p>
                                                            </td>
                                                            <td>
                                                                <p>76.0</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>ADP HSKA80 40</p>
                                                            </td>
                                                            <td>
                                                                <p>HSKA80</p>
                                                            </td>
                                                            <td>
                                                                <p>76.0</p>
                                                            </td>
                                                            <td>
                                                                <p><i class="fa fa-square" aria-hidden="true"></i></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>ADP HSKA100 40</p>
                                                            </td>
                                                            <td>
                                                                <p>HSKA100</p>
                                                            </td>
                                                            <td>
                                                                <p>79.0</p>
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
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Diameter of Adaptor ID for all of the above is 40mm. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Working Length for all of the above is 50mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Special Adaptor Bolt item code RTABM840 will be provided along with the Adaptors and if required additionally, can be ordered separately as well.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Customized adaptors for any other spindle taper can also be provided but will be made to order with lead time of 3-6 weeks. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In the above table, <i class="fa fa-star" aria-hidden="true"></i> denotes ready in stock and <i class="fa fa-square" aria-hidden="true"></i> denotes lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_seventh">
                                            <h6 class="tab_heading">Operating Instructions</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The boring head is initially set on minimum mark on the scale.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Operating Instructions/Small 1.jpg" alt="include/img/Boring Kit/Operating Instructions/Big 1.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Follow below instructions to assemble the boring kit: a) Clamp the required boring bar on to the boring head with the help of the clamping screws provided with the boring head. b) Clamp the adaptor on to the boring head with the special adaptor bolts provided with the adaptor.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Operating Instructions/Small 2.jpg" alt="include/img/Boring Kit/Operating Instructions/Big 2.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Post assembly, measure the exact diameter on the pre- setter or by using a precise dial indicator.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Operating Instructions/Small 3.jpg" alt="include/img/Boring Kit/Operating Instructions/Big 3.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; In case you wish to adjust the diameter, loosen the Locking Screw of M10 with the provided Allen key of 8mm. (pic 1)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="javascript:void(0)" class="pop_up_image"> <img src="include/img/Boring Kit/Operating Instructions/Small 4.jpg" alt="include/img/Boring Kit/Operating Instructions/Big 4.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Use the fine adjustment dial to set the required diameter. (pic 2)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The smallest division is 10 microns and one rotation is 0.75mm radially, adjust accordingly and then recheck if the required size is achieved. (pic 3)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; If the required diameter is achieved, tighten the locking screw with a torque wrench (recommended) for precise repeatability and to ensure sufficient torque for locking. (pic 1)</li>
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
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp;It is recommended to dismantle the boring kit and set to minimum after use, if to be stored for long period without use. (pic 4)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp;To avoid damage due to rusting, ensure periodic lubrication.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="boring_kit_tab_eight">
                                            <h6 class="tab_heading">Precautionary Measures</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Due to constraints in the assembly tolerances, it is recommended that tools, if damaged, are to be returned to Renuka Tools for assessment/repair in a controlled environment. Commercials for repair can only be determined after detailed assessment of the damaged tool. </li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please change the locking screws and insert screws ahead in time to avoid accidents.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In case of any observed decrease in accuracy over the time of usage, please request Renuka Tools for servicing the tool.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Ensure that the locking bolt is loosened before using fine adjustment to avoid internal damage to adjustment mechanism. </li>
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