<?php
        

        if (isset($_GET['p_id'])) {

                $p_id = $_GET['p_id'];
                $post_query = "SELECT * FROM posts WHERE post_id = $p_id";
                $post_query_result = mysqli_query($conn,$post_query);

                $post_query_result_row = mysqli_fetch_assoc($post_query_result);

                    $post_id = $post_query_result_row['post_id'];
                    $post_category_id = $post_query_result_row['post_category_id'];
                    $post_title = $post_query_result_row['post_title'];
                    $post_author = $post_query_result_row['post_author'];
                    $post_image = $post_query_result_row['post_image'];
                    $post_content = $post_query_result_row['post_content'];
                    $post_tags = $post_query_result_row['post_tags'];
                    $post_status = $post_query_result_row['post_status'];
                    $post_date = $post_query_result_row['post_date'];
                    $post_comment_count = $post_query_result_row['post_comment_count'];

        }



        if (isset($_POST['update_post'])) {
            $p_id = $_GET['p_id'];
            $post_title = $_REQUEST['post_title'];
            $post_category_id = $_REQUEST['post_category'];
            $post_author = $_REQUEST['post_author'];
            $post_status = $_REQUEST['post_status'];

            $post_image = $_FILES['post_image']['name'];
            $post_image_temp = $_FILES['post_image']['tmp_name'];

            $post_tags = $_REQUEST['post_tags'];
            $post_content = $_REQUEST['post_content'];
            $post_date = date("d-m-y");
            $post_comment_count = 4;

             move_uploaded_file($post_image_temp, "../images/$post_image");


             if (empty($post_image)) {
                 
                $query = "SELECT * FROM posts WHERE post_id = $p_id";
                $query_result = mysqli_query($conn,$query);

                $query_result_row = mysqli_fetch_assoc($query_result);
                $post_image = $query_result_row['post_image'];

             }

            $update_query = "UPDATE posts SET post_title = '$post_title', post_category_id = '$post_category_id', post_author = '$post_author', post_status = '$post_status', post_image = '$post_image',post_tags = '$post_tags',post_content = '$post_content', post_date = now(), post_comment_count = '$post_comment_count' WHERE post_id = '$p_id'";

               $update_query_result = mysqli_query($conn,$update_query);
               query_confirm($update_query_result);
                   
                echo "<p class='bg-success'>Post Updated  <a href='../post.php?p_id=$p_id'>View Post</a> or <a href='posts.php'>Edit More Posts</a></p>";

            }
        
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cat_title">Post Title</label>
        <input value="<?php echo $post_title; ?>" type="text" name="post_title" id="post_title" placeholder="Please Enter Post Title" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Category Id</label>
        
        <select name="post_category" id="post_category" class="form-control">
            <?php

            $select_query = "SELECT * FROM categories";
            $select_query_result = mysqli_query($conn,$select_query);
            query_confirm($select_query_result);

            while ($select_query_row = mysqli_fetch_assoc($select_query_result)) {

                $cat_id = $select_query_row["cat_id"];
                $cat_title = $select_query_row["cat_title"];
               
                    if ($cat_id == $post_category_id) {

                        echo  "<option selected value='$cat_id'>$cat_title</option>";

                    }else{

                        echo  "<option value='$cat_id'>$cat_title</option>";
                    }

            }

            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="cat_title">Post Author</label>
        <input value="<?php echo $post_author; ?>" type="text" name="post_author" id="post_author" placeholder="Please Enter Post Author" class="form-control">
    </div>

    <div class="form-group">
        <label for="cat_title">Post Status</label>
        <select  name="post_status" id="post_status" class="form-control">
            <option  value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>
            <?php
                if ($post_status == 'published') {
                    echo  "<option value='draft'>Draft</option>";
                }else{
                    echo  "<option value='published'>Published</option>";
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="cat_title">Post Image</label>
        <img src="../images/<?php echo $post_image; ?>" style="width:100px;"><br>
        <input type="file" name="post_image" id="post_image" placeholder="Please Choose Any File" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Tags</label>
        <input value="<?php echo $post_tags; ?>" type="text" name="post_tags" id="post_tags" placeholder="Please Enter Post Tags" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Content</label>
        <textarea  placeholder="Please Enter Post Content" class="form-control" rows="5" name="post_content" id="post_content"><?php echo $post_content; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="update_post" value="Update Post" class="btn btn-success">
    </div>
    
</form>