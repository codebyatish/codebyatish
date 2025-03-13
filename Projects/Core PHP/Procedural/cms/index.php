<?php 
    
    include 'includes/header.php';
?>

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                 <?php

                 if (isset($_GET['page'])) {
                     
                    $page = $_GET['page'];

                 }else{

                    $page = "";
                 }


                 if ($page == "" || $page == 1) {
                     $page_1 = 0;
                 }else{
                     $page_1 = ($page * 5) - 5;
                 }


                    if (isset($_SESSION['user_role']) == 'admin') {

                         $select_post_query_count = "SELECT * FROM posts";

                    }else{

                         $select_post_query_count = "SELECT * FROM posts WHERE post_status = 'published'";
                    }


                   
                    $select_post_query_count_result = mysqli_query($conn,$select_post_query_count); 
                    $select_post_query_num_rows = mysqli_num_rows($select_post_query_count_result);

                    if ($select_post_query_num_rows < 1) {
                        echo "<h2 class='text-center'>NO POSTS AVAILABLE TO SHOW</h2>";
                    }else{


                    $select_post_query_num_rows = ceil($select_post_query_num_rows / 5);


                        $query = "SELECT * FROM posts LIMIT $page_1, 5";
                        $query_result = mysqli_query($conn,$query);

                        while ($query_result_row = mysqli_fetch_assoc($query_result)) { 
                            $post_id = $query_result_row['post_id'];
                            $post_title = $query_result_row['post_title'];
                            $post_author = $query_result_row['post_author'];
                            $post_date = $query_result_row['post_date'];
                            $post_image = $query_result_row['post_image'];
                            $post_content =  substr($query_result_row['post_content'], 0,400);
                            $post_tags = $query_result_row['post_tags'];
                            $post_status = $query_result_row['post_status']; 



                        ?>
                           <h1 class="page-header">
                                Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- First Blog Post -->
                            <h2>
                                <a href="post/<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
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
                        <?php }} ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include 'includes/sidebar.php';  ?>

        </div>
        <!-- /.row -->

        <hr>

        <ul class="pager">
                <?php 

                for ($i=1; $i <= $select_post_query_num_rows; $i++) { 

                    if ($i == $page) { ?>

                        <li><a class="active_link" href="index.php?page=<?php echo $i; ?>"><?php echo $i;?></a></li>

                <?php }else{ ?>

                        <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i;?></a></li>

                <?php }   }?>
        </ul>


<?php

    include 'includes/footer.php';
?>