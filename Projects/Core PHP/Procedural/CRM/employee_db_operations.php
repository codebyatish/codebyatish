 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated = date('Y-m-d H:i:s');

    $employee_first_name = mysqli_real_escape_string($con,$_REQUEST['employee_first_name']);
    $employee_last_name = mysqli_real_escape_string($con,$_REQUEST['employee_last_name']);
    $employee_designation = mysqli_real_escape_string($con,$_REQUEST['employee_designation']);
    $employee_email_id = mysqli_real_escape_string($con,$_REQUEST['employee_email_id']);
    $employee_mobile_number = mysqli_real_escape_string($con,$_REQUEST['employee_mobile_number']);
    $chars = "yzABC19537";
    $employee_password = substr( str_shuffle( $chars ), 0, 6 );


    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  CRM_Employee(EmployeeFirstName,EmployeeLastName,EmployeeDesignation,EmployeeEmailId,EmployeeMobileNumber,EmployeePassword,LastUpdated) VALUES ('$employee_first_name','$employee_last_name','$employee_designation','$employee_email_id','$employee_mobile_number','$employee_password','$last_updated')";

          if(mysqli_query($con,$insert_query))
          {
               $employee_last_insert_id = mysqli_insert_id($con);
               $insert_query1 = "INSERT INTO  CRM_Login(LEmployeeId,FirstName,LastName,MobileNumber,UserName,LoginType,Password,LastUpdated) VALUES ('$employee_last_insert_id','$employee_first_name','$employee_last_name','$employee_mobile_number','$employee_email_id','Employee','$employee_password','$last_updated')";

              if (mysqli_query($con,$insert_query1)) {

                    $to = $employee_email_id;
                    $fromEmail = "atishjaiwal9@gmail.com";
                    $subject = "A2F- CRM Account Credentials";
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
                    $message = '<!doctype html>
                            <html lang="en">
                            <head>
                              <meta charset="UTF-8">
                              <meta name="viewport"
                                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                              <meta http-equiv="X-UA-Compatible" content="ie=edge">
                              <title>Document</title>
                            </head>
                            <body>
                            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">
                            </span>
                              <div class="container">
                                <b> Username : '.$employee_email_id.'</b><br>
                                <b> Password : '.$employee_password.'</b>
                              </div>
                          </body>
                          </html>';

                          if (@mail($to, $subject, $message, $headers)) {

                              echo "AddSuccess";

                          }else{

                              echo "Fail_C";
                          }

                 }         
           
          }else
          {
              echo "fail";
          }
    }


    if ($task == 'get_record_for_edit') 
    {

        $employee_id = $_REQUEST['Id'];

        $edit_qry = "SELECT * FROM CRM_Employee WHERE EmployeeId = $employee_id";

        $edit_row=mysqli_query($con,$edit_qry);
        $edit_res=mysqli_fetch_array($edit_row,MYSQLI_BOTH);
        $edit_result = $edit_res['EmployeeFirstName'].'`'.$edit_res['EmployeeLastName'].'`'.$edit_res['EmployeeDesignation']."`".$edit_res['EmployeeEmailId']."`".$edit_res['EmployeeMobileNumber']."`".$edit_res['EmployeePassword'];
        echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $employee_id = $_REQUEST['employee_id'];

          $update_qry = "UPDATE CRM_Employee SET EmployeeFirstName = '$employee_first_name' ,EmployeeLastName = '$employee_last_name', EmployeeDesignation = '$employee_designation', EmployeeEmailId = '$employee_email_id', EmployeeMobileNumber = '$employee_mobile_number', LastUpdated = '$last_updated' where EmployeeId = $employee_id";
       
          if(mysqli_query($con,$update_qry))
          {
              $update_qry1 = "UPDATE CRM_Login SET FirstName = '$employee_first_name' ,LastName = '$employee_last_name', MobileNumber = '$employee_mobile_number', LoginType = 'Employee', UserName = '$employee_email_id', LastUpdated = '$last_updated' where LEmployeeId = $employee_id";

              if (mysqli_query($con,$update_qry1)) {

                  echo "UpdateSuccess";
              }

          }else
          {
            echo "fail";
          }
         
    }


    if($task == 'delete_selected_records' )
    { 

      $employee_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM CRM_Employee WHERE EmployeeId = $employee_id";

			  if(mysqli_query($con,$delete_qry))
			  {

            $delete_qry1 = "DELETE FROM CRM_Login WHERE LEmployeeId = $employee_id";

            if (mysqli_query($con,$delete_qry1)) {

                echo "success";
            }
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	
   
 ?>