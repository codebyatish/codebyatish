 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated = date('Y-m-d H:i:s');


    $first_name = mysqli_real_escape_string($con,$_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($con,$_REQUEST['last_name']);
    $mobile_number = mysqli_real_escape_string($con,$_REQUEST['mobile_number']);
    $email_id = mysqli_real_escape_string($con,$_REQUEST['email_id']);
    $user_type = mysqli_real_escape_string($con,$_REQUEST['user_type']);
    $password = mysqli_real_escape_string($con,$_REQUEST['password']);


    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  CRM_Login(FirstName,LastName,MobileNumber,UserName,LoginType,Password,LastUpdated) VALUES ('$first_name','$last_name','$mobile_number','$email_id','$user_type','$password','$last_updated')";
        
          if(mysqli_query($con,$insert_query))
          {
            echo "AddSuccess";
           
          }else
          {
              echo "fail";
          }
    }



    if ($task == 'get_record_for_edit') 
    {

      $login_id = $_REQUEST['Id'];

      $edit_qry = "SELECT * FROM CRM_Login WHERE LoginId = $login_id";

      $edit_row=mysqli_query($con,$edit_qry);
      $edit_res=mysqli_fetch_array($edit_row,MYSQLI_BOTH);
      $edit_result = $edit_res['FirstName'].'~'.$edit_res['LastName'].'~'.$edit_res['MobileNumber']."~".$edit_res['LoginType']."~".$edit_res['UserName']."~".$edit_res['Password'];
      echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $login_id = $_REQUEST['login_id'];

          $update_qry = "UPDATE CRM_Login SET FirstName = '$first_name' ,LastName = '$last_name', MobileNumber = '$mobile_number', LoginType = '$user_type', UserName = '$email_id', Password = '$password', LastUpdated = '$last_updated' where LoginId = $login_id";
       
          if(mysqli_query($con,$update_qry))
          {
             echo "UpdateSuccess";
           
          }else
          {
            echo "fail";
          }
         
    }


    if($task == 'delete_selected_records' )
    { 

      $login_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM CRM_Login WHERE CaseId = $login_id";

			  if(mysqli_query($con,$delete_qry))
			  {
				    echo "success";
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	

   
 ?>