<?php
    include 'include/header.php';
    
    $last_updated = date("Y-m-d h:i:s");

            if (isset($_GET['user_id'])) {

                $user_id = $_GET['user_id'];


                    $select_users_query = "SELECT * FROM mst_users WHERE Id = $user_id";
                    $select_users_query_result = mysqli_query($conn,$select_users_query);

                    $select_users_query_result_row = mysqli_fetch_array($select_users_query_result);

                        $Id = $select_users_query_result_row['Id'];
                        $Name = $select_users_query_result_row['Name'];
                        $MobileNumber = $select_users_query_result_row['MobileNumber'];
                        $Address = $select_users_query_result_row['Address'];
                        $Username = $select_users_query_result_row['Username'];
                        $Password = $select_users_query_result_row['Password'];
                        $UserRole = $select_users_query_result_row['UserRole'];

            }




            if (isset($_POST['update_user'])) {
              
                $u_id = $_REQUEST['u_id'];
                $Name = mysqli_real_escape_string($conn,$_REQUEST['Name']);
                $MobileNumber = mysqli_real_escape_string($conn,$_REQUEST['MobileNumber']);
                $Address = mysqli_real_escape_string($conn,$_REQUEST['Address']);
                $Username = mysqli_real_escape_string($conn,$_REQUEST['Username']);
                $Password = mysqli_real_escape_string($conn,$_REQUEST['Password']);
                $UserRole = mysqli_real_escape_string($conn,$_REQUEST['UserRole']);


               $update_query = "UPDATE mst_users SET Name = '$Name', MobileNumber = '$MobileNumber', Address = '$Address', Username = '$Username', Password = '$Password', UserRole = '$UserRole', LastUpdated = '$last_updated' WHERE Id = $u_id";

                    if (mysqli_query($conn,$update_query)) {

                        echo "<script>alert('Record Updated Successfully...!!')</script>";
                         header("Location: index.php");

                    }else{
                        echo "<script>alert('Error.')</script>";
                    }
            }



?>
            



        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Update User
                            </li>
                        </ol>
                        
                    </div>
                </div>



                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="edit_record.php" method="post">                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Name">*Name</label>
                                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Name" required="true" value="<?php echo $Name; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="MobileNumber">*Mobile Number</label>
                                        <input type="number" class="form-control" name="MobileNumber" id="MobileNumber" placeholder="Enter Mobile Number" required="true" value="<?php echo $MobileNumber; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Username">*Username</label>
                                        <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter Username" required="true" value="<?php echo $Username; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Password">*Password</label>
                                        <input type="text" class="form-control" name="Password" id="Password" placeholder="Enter Password" required="true" value="<?php echo $Password; ?>">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="UserRole">*User Role</label>
                                        <select name="UserRole" id="UserRole" class="form-control">
                                           <option value="">Select User Role</option>
                                           <?php

                                                if ($UserRole == "admin") {

                                                    echo "<option selected='true' value='admin'>admin</option>";
                                                    echo "<option value='user'>user</option>";

                                                }else if ($UserRole == "user") {
                                                    echo "<option  value='admin'>admin</option>";
                                                    echo "<option selected='true' value='user'>user</option>";
                                                }

                                           ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                         <label for="Address">Address</label>
                                        <textarea rows="5" class="form-control" name="Address" id="Address" placeholder="Enter Address" style="resize: none;"><?php echo $Address; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <div class="form-group">
                                        <input type="hidden" name="u_id" id="u_id" value="<?php echo $Id; ?>">
                                        <input type="submit" class="btn btn-success" name="update_user" value="Update" >
                                        <a href="index.php" class="btn btn-danger">Close</a>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
                



            </div>
            <!-- /.container-fluid -->

        </div>
<?php

    include 'include/footer.php';
?>




