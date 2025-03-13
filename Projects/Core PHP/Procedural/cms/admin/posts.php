<?php

    include 'include/header.php';

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Posts
                            </li>
                        </ol>

                        <?php

                           if (isset($_GET['source'])) {

                               $source =$_GET['source'];
                           }else{
                            $source = "";
                           }

                           switch ($source) {
                               case 'add_posts':
                                   include "add_posts.php";
                                   break;
                               case 'edit_posts':
                                   include "edit_posts.php";
                                   break;
                               default:
                                   include "view_all_posts.php";
                                   break;
                           }



                        ?>
                            

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php

    include 'include/footer.php';

?>
