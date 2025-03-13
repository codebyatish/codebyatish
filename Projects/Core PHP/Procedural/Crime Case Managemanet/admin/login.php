<?php
  session_start();
  $message='';
  include('include/db_config.php');
  $message = $_GET['message'];
 echo $AdminUserName = $_GET['AdminUserName'];


    if (!empty($_POST['AdminUserName']) || !empty($_POST['AdminPassword'])) 
    {
     
        // username and AdminPassword sent from form 
        $AdminUserName = $_POST['AdminUserName'];
        $AdminPassword = mysqli_real_escape_string($con,$_POST['AdminPassword']);

        //$_SESSION['login_user']= $myusername;
      	$sql_query =   "SELECT * FROM EMS_AdminLogin WHERE UserName ='$AdminUserName' AND Password ='$AdminPassword'";
        $query_result= mysqli_query($con,$sql_query);
        $query_result1= mysqli_fetch_array($query_result,MYSQLI_BOTH);
        $num_row= mysqli_num_rows($query_result); 
        if ($num_row != 0)
        {
          $_SESSION['login_user']=$AdminUserName;
          $_SESSION['login_user_id']= $query_result1['LoginId'];
          $_SESSION['user_type']= $query_result1['LoginType'];

          header('Location:index.php'); 

        }else
        {
           $message = "Please Enter valid credentials!!";
        } 
    
    }
    mysqli_close($con); 


?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from ventura.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 16:51:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>EMS - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="include/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="include/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="include/css/style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							             <!-- <img class="img-fluid" src="" alt="Case Evidence Management"> -->
                           <h1 style="color: white;" >E - मुद्देमाल</h1>
                      </div>
                        <div class="login-right">
                							<div class="login-right-wrap">
                								<h1>Login</h1>
                								<p class="account-subtitle">E - मुद्देमाल</p>
                								
                								<!-- Form -->
                								<form action="login.php" id="form_submit_login" method="post">
                									<b><label id="error_msg" style="color:red;"><?php echo $message; ?></label></b>
                									<br>
                									<div class="form-group">
                										<input class="form-control" type="text" id="AdminUserName" name="AdminUserName"  placeholder="User Name">
                									</div>
                									<div class="form-group">
                										<input class="form-control" type="text" id="AdminPassword" name="AdminPassword" placeholder="Password">
                									</div>
                									<div class="form-group">
                										<a class="btn btn-primary btn-block" onclick="confirm_login()" style="color: white;font-weight: bold;" >Login</a>
                									</div>
                								</form>
                								<!-- /Form -->
                								
                								<div class="text-center forgotpass"><a href="#">Forgot Password?</a></div>
                								<div class="login-or">
                									<span class="or-line"></span>
                									<span class="span-or">or</span>
                								</div>

                								
                								<div class="text-center dont-have">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear()); </script> | Evidence Management System , All Rights Reserved. Website By <a  style="color: #0044ff;text-decoration: underline;font-weight: bold;" href="http://iamshoonya.com/">Shoonya</a>.</div>
                							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="include/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="include/js/popper.min.js"></script>
        <script src="include/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="include/js/script.js"></script>
		
    </body>

<script type="text/javascript">
	function confirm_login()
{

 // alert(validate_user_AdminPassword());
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
         //	alert(AdminUserName+"--"+AdminPassword);
          document.getElementById('form_submit_login').submit();
        }

}

</script>
</html>