<?php

    include 'include/header.php';

   if (isset($_GET['delete'])) {
       
       $cat_id = $_GET['delete'];

       $delete_query = "DELETE FROM categories WHERE cat_id = '$cat_id'";

       if (!mysqli_query($conn,$delete_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: categories.php");
        }
    }

    if (isset($_POST['update'])) {
        
        $cat_id = $_REQUEST['c_id'];
        $update_cat_title = $_REQUEST['update_cat_title'];
        
        $update_stmt = mysqli_prepare($conn,"UPDATE categories SET cat_title = ? WHERE cat_id = ?");
        mysqli_stmt_bind_param($update_stmt,"si",$update_cat_title,$cat_id);
        mysqli_stmt_execute($update_stmt);

       if (!$update_stmt) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: categories.php");
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
                                <i class="fa fa-file"></i> Categories
                            </li>
                        </ol>

                        <div class="col-md-6">

                            <?php insert_categories(); ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Category Title</label>
                                    <input type="text" name="cat_title" id="cat_title" placeholder="Please Enter Category Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                                </div>
                                
                            </form>

                            <?php

                                if (isset($_GET['edit'])) {
       
                                        $cat_id = $_GET['edit'];

                                        $select_query = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
                                        $select_query_result = mysqli_query($conn,$select_query);
                                        $select_query_row = mysqli_fetch_assoc($select_query_result);

                                        $cat_title = $select_query_row["cat_title"];
                                ?>
                               
                            <form action="categories.php" method="post">
                                <div class="form-group">
                                    <label for="update_cat_title">Edit Category Title</label>
                                    <input type="text" name="update_cat_title" id="update_cat_title" placeholder="Please Enter Category Title" class="form-control" value="<?php echo $cat_title; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="c_id" value="<?php echo $cat_id; ?>" >
                                    <input type="submit" name="update" value="Update Category" class="btn btn-primary">
                                </div>
                                
                            </form>

                             <?php } ?>
                        </div>

                        <div class="col-md-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php find_all_categories(); ?>
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

<?php

    include 'include/footer.php';

?>
