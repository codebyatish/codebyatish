 <?php

    include 'include/header.php';

    if (isset($_GET['id'])) {
       
       $post_id = $_GET['id'];
       $select_comment_query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
       $select_comment_query_result = mysqli_query($conn,$select_comment_query);
    }

    if (isset($_GET['delete'])) {
       

       $post_id = $_GET['id'];
       $comment_id = $_GET['delete'];

       $delete_query = "DELETE FROM comments WHERE comment_id = '$comment_id'";
       if (mysqli_query($conn,$delete_query)) {
            header("Location: comment.php?id=$post_id");
        }
    }


     if (isset($_GET['approve'])) {
       
       $comment_id = $_GET['approve'];

       $update_query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = '$comment_id'";

       if (!mysqli_query($conn,$update_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: comments.php");
        }
    }


 if (isset($_GET['unapprove'])) {
       
       $comment_id = $_GET['unapprove'];

       $update_query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = '$comment_id'";

       if (!mysqli_query($conn,$update_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: comments.php");
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
                                <i class="fa fa-dashboard"></i><a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Posts
                            </li>
                        </ol>

                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>In Response TO</th>
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Unapprove</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        while ($query_result_row = mysqli_fetch_assoc($select_comment_query_result)) { 

                                        $comment_id = $query_result_row['comment_id'];
                                        $comment_post_id = $query_result_row['comment_post_id'];
                                        $comment_author = $query_result_row['comment_author'];
                                        $comment_email = $query_result_row['comment_email'];
                                        $comment_content = $query_result_row['comment_content'];
                                        $comment_status = $query_result_row['comment_status'];
                                        $comment_date = $query_result_row['comment_date'];

                                        $select_query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
                                        $select_query_result = mysqli_query($conn,$select_query);
                                        $select_query_row = mysqli_fetch_assoc($select_query_result);


                                        $post_title = $select_query_row["post_title"];


                                        echo "<tr>
                                                <td>$comment_id</td>
                                                <td>$comment_author</td>
                                                <td>$comment_content</td>
                                                <td>$comment_email</td>
                                                <td>$comment_status</td>
                                                <td><a href='../post.php?p_id=$comment_post_id'>$post_title</a></td>
                                                <td>$comment_date</td>
                                                <td><a href='comments.php?approve=$comment_id'>APPROVE</a></td>
                                                <td><a href='comments.php?unapprove=$comment_id'>UNAPPROVE</a></td>
                                                <td><a href='comments.php?unapprove=$comment_id'>EDIT</a></td>
                                                <td><a href='comment.php?delete=$comment_id&id=".$_GET['id']."'>DELETE</a></td>
                                            </tr>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                            

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
                       