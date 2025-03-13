<?php

  $conn = mysqli_connect('localhost','root','','demo_site_db');
  if (!$conn) {
    die("Connection failed".mysqli_error($conn));
  }


  if (isset($_POST['insert_record'])) {
      
      $user_fullname = mysqli_real_escape_string($conn,$_REQUEST['user_fullname']);
      $user_mobilenumber = mysqli_real_escape_string($conn,$_REQUEST['user_mobilenumber']);
      $user_email = mysqli_real_escape_string($conn,$_REQUEST['user_email']);
      $user_dateofbirth = mysqli_real_escape_string($conn,$_REQUEST['user_dateofbirth']);
      $user_address = mysqli_real_escape_string($conn,$_REQUEST['user_address']);
      $user_subjects = implode(",",$_REQUEST['user_subjects']);

      $sql = "SELECT * FROM users WHERE user_email = '$user_email' OR user_mobilenumber = $user_mobilenumber";
      $sql_result = mysqli_query($conn,$sql);
    
      if (mysqli_num_rows($sql_result) == 1) {

        echo "Mobile Number or email id id already exits";

      }else{

          $insert_sql = "INSERT INTO users (user_fullname,user_mobilenumber,user_email,user_dateofbirth,user_address,user_subjects) VALUES ('$user_fullname','$user_mobilenumber','$user_email','$user_dateofbirth','$user_address','$user_subjects')";

          if (mysqli_query($conn,$insert_sql)) {
             echo "<script>
                alert('Record inserted successfully');
             </script>";
          }else{
            echo "<script>
                alert('QUERY FAILED');
             </script>";
          }


      }
          
  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>




  <style type="text/css">
    
  .card{
    margin-top: 24px;
    border: 1px solid #ccc;
    box-shadow: 4px 4px 6px 0px #707070;
    padding: 24px 24px;
  }

  table>thead>tr>th, table>tbody>tr>td{
    border: 1px solid black !important;
  }

  table>thead>tr>th{
    background-color:#ccc ;
  }

  </style>
</head>
<body>


  
<div class="container" style="margin-top: 24px;">
  <h1>Ragistration</h1>
<!--   <div class="row text-center">
    
  </div> -->
    <div class="card">
        <form action="index.php" method="post">
          <div class="row">
            <div class="col-md-3">
            <div class="form-group">
              <label for="user_fullname">Full Name</label>
              <input type="text" class="form-control" id="user_fullname" placeholder="Enter Full Name" name="user_fullname" required="true">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="user_mobilenumber">Mobile Number</label>
              <input type="number" class="form-control" id="user_mobilenumber" placeholder="Enter Mobile Number" name="user_mobilenumber" required="true">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="user_email">Email</label>
              <input type="email" class="form-control" id="user_email" placeholder="Enter email" name="user_email" required="true">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="user_dateofbirth">Date Of Birth</label>
              <input type="date" class="form-control" id="user_dateofbirth" placeholder="Enter email" name="user_dateofbirth" required="true">
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="user_subjects">Select Subjects</label>
                  <select class="selectpicker form-control" multiple data-live-search="true" id="user_subjects" name="user_subjects[]" required="true">
                    <option value="Marathi">Marathi</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Physics">Physics</option>
                    <option value="Math">Math</option>
                  </select>
                </div>
              </div>
              <div class="col-md-9">
              <div class="form-group">
                <label for="user_address">Address</label>
                <textarea class="form-control" rows="5" style="resize: none;" name="user_address" id="user_address" required="true"></textarea>
              </div>
              </div>
            </div>
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-12 text-center">
                  <input type="submit" name="insert_record" class="btn btn-primary" value="SUBMIT">
                </div>
            </div>
        </form>
    </div>


    <br>
    <br>


    <div class="card">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Email</th>
              <th>Subjects</th>
              <th>Date Of Birth</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
              <?php

                    $sel_sql = "SELECT * FROM users";
                    $sel_sql_result = mysqli_query($conn,$sel_sql);

                    while ($row = mysqli_fetch_array($sel_sql_result)) {

              ?>  

                      <tr>
                        <td><?php echo $row['user_fullname']; ?></td>
                        <td><?php echo $row['user_mobilenumber']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td><?php echo $row['user_subjects']; ?></td>
                        <td><?php echo $row['user_dateofbirth']; ?></td>
                        <td><?php echo $row['user_address']; ?></td>
                      </tr>


              <?php } ?>

          </tbody>
        </table>
    </div>
  </div>
</div>


<script type="text/javascript">
  
  $('select').selectpicker();



</script>

</body>
</html>
