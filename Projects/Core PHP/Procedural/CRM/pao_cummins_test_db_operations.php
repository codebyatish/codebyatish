<?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

  $task = $_REQUEST['task'];
  $last_updated = date('Y-m-d H:i:s');


if ($task == 'InsertDetails') 
{


    $test_name = $_REQUEST['test_name'];
    $client_id = $_REQUEST['client_id'];
    $test_id = $_REQUEST['test_id'];
    $edit_test_id = $_REQUEST['edit_test_id'];
    $for_new_row = $_REQUEST['for_new_row'];

    $pao_cummins_area = $_REQUEST['pao_cummins_area'];
    $pao_cummins_class_of_area = $_REQUEST['pao_cummins_class_of_area'];
    $pao_cummins_code = $_REQUEST['pao_cummins_code'];
    $pao_cummins_upstream_conc_percentage = $_REQUEST['pao_cummins_upstream_conc_percentage'];
    $pao_cummins_percentage_leakage = $_REQUEST['pao_cummins_percentage_leakage'];
    $pao_cummins_pao = $_REQUEST['pao_cummins_pao'];
    $pao_cummins_remark = $_REQUEST['pao_cummins_remark'];


    $pao_cummins_witnessed_by_name1 = $_REQUEST['pao_cummins_witnessed_by_name1'];
    $pao_cummins_witnessed_by_name2 = $_REQUEST['pao_cummins_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_cummins_witnessed_by_name1', WitnessedByName2 = '$pao_cummins_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($pao_cummins_area);$z++)
                {

                       $qry_insert = "INSERT INTO CRM_PAOCumminsTemplate (TestId,PAOCumminsArea,PAOCumminsCode,PAOCumminsUpstreamConcPercentage,PAOCumminsPercentageLeakage,PAOCumminsRemark,LastUpdated) VALUES ('$test_id','$pao_cummins_area[$z]','$pao_cummins_code[$z]','$pao_cummins_upstream_conc_percentage[$z]','$pao_cummins_percentage_leakage[$z]','$pao_cummins_remark[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $PAOCumminsId = $_REQUEST['PAOCumminsId'];

              for($z=0;$z<count($pao_cummins_area);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_PAOCumminsTemplate (TestId,PAOCumminsArea,PAOCumminsCode,PAOCumminsUpstreamConcPercentage,PAOCumminsPercentageLeakage,PAOCumminsRemark,LastUpdated) VALUES ('$test_id','$pao_cummins_area[$z]','$pao_cummins_code[$z]','$pao_cummins_upstream_conc_percentage[$z]','$pao_cummins_percentage_leakage[$z]','$pao_cummins_remark[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_PAOCumminsTemplate SET TestId = '$test_id', PAOCumminsArea = '$pao_cummins_area[$z]', PAOCumminsCode = '$pao_cummins_code[$z]',PAOCumminsUpstreamConcPercentage = '$pao_cummins_upstream_conc_percentage[$z]', PAOCumminsPercentageLeakage = '$pao_cummins_percentage_leakage[$z]', PAOCumminsRemark = '$pao_cummins_remark[$z]', LastUpdated = '$last_updated' WHERE PAOCumminsId ='$PAOCumminsId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_cummins_witnessed_by_name1', WitnessedByName2 = '$pao_cummins_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
                            mysqli_query($con,$update_qry2);
                      }

              }   


              echo "UpdateSuccess";


      }




 }





if ($task == 'ApproveTestTask') {

    $view_test_id = $_REQUEST['view_test_id'];
    $pao_cummins_description = $_REQUEST['pao_cummins_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Approved', Description = '$pao_cummins_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "Success";

        }

}


?>