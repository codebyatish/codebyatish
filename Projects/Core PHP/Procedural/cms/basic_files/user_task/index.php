<?php

    include 'includes/header.php';

    if (isset($_POST['login'])) {
      
        $username = mysqli_real_escape_string($conn,$_REQUEST['username']);
        $password = mysqli_real_escape_string($conn,$_REQUEST['password']);


        $sql = "SELECT * FROM mst_users WHERE Username = '$username'";
        $sql_result = mysqli_query($conn,$sql);
        $sql_result_row = mysqli_fetch_array($sql_result);

        if ($sql_result) {

              if ($password == $sql_result_row['Password']) {
                  
                  $_SESSION['user_id'] = $sql_result_row['Id'];
                  $_SESSION['user_role'] = $sql_result_row['UserRole'];

                  header("Location: admin/index.php");

              }else{

                  echo "<script>alert('Username or Password are incorrect...!!')</script>";
                 // header("Location: login.php");
              }

          }else{

              die("QUERY FAILED".mysqli_error($conn));
          }


    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <h4>Login</h4>
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required="true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required="true">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" name="login" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>




</body>
</html>
