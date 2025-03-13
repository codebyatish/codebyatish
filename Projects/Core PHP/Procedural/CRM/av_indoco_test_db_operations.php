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

    $av_indoco_room_name = $_REQUEST['av_indoco_room_name'];
    $av_indoco_filter_code = $_REQUEST['av_indoco_filter_code'];
    $av_indoco_rooms_vol_ft3 = $_REQUEST['av_indoco_rooms_vol_ft3'];
    $av_indoco_no_of_inlets = $_REQUEST['av_indoco_no_of_inlets'];
    $av_indoco_class_of_area = $_REQUEST['av_indoco_class_of_area'];
    $av_indoco_supply_area = $_REQUEST['av_indoco_supply_area'];
    $av_indoco_velocity_reading_1fpm = $_REQUEST['av_indoco_velocity_reading_1fpm'];
    $av_indoco_velocity_reading_2fpm = $_REQUEST['av_indoco_velocity_reading_2fpm'];
    $av_indoco_velocity_reading_3fpm = $_REQUEST['av_indoco_velocity_reading_3fpm'];
    $av_indoco_velocity_reading_4fpm = $_REQUEST['av_indoco_velocity_reading_4fpm'];
    $av_indoco_velocity_reading_5fpm = $_REQUEST['av_indoco_velocity_reading_5fpm'];

    $av_indoco_avg_fpm = $_REQUEST['av_indoco_avg_fpm'];
    $av_indoco_filter_size_ft2 = $_REQUEST['av_indoco_filter_size_ft2'];
    $av_indoco_cfm = $_REQUEST['av_indoco_cfm'];
    $av_indoco_acph = $_REQUEST['av_indoco_acph'];

    $av_indoco_witnessed_by_name1 = $_REQUEST['av_indoco_witnessed_by_name1'];
    $av_indoco_witnessed_by_name2 = $_REQUEST['av_indoco_witnessed_by_name2'];

    $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$test_id'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);
    $sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $Status = $sel_qry_details_row['Status'];

    if ($Status == 'False') 
    {

            $update_qry = "UPDATE CRM_Test SET WitnessedByName1 = '$av_indoco_witnessed_by_name1', WitnessedByName2 = '$av_indoco_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";

            if (mysqli_query($con,$update_qry)) {

                for($z=0;$z<count($av_indoco_room_name);$z++)
                {

                     $qry_insert = "INSERT INTO CRM_AVIndocoTemplate (TestId,AVIndocoRoomName,AVIndocoFilterCode,AVIndocoRoomVol3FT,AVIndocoNumberOfInlets,AVIndocoClassOfArea,AVIndocoSupplyArea,AVIndocoVelocityReading1FPM,AVIndocoVelocityReading2FPM,AVIndocoVelocityReading3FPM,AVIndocoVelocityReading4FPM,AVIndocoVelocityReading5FPM,AVIndocoAvgFPM,AVIndocoFilterSize2FT,AVIndocoCFM,AVIndocoACPH,LastUpdated) VALUES ('$test_id','$av_indoco_room_name[$z]','$av_indoco_filter_code[$z]','$av_indoco_rooms_vol_ft3[$z]','$av_indoco_no_of_inlets[$z]','$av_indoco_class_of_area[$z]','$av_indoco_supply_area[$z]','$av_indoco_velocity_reading_1fpm[$z]','$av_indoco_velocity_reading_2fpm[$z]','$av_indoco_velocity_reading_3fpm[$z]','$av_indoco_velocity_reading_4fpm[$z]','$av_indoco_velocity_reading_5fpm[$z]','$av_indoco_avg_fpm[$z]','$av_indoco_filter_size_ft2[$z]','$av_indoco_cfm[$z]','$av_indoco_acph[$z]','$last_updated');";

                   $qry_insert_result = mysqli_query($con,$qry_insert);
                } 

                echo "AddSuccess";


            }else{

                echo "Fail";
            }


      
    }else{

              $AVIndocoId = $_REQUEST['AVIndocoId'];

              for($z=0;$z<count($av_indoco_room_name);$z++)
              {
                      if ($for_new_row[$z] == "New") 
                      {
                            $insert_qry = "INSERT INTO CRM_AVIndocoTemplate (TestId,AVIndocoRoomName,AVIndocoFilterCode,AVIndocoRoomVol3FT,AVIndocoNumberOfInlets,AVIndocoClassOfArea,AVIndocoSupplyArea,AVIndocoVelocityReading1FPM,AVIndocoVelocityReading2FPM,AVIndocoVelocityReading3FPM,AVIndocoVelocityReading4FPM,AVIndocoVelocityReading5FPM,AVIndocoAvgFPM,AVIndocoFilterSize2FT,AVIndocoCFM,AVIndocoACPH,LastUpdated) VALUES ('$test_id','$av_indoco_room_name[$z]','$av_indoco_filter_code[$z]','$av_indoco_rooms_vol_ft3[$z]','$av_indoco_no_of_inlets[$z]','$av_indoco_class_of_area[$z]','$av_indoco_supply_area[$z]','$av_indoco_velocity_reading_1fpm[$z]','$av_indoco_velocity_reading_2fpm[$z]','$av_indoco_velocity_reading_3fpm[$z]','$av_indoco_velocity_reading_4fpm[$z]','$av_indoco_velocity_reading_5fpm[$z]','$av_indoco_avg_fpm[$z]','$av_indoco_filter_size_ft2[$z]','$av_indoco_cfm[$z]','$av_indoco_acph[$z]','$last_updated');";

                            $insert_qry_result = mysqli_query($con,$insert_qry);

                      }else{


                             $update_qry1 = "UPDATE CRM_AVIndocoTemplate SET TestId = '$test_id' , AVIndocoRoomName = '$av_indoco_room_name[$z]' ,AVIndocoFilterCode = '$av_indoco_filter_code[$z]' , AVIndocoRoomVol3FT = '$av_indoco_rooms_vol_ft3[$z]' ,AVIndocoNumberOfInlets = '$av_indoco_no_of_inlets[$z]' ,AVIndocoClassOfArea = '$av_indoco_class_of_area[$z]' ,AVIndocoSupplyArea = '$av_indoco_supply_area[$z]' ,AVIndocoVelocityReading1FPM = '$av_indoco_velocity_reading_1fpm[$z]' ,AVIndocoVelocityReading2FPM = '$av_indoco_velocity_reading_2fpm[$z]' ,AVIndocoVelocityReading3FPM = '$av_indoco_velocity_reading_3fpm[$z]' ,AVIndocoVelocityReading4FPM = '$av_indoco_velocity_reading_4fpm[$z]',AVIndocoVelocityReading5FPM = '$av_indoco_velocity_reading_5fpm[$z]',AVIndocoAvgFPM = '$av_indoco_avg_fpm[$z]',AVIndocoFilterSize2FT = '$av_indoco_filter_size_ft2[$z]' ,AVIndocoCFM = '$av_indoco_cfm[$z]' ,AVIndocoACPH = '$av_indoco_acph[$z]' ,LastUpdated = '$last_updated' WHERE AVIndocoId ='$AVIndocoId[$z]'";

                            $update_qry_result1 = mysqli_query($con,$update_qry1);

                            $update_qry2 = "UPDATE CRM_Test SET WitnessedByName1 = '$av_indoco_witnessed_by_name1', WitnessedByName2 = '$av_indoco_witnessed_by_name2', Status = 'True', LastUpdated = '$last_updated' WHERE TestId = $test_id";
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
    $av_indoco_description = $_REQUEST['av_indoco_description'];


    $qry_update = "UPDATE CRM_Test SET ApproveStatus = 'Yes', Description = '$av_indoco_description', LastUpdated = '$last_updated' WHERE TestId = $view_test_id";

        if (mysqli_query($con,$qry_update)) {

             echo "ApproveSuccess";

        }

}






?>