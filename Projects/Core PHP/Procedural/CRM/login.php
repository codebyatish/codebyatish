<?php
  session_start();
  include('include/db_config.php');
  $message = $_GET['message'] ?? '';
  $AdminUserName = $_GET['AdminUserName'] ?? '';


    if (!empty($_POST['AdminUserName']) || !empty($_POST['AdminPassword'])) 
    {
     
        // username and AdminPassword sent from form 
        $AdminUserName = $_POST['AdminUserName'];
        $AdminPassword = mysqli_real_escape_string($con,$_POST['AdminPassword']);

        //$_SESSION['login_user']= $myusername;
        $sql_query =   "SELECT * FROM CRM_Login WHERE UserName ='$AdminUserName' AND Password ='$AdminPassword'";
        $query_result= mysqli_query($con,$sql_query);
        $query_result1= mysqli_fetch_array($query_result,MYSQLI_BOTH);
        $num_row= mysqli_num_rows($query_result); 
        if ($num_row != 0)
        {
          $_SESSION['login_user']=$AdminUserName;
          $_SESSION['user_type']= $query_result1['LoginType'];
          $_SESSION['login_user_id']= $query_result1['LoginId'];
          $_SESSION['ManagerId']= $query_result1['LManagerId'];
          $_SESSION['EmployeeId']= $query_result1['LEmployeeId'];
          $_SESSION['ClientId']= $query_result1['LClientId'];
          

          header('Location:index.php'); 

        }else
        {
           $message = "Please Enter valid credentials!!";
        } 
    
    }
    mysqli_close($con); 


?>



<!DOCTYPE html>
<html>
<head>
  <title>CRM - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="include/css/font-awesome.css" rel="stylesheet" />
  <script src="include/js/jquery-1.10.2.js"></script>

<style>
body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 50px 30px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}


.login-heading{
  text-align: center;
}

.mb-30{
  margin-bottom: 30px;
}

</style>
</head>
<body>

  <div class="wrapper">
    <form class="form-signin" action="login.php" id="form_submit_login" method="post">     
    <b><label id="error_msg" style="color:red;"><?php echo $message; ?></label></b>
    <br>

      <h2 class="login-heading">CRM - Login</h2>
      <div class="mb-30" ></div>  

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="AdminUserName" id="AdminUserName" placeholder="Email Address" autofocus="" />
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" name="AdminPassword" id="AdminPassword" placeholder="Password" required=""/> 
      </div>


      <div class="mb-30" ></div>    
      <a name="LoginButton" id="LoginButton" class="btn btn-primary btn-block" onclick="confirm_login()" >Login</a>

      <div class="mb-30" ></div>   

      <div class="text-center">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear()); </script> | CRM , All Rights Reserved. Website By <a  style="color: #0044ff;text-decoration: underline;font-weight: bold;" href="http://iamshoonya.com/">Shoonya</a>.</div>


    </form>
  </div>

<script>


function confirm_login()
{

    var AdminUserName = $('#AdminUserName').val();
    var AdminPassword = $('#AdminPassword').val();

      if(AdminUserName == "")
        {
            $('#AdminUserName').css("border-color", "red");
            $('#error_msg').empty().append('Please Enter User Name.');
            setTimeout(function()
            {
              $("#AdminUserName").css('border-color','initial');
              $('#error_msg').empty();
            },3000);
        }else if(AdminPassword == "")
        {
            $('#AdminPassword').css("border-color", "red");
            $('#error_msg').empty().append('Please Enter Password.');
            setTimeout(function()
            {
              $("#AdminPassword").css('border-color','initial');
              $('#error_msg').empty();
            },3000);

        }else 
        {
          document.getElementById('form_submit_login').submit();
        }

}

</script>

</body>
</html>
