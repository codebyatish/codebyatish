<?php
	
	include("../includes/header.php");

	if (isset($_SESSION["user_role"])) {
        header("Location: index.php");
    }


    if (isset($_POST['login'])) {
        
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);


         $query = "SELECT * FROM users WHERE username = '$username'";
            $query_result = mysqli_query($conn,$query);
            $query_result_row = mysqli_fetch_array($query_result);


            if ($query_result) {
                if ($password == $query_result_row['user_password']) {
                    
                    $_SESSION['user_id'] = $query_result_row['user_id'];
                    $_SESSION['username'] = $query_result_row['username'];
                    $_SESSION['user_firstname'] = $query_result_row['user_firstname'];
                    $_SESSION['user_lastname'] = $query_result_row['user_lastname'];
                    $_SESSION['user_role'] = $query_result_row['user_role'];
                    header("Location: index.php");

                }else{

                    echo "<script>alert('Username or Password are incorrect...!!')</script>";
                   // header("Location: login.php");


                }

            }else{

                die("QUERY FAILED".mysqli_error($conn));
            }


    }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
?>
	
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <h4>Login</h4>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="login" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

