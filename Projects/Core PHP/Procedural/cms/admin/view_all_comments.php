 <?php



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



   if (isset($_GET['delete'])) {
       
       $comment_id = $_GET['delete'];

       $delete_query = "DELETE FROM comments WHERE comment_id = '$comment_id'";

       if (!mysqli_query($conn,$delete_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: comments.php");
        }
    }


?>                           

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

                                        $query = "SELECT * FROM comments";
                                        $query_result = mysqli_query($conn,$query);

                                        while ($query_result_row = mysqli_fetch_assoc($query_result)) { 

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


                                        $post_title = $select_query_row["post_title"] ?? 'Not Having Post';


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
                                                <td><a href='comments.php?delete=$comment_id'>DELETE</a></td>
                                            </tr>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>