 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated=date('Y-m-d H:i:s');




    $inward_barcode = $_REQUEST['inward_barcode'];
    $inward_reason = $_REQUEST['inward_reason'];
    $inward_by = $_REQUEST['inward_by'];
    $inward_date = date('Y-m-d', strtotime($_REQUEST['inward_date']));
    $inward_time = $_REQUEST['inward_time'];

    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  EMS_Inward(InwardBarcode,InwardReason,InwardBy,InwardDate,InwardTime,LastUpdated) VALUES ('$inward_barcode','$inward_reason','$inward_by','$inward_date','$inward_time','$last_updated')";
       
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

      $inward_id = $_REQUEST['Id'];

      $edit_qry = "SELECT * FROM EMS_Inward WHERE InwardId = $inward_id";

      $edit_row=mysqli_query($con,$edit_qry);
      $edit_res=mysqli_fetch_array($edit_row,MYSQLI_ASSOC);
      $edit_result = $edit_res['InwardBarcode'].'~'.$edit_res['InwardDate'].'~'.$edit_res['InwardReason']."~".$edit_res['InwardTime']."~".$edit_res['InwardBy'];
      echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $inward_id = $_REQUEST['inward_id'];

          $update_qry = "UPDATE EMS_Inward SET InwardBarcode = '$inward_barcode' ,InwardReason = '$inward_reason', InwardBy = '$inward_by', InwardDate = '$inward_date', InwardTime = '$inward_time', LastUpdated = '$last_updated' where InwardId = $inward_id";
       
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

      $inward_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM EMS_Inward WHERE InwardId = $inward_id";

			  if(mysqli_query($con,$delete_qry))
			  {
				    echo "success";
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	

   
 ?>