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

    $pao_rtml_room_name = $_REQUEST['pao_rtml_room_name'];
    $pao_rtml_class_of_area = $_REQUEST['pao_rtml_class_of_area'];
    $pao_rtml_code = $_REQUEST['pao_rtml_code'];
    $pao_rtml_upstream_conc_percentage = $_REQUEST['pao_rtml_upstream_conc_percentage'];
    $pao_rtml_percentage_leakage = $_REQUEST['pao_rtml_percentage_leakage'];
    $pao_rtml_pao = $_REQUEST['pao_rtml_pao'];
    $pao_rtml_remark = $_REQUEST['pao_rtml_remark'];


    $pao_rtml_witnessed_by_name1 = $_REQUEST['pao_rtml_witnessed_by_name1'];
    $pao_rtml_witnessed_by_name2 = $_REQUEST['pao_rtml_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_rtml_witnessed_by_name1', WitnessedByName2 = '$pao_rtml_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($pao_rtml_room_name);$z++)
                {

                       $qry_insert = "INSERT INTO CRM_PAORTMLTemplate (TestId,PAORTMLRoomName,PAORTMLCode,PAORTMLUpstreamConcPercentage,PAORTMLPercentageLeakage,PAORTMLPao,PAORTMLRemark,LastUpdated) VALUES ('$test_id','$pao_rtml_room_name[$z]','$pao_rtml_code[$z]','$pao_rtml_upstream_conc_percentage[$z]','$pao_rtml_percentage_leakage[$z]','$pao_rtml_pao[$z]','$pao_rtml_remark[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $PAORTMLId = $_REQUEST['PAORTMLId'];

              for($z=0;$z<count($pao_rtml_room_name);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_PAORTMLTemplate (TestId,PAORTMLRoomName,PAORTMLCode,PAORTMLUpstreamConcPercentage,PAORTMLPercentageLeakage,PAORTMLPao,PAORTMLRemark,LastUpdated) VALUES ('$test_id','$pao_rtml_room_name[$z]','$pao_rtml_code[$z]','$pao_rtml_upstream_conc_percentage[$z]','$pao_rtml_percentage_leakage[$z]','$pao_rtml_pao[$z]','$pao_rtml_remark[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_PAORTMLTemplate SET TestId = '$test_id', PAORTMLRoomName = '$pao_rtml_room_name[$z]', PAORTMLCode = '$pao_rtml_code[$z]',PAORTMLUpstreamConcPercentage = '$pao_rtml_upstream_conc_percentage[$z]', PAORTMLPercentageLeakage = '$pao_rtml_percentage_leakage[$z]',
                             PAORTMLPao = '$pao_rtml_pao[$z]', PAORTMLRemark = '$pao_rtml_remark[$z]', LastUpdated = '$last_updated' WHERE PAORTMLId ='$PAORTMLId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$pao_rtml_witnessed_by_name1', WitnessedByName2 = '$pao_rtml_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
                            mysqli_query($con,$update_qry2);
                      }

              }   


              echo "UpdateSuccess";


      }




 }





if ($task == 'ApproveTestTask') {

    $view_test_id = $_REQUEST['view_test_id'];
    $pao_rtml_description = $_REQUEST['pao_rtml_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Approved', Description = '$pao_rtml_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "Success";

        }

}


?>