
<?php
    session_start();
    include('include/db_config.php');
    include('include/session.php');
    date_default_timezone_set('Asia/Kolkata'); 
    error_reporting(0);
    $page_name= basename($_SERVER['PHP_SELF']); 
    $user_type = $_SESSION['user_type'];
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRM - Admin Panel</title>
    <!-- Bootstrap Styles-->
    <link href="include/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="include/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom Styles-->
    <link href="include/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="include/js/Lightweight-Chart/cssCharts.css"> 

    <link rel="stylesheet" href="include/datatable/jquery.dataTables.css"> 

    <style type="text/css">
        .mt-15{
            margin-top: 15px;
        }
        .compulsory_mark{
            color: red;
        }
        input[type="checkbox"]{
          width: 15px; /*Desired width*/
          height: 15px; /*Desired height*/
        }
        .table thead th{
          font-weight: bold;
            text-align: center;
      vertical-align: middle !important;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <div class="row" >
                    <div class="col-md-6">
                        <a class="navbar-brand" href="index.php" style="text-indent: 12px" ><strong>A2F - CRM</strong></a>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav navbar-top-links navbar-right" id="for-mobile" style="display: none;" >
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
            </div>

            <ul class="nav navbar-top-links navbar-right" id="for-desktop" >
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>


        </nav>
        <!--/. NAV TOP  -->


        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href="#"><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="<?php echo $page_name == "index.php" ? 'active-menu' : '';  ?>" href="index.php"><i class="fa fa-home"></i> Dashboard</a>
                    </li>

                    <?php 

                    if ($user_type == "Admin") {
        
                    ?>

                       <li>
                            <a class="<?php echo $page_name == "accounts.php" || $page_name == "manager.php" || $page_name == "employee.php" ? 'active-menu' : '';  ?>"  href="accounts.php"><i class="fa fa-user"></i>Manage Staff</a>
                        </li>
                        <li>
                            <a class="<?php echo $page_name == "client.php" ? 'active-menu' : '';  ?>"  href="client.php"><i class="fa fa-user"></i>Manage Clients</a>
                        </li>
                        <li>
                            <a class="<?php echo $page_name == "test_management.php" ? 'active-menu' : '';  ?>"  href="test_management.php"><i class="fa fa-file"></i>Test Management</a>
                        </li>

                   
                    <?php
                         }
                    ?>



                        <li>
                            <a class="<?php echo $page_name == "perform_test.php" ? 'active-menu' : '';  ?>"  href="perform_test.php"><i class="fa fa-file"></i>Perform Test</a>
                        </li>


                        <li>
                            <a class="<?php echo $page_name == "approve_test.php" ? 'active-menu' : '';  ?>"  href="approve_test.php"><i class="fa fa-file"></i>Approve / Approved Test</a>
                        </li>


                        <li>
                            <a class="<?php echo $page_name == "calib_equip.php" ? 'active-menu' : '';  ?>"  href="calib_equip.php"><i class="fa fa-file"></i>Calibration</a>
                        </li>

<!-- 

                        <li>
                            <a class="<?php echo $page_name == "approved_test.php" ? 'active-menu' : '';  ?>"  href="approved_test.php"><i class="fa fa-file"></i>Approved Test</a>
                        </li> -->


                </ul>
            </div>

        </nav>


        <!-- /. NAV SIDE  -->

<script type="text/javascript">
/*$(document).ready(function () {

    $("#sideNav").click(function(){
      if($(this).hasClass('closed')){
        $('.navbar-side').animate({left: '0px'});
        $(this).removeClass('closed');
        $('#page-wrapper').animate({'margin-left' : '260px'});
        
      }
      else{
          $(this).addClass('closed');
        $('.navbar-side').animate({left: '-260px'});
        $('#page-wrapper').animate({'margin-left' : '0px'}); 
      }
    });
  });*/

</script>
