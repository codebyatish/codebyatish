<?php
    include 'include/header.php';
    
    $last_updated = date("Y-m-d h:i:s");

        if (isset($_POST['create_user'])) {

            $Id = mysqli_real_escape_string($conn,$_REQUEST['Id']);
            $Name = mysqli_real_escape_string($conn,$_REQUEST['Name']);
            $MobileNumber = mysqli_real_escape_string($conn,$_REQUEST['MobileNumber']);
            $Address = mysqli_real_escape_string($conn,$_REQUEST['Address']);
            $Username = mysqli_real_escape_string($conn,$_REQUEST['Username']);
            $Password = mysqli_real_escape_string($conn,$_REQUEST['Password']);
            $UserRole = mysqli_real_escape_string($conn,$_REQUEST['UserRole']);


            
            $insert_query = "INSERT INTO mst_users (Name,MobileNumber,Address,Username,Password,UserRole,LastUpdated) VALUES ('$Name','$MobileNumber','$Address','$Username','$Password','$UserRole','$last_updated')";
            if (mysqli_query($conn,$insert_query)) {
                echo "<script>alert('Record Inserted Successfully...!!')</script>";
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
                                <i class="fa fa-file"></i> Addd User
                            </li>
                        </ol>
                        
                    </div>
                </div>



                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="add_record.php" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Name">*Name</label>
                                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Name" required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="MobileNumber">*Mobile Number</label>
                                        <input type="number" class="form-control" name="MobileNumber" id="MobileNumber" placeholder="Enter Mobile Number" required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Username">*Username</label>
                                        <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter Username" required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Password">*Password</label>
                                        <input type="text" class="form-control" name="Password" id="Password" placeholder="Enter Password" required="true">
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
                                           <option value="admin">admin</option>
                                           <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                         <label for="Address">Address</label>
                                        <textarea rows="5" class="form-control" name="Address" id="Address" placeholder="Enter Address" style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <div class="form-group">
                                        <button class="btn btn-primary" name="create_user" type="submit">Submit</button>
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




