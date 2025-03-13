<?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

  $task = $_REQUEST['task'];
  $last_updated = date('Y-m-d H:i:s');


if ($task == 'insert_evidence_details') 
{

    $evidence_name = $_REQUEST['evidence_name'];
    $evidence_mrno = $_REQUEST['evidence_mrno'];
    $court_verdict = $_REQUEST['court_verdict'];
   // $case_property_pending = $_REQUEST['case_property_pending'];
   // $case_property_location = $_REQUEST['case_property_location'];
    $evidence_description = $_REQUEST['evidence_description'];
    $case_id = $_REQUEST['case_id'];
    $deleted_evidance_id = $_REQUEST['deleted_evidance_id'];
    $for_new_row = $_REQUEST['for_new_row'];

    
    $sel_qry ="SELECT * FROM EMS_Evidences WHERE CaseId = '$case_id'";
    $sel_qry_result=mysqli_query($con,$sel_qry);
    $sel_qry_row=mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $sel_qry_num_row=mysqli_num_rows($sel_qry_result);

        if ($sel_qry_num_row == 0) 
        {

            		for($z=0;$z<count($evidence_name);$z++)
            		{

            			 $qry_insert_evidance = "INSERT INTO EMS_Evidences (CaseId,EvidenceName,EvidenceMRNO,EvidenceCourtVerdict,EvidenceDescription,LastUpdated) VALUES ('$case_id','$evidence_name[$z]','$evidence_mrno[$z]','$court_verdict[$z]','$evidence_description[$z]','$last_updated');";

            			 $qry_insert_evidance_result= mysqli_query($con,$qry_insert_evidance);
            		}	

                echo "AddSuccess";

        }else
        {

              $evidence_id = $_REQUEST['evidence_id'];

              for($z=0;$z<count($evidence_name);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $qry_insert_evidance = "INSERT INTO EMS_Evidences (CaseId,EvidenceName,EvidenceMRNO,EvidenceCourtVerdict,EvidenceDescription,LastUpdated) VALUES ('$case_id','$evidence_name[$z]','$evidence_mrno[$z]','$court_verdict[$z]','$evidence_description[$z]','$last_updated');";

                            $qry_insert_evidance_result= mysqli_query($con,$qry_insert_evidance);

                      }else{

                            $qry_update_evidance = "UPDATE EMS_Evidences SET EvidenceName ='$evidence_name[$z]', EvidenceMRNO ='$evidence_mrno[$z]',EvidenceCourtVerdict ='$court_verdict[$z]', EvidenceDescription='$evidence_description[$z]', LastUpdated ='$last_updated' WHERE EvidenceId = '$evidence_id[$z]' AND CaseId = $case_id";

                            $qry_update_evidance_result= mysqli_query($con,$qry_update_evidance);

                      }

              }   


              $deleted_evidance_id_arr =  explode(',', $deleted_evidance_id);

              for($z=0;$z<=sizeof($deleted_evidance_id_arr)-1;$z++)
              {
                      $delete_qry = "DELETE FROM EMS_Evidences WHERE EvidenceId = '$deleted_evidance_id_arr[$z]' AND CaseId = $case_id";
                      $delete_qry_result= mysqli_query($con,$delete_qry);
               
              }   
                        
              echo "UpdateSuccess";


        }
	//echo "Success - Not In Loop";	
}



?>