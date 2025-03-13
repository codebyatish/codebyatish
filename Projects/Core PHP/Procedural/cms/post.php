<?php 

    include 'includes/header.php';

    if (isset($_POST['liked'])) {

        $post_id = $_POST['post_id'];
        $user_id = $_POST['user_id'];
        $search_post_qry = "SELECT * FROM posts WHERE post_id = $post_id";
        $search_post_qry_result = mysqli_query($conn,$search_post_qry);
        $search_post_qry_row = mysqli_fetch_array($search_post_qry_result);

            $likes = $search_post_qry_row['likes'];

            mysqli_query($conn,"UPDATE posts SET likes = $likes + 1 WHERE post_id = $post_id");

            mysqli_query($conn,"INSERT INTO likes (user_id,post_id) VALUES ($user_id,$post_id)");

        die();
    }


    if (isset($_POST['unliked'])) {

        $post_id = $_POST['post_id'];
        $user_id = $_POST['user_id'];
        $unliked_search_post_qry = "SELECT * FROM posts WHERE post_id = $post_id";
        $unliked_search_post_qry_result = mysqli_query($conn,$unliked_search_post_qry);
        $unliked_search_post_qry_row = mysqli_fetch_array($unliked_search_post_qry_result);

            $likes = $unliked_search_post_qry_row['likes'];

            mysqli_query($conn,"DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");

            mysqli_query($conn,"UPDATE posts SET likes = $likes - 1 WHERE post_id = $post_id");


        die();
    }




?>

   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                        <?php

                            if (isset($_GET['p_id'])) {
                                
                                $post_id = $_GET['p_id'];
                           
                                $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id =$post_id";
                                if (!mysqli_query($conn,$view_query)) {
                                    die("QUERY FAILED".mysqli_error($conn));
                                }


                                if ($_SESSION['user_role'] == 'admin') {

                                    $query = "SELECT * FROM posts WHERE post_id = $post_id";

                                }else{

                                    $query = "SELECT * FROM posts WHERE post_id = $post_id AND post_status = 'published'";
                                }

                                $query_result = mysqli_query($conn,$query);


                                if (mysqli_num_rows($query_result) < 1) {

                                   echo "<h2 class='text-center'>NO POSTS AVAILABLE TO SHOW</h2>";

                                }else{


                                

                                while ($query_result_row = mysqli_fetch_assoc($query_result)) { 


                                        $post_title = $query_result_row['post_title'];
                                        $post_author = $query_result_row['post_author'];
                                        $post_user = $query_result_row['post_user'];
                                        $post_date = $query_result_row['post_date'];
                                        $post_image = $query_result_row['post_image'];
                                        $post_content = $query_result_row['post_content'];
                                        $post_tags = $query_result_row['post_tags'];
                                        $post_status = $query_result_row['post_status'];  


                        ?>


                                <h1 class="page-header">
                                    Posts
                                </h1>

                                <!-- First Blog Post -->
                                <h2>
                                    <a href="#"><?php echo $post_title; ?></a>
                                </h2>
                                <p class="lead">
                                    <?php

                                    if (isset($post_author) && !empty($post_author)) {

                                        echo "by <a href='index.php'>$post_author</a>" ;   

                                    }else if(isset($post_user) && !empty($post_user)){

                                        $user_query = "SELECT * FROM users WHERE user_id = $post_user";
                                        $user_query_result = mysqli_query($conn,$user_query);
                                        $user_query_result_row = mysqli_fetch_array($user_query_result);
                                        $user_full_name = $user_query_result_row['user_firstname']." ".$user_query_result_row['user_lastname'];

                                        echo "by <a href='index.php'>$user_full_name</a>";  

                                    }

                                    ?>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                                <hr>
                                <img class="img-responsive" src="/cms/images/<?php echo $post_image ?>" alt="">
                                <hr>
                                <p><?php echo $post_content; ?></p>
                               <!--  <a class="btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a> -->

                    <?php  }   ?>                       
                            
                            <?php

                                if (IsLoggedIn()) { ?>
                                    
                                    <div class="row">
                                        <p class="pull-right"><a href="" class="<?php echo UserLikedThisPost($post_id) ? 'unlike' : 'like';  ?>"><span class="<?php echo UserLikedThisPost($post_id) ? 'glyphicon glyphicon-thumbs-down' : 'glyphicon glyphicon-thumbs-up'; ?>"  data-toggle="tooltip" data-placement="top" title='<?php echo UserLikedThisPost($post_id) ? 'I Like this before' : 'Want to like it'; ?>'>
                                            



                                        </sapn><?php echo UserLikedThisPost($post_id) ? 'Unlike' : 'Like'; ?></a></p>
                                    </div>


                              <?php }else{ ?>

                                    <div class="row">
                                        <p class="pull-right">You need to login to like the post.<a href="/cms/login.php"></a></p>
                                    </div>

                              <?php } ?>
                            <hr>


                            
                            <div class="row">
                                <p class="pull-right"><?php GetPostLikes($post_id); ?> Likes</p>
                            </div>

                <!-- Blog Comments -->


                <?php

                        if (isset($_POST['create_comment'])) {
                            

                            $comment_author = $_REQUEST['comment_author'];
                            $comment_email = $_REQUEST['comment_email'];
                            $comment_content = $_REQUEST['comment_content'];

                            if (!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {
                                $insert_query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date) VALUES ('$post_id','$comment_author','$comment_email','$comment_content','unapproved',now())";
                                $insert_query_result = mysqli_query($conn,$insert_query);
                                    if ($insert_query_result) {
                                        query_confirm($insert_query_result);

                                        // $update_query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $post_id";
                                        //  mysqli_query($conn,$update_query);
                                    }
                            }else{
                                echo "<script>alert('Fields Cannout Be Empty');</script>";
                            }

                        }



                ?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>

                    <form action="" method="post">
                        <div class="form-group">
                            <label id="comment_author">Author</label>
                            <input type="text" name="comment_author" id="comment_author" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label id="comment_email">Email</label>
                            <input type="email" name="comment_email" id="comment_email" class="form-control" placeholder="Enter Your Email Id">
                        </div>
                        <div class="form-group">
                            <label id="comment_content">Comment</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Your Comment" name="comment_content" id="comment_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>

                <hr>

                
                <!-- Posted Comments -->




                <!-- Comment -->
                
                
                    <?php  

                        $post_id = $_GET['p_id'];
                        $cmt_query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                        $cmt_query_result = mysqli_query($conn,$cmt_query);

                        while ($cmt_query_result_row = mysqli_fetch_assoc($cmt_query_result)) { 
                                $comment_post_id = $cmt_query_result_row['comment_post_id'];
                                $comment_author = $cmt_query_result_row['comment_author'];
                                $comment_date = $cmt_query_result_row['comment_date'];
                                $comment_content = $cmt_query_result_row['comment_content'];
                    ?>
                    <div class="row" style="margin-top: 16px;">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $comment_author; ?>
                                    <small><?php echo $comment_date; ?></small>
                                </h4>
                                <?php echo $comment_content; ?>
                            </div>
                        </div>
                    </div>
                    <?php  }  } }else{



                        header("Location: index.php");



                    } ?>
                    

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include 'includes/sidebar.php';  ?>

        </div>
        <!-- /.row -->

<?php

    include 'includes/footer.php';

?>


<script type="text/javascript">
    
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip(); 
        var post_id = <?php echo $post_id; ?>;
        var user_id = <?php echo $_SESSION['user_id']; ?>;


        $(".like").click(function () {
           
                $.ajax({

                    url: "/cms/post.php?p_id=<?php echo $post_id; ?>",
                    type: "post",
                    data: {
                        'liked':1,
                        'post_id':post_id,
                        'user_id':user_id
                    }


                });

        })



        $(".unlike").click(function () {
           
                $.ajax({

                    url: "/cms/post.php?p_id=<?php echo $post_id; ?>",
                    type: "post",
                    data: {
                        'unliked':1,
                        'post_id':post_id,
                        'user_id':user_id
                    }


                });

        })
            
  

    })

</script>