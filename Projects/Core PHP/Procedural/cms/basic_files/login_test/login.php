<?php

  $conn = mysqli_connect('localhost','root','','demo_site_db');
  if (!$conn) {
    die("Connection failed".mysqli_error($conn));
  }


  if (isset($_POST['submit'])) {
      
      $user_email = mysqli_real_escape_string($conn,$_REQUEST['user_email']);
      $user_password = mysqli_real_escape_string($conn,$_REQUEST['user_password']);


      $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
      $sql_result = mysqli_query($conn,$sql);
    
      if (mysqli_num_rows($sql_result) == 1) {
          
          $row = mysqli_fetch_array($sql_result);
          $_SESSION['UserId'] = $row['user_id'];
          $_SESSION['UserFullname'] = $row['user_fullname'];
          $_SESSION['UserEmail'] = $row['user_email'];

          header("Location: index.php");

      }else{

          echo "Username or Password incorrect";
      }


  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  
<div class="container" style="margin-top: 24px;">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="border: 2px solid #ccc;padding: 24px 24px;">
      <form action="login.php" method="post">
          <div class="form-group">
            <label for="user_email">Email:</label>
            <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
          </div>
          <div class="form-group">
            <label for="user_password">Password:</label>
            <input type="password" class="form-control" id="user_password" placeholder="Enter password" name="user_password">
          </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Login">
          
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

</body>
</html>
