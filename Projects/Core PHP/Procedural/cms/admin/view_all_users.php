 <?php



 if (isset($_GET['change_to_admin'])) {
       
       $user_id = $_GET['change_to_admin'];

      $update_query = "UPDATE users SET user_role = 'admin' WHERE user_id = '$user_id'";

       if (!mysqli_query($conn,$update_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: users.php");
        }
    }


 if (isset($_GET['change_to_sub'])) {
       
       $user_id = $_GET['change_to_sub'];

       $update_query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = '$user_id'";

       if (!mysqli_query($conn,$update_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: users.php");
        }
    }



   if (isset($_GET['delete']) && $_SESSION['user_role'] == 'admin') {
       
       $user_id = $_GET['delete'];

       $delete_query = "DELETE FROM users WHERE user_id = '$user_id'";

       if (!mysqli_query($conn,$delete_query)) {
            die("QUERY FAILED".mysqli_error($conn));
            header("Location: users.php");
        }
    }


?>                           

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Id</th>
                                        <th>Role</th>
                                        <th colspan="4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        $query = "SELECT * FROM users";
                                        $query_result = mysqli_query($conn,$query);

                                        while ($query_result_row = mysqli_fetch_array($query_result)) { 

                                        $user_id = $query_result_row['user_id'];
                                        $username = $query_result_row['username'];
                                        $user_firstname = $query_result_row['user_firstname'];
                                        $user_lastname = $query_result_row['user_lastname'];
                                        $user_email = $query_result_row['user_email'];
                                        $user_role = $query_result_row['user_role'];

                                        
                                        echo "<tr>
                                                <td>$user_id</td>
                                                <td>$username</td>
                                                <td>$user_firstname</td>
                                                <td>$user_lastname</td>
                                                <td>$user_email</td>
                                                <td>$user_role</td>
                                                <td><a href='users.php?change_to_admin=$user_id'>ADMIN</a></td>
                                                <td><a href='users.php?change_to_sub=$user_id'>SUBSCRIBER</a></td>
                                                <td><a href='users.php?source=edit_user&edit_user=$user_id'>EDIT</a></td>
                                                <td><a href='users.php?delete=$user_id'>DELETE</a></td>
                                            </tr>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>