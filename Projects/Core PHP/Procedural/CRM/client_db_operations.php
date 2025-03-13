 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated = date('Y-m-d H:i:s');



    $client_company_name = mysqli_real_escape_string($con,$_REQUEST['client_company_name']);
    $client_first_name = mysqli_real_escape_string($con,$_REQUEST['client_first_name']);
    $client_last_name = mysqli_real_escape_string($con,$_REQUEST['client_last_name']);
    $client_mobile_number = mysqli_real_escape_string($con,$_REQUEST['client_mobile_number']);
    $client_email_id = mysqli_real_escape_string($con,$_REQUEST['client_email_id']);
    $chars = "yzABC19537";
    $client_password = substr( str_shuffle( $chars ), 0, 6 );
    $client_frequency = mysqli_real_escape_string($con,$_REQUEST['client_frequency']);
    $client_address = mysqli_real_escape_string($con,$_REQUEST['client_address']);


    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  CRM_Client(ClientCompanyName,ClientFirstName,ClientLastName,ClientEmailId,ClientMobileNumber,ClientPassword,ClientFrequency,ClientAddress,LastUpdated) VALUES ('$client_company_name','$client_first_name','$client_last_name','$client_email_id','$client_mobile_number','$client_password','$client_frequency','$client_address','$last_updated')";

          if(mysqli_query($con,$insert_query))
          {
               $client_last_insert_id = mysqli_insert_id($con);
               $insert_query1 = "INSERT INTO  CRM_Login(LClientId,FirstName,LastName,MobileNumber,UserName,LoginType,Password,LastUpdated) VALUES ('$client_last_insert_id','$client_first_name','$client_last_name','$client_mobile_number','$client_email_id','Client','$client_password','$last_updated')";

              if (mysqli_query($con,$insert_query1)) {

                    $to = $client_email_id;
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
                                <b> Username : '.$client_email_id.'</b><br>
                                <b> Password : '.$client_password.'</b>
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

        $client_id = $_REQUEST['Id'];

        $edit_qry = "SELECT * FROM CRM_Client WHERE ClientId = $client_id";

        $edit_row=mysqli_query($con,$edit_qry);
        $edit_res=mysqli_fetch_array($edit_row,MYSQLI_BOTH);
        $edit_result = $edit_res['ClientCompanyName'].'`'.$edit_res['ClientFirstName'].'`'.$edit_res['ClientLastName']."`".$edit_res['ClientMobileNumber']."`".$edit_res['ClientEmailId']."`".$edit_res['ClientFrequency']."`".$edit_res['ClientAddress'];
        echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $client_id = $_REQUEST['client_id'];

          $update_qry = "UPDATE CRM_Client SET ClientCompanyName = '$client_company_name' ,ClientFirstName = '$client_first_name' ,ClientLastName = '$client_last_name', ClientMobileNumber = '$client_mobile_number',ClientEmailId = '$client_email_id', ClientFrequency = '$client_frequency',   ClientAddress = '$client_address', LastUpdated = '$last_updated' where ClientId = $client_id";
       
          if(mysqli_query($con,$update_qry))
          {
              $update_qry1 = "UPDATE CRM_Login SET FirstName = '$client_first_name' ,LastName = '$client_last_name', MobileNumber = '$client_mobile_number', LoginType = 'Client', UserName = '$client_email_id', LastUpdated = '$last_updated' where LClientId = $client_id";

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

      $client_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM CRM_Client WHERE ClientId = $client_id";

			  if(mysqli_query($con,$delete_qry))
			  {

            $delete_qry1 = "DELETE FROM CRM_Login WHERE LClientId = $client_id";

            if (mysqli_query($con,$delete_qry1)) {

                echo "success";
            }
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	
   
 ?>