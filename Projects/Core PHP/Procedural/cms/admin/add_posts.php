<?php
    

    if (isset($_POST['create_post'])) {
        $post_title = mysqli_real_escape_string($conn,$_REQUEST['post_title']);
            $post_category_id = $_REQUEST['post_category'];
            $post_user = $_REQUEST['post_user'];
            $post_status = $_REQUEST['post_status'];

            $post_image = $_FILES['post_image']['name'];
            $post_image_temp = $_FILES['post_image']['tmp_name'];

            $post_tags = $_REQUEST['post_tags'];
            $post_content = $_REQUEST['post_content'];
            $post_date = date("d-m-y");
            // $post_comment_count = 4;

            move_uploaded_file($post_image_temp, "../images/$post_image");


            $insert_query = "INSERT INTO posts (post_category_id,user_id,post_title,post_user,post_date,post_image,post_content,post_tags,post_status) VALUES ('$post_category_id','$post_user','$post_title','$post_user',now(),'$post_image','$post_content','$post_tags','$post_status')";
            $insert_query_result = mysqli_query($conn,$insert_query);
            $last_inert_id = mysqli_insert_id($conn);
            query_confirm($insert_query_result);
            echo "<p class='bg-success'>Post Created  <a href='../post.php?p_id=$last_inert_id'>View Post</a> or <a href='posts.php'>Edit More Posts</a></p>";
    }



?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cat_title">Post Title</label>
        <input type="text" name="post_title" id="post_title" placeholder="Please Enter Post Title" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Category Id</label>
        
        <select name="post_category" id="post_category" class="form-control">
            <option value="">Select Post Category</option>
            <?php

            $select_query = "SELECT * FROM categories";
            $select_query_result = mysqli_query($conn,$select_query);
            query_confirm($select_query_result);

            while ($select_query_row = mysqli_fetch_assoc($select_query_result)) {

                $cat_id = $select_query_row["cat_id"];
                $cat_title = $select_query_row["cat_title"];

                echo  "<option value='$cat_id'>$cat_title</option>";
            }

            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="users">Users</label>
        
        <select name="post_user" id="post_user" class="form-control">
             <option value="">Select User</option>
            <?php

            $select_users = "SELECT * FROM users";
            $select_users_result = mysqli_query($conn,$select_users);
            query_confirm($select_users_result);

            while ($select_users_row = mysqli_fetch_assoc($select_users_result)) {

                $user_id = $select_users_row["user_id"];
                $username = $select_users_row["username"];

                echo  "<option value='$user_id'>$username</option>";
            }

            ?>

        </select>
    </div>
   <!--  <div class="form-group">
        <label for="cat_title">Post Author</label>
        <input type="text" name="post_author" id="post_author" placeholder="Please Enter Post Author" class="form-control">
    </div> -->
    <div class="form-group">
        <label for="cat_title">Post Status</label>
        <select  name="post_status" id="post_status" class="form-control">
            <option value="">Select Options</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cat_title">Post Image</label>
        <input type="file" name="post_image" id="post_image" placeholder="Please Choose Any File" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Tags</label>
        <input type="text" name="post_tags" id="post_tags" placeholder="Please Enter Post Tags" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Post Content</label>
        <textarea  placeholder="Please Enter Post Content" class="form-control" rows="5" name="post_content" id="post_content"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="create_post" value="Add Post" class="btn btn-primary">
    </div>
    
</form>