<?php
    
    if (isset($_POST['create_user'])) {

            $username = $_REQUEST['username'];
            $user_firstname = $_REQUEST['user_firstname'];
            $user_lastname = $_REQUEST['user_lastname'];
            $user_email = $_REQUEST['user_email'];
            $user_password = $_REQUEST['user_password'];
            $user_role = $_REQUEST['user_role'];
            

            //$post_date = date("d-m-y");
            // $post_comment_count = 4;

           // move_uploaded_file($post_image_temp, "../images/$post_image");

            $crypt_password = password_hash($user_password, PASSWORD_BCRYPT, array("cost" => 12));
            
            $insert_query = "INSERT INTO users (username,user_firstname,user_lastname,user_email,user_password,user_role) VALUES ('$username','$user_firstname','$user_lastname','$user_email','$crypt_password','$user_role')";
            $insert_query_result = mysqli_query($conn,$insert_query);
            query_confirm($insert_query_result);

            echo "User Created <a href='users.php'>View Users</a>" ;

                
    }







?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cat_title">First Name</label>
        <input type="text" name="user_firstname" id="user_firstname" placeholder="Please Enter First Name" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Last Name</label>
        <input type="text" name="user_lastname" id="user_lastname" placeholder="Please Enter Last Name" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">User Role</label>
        <select name="user_role" id="user_role" class="form-control">
           <option value="">Select User Role</option>
           <option value="admin">admin</option>
           <option value="subscriber">subscriber</option>
        </select>
    </div>
    
    <!-- <div class="form-group">
        <label for="cat_title">Post Image</label>
        <input type="file" name="post_image" id="post_image" placeholder="Please Choose Any File" class="form-control">
    </div> -->
    <div class="form-group">
        <label for="cat_title">Username</label>
        <input type="text" name="username" id="username" placeholder="Please Enter Username" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Email Id</label>
        <input type="text" name="user_email" id="user_email" placeholder="Please Enter Email Id" class="form-control">
    </div>
    <div class="form-group">
        <label for="cat_title">Password</label>
        <input type="text" name="user_password" id="user_password" placeholder="Please Enter Password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="create_user" value="Add User" class="btn btn-primary">
    </div>
    
</form>
