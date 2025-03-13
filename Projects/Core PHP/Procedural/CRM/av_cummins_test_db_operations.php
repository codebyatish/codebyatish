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

    $av_cummins_room_name = $_REQUEST['av_cummins_room_name'];
    $av_cummins_filter_code = $_REQUEST['av_cummins_filter_code'];
    $av_cummins_velocity_reading_1fpm = $_REQUEST['av_cummins_velocity_reading_1fpm'];
    $av_cummins_velocity_reading_2fpm = $_REQUEST['av_cummins_velocity_reading_2fpm'];
    $av_cummins_velocity_reading_3fpm = $_REQUEST['av_cummins_velocity_reading_3fpm'];
    $av_cummins_velocity_reading_4fpm = $_REQUEST['av_cummins_velocity_reading_4fpm'];
    $av_cummins_velocity_reading_5fpm = $_REQUEST['av_cummins_velocity_reading_5fpm'];

    $av_cummins_avg = $_REQUEST['av_cummins_avg'];
    $av_cummins_filter_size_ft2 = $_REQUEST['av_cummins_filter_size_ft2'];
    $av_cummins_cfm = $_REQUEST['av_cummins_cfm'];
    $av_cummins_rooms_vol_ft3 = $_REQUEST['av_cummins_rooms_vol_ft3'];
    $av_cummins_acph = $_REQUEST['av_cummins_acph'];

    $av_cummins_witnessed_by_name1 = $_REQUEST['av_cummins_witnessed_by_name1'];
    $av_cummins_witnessed_by_name2 = $_REQUEST['av_cummins_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$av_cummins_witnessed_by_name1', WitnessedByName2 = '$av_cummins_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($av_cummins_room_name);$z++)
                {

                     $qry_insert = "INSERT INTO CRM_AVCumminsTemplate (TestId,AVCumminsRoomName,AVCumminsFilterCode,AVCumminsVelocityReading1FPM,AVCumminsVelocityReading2FPM,AVCumminsVelocityReading3FPM,AVCumminsVelocityReading4FPM,AVCumminsVelocityReading5FPM,AVCumminsAvg,AVCumminsFilterSize2FT,AVCumminsCFM,AVCumminsRoomVol3FT,AVCumminsACPH,LastUpdated) VALUES ('$test_id','$av_cummins_room_name[$z]','$av_cummins_filter_code[$z]','$av_cummins_velocity_reading_1fpm[$z]','$av_cummins_velocity_reading_2fpm[$z]','$av_cummins_velocity_reading_3fpm[$z]','$av_cummins_velocity_reading_4fpm[$z]','$av_cummins_velocity_reading_5fpm[$z]','$av_cummins_avg[$z]','$av_cummins_filter_size_ft2[$z]','$av_cummins_cfm[$z]','$av_cummins_rooms_vol_ft3[$z]','$av_cummins_acph[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $AVCumminsId = $_REQUEST['AVCumminsId'];

              for($z=0;$z<count($av_cummins_room_name);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_AVCumminsTemplate (TestId,AVCumminsRoomName,AVCumminsFilterCode,AVCumminsVelocityReading1FPM,AVCumminsVelocityReading2FPM,AVCumminsVelocityReading3FPM,AVCumminsVelocityReading4FPM,AVCumminsVelocityReading5FPM,AVCumminsAvg,AVCumminsFilterSize2FT,AVCumminsCFM,AVCumminsRoomVol3FT,AVCumminsACPH,LastUpdated) VALUES ('$test_id','$av_cummins_room_name[$z]','$av_cummins_filter_code[$z]','$av_cummins_velocity_reading_1fpm[$z]','$av_cummins_velocity_reading_2fpm[$z]','$av_cummins_velocity_reading_3fpm[$z]','$av_cummins_velocity_reading_4fpm[$z]','$av_cummins_velocity_reading_5fpm[$z]','$av_cummins_avg[$z]','$av_cummins_filter_size_ft2[$z]','$av_cummins_cfm[$z]','$av_cummins_rooms_vol_ft3[$z]','$av_cummins_acph[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_AVCumminsTemplate SET TestId = '$test_id' , AVCumminsRoomName = '$av_cummins_room_name[$z]' ,AVCumminsFilterCode = '$av_cummins_filter_code[$z]',AVCumminsVelocityReading1FPM = '$av_cummins_velocity_reading_1fpm[$z]' ,AVCumminsVelocityReading2FPM = '$av_cummins_velocity_reading_2fpm[$z]' ,AVCumminsVelocityReading3FPM = '$av_cummins_velocity_reading_3fpm[$z]' ,AVCumminsVelocityReading4FPM = '$av_cummins_velocity_reading_4fpm[$z]',AVCumminsVelocityReading5FPM = '$av_cummins_velocity_reading_5fpm[$z]',AVCumminsAvg = '$av_cummins_avg[$z]',AVCumminsFilterSize2FT = '$av_cummins_filter_size_ft2[$z]' ,AVCumminsCFM = '$av_cummins_cfm[$z]' ,  AVCumminsRoomVol3FT = '$av_cummins_rooms_vol_ft3[$z]', AVCumminsACPH = '$av_cummins_acph[$z]' ,LastUpdated = '$last_updated' WHERE AVCumminsId ='$AVCumminsId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$av_cummins_witnessed_by_name1', WitnessedByName2 = '$av_cummins_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
                            mysqli_query($con,$update_qry2);
                      }

              }   


              echo "UpdateSuccess";
/*                    $deleted_nursing_arr =  explode(',', $deleted_nursing_id);

                    for($z=0;$z<=sizeof($deleted_nursing_arr)-1;$z++)
                    {
                            $up_qry22 = "DELETE FROM IPD_MED_NursingChartDetails WHERE Id = $deleted_nursing_arr[$z]";
                            $up_qry_result= mysqli_query($con,$up_qry22);
                     
                    }   */
                


      }




 }





if ($task == 'ApproveTestTask') {

    $view_test_id = $_REQUEST['view_test_id'];
    $av_cummins_description = $_REQUEST['av_cummins_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Yes', Description = '$av_cummins_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "ApproveSuccess";

        }

}






?>