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

    $pao_ipca_area = $_REQUEST['pao_ipca_area'];
    $pao_ipca_filter_no = $_REQUEST['pao_ipca_filter_no'];
    $pao_ipca_upstream_concentration_in_ug_ltr = $_REQUEST['pao_ipca_upstream_concentration_in_ug_ltr'];
    $pao_ipca_upstream_concentration_set_to = $_REQUEST['pao_ipca_upstream_concentration_set_to'];
    $pao_ipca_percentage_penetration = $_REQUEST['pao_ipca_percentage_penetration'];
    $pao_ipca_result = $_REQUEST['pao_ipca_result'];


    $pao_ipca_witnessed_by_name1 = $_REQUEST['pao_ipca_witnessed_by_name1'];
    $pao_ipca_witnessed_by_name2 = $_REQUEST['pao_ipca_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_ipca_witnessed_by_name1', WitnessedByName2 = '$pao_ipca_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($pao_ipca_area);$z++)
                {

                       $qry_insert = "INSERT INTO CRM_PAOIPCATemplate (TestId,PAOIPCAArea,PAOIPCAFilterNo,PAOIPCAUpstreamConcentrationInUgLter,PAOIPCAUpstreamConcentrationSetTo,PAOIPCAPercentagePenetration,PAOIPCAResult,LastUpdated) VALUES ('$test_id','$pao_ipca_area[$z]','$pao_ipca_filter_no[$z]','$pao_ipca_upstream_concentration_in_ug_ltr[$z]','$pao_ipca_upstream_concentration_set_to[$z]','$pao_ipca_percentage_penetration[$z]','$pao_ipca_result[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $PAOIPCAId = $_REQUEST['PAOIPCAId'];

              for($z=0;$z<count($pao_ipca_area);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_PAOIPCATemplate (TestId,PAOIPCAArea,PAOIPCAFilterNo,PAOIPCAUpstreamConcentrationInUgLter,PAOIPCAUpstreamConcentrationSetTo,PAOIPCAPercentagePenetration,PAOIPCAResult,LastUpdated) VALUES ('$test_id','$pao_ipca_area[$z]','$pao_ipca_filter_no[$z]','$pao_ipca_upstream_concentration_in_ug_ltr[$z]','$pao_ipca_upstream_concentration_set_to[$z]','$pao_ipca_percentage_penetration[$z]','$pao_ipca_result[$z]','$last_updated');";
                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_PAOIPCATemplate SET TestId = '$test_id', PAOIPCAArea = '$pao_ipca_area[$z]', PAOIPCAFilterNo = '$pao_ipca_filter_no[$z]',PAOIPCAUpstreamConcentrationInUgLter = '$pao_ipca_upstream_concentration_in_ug_ltr[$z]', 
                             PAOIPCAUpstreamConcentrationSetTo = '$pao_ipca_upstream_concentration_set_to[$z]', PAOIPCAPercentagePenetration = '$pao_ipca_upstream_concentration_set_to[$z]', PAOIPCAResult = '$pao_ipca_result[$z]', LastUpdated = '$last_updated' WHERE PAOIPCAId ='$PAOIPCAId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_ipca_witnessed_by_name1', WitnessedByName2 = '$pao_ipca_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
                            mysqli_query($con,$update_qry2);
                      }

              }   


              echo "UpdateSuccess";


      }




 }





if ($task == 'ApproveTestTask') {

    $view_test_id = $_REQUEST['view_test_id'];
    $pao_ipca_description = $_REQUEST['pao_ipca_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Approved', Description = '$pao_ipca_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "Success";

        }

}


?>