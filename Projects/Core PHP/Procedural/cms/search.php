<?php 
    
    include 'includes/header.php';
?>

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                 <?php
                        if (isset($_POST['submit'])) {

                        $search = $_POST["search"];

                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                        $query_result = mysqli_query($conn,$query);

                        if (!$query_result) {
                            die("QUERY FAILED".mysqli_error($conn,$query));
                        }

                        $count_rows = mysqli_num_rows($query_result);
                        if ($count_rows == 0) {
                           echo "<h1> No Result</h1>";
                        }else{

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
                                            by <a href="index.php"><?php echo $post_author; ?></a>
                                        </p>
                                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                                        <hr>
                                        <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                                        <hr>
                                        <p><?php echo $post_content; ?></p>
                                        <a class="btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

                      <?php               }  
                            }

                    } ?>



                                            
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include 'includes/sidebar.php';  ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2021</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

<?php

    include 'includes/footer.php';
?>