 <?php

    include("include/delete_model.php");

   if (isset($_GET['delete'])) {
       
       $post_id = $_GET['delete'];

       $delete_query = "DELETE FROM posts WHERE post_id = '$post_id'";

       if (!mysqli_query($conn,$delete_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: posts.php");
        }
    }


    if (isset($_GET['reset'])) {
       
       $post_id = $_GET['reset'];

        $update_reset_query = "UPDATE posts SET post_views_count = 0 WHERE post_id = '$post_id'";
            if (!mysqli_query($conn,$update_reset_query)) {
                die("QUERY FAILED".mysqli_error($conn));
                header("Location: posts.php");
            }
    }



    if (isset($_POST['checkbox_array'])) {
            
        foreach ($_REQUEST['checkbox_array'] as $post_value_id) {

           $bulk_options = $_REQUEST['bulk_options'];

                switch ($bulk_options) {

                    case 'published':
                        $update_published_query = "UPDATE posts SET post_status = '$bulk_options' WHERE post_id = '$post_value_id'";
                        $update_published_query_result = mysqli_query($conn,$update_published_query);
                        query_confirm($update_published_query_result);
                        break;

                    case 'draft':
                        $update_draft_query = "UPDATE posts SET post_status = '$bulk_options' WHERE post_id = '$post_value_id'";
                        $update_draft_query_result = mysqli_query($conn,$update_draft_query);
                        query_confirm($update_draft_query_result);
                        break;

                    case 'delete':
                        $delete_query = "DELETE FROM posts WHERE post_id = '$post_value_id'";
                        $delete_query_result = mysqli_query($conn,$delete_query);
                        query_confirm($delete_query_result);
                        break;

                    case 'clone':

                        $query = "SELECT * FROM posts WHERE post_id = '$post_value_id'";
                        $query_result = mysqli_query($conn,$query);

                        $query_result_row = mysqli_fetch_assoc($query_result);

                        $post_id = $query_result_row['post_id'];
                        $post_category_id = $query_result_row['post_category_id'];
                        $post_title = $query_result_row['post_title'];
                        $post_author = $query_result_row['post_author'];
                        $post_image = $query_result_row['post_image'];
                        $post_content = $query_result_row['post_content'];
                        $post_tags = $query_result_row['post_tags'];
                        $post_status = $query_result_row['post_status'];
                        $post_date = $query_result_row['post_date'];
                        $post_comment_count = $query_result_row['post_comment_count'];

                        $insert_query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status) VALUES ('$post_category_id','$post_title','$post_author',now(),'$post_image','$post_content','$post_tags','$post_status')";
                        $insert_query_result = mysqli_query($conn,$insert_query);
                        query_confirm($insert_query_result);

                        break;
                    
                }

        }
            
    }


?>                           
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div id="bulk_optopn_container" class="col-xs-4">
                                    <select  name="bulk_options" id="bulk_options" class="form-control">
                                        <option value="">Select Option</option>
                                        <option value="published">Publish</option>
                                        <option value="draft">Draft</option>
                                        <option value="delete">Delete</option>
                                        <option value="clone">Clone</option>
                                    </select>
                                </div>
                                <div id="bulk_optopn_container" class="col-xs-4">
                                    <input type="submit" name="submit" value="Apply" class="btn btn-success">
                                    <a href="posts.php?source=add_posts" class="btn btn-primary">Add Post</a>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="select_all_boxes" id="select_all_boxes"></th>
                                        <th>Id</th>
                                        <th>User</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Tags</th>
                                        <th>Comments</th>
                                        <th>Date</th>
                                        <th>View Post</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        // $query = "SELECT * FROM posts ORDER BY post_id DESC";

                                        $query = "SELECT posts.post_id, posts.post_category_id,posts.post_title,posts.post_author,posts.post_user,posts.post_image,posts.post_content,posts.post_tags,posts.post_status,posts.post_date,posts.post_comment_count,posts.post_views_count,  categories.cat_id,categories.cat_title FROM posts LEFT JOIN categories ON posts.post_category_id = categories.cat_id ORDER BY posts.post_id DESC";
                                        $query_result = mysqli_query($conn,$query);

                                        while ($query_result_row = mysqli_fetch_array($query_result)) { 

                                        $post_id = $query_result_row['post_id'];
                                        $post_category_id = $query_result_row['post_category_id'];
                                        $post_title = $query_result_row['post_title'];
                                        $post_author = $query_result_row['post_author'];
                                        $post_user = $query_result_row['post_user'];
                                        $post_image = $query_result_row['post_image'];
                                        $post_content = $query_result_row['post_content'];
                                        $post_tags = $query_result_row['post_tags'];
                                        $post_status = $query_result_row['post_status'];
                                        $post_date = $query_result_row['post_date'];
                                        $post_comment_count = $query_result_row['post_comment_count'];
                                        $post_views_count = $query_result_row['post_views_count'];

                                        $cat_id = $query_result_row["cat_id"];
                                        $cat_title = $query_result_row["cat_title"];

                                        $comment_query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                                        $comment_query_result = mysqli_query($conn,$comment_query);
                                        $comment_query_num_rows = mysqli_num_rows($comment_query_result);

                                        
                                        // $select_query = "SELECT * FROM categories WHERE cat_id = '$post_category_id'";
                                        // $select_query_result = mysqli_query($conn,$select_query);
                                        // $select_query_row = mysqli_fetch_assoc($select_query_result);

                                        // $cat_title = $select_query_row["cat_title"];

                                        ?>

                                            <tr>
                                                <td><input type='checkbox' name='checkbox_array[]' id='select_all_boxes' class='check_boxes' value='<?php echo $post_id; ?>'></td>
                                                <td><?php echo $post_id; ?></td> 
                                                <?php

                                                        if (isset($post_author) && !empty($post_author)) {

                                                            echo "<td>$post_author</td>";

                                                        }else if(isset($post_user) && !empty($post_user)){

                                                            $user_query = "SELECT * FROM users WHERE user_id = $post_user";
                                                            $user_query_result = mysqli_query($conn,$user_query);
                                                            $user_query_result_row = mysqli_fetch_array($user_query_result);
                                                            $user_full_name = $user_query_result_row['user_firstname']." ".$user_query_result_row['user_lastname'];

                                                            echo "<td>$user_full_name</td>";

                                                        }

                                                ?>
                                                <td><?php echo $post_title; ?></td>
                                                <td><?php echo $cat_title; ?></td>
                                                <td><?php echo $post_status; ?></td>
                                                <td><img src='../images/<?php echo $post_image; ?>' style='width:100px;'></td>
                                                <td><?php echo $post_tags; ?></td>
                                                <td><a href='comment.php?id=<?php echo $post_id; ?>'><?php echo $comment_query_num_rows; ?></a></td>
                                                <td><?php echo $post_date; ?></td>
                                                
                                                <td><a href='../post.php?p_id=<?php echo $post_id; ?>' class="btn btn-primary btn-sm">VIEW POST</a></td>
                                                <td><a class="btn btn-info btn-sm" href='posts.php?source=edit_posts&p_id=<?php echo $post_id; ?>'>EDIT</a></td>
                                                <td><a href="javascript:void(0)" class="delete_btn btn btn-danger btn-sm" alt="<?php echo $post_id; ?>" >DELETE</a></td>
                                                <td><a href='posts.php?reset=<?php echo $post_id; ?>'><?php echo $post_views_count; ?></a></td>
                                                <!-- <td><a onClick="javascript: return confirm('Are you sure you want to delete ?');" href='posts.php?delete=<?php echo $post_id; ?>'>DELETE</a></td> -->
                                            </tr>
                                      <?php  } ?>
                                    
                                </tbody>
                            </table>
                            </div>
                            
                        </form>

<script type="text/javascript">
    



    $('.delete_btn').on('click',function () {

        var id = $(this).attr("alt");
        var delete_url = "posts.php?delete="+id;

        $('.model_delete_link').attr("href",delete_url);
        $('#myModal').modal('show');

    })


    document.getElementById('select_all_boxes').addEventListener('click',function () {
        var check_boxes = document.getElementsByClassName('check_boxes');

        if (document.getElementById('select_all_boxes').checked == true) 
        {

            for (var i = 0; i < check_boxes.length; i++) {
                check_boxes[i].checked = true;
                check_boxes[i].parentElement.parentNode.style.background = '#ccc';
            }

        }else{

            for (var i = 0; i < check_boxes.length; i++) {
                check_boxes[i].checked = false;
                check_boxes[i].parentElement.parentNode.style.background = 'initial';
            }

        }  


    })

</script>
