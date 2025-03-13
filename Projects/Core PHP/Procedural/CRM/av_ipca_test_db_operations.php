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
    $av_ipca_date = str_replace('/', '-', $_REQUEST['av_ipca_date']);

    //print_r($av_ipca_date);

    $av_ipca_room_name = $_REQUEST['av_ipca_room_name'];
    $av_ipca_grill_size = $_REQUEST['av_ipca_grill_size'];
    $av_ipca_grill_area_sq_ft = $_REQUEST['av_ipca_grill_area_sq_ft'];
    $av_ipca_room_volume_cu_ft = $_REQUEST['av_ipca_room_volume_cu_ft'];
    $av_ipca_velocity_reading_1fpm = $_REQUEST['av_ipca_velocity_reading_1fpm'];
    $av_ipca_velocity_reading_2fpm = $_REQUEST['av_ipca_velocity_reading_2fpm'];
    $av_ipca_velocity_reading_3fpm = $_REQUEST['av_ipca_velocity_reading_3fpm'];
    $av_ipca_velocity_reading_4fpm = $_REQUEST['av_ipca_velocity_reading_4fpm'];
    $av_ipca_velocity_reading_5fpm = $_REQUEST['av_ipca_velocity_reading_5fpm'];
    $av_ipca_avg_vel = $_REQUEST['av_ipca_avg_vel'];
    $av_ipca_air_qty_cfm = $_REQUEST['av_ipca_air_qty_cfm'];
    $av_ipca_designed_acph = $_REQUEST['av_ipca_designed_acph'];
    $av_ipca_actual_acph = $_REQUEST['av_ipca_actual_acph'];


    $av_ipca_witnessed_by_name1 = $_REQUEST['av_ipca_witnessed_by_name1'];
    $av_ipca_witnessed_by_name2 = $_REQUEST['av_ipca_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$av_ipca_witnessed_by_name1', WitnessedByName2 = '$av_ipca_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($av_ipca_date);$z++)
                {

                      $qry_insert = "INSERT INTO CRM_AVIPCATemplate (TestId,AVIPCADate,AVIPCARoomName,AVIPCAGrillSize,AVIPCAGrillAreaSqFt,AVIPCARoomVolumeCuFt,AVIPCAVelocityReading1FPM,AVIPCAVelocityReading2FPM,AVIPCAVelocityReading3FPM,AVIPCAVelocityReading4FPM,AVIPCAVelocityReading5FPM,AVIPCAAvgVel,AVIPCAAirQtyCFM,AVIPCADesignedACPH,AVIPCAActualACPH,LastUpdated) VALUES ('$test_id','$av_ipca_date[$z]','$av_ipca_room_name[$z]','$av_ipca_grill_size[$z]','$av_ipca_grill_area_sq_ft[$z]','$av_ipca_room_volume_cu_ft[$z]','$av_ipca_velocity_reading_1fpm[$z]','$av_ipca_velocity_reading_2fpm[$z]','$av_ipca_velocity_reading_3fpm[$z]','$av_ipca_velocity_reading_4fpm[$z]','$av_ipca_velocity_reading_5fpm[$z]','$av_ipca_avg_vel[$z]','$av_ipca_air_qty_cfm[$z]','$av_ipca_designed_acph[$z]','$av_ipca_actual_acph[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $AVIPCAId = $_REQUEST['AVIPCAId'];

              for($z=0;$z<count($av_ipca_date);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_AVIPCATemplate (TestId,AVIPCADate,AVIPCARoomName,AVIPCAGrillSize,AVIPCAGrillAreaSqFt,AVIPCARoomVolumeCuFt,AVIPCAVelocityReading1FPM,AVIPCAVelocityReading2FPM,AVIPCAVelocityReading3FPM,AVIPCAVelocityReading4FPM,AVIPCAVelocityReading5FPM,AVIPCAAvgVel,AVIPCAAirQtyCFM,AVIPCADesignedACPH,AVIPCAActualACPH,LastUpdated) VALUES ('$test_id','$av_ipca_date[$z]','$av_ipca_room_name[$z]','$av_ipca_grill_size[$z]','$av_ipca_grill_area_sq_ft[$z]','$av_ipca_room_volume_cu_ft[$z]','$av_ipca_velocity_reading_1fpm[$z]','$av_ipca_velocity_reading_2fpm[$z]','$av_ipca_velocity_reading_3fpm[$z]','$av_ipca_velocity_reading_4fpm[$z]','$av_ipca_velocity_reading_5fpm[$z]','$av_ipca_avg_vel[$z]','$av_ipca_air_qty_cfm[$z]','$av_ipca_designed_acph[$z]','$av_ipca_actual_acph[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_AVIPCATemplate SET TestId = '$test_id', AVIPCADate = '$av_ipca_date[$z]', AVIPCARoomName = '$av_ipca_room_name[$z]',AVIPCAGrillSize = '$av_ipca_grill_size[$z]', AVIPCAGrillAreaSqFt = '$av_ipca_grill_area_sq_ft[$z]',
                             AVIPCARoomVolumeCuFt = '$av_ipca_room_volume_cu_ft[$z]', AVIPCAVelocityReading1FPM = '$av_ipca_velocity_reading_1fpm[$z]',AVIPCAVelocityReading2FPM = '$av_ipca_velocity_reading_2fpm[$z]',AVIPCAVelocityReading3FPM = '$av_ipca_velocity_reading_3fpm[$z]',AVIPCAVelocityReading4FPM = '$av_ipca_velocity_reading_4fpm[$z]',AVIPCAVelocityReading5FPM = '$av_ipca_velocity_reading_5fpm[$z]',AVIPCAAvgVel = '$av_ipca_avg_vel[$z]',AVIPCAAirQtyCFM = '$av_ipca_air_qty_cfm[$z]' ,AVIPCADesignedACPH = '$av_ipca_designed_acph[$z]' ,  AVIPCAActualACPH = '$av_ipca_actual_acph[$z]',LastUpdated = '$last_updated' WHERE AVIPCAId ='$AVIPCAId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$av_ipca_witnessed_by_name1', WitnessedByName2 = '$av_ipca_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
                            mysqli_query($con,$update_qry2);
                      }

              }   


              echo "UpdateSuccess";


      }




 }





if ($task == 'ApproveTestTask') {

    $view_test_id = $_REQUEST['view_test_id'];
    $av_ipca_description = $_REQUEST['av_ipca_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Yes', Description = '$av_ipca_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "ApproveSuccess";

        }

}






?>