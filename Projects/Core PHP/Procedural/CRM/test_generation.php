<?php

    include('include/header.php');
    $ClientId = $_REQUEST["id"];
    $TestName = $_REQUEST["tn"];
    $TemplateName = $_REQUEST["temN"];
    $TemplatePageName = $_REQUEST["pn"];


      $sel_query = "SELECT * FROM CRM_Client WHERE ClientId = $ClientId";
      $sel_query_result = mysqli_query($con,$sel_query);
      $sel_query_row = mysqli_fetch_array($sel_query_result,MYSQLI_ASSOC);

      $ClientFirstName = $sel_query_row["ClientFirstName"];
      $ClientLastName = $sel_query_row["ClientLastName"];
      $ClientFullName = $ClientFirstName." ".$ClientLastName;
     
?>


  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'test_management.php';">Okay</button>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelDelete" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabelDelete">Are you sure, you want to delete this record ?</h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'test_management.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
  <div class="header">
    <h1 class="page-header">Test Generation</h1>
    <ol class="breadcrumb">
      <li><a href="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
      <li><a href="air_velocity_test.php<?php echo "?id=".$ClientId."&tn=".$TestName;?>" >Air Velocity Test</a></li>
      <li class="active" ><a>Test Generation</a></li>
    </ol> 
  </div>


  <div id="page-inner">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">

          <div class="panel-body" id="form_body" style="padding: 25px 25px;">

            <form role="role" method="post" id="form_data" enctype="multipart/form-data">
              <br>
              <b><span id="error_msg" style="color: red;"></span></b>
              <br>
              <br>
                <div class="row">
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Client Name</b>
                    <input type="test" class="form-control" name="tg_client_name" id="tg_client_name" readonly="true" style="user-select: none;" value="<?php echo $ClientFullName; ?>" >
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Test Name</b>
                    <input type="test" class="form-control" name="tg_test_name" id="tg_test_name" readonly="true" style="user-select: none;" value="<?php echo $TestName; ?>" >
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Template Name</b>
                    <input type="test" class="form-control" name="tg_template_name" id="tg_template_name" readonly="true" style="user-select: none;" value="<?php echo $TemplateName; ?>" >
                  </div>
                </div>

                <div class="row mt-15">
                  <div class="col-md-4" >
                    <b><span class="compulsory_mark" >*</span>Assign To ( Select Employee )</b>
                    <select name="tg_employee_id" class="form-control" id="tg_employee_id">
                          <option value="">Select Employee</option>
                        <?php   
                          $sel_query = "SELECT * FROM CRM_Employee";
                          $sel_query_result = mysqli_query($con,$sel_query);
                          while ($sel_query_row = mysqli_fetch_array($sel_query_result,MYSQLI_ASSOC))
                          {   ?>
                            <option value="<?php echo $sel_query_row['EmployeeId'];?>" alt="<?php echo $sel_query_row['EmployeeFirstName']." ".$sel_query_row['EmployeeLastName'];?>" <?php if($sel_query_row['EmployeeId'] == $EmployeeId) { ?> selected="selected" <?php } ?> ><?php echo $sel_query_row['EmployeeFirstName']." ".$sel_query_row['EmployeeLastName'];?></option>  
                          <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>To be Conducted Date</b>
                    <input type="date" class="form-control" name="tg_to_be_conducted_date" id="tg_to_be_conducted_date" placeholder="Select To be Conducted Date">
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Area</b>
                    <input type="text" class="form-control" name="tg_area" id="tg_area" placeholder="Enter Area Name">
                  </div>
                  
                </div>

                <br>
                <hr>


                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 text-center">
                    <input type="hidden" name="client_id" value="<?php echo $ClientId; ?>" >
                    <input type="hidden" name="tg_template_page_name" value="<?php echo $TemplatePageName; ?>" >
                    <input type="hidden" name="task" id="task" value="InsertDetails">
                    <a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Submit</a>
                  </div>
                  <div class="col-md-4"></div>
                </div>

                

            </form>


          </div>

          <!-- /.panel-body -->


          <div class="panel-body">

              <div class="table-responsive">
                <div style="margin-top: 10px;" id="clientDatatable" class="table-responsive"></div>
              </div>

          </div>
        </div>

        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>

  </div>

</div>



</div>
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	

$('#SubmitData').click(function(e) {

           

            var tg_client_name = $('#tg_client_name').val();
            var tg_test_name = $('#tg_test_name').val();
            var tg_employee_id = $('#tg_employee_id').val();
            var tg_to_be_conducted_date = $('#tg_to_be_conducted_date').val();
            var tg_area = $('#tg_area').val();
            var tg_ahu_number = $('#tg_ahu_number').val();
            var tg_equipment_name = $('#tg_equipment_name').val();
            var tg_equipment_model = $('#tg_equipment_model').val();
            var tg_equipment_serial_number = $('#tg_equipment_serial_number').val();
            var tg_cal_date = $('#tg_cal_date').val();
            var tg_due_date = $('#tg_due_date').val();

           if(tg_employee_id == "") {
                $('#tg_employee_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Select Employee Name.");
                setTimeout(function() {
                    $("#tg_employee_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(tg_to_be_conducted_date == "") {
                $('#tg_to_be_conducted_date').css("border-color", "red");
                $("#error_msg").empty().append("Please Select To Be Conducted Date.");
                setTimeout(function() {
                    $("#tg_to_be_conducted_date").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(tg_area == "") {
                $('#tg_area').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Area.");
                setTimeout(function() {
                    $("#tg_area").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else{

                    $("#SubmitData").css("pointer-events","none");
                    e.preventDefault();
                    $.ajax({
                        url: 'test_generation_db_operations.php',
                        type: 'post',
                        data: $('#form_data').serialize(),
                        success: function(data) {
                      // alert(data);
                            if (data.trim() == 'AddSuccess') {

                                $('#record_insert_model').click();
                                $('#myModalLabel').empty().append('Your Record Added Successfully.');

                            }else if (data.trim() == 'UpdateSuccess') 
                            {

                                $('#record_insert_model').click();
                                $('#myModalLabel').empty().append('Your Record Updated Successfully.');

                            } else {

                                $('#record_insert_model').click();
                                $('#myModalLabel').empty().append('You Have An Error.');

                            }
                        }

                    });

            }

});





</script>

