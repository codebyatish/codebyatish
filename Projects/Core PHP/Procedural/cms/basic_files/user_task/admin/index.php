<?php
    include 'include/header.php';


    if (!isset($_SESSION["user_role"])) {
        header("Location: ../index.php");
    }


    if (isset($_GET['delete_id'])) {
       
       $user_id = $_GET['delete_id'];

       $delete_query = "DELETE FROM mst_users WHERE Id = '$user_id'";

       if (mysqli_query($conn,$delete_query)) {
            header("Location: index.php");
        }
    }



?>
            



        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to 
                            <?php echo $_SESSION['user_role']; ?>
                            <small>Author</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> View Users
                            </li>
                        </ol>
                        
                    </div>
                </div>

                <?php

                if ($_SESSION['user_role'] == "admin") { ?>

                    <a href="add_record.php" class="btn btn-primary">Add User</a>

                <?php } ?>


                
                <hr>

                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                 <?php

                                    if ($_SESSION['user_role'] == "admin") { ?>

                                        <th colspan="2">Action</th>

                                    <?php }else{ ?>

                                        <th>Action</th>

                                    <?php } ?>

                                    
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Username</th>
                                    <th>User Role</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    if ($_SESSION['user_role'] == "user") {

                                        $user_id = $_SESSION['user_id']; 
                                        $select_users_query = "SELECT * FROM mst_users WHERE Id = $user_id";

                                    }else{

                                        $select_users_query = "SELECT * FROM mst_users";
                                    }


                                    $select_users_query_result = mysqli_query($conn,$select_users_query);

                                    while ($select_users_query_result_row = mysqli_fetch_array($select_users_query_result)) {
                                        
                                        $Id = $select_users_query_result_row['Id'];
                                        $Name = $select_users_query_result_row['Name'];
                                        $MobileNumber = $select_users_query_result_row['MobileNumber'];
                                        $Address = $select_users_query_result_row['Address'];
                                        $Username = $select_users_query_result_row['Username'];
                                        $UserRole = $select_users_query_result_row['UserRole'];
                                        $LastUpdated = $select_users_query_result_row['LastUpdated'];

                                    ?>

                                    <tr>
                                        <td><a href="edit_record.php?user_id=<?php echo $Id;?>">EDIT</a></td>
                                        <?php

                                            if ($_SESSION['user_role'] == "admin") { ?>
                                            
                                                <td><a href="index.php?delete_id=<?php echo $Id;?>">DELETE</a></td>

                                         <?php } ?>
                                        <td><?php echo $Name; ?></td>
                                        <td><?php echo $MobileNumber; ?></td>
                                        <td><?php echo $Username; ?></td>
                                        <td><?php echo $UserRole; ?></td>
                                        <td><?php echo $LastUpdated; ?></td>
                                    </tr>


                                  <?php  } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>





            </div>
            <!-- /.container-fluid -->

        </div>
<?php

    include 'include/footer.php';
?>




