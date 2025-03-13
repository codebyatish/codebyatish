<?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

  $task = $_REQUEST['task'];

  $cb_ahu_number = $_REQUEST['cb_ahu_number'];
  $cb_equipment_name = $_REQUEST['cb_equipment_name'];
  $cb_equipment_model = $_REQUEST['cb_equipment_model'];
  $cb_equipment_serial_number = $_REQUEST['cb_equipment_serial_number'];
  $cb_cal_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['cb_cal_date'])));
  $cb_due_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['cb_due_date'])));
  $fileToUpload = $_REQUEST['fileToUpload'];

  // FILE UPLOAD
  // $target_dir = "uploads/";
  // $target_file = $target_dir . basename($_FILES["$fileToUpload"]["name"]);
  // echo $target_file;
  
  // if (move_uploaded_file($_FILES["$fileToUpload"]["tmp_name"], $target_file)) {
  //   //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  // } else {
  // // echo "Sorry, there was an error uploading your file."; 
  }
  
  if($task == 'InsertDetails')
  {
    $insert_query = "INSERT INTO `CRM_Equip`(`ahu_number`, `equip_name`, `equip_model`, `equip_serial_number`, `equip_cali_date`, `equip_due_date`, `file_path`) VALUES ('$cb_ahu_number','$cb_equipment_name','$cb_equipment_model','$cb_equipment_serial_number','$cb_cal_date','$cb_due_date','$target_file')";
      
    if(mysqli_query($con,$insert_query))
    {
      echo "AddSuccess";
        
    }else
    {
        echo "fail";
    }
  }

?>