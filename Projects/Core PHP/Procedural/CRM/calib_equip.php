<?php
  include("include/header.php");
?>
<input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="window.location.href = 'calib_equip.php';">Okay</button>
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
                <button type="button" class="btn btn-primary" onclick="window.location.href = 'calib_equip.php';">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
            </div>
        </div>
    </div>
</div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Equipments</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
		  <li class="active" ><a>Calibration</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-heading" id="form_buttons" >
						<button class="btn btn-primary" style="color: white;font-weight: bold;" onclick="ShowForm()">Add</button>
						<button class="btn btn-danger" id="DeleteFormDetails" data-toggle="modal" data-target="#myModalDelete" style="visibility: hidden;color: white;font-weight: bold;" >Delete</button>
          </div>


					<div class="panel-body" id="form_body" style="display: none;padding: 25px 25px;">

						<form role="role" action="" method="post" id="form_data" enctype="multipart/form-data">
							<br>
              <b><span id="error_msg" style="color: red;"></span></b>
              <br>
              <br>
								<div class="row">
                  <div class="row mt-15">
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>AHU Number</b>
                      <input type="text" class="form-control" name="cb_ahu_number" id="cb_ahu_number" placeholder="Enter AHU Number" >
                    </div>
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>Equipment Name</b>
                      <input type="text" class="form-control" name="cb_equipment_name" id="cb_equipment_name" placeholder="Enter Equipment Name" >
                    </div>
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>Equipment Model</b>
                      <input type="text" class="form-control" name="cb_equipment_model" id="cb_equipment_model" placeholder="Enter Equipment Model" >
                    </div>
                    
                  </div>

                  <div class="row mt-15">
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>Equipment Serial Number</b>
                      <input type="text" class="form-control" name="cb_equipment_serial_number" id="cb_equipment_serial_number" placeholder="Enter Equipment Serial Number" >
                    </div>
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>Cal. Date</b>
                      <input type="date" class="form-control" name="cb_cal_date" id="cb_cal_date" placeholder="Select Cal. Date" >
                    </div>
                    <div class="col-md-4">
                      <b><span class="compulsory_mark" >*</span>Due Date</b>
                      <input type="date" class="form-control" name="cb_due_date" id="cb_due_date" placeholder="Select Due Date" >
                    </div>  
                    <div class="col-md-4">
                      Select file to upload:
                      <input type="file" class="form-control" name="fileToUpload" style="display: inline-block;" id="fileToUpload">
                    </div>  
                  </div>
                </div>

								<br>
								<br>


								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-4 text-center">
                    <input type="hidden" name="task" id="task" value="InsertDetails">
                    <input type="submit" href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" value="Save">
                    <input class="btn btn-success" id="Upload" style="color: white;font-weight: bold;" value="Upload">
										<!-- <a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Save</a> -->
                    <a href="javascript:void(0)" class="btn btn-danger" style="color: white;font-weight: bold;" onclick="CloseForm()">Close</a>
									</div>
									<div class="col-md-4"></div>
								</div>

                <hr>

						</form>


					</div>

					<!-- /.panel-body -->


					<div class="panel-body">

              <div class="table-responsive">
              	<div style="margin-top: 10px;" id="equipDatatable" class="table-responsive"></div>
              </div>

					</div>
				</div>

				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>

	</div>

</div>

<?php
  include("include/footer.php");
?>  

<script type="text/javascript">
	

$(document).ready(function() {

  document.getElementById("DeleteFormDetails").disabled = true;
  equipDatatable();
  let delete_selected_id_array=[];

});


function ShowForm() {

	$('#form_body').slideDown();
	$('#form_buttons').slideUp();
  $('#task').val("InsertDetails");
  $('#cb_ahu_number').val("");
  $('#cb_equipment_name').val("");
  $('#cb_equipment_model').val("");
  $('#cb_equipment_serial_number').val("");
  $('#cb_cal_date').val("");
  $('#cb_due_date').val("");

}

function CloseForm() {
	
	$('#form_body').slideUp();
	$('#form_buttons').slideDown();
  equipDatatable();

}



function equipDatatable()
{ 

    $('#equipDatatable').empty().html( '<table  id="main_datatable" class="table table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "calib_equip_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                "sTitle": "Equipment Name", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Equipment Model", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Calibration Date", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Due Date", "bVisible":true, "bSortable":true, "sClass": "left"
              },


            ]
       });
}

$('#Upload').on('click', function() {
                  var file_data = $('#fileToUpload').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  /*alert(form_data);   */                          
                  $.ajax({
                      url: 'upload.php', // point to server-side PHP script 
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          alert(php_script_response); // display response from the PHP script, if any
                      }
                  });
              });



$('#SubmitData').click(function(e) {

            var cb_ahu_number = $('#cb_ahu_number').val();
            var cb_equipment_name = $('#cb_equipment_name').val();
            var cb_equipment_model = $('#cb_equipment_model').val();
            var cb_equipment_serial_number = $('#cb_equipment_serial_number').val();
            var cb_cal_date = $('#cb_cal_date').val();
            var cb_due_date = $('#cb_due_date').val();

            if(cb_ahu_number == "") {
                $('#cb_ahu_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter AHU Number.");
                setTimeout(function() {
                    $("#cb_ahu_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(cb_equipment_name == "") {
                $('#cb_equipment_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Eqipment Name.");
                setTimeout(function() {
                    $("#cb_equipment_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(cb_equipment_model == "") {
                $('#cb_equipment_model').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Equipment Model.");
                setTimeout(function() {
                    $("#cb_equipment_model").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(cb_equipment_serial_number == "") {
                $('#cb_equipment_serial_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Equipment Serial Number.");
                setTimeout(function() {
                    $("#cb_equipment_serial_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(cb_cal_date == "") {
                $('#cb_cal_date').css("border-color", "red");
                $("#error_msg").empty().append("Please Select Calibration Date.");
                setTimeout(function() {
                    $("#cb_cal_date").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(cb_due_date == "") {
                $('#cb_due_date').css("border-color", "red");
                $("#error_msg").empty().append("Please Select Due Date.");
                setTimeout(function() {
                    $("#cb_due_date").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else{

              /*
                    $("#SubmitData").css("pointer-events","none");
                    e.preventDefault();
                    $.ajax({
                        url: 'calib_equip_db_operations.php',
                        type: 'post',
                        data: $('#form_data').serialize(),
                        success: function(data) {
                        alert(data);
                            // if (data.trim() == 'AddSuccess') {

                            //     $('#record_insert_model').click();
                            //     $('#myModalLabel').empty().append('Your Record Added Successfully.');

                            // }else if (data.trim() == 'UpdateSuccess') 
                            // {

                            //     $('#record_insert_model').click();
                            //     $('#myModalLabel').empty().append('Your Record Updated Successfully.');

                            // } else {

                            //     $('#record_insert_model').click();
                            //     $('#myModalLabel').empty().append('You Have An Error.');

                            // }
                        }

                    });*/
                    

            }


});

</script>

