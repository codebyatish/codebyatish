 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated=date('Y-m-d H:i:s');




    $case_barcode_number = $_REQUEST['case_barcode_number'];
    $case_number = $_REQUEST['case_number'];
    $crime_of_category = $_REQUEST['crime_of_category'];
    $case_issue_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['case_issue_date'])));
    $case_entry_by = $_REQUEST['case_entry_by'];
    $case_location = $_REQUEST['case_location'];
    $case_pending_reason = $_REQUEST['case_pending_reason'];

    
    $case_disposed = 0;

    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  EMS_Cases(CaseBarcodeNumber,CaseNumber,CategoryOfCrime,CaseIssueDate,CaseEntryBy,CasePendingReason,CaseLocation,CaseDisposed,LastUpdated) VALUES ('$case_barcode_number','$case_number','$crime_of_category','$case_issue_date','$case_entry_by','$case_pending_reason','$case_location','$case_disposed','$last_updated')";
        
          if(mysqli_query($con,$insert_query))
          {

            $last_insert_id = mysqli_insert_id($con);
            echo "AddSuccess~".$last_insert_id;
           
          }else
          {
              echo "fail";
          }
    }



    if ($task == 'get_record_for_edit') 
    {

      $case_id = $_REQUEST['Id'];

      $edit_qry = "SELECT * FROM EMS_Cases WHERE CaseId = $case_id";

      $edit_row=mysqli_query($con,$edit_qry);
      $edit_res=mysqli_fetch_array($edit_row,MYSQLI_ASSOC);
      $edit_result = $edit_res['CaseNumber'].'~'.$edit_res['CaseIssueDate'].'~'.$edit_res['CaseEntryBy']."~".$edit_res['CaseBarcodeNumber']."~".$edit_res['CategoryOfCrime'];
      echo $edit_result;
      
    }



    if ($task =='UpdateDetails') 
    { 
          $case_id = $_REQUEST['case_id'];

          $update_qry = "UPDATE EMS_Cases SET CaseBarcodeNumber = '$case_barcode_number' ,CaseNumber = '$case_number', CategoryOfCrime = '$crime_of_category', CaseIssueDate = '$case_issue_date', CaseEntryBy='$case_entry_by', LastUpdated = '$last_updated' where CaseId = $case_id";
       
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

      $case_id = $_REQUEST['Id'];
      $delete_qry = "DELETE FROM EMS_Cases WHERE CaseId = $case_id";

			  if(mysqli_query($con,$delete_qry))
			  {
				    echo "success";
			   
			  }else
			  {
				    echo "fail";
			  }   
		
    }
	

   
 ?>