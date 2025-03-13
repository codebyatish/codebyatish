<?php
	session_start();
	include('include/db_config.php');
	include('include/session.php');
	date_default_timezone_set('Asia/Kolkata'); 
	error_reporting(0);
	$page_name= basename($_SERVER['PHP_SELF']); 
?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from ventura.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 16:49:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Evidence Management System</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="include/css/bootstrap.min.css">
		

		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="include/css/feathericon.min.css">
		
		<link rel="stylesheet" href="include/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="include/css/style.css">

        <!--  Datatable -->
<!-- 		<link rel="stylesheet" type="text/css" href="include/Datatable/css/twitter-bootstrap.css" /> -->
		<link rel="stylesheet" type="text/css" href="include/Datatable/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" type="text/css" href="include/datatable/jquery.dataTables.min.css" />
		<link rel="stylesheet" type="text/css" href="include/datatable/demo_table_jui.css" />

		<link rel="stylesheet" href="include/css/bootstrap-datepicker-min.css">



				<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="include/css/font-awesome.min.css">
<style type="text/css">
	.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
}
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    padding-right: 30px;
}
table.table-bordered.dataTable th, table.table-bordered.dataTable td {
    border-left-width: 0;
}
table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
    cursor: pointer;
    position: relative;
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
    white-space: nowrap;
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #ddd;
}
.table-bordered {

    border-bottom: 2.5px solid #eee !important;
}

  .text-center{
    font-weight: bold;
  }


</style>

    </head>
    <body>		


		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<h3 style="color: white;margin-top: 15px;" >E - मुद्देमाल</h3>
					</a>
					<a href="index.php" class="logo logo-small">
						<img src="" alt="Logo" width="30" height="30"  alt="EMS">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<div class="avatar">
								<span class="avatar-title rounded-circle border border-white">A</span>
							</div>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">

								<div class="avatar">
									<span class="avatar-title rounded-circle border border-white">A</span>
								</div>
								<div class="user-text">
									<h6>Admin</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>

<!-- 							<?php 

								$sql_query = "SELECT * FROM EMS_Menu ORDER BY MenuDisplayNumber";

								$query_result= mysqli_query($con,$sql_query);
								$num_ro= mysqli_num_rows($query_result); 

								while ($menu=mysqli_fetch_array($query_result,MYSQLI_BOTH)) 
								{  

										?>

										<li <?php echo ($page_name == $menu['MenuPageName']) ? 'class = active' : '' ?> <?php echo ($menu['MenuPageName'] == "") ? 'class = submenu' : '' ?>> 


											<?php if ($menu['MenuPageName'] != "" && $menu['SubMenuId'] == 0) { ?>

												<a href="<?php echo $menu['MenuPageName']; ?>" ><i class="<?php echo $menu['MenuIcon']; ?>"></i><span><?php echo $menu['MenuName']; ?></span></a>

											<?php }else if($menu['MenuPageName'] == ""){ ?>

												<a href="javascript:void(0);" ><i class="<?php echo $menu['MenuIcon']; ?>"></i><span><?php echo $menu['MenuName']; ?></span><span class="menu-arrow"   ></span></a>

											<?php }else{ } ?>

												<ul <?php echo ($menu['SubMenuId'] != 0 && $page_name == $menu['MenuPageName'])  ? 'style="display: block"' : 'style="display: none"'  ?> >

													<?php
															
														$sql_query1 = "SELECT * FROM EMS_Menu WHERE SubMenuId = ".$menu['MenuId']." ORDER BY MenuDisplayNumber";

														$query_result1= mysqli_query($con,$sql_query1);

															while ($menu1=mysqli_fetch_array($query_result1,MYSQLI_BOTH)) 
															{

													?>
																<li>
																	<a href="<?php echo $menu1['MenuPageName']; ?>"  <?php echo ($page_name == $menu1['MenuPageName']) ? 'class = active' : '' ?> ><span><?php echo $menu1['MenuName']; ?></span></a>
																</li>

													<?php 	} ?>

												</ul>

										</li>


							<?php } ?>	
 -->
										

 							<li <?php echo ($page_name == 'index.php') ? 'class = active' : '' ?> > 
								<a href="index.php"><i class="fe fe-home"></i> <span>होम</span></a>
							</li>
							<li <?php echo ($page_name == 'cases.php' || $page_name == 'add_evidences.php') ? 'class = active' : '' ?> > 
								<a href="cases.php"><i class="fe fe-document"></i> <span>नवीन मुद्देमाल भरा</span></a>
							</li>
							<li <?php echo ($page_name == 'case_records.php') ? 'class = active' : '' ?> > 
								<a href="case_records.php"><i class="fe fe-document"></i> <span>मुद्देमाल शोधा</span></a>
							</li>
							<li <?php echo ($page_name == 'inward.php') ? 'class = active' : '' ?> > 
								<a href="inward.php"><i class="fe fe-tiled"></i> <span>आवक</span></a>
							</li>
							<li <?php echo ($page_name == 'outward.php') ? 'class = active' : '' ?> > 
								<a href="outward.php"><i class="fe fe-tiled"></i> <span>जावक / निर्गती</span></a>
							</li>
							


						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar --> 