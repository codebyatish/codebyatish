<?php 

    include("includes/header.php"); 
    (!$session->is_signed_in()) ? redirect("login.php") : "" ;

    $message = "";
    if (isset($_FILES['file'])) {
       
        $photo = new Photo;

        $photo->title = $_REQUEST['title'];
        $photo->set_file($_FILES['file']);

        if ($photo->save_file()) {
            $session->message('The Photo '.$photo->filename.' has been Uploaded Successully.');
            redirect("photos.php");
        }else{
            $message = join("<br>",$photo->custom_errors);
        }


    }









?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload
                        </h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="bg-success"><?php echo $message; ?></h3>
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Enter Photo Title">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="file">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit" >
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="upload.php" class="dropzone">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>