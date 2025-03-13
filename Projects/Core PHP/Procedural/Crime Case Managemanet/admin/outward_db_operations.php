 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated=date('Y-m-d H:i:s');


    $outward_barcode = $_REQUEST['outward_barcode'];
    $outward_reason = $_REQUEST['outward_reason'];
    $outward_by = $_REQUEST['outward_by'];
    $outward_date = date('Y-m-d', strtotime($_REQUEST['outward_date']));
    $outward_time = $_REQUEST['outward_time'];
    $outward_out_reach_checkbox = mysqli_real_escape_string($con, $_REQUEST['outward_out_reach_checkbox']);


    if ($task == 'InsertDetails') 
    {

        if ($outward_out_reach_checkbox == "Yes") {

            $case_disposed = 1;
            $update_qry = "UPDATE EMS_Cases SET CaseDisposed = '$case_disposed' WHERE CaseBarcodeNumber = $outward_barcode";
         
            mysqli_query($con,$update_qry);

        }

          $insert_query = "INSERT INTO  EMS_Outward(OutwardBarcode,OutwardReason,OutwardBy,OutwardDate,OutwardTime,LastUpdated) VALUES ('$outward_barcode','$outward_reason','$outward_by','$outward_date','$outward_time','$last_updated')";
       
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

      $edit_qry = "SELECT * FROM EMS_Outward WHERE InwardId = $inward_id";

      $edit_row=mysqli_query($con,$edit_qry);
      $edit_res=mysqli_fetch_array($edit_row,MYSQLI_ASSOC);
      $edit_result = $edit_res['OutwardBarcode'].'~'.$edit_res['OutwardDate'].'~'.$edit_res['OutwardReason']."~".$edit_res['OutwardTime']."~".$edit_res['OutwardBy'];
      echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $inward_id = $_REQUEST['inward_id'];

          $update_qry = "UPDATE EMS_Outward SET OutwardBarcode = '$outward_barcode' ,OutwardReason = '$outward_reason', OutwardBy = '$outward_by', OutwardDate = '$outward_date', OutwardTime = '$outward_time', LastUpdated = '$last_updated' where InwardId = $inward_id";
       
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
      $delete_qry = "DELETE FROM EMS_Outward WHERE InwardId = $inward_id";

			  if(mysqli_query($con,$delete_qry))
			  {
				    echo "success";
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	

   
 ?>