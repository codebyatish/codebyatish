<?php
    include 'include/header.php';

        if (isset($_POST['create_card'])) {

            $first_name = mysqli_real_escape_string($conn,$_REQUEST['first_name']);
            $last_name = mysqli_real_escape_string($conn,$_REQUEST['last_name']);
            $designation = mysqli_real_escape_string($conn,$_REQUEST['designation']);
            $mobile_number = mysqli_real_escape_string($conn,$_REQUEST['mobile_number']);
            $email_id = mysqli_real_escape_string($conn,$_REQUEST['email_id']);
            $address = mysqli_real_escape_string($conn,$_REQUEST['address']);
            $linedin_link = mysqli_real_escape_string($conn,$_REQUEST['linedin_link']);
            $twitter_link = mysqli_real_escape_string($conn,$_REQUEST['twitter_link']);
            $instagram_link = mysqli_real_escape_string($conn,$_REQUEST['instagram_link']);
            $whats_app_number = mysqli_real_escape_string($conn,$_REQUEST['whats_app_number']);
            $profile_photo = $_FILES['profile_photo']['name'];
            $profile_photo_temp = $_FILES['profile_photo']['tmp_name'];
            $last_updated = date("Y-m-d h:m:s");


            $insert_query = "INSERT INTO digital_cards (profile_photo,first_name,last_name,designation,mobile_number,email_id,address,linedin_link,twitter_link,instagram_link,whats_app_number,last_updated) VALUES ('$profile_photo','$first_name','$last_name','$designation','$mobile_number','$email_id','$address','$linedin_link','$twitter_link','$instagram_link','$whats_app_number','$last_updated')";
            if (mysqli_query($conn,$insert_query)) {
                if (move_uploaded_file($profile_photo_temp, "../images/$profile_photo")) {
                    echo "<script> alert('Record Added Successfully..!!'); </script>";
                }else{
                    echo "<script> alert('File Upload Failed..!!'); </script>";
                }
            }else{
                echo "<script> alert('QUERY FAILED.. !!'); </script>";
            }

        }

?>
            

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Dynamic Card
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Add Card</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add Dynamic Card
                            </li>
                        </ol>
                        
                    </div>
                </div>
                <!-- /.row -->
                <div class="form-card">
                    <form action="" method="post" enctype="multipart/form-data">
                        <strong id="error_msg" style="color: red"></strong>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="profile_photo">Profile Photo</label>
                                    <input type="file" name="profile_photo" id='profile_photo' required="true">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Please Enter First Name" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" placeholder="Please Enter Last Name" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" id="designation" placeholder="Please Enter Designation" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input type="number" name="mobile_number" id="mobile_number" placeholder="Please Enter Mobile Number" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email_id">Email Id</label>
                                    <input type="email" name="email_id" id="email_id" placeholder="Please Enter Email Id" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                        <textarea  placeholder="Please Enter About Us Content" class="form-control" required="true" rows="5" name="address" id="address" style="resize: none;" ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linedin_link">Linked In Link</label>
                                    <input type="text" name="linedin_link" id="linedin_link" placeholder="Please Enter Linked In Link" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="text" name="twitter_link" id="twitter_link" placeholder="Please Enter Twitter Link" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram_link">Instagram Link</label>
                                    <input type="text" name="instagram_link" id="instagram_link" placeholder="Please Enter Instagram Link" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="whats_app_number">Whats App Number</label>
                                    <input type="number" name="whats_app_number" id="whats_app_number" placeholder="Please Enter Whats App Number" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="form-group">
                                    <input type="submit" name="create_card" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
<?php

    include 'include/footer.php';
?>








