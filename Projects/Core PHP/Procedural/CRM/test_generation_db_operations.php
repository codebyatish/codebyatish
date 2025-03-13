 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated=date('Y-m-d H:i:s');

    
    $client_id = $_REQUEST['client_id'];
    $tg_client_name = $_REQUEST['tg_client_name'];
    $tg_test_name = $_REQUEST['tg_test_name'];
    $tg_template_name = $_REQUEST['tg_template_name'];
    $tg_employee_id = $_REQUEST['tg_employee_id'];
    $tg_template_page_name = $_REQUEST['tg_template_page_name'];
    $tg_to_be_conducted_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['tg_to_be_conducted_date'])));
    $tg_area = $_REQUEST['tg_area'];    
    $tg_ahu_number = $_REQUEST['tg_ahu_number'];
    $tg_equipment_name = $_REQUEST['tg_equipment_name'];
    $tg_equipment_model = $_REQUEST['tg_equipment_model'];
    $tg_equipment_serial_number = $_REQUEST['tg_equipment_serial_number'];
    $tg_cal_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['tg_cal_date'])));
    $tg_due_date = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['tg_due_date'])));
    

    if ($task == 'InsertDetails') 
    {
        $insert_query = "INSERT INTO  CRM_Test(EmployeeId,ClientId,ClientName,TestName,TemplateName,TemplatePageName,TobeConductedDate,Area,AHUNumber,EquipmentName,EquipmentModel,EquipmentSerialNumber,CalDate,DueDate,Status,LastUpdated) VALUES ('$tg_employee_id','$client_id','$tg_client_name','$tg_test_name','$tg_template_name','$tg_template_page_name','$tg_to_be_conducted_date','$tg_area','$tg_ahu_number','$tg_equipment_name','$tg_equipment_model','$tg_equipment_serial_number','$tg_cal_date','$tg_due_date','False','$last_updated')";
        
          if(mysqli_query($con,$insert_query))
          {
            echo "AddSuccess";
           
          }else
          {
              echo "fail";
          }
    }



   
 ?>