<?php include("includes/header.php"); ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>
<style type="text/css">
    .admin-photo-thumbnail{
        width: 62px;
        border-radius: 10px;
    }
</style>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            All Users
                        </h1>
                        <p class="bg-success"><?php echo $message; ?></p>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                        <a href="add_user.php" class="btn btn-primary" >Add User</a>
                        <hr>
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                    $users = User::find_all();
                                    foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?php echo $user->id; ?></td>
                                            <td><img class="admin-photo-thumbnail" src="<?php echo $user->image_path_and_placeholder(); ?>">
                                                <div class="action_link">
                                                    <a href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
                                                    <a href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->first_name; ?></td>
                                            <td><?php echo $user->last_name; ?></td>
                                        </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>