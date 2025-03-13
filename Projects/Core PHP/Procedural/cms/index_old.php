<?php 
    
    include 'includes/header.php';
?>

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                 <?php

                        $query = "SELECT * FROM posts WHERE post_status = 'published'";
                        $query_result = mysqli_query($conn,$query);

                        while ($query_result_row = mysqli_fetch_assoc($query_result)) { 
                            $post_id = $query_result_row['post_id'];
                            $post_title = $query_result_row['post_title'];
                            $post_author = $query_result_row['post_author'];
                            $post_date = $query_result_row['post_date'];
                            $post_image = $query_result_row['post_image'];
                            $post_content =  substr($query_result_row['post_content'], 0,150);
                            $post_tags = $query_result_row['post_tags'];
                            $post_status = $query_result_row['post_status']; 
                        ?>
                           <h1 class="page-header">
                                Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- First Blog Post -->
                            <h2>
                                <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                            </h2>
                            <p class="lead">
                                by <a href="author_post.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author; ?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                            <hr>
                            <a href="post.php?p_id=<?php echo $post_id; ?>">
                                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                            </a>
                            <hr>
                            <p><?php echo $post_content; ?>...</p>
                            <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <?php } ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include 'includes/sidebar.php';  ?>

        </div>
        <!-- /.row -->

        <hr>



<?php

    include 'includes/footer.php';
?>