<?php

        if (isset($_GET["edit_user"])) {

                $user_id = $_GET['edit_user'];
                $query = "SELECT * FROM users WHERE user_id = $user_id";
                $query_result = mysqli_query($conn,$query);
                $query_result_row = mysqli_fetch_array($query_result);

                    $user_id = $query_result_row['user_id'];
                    $username = $query_result_row['username'];
                    $user_firstname = $query_result_row['user_firstname'];
                    $user_lastname = $query_result_row['user_lastname'];
                    $user_email = $query_result_row['user_email'];
                    $user_role = $query_result_row['user_role'];

            if (isset($_POST['user_edit'])) {

                $user_id = $_GET['edit_user'];

                $username = $_REQUEST['username'];
                $user_firstname = $_REQUEST['user_firstname'];
                $user_lastname = $_REQUEST['user_lastname'];
                $user_email = $_REQUEST['user_email'];
                $user_role = $_REQUEST['user_role'];
                $user_password = empty($_REQUEST['user_password']) ? $query_result_row['user_password'] : password_hash($_REQUEST['user_password'], PASSWORD_BCRYPT, array("cost" => 12));

                   $update_query = "UPDATE users SET username = '$username', user_firstname = '$user_firstname', user_lastname = '$user_lastname', user_email = '$user_email', user_role = '$user_role',user_password = '$user_password' WHERE user_id = '$user_id'";

                    if (mysqli_query($conn,$update_query)) {
                       echo "User Updated <a href='users.php'>View Users</a>" ;
                    }
            }

        }else{

            header("Location: index.php");
        }



       




?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cat_title">First Name</label>
        <input type="text" name="user_firstname" id="user_firstname" placeholder="Please Enter First Name" class="form-control" value="<?php echo $user_firstname;?>">
    </div>
    <div class="form-group">
        <label for="cat_title">Last Name</label>
        <input type="text" name="user_lastname" id="user_lastname" placeholder="Please Enter Last Name" class="form-control" value="<?php echo $user_lastname;?>">
    </div>
    <div class="form-group">
        <label for="cat_title">User Role</label>
        <select name="user_role" id="user_role" class="form-control">
            <option  value="<?php echo $user_role; ?>" ><?php echo $user_role; ?></option>
            <?php

                    if ($user_role == 'admin') {
                        echo "<option value='subscriber'>subscriber</option>";
                    }else{
                        echo "<option value='admin'>admin</option>";
                    }

            ?>
        </select>

    </div>
    
    <!-- <div class="form-group">
        <label for="cat_title">Post Image</label>
        <input type="file" name="post_image" id="post_image" placeholder="Please Choose Any File" class="form-control">
    </div> -->
    <div class="form-group">
        <label for="cat_title">Username</label>
        <input type="text" name="username" id="username" placeholder="Please Enter Username" class="form-control" value="<?php echo $username;?>">
    </div>
    <div class="form-group">
        <label for="cat_title">Email Id</label>
        <input type="text" name="user_email" id="user_email" placeholder="Please Enter Email Id" class="form-control" value="<?php echo $user_email;?>">
    </div>
    <div class="form-group">
        <label for="cat_title">Password</label>
        <input type="password" name="user_password" id="user_password" placeholder="Please Enter Password" class="form-control" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" name="user_edit" value="Update User" class="btn btn-primary">
    </div>
    
</form>
