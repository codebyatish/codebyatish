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

    $av_rtml_room_name = $_REQUEST['av_rtml_room_name'];
    $av_rtml_filter_code = $_REQUEST['av_rtml_filter_code'];
    $av_rtml_velocity_reading_1fpm = $_REQUEST['av_rtml_velocity_reading_1fpm'];
    $av_rtml_velocity_reading_2fpm = $_REQUEST['av_rtml_velocity_reading_2fpm'];
    $av_rtml_velocity_reading_3fpm = $_REQUEST['av_rtml_velocity_reading_3fpm'];
    $av_rtml_velocity_reading_4fpm = $_REQUEST['av_rtml_velocity_reading_4fpm'];
    $av_rtml_velocity_reading_5fpm = $_REQUEST['av_rtml_velocity_reading_5fpm'];

    $av_rtml_avg = $_REQUEST['av_rtml_avg'];
    $av_rtml_filter_size_ft2 = $_REQUEST['av_rtml_filter_size_ft2'];
    $av_rtml_cfm = $_REQUEST['av_rtml_cfm'];
    $av_rtml_rooms_vol_ft3 = $_REQUEST['av_rtml_rooms_vol_ft3'];
    $av_rtml_acph = $_REQUEST['av_rtml_acph'];

    $av_rtml_witnessed_by_name1 = $_REQUEST['av_rtml_witnessed_by_name1'];
    $av_rtml_witnessed_by_name2 = $_REQUEST['av_rtml_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$av_rtml_witnessed_by_name1', WitnessedByName2 = '$av_rtml_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($av_rtml_room_name);$z++)
                {

                     $qry_insert = "INSERT INTO CRM_AVRTMLTemplate (TestId,AVRTMLRoomName,AVRTMLFilterCode,AVRTMLVelocityReading1FPM,AVRTMLVelocityReading2FPM,AVRTMLVelocityReading3FPM,AVRTMLVelocityReading4FPM,AVRTMLVelocityReading5FPM,AVRTMLAvg,AVRTMLFilterSize2FT,AVRTMLCFM,AVRTMLRoomVol3FT,AVRTMLACPH,LastUpdated) VALUES ('$test_id','$av_rtml_room_name[$z]','$av_rtml_filter_code[$z]','$av_rtml_velocity_reading_1fpm[$z]','$av_rtml_velocity_reading_2fpm[$z]','$av_rtml_velocity_reading_3fpm[$z]','$av_rtml_velocity_reading_4fpm[$z]','$av_rtml_velocity_reading_5fpm[$z]','$av_rtml_avg[$z]','$av_rtml_filter_size_ft2[$z]','$av_rtml_cfm[$z]','$av_rtml_rooms_vol_ft3[$z]','$av_rtml_acph[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $AVRTMLId = $_REQUEST['AVRTMLId'];

              for($z=0;$z<count($av_rtml_room_name);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_AVRTMLTemplate (TestId,AVRTMLRoomName,AVRTMLFilterCode,AVRTMLVelocityReading1FPM,AVRTMLVelocityReading2FPM,AVRTMLVelocityReading3FPM,AVRTMLVelocityReading4FPM,AVRTMLVelocityReading5FPM,AVRTMLAvg,AVRTMLFilterSize2FT,AVRTMLCFM,AVRTMLRoomVol3FT,AVRTMLACPH,LastUpdated) VALUES ('$test_id','$av_rtml_room_name[$z]','$av_rtml_filter_code[$z]','$av_rtml_velocity_reading_1fpm[$z]','$av_rtml_velocity_reading_2fpm[$z]','$av_rtml_velocity_reading_3fpm[$z]','$av_rtml_velocity_reading_4fpm[$z]','$av_rtml_velocity_reading_5fpm[$z]','$av_rtml_avg[$z]','$av_rtml_filter_size_ft2[$z]','$av_rtml_cfm[$z]','$av_rtml_rooms_vol_ft3[$z]','$av_rtml_acph[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_AVRTMLTemplate SET TestId = '$test_id' , AVRTMLRoomName = '$av_rtml_room_name[$z]' ,AVRTMLFilterCode = '$av_rtml_filter_code[$z]',AVRTMLVelocityReading1FPM = '$av_rtml_velocity_reading_1fpm[$z]' ,AVRTMLVelocityReading2FPM = '$av_rtml_velocity_reading_2fpm[$z]' ,AVRTMLVelocityReading3FPM = '$av_rtml_velocity_reading_3fpm[$z]' ,AVRTMLVelocityReading4FPM = '$av_rtml_velocity_reading_4fpm[$z]',AVRTMLVelocityReading5FPM = '$av_rtml_velocity_reading_5fpm[$z]',AVRTMLAvg = '$av_rtml_avg[$z]',AVRTMLFilterSize2FT = '$av_rtml_filter_size_ft2[$z]' ,AVRTMLCFM = '$av_rtml_cfm[$z]' ,  AVRTMLRoomVol3FT = '$av_rtml_rooms_vol_ft3[$z]', AVRTMLACPH = '$av_rtml_acph[$z]' ,LastUpdated = '$last_updated' WHERE AVRTMLId ='$AVRTMLId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$av_rtml_witnessed_by_name1', WitnessedByName2 = '$av_rtml_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
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
    $av_rtml_description = $_REQUEST['av_rtml_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Yes', Description = '$av_rtml_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "ApproveSuccess";

        }

}






?>