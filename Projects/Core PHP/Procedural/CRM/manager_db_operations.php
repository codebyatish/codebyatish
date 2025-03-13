 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated = date('Y-m-d H:i:s');

    $manager_first_name = mysqli_real_escape_string($con,$_REQUEST['manager_first_name']);
    $manager_last_name = mysqli_real_escape_string($con,$_REQUEST['manager_last_name']);
    $manager_designation = mysqli_real_escape_string($con,$_REQUEST['manager_designation']);
    $manager_email_id = mysqli_real_escape_string($con,$_REQUEST['manager_email_id']);
    $manager_mobile_number = mysqli_real_escape_string($con,$_REQUEST['manager_mobile_number']);
    $chars = "yzABC19537";
    $manager_password = substr( str_shuffle( $chars ), 0, 6 );



    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  CRM_Manager(ManagerFirstName,ManagerLastName,ManagerDesignation,ManagerEmailId,ManagerMobileNumber,ManagerPassword,LastUpdated) VALUES ('$manager_first_name','$manager_last_name','$manager_designation','$manager_email_id','$manager_mobile_number','$manager_password','$last_updated')";

          if(mysqli_query($con,$insert_query))
          {
               $manager_last_insert_id = mysqli_insert_id($con);
               $insert_query1 = "INSERT INTO  CRM_Login(LManagerId,FirstName,LastName,MobileNumber,UserName,LoginType,Password,LastUpdated) VALUES ('$manager_last_insert_id','$manager_first_name','$manager_last_name','$manager_mobile_number','$manager_email_id','Manager','$manager_password','$last_updated')";

                 if (mysqli_query($con,$insert_query1)) {

                    $to = $manager_email_id;
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
                                <b> Username : '.$manager_email_id.'</b><br>
                                <b> Password : '.$manager_password.'</b>
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

        $manager_id = $_REQUEST['Id'];

        $edit_qry = "SELECT * FROM CRM_Manager WHERE ManagerId = $manager_id";

        $edit_row=mysqli_query($con,$edit_qry);
        $edit_res=mysqli_fetch_array($edit_row,MYSQLI_BOTH);
        $edit_result = $edit_res['ManagerFirstName'].'`'.$edit_res['ManagerLastName'].'`'.$edit_res['ManagerDesignation']."`".$edit_res['ManagerEmailId']."`".$edit_res['ManagerMobileNumber']."`".$edit_res['ManagerPassword'];
        echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $manager_id = $_REQUEST['manager_id'];

          $update_qry = "UPDATE CRM_Manager SET ManagerFirstName = '$manager_first_name' ,ManagerLastName = '$manager_last_name', ManagerDesignation = '$manager_designation', ManagerEmailId = '$manager_email_id', ManagerMobileNumber = '$manager_mobile_number', LastUpdated = '$last_updated' where ManagerId = $manager_id";
       
          if(mysqli_query($con,$update_qry))
          {
              $update_qry1 = "UPDATE CRM_Login SET FirstName = '$manager_first_name' ,LastName = '$manager_last_name', MobileNumber = '$manager_mobile_number', LoginType = 'Manager', UserName = '$manager_email_id', LastUpdated = '$last_updated' where LManagerId = $manager_id";

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

      $manager_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM CRM_Manager WHERE ManagerId = $manager_id";

			  if(mysqli_query($con,$delete_qry))
			  {

            $delete_qry1 = "DELETE FROM CRM_Login WHERE LManagerId = $manager_id";

            if (mysqli_query($con,$delete_qry1)) {

                echo "success";
            }
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	
   
 ?>