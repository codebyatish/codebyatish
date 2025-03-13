<?php 
    
    include 'includes/header.php';
?>

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                 <?php

                        if (isset($_GET['p_id'])) {
                            
                            $post_id = $_GET['p_id'];
                            $get_post_author = $_GET['author'];


                        }


                        $query = "SELECT * FROM posts WHERE post_author = '$get_post_author'";
                        $query_result = mysqli_query($conn,$query);

                        while ($query_result_row = mysqli_fetch_assoc($query_result)) { 


                                $post_title = $query_result_row['post_title'];
                                $post_author = $query_result_row['post_author'];
                                $post_date = $query_result_row['post_date'];
                                $post_image = $query_result_row['post_image'];
                                $post_content = $query_result_row['post_content'];
                                $post_tags = $query_result_row['post_tags'];
                                $post_status = $query_result_row['post_status'];  ?>



                                <h1 class="page-header">
                                    Page Heading
                                    <small>Secondary Text</small>
                                </h1>

                                <!-- First Blog Post -->
                                <h2>
                                    <a href="#"><?php echo $post_title; ?></a>
                                </h2>
                                <p class="lead">
                                   All Posts By <?php echo $post_author; ?>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                                <hr>
                                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                                <hr>
                                <p><?php echo $post_content; ?></p>
                                <a class="btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

                    <?php  } ?>                       


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include 'includes/sidebar.php';  ?>

        </div>
        <!-- /.row -->

<?php

    include 'includes/footer.php';

?>