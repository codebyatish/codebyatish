<?php

    include('include/header.php');
     
?>

  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Okay</button>
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
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Particle Coun Format Emcure Sheet</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
      <li><a href="particle_coun_format_test.php">Particle Coun Format Test</a></li>
		  <li class="active" ><a>Particle Coun Format Emcure Sheet</a></li>
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


                  <div class="row" style="text-align: right;">
                      <input type="button" class="btn btn-primary" id="pcf_emcure_table_add_new_row" value="Add Row" />
                  </div>

                  <div class="table-responsive mt-15" >
                    
                      <table  id="pcf_emcure_table" class="table table-striped table-bordered table-hover pcf_emcure_table">
                          <thead> 
                            <tr>
                              <th rowspan="3" >Room Name</th>
                              <th rowspan="3" >Location No.</th>
                              <th colspan="2" >Particle Count (m3)</th>
                              <th rowspan="3" >Remarks</th>
                              <th rowspan="3" >Action</th>
                            </tr>   
                            <tr>
                              <th>0.5 micron </th>
                              <th>5.0 micron </th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td><input type="text"  id="pcf_emcure_room_name" name="pcf_emcure_room_name[]" class="form-control" /></td>
                                <td><input type="text"  id="pcf_emcure_location_no" name="pcf_emcure_location_no[]" class="form-control"/></td>
                                <td><input type="text"  id="pcf_emcure_particle_count_m3_05u" name="pcf_emcure_particle_count_m3_05u[]" class="form-control"/></td>
                                <td><input type="text"  id="pcf_emcure_particle_count_m3_50u" name="pcf_emcure_particle_count_m3_50u[]" class="form-control" /></td>
                                <td><input type="text"  id="pcf_emcure_remarks" name="pcf_emcure_remarks[]" class="form-control"/></td>
                                <td></td>
                              </tr>
                            <input type="hidden" id="deleted_pcf_emcure_id" name="deleted_pcf_emcure_id">
                        </tbody>
                     </table>
                  </div>



								<br>
								<br>


								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-4 text-center">
                    <input type="hidden" name="task" id="task" value="InsertDetails">
                    <input type="hidden" name="avs_id" id="avs_id" value="">
<!-- 										<a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Save</a> -->
									</div>
									<div class="col-md-4"></div>
								</div>
						</form>


					</div>

					<!-- /.panel-body -->
				</div>

				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>

	</div>

</div>
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	






   //var nursing_char_qry_num_row = $('.nursing_char_qry_num_row').val(); 
    var avs_count = 0 //Number(nursing_char_qry_num_row) + 1;

//alert(nursing_row_count);

   
    $("#pcf_emcure_table_add_new_row").on("click", function () 
    { 
        var newRow = $("<tr>");
        var cols = "";
        

        cols += '<td><input type="text"  id="pcf_emcure_room_name'+avs_count+'" name="pcf_emcure_room_name[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="pcf_emcure_location_no'+avs_count+'" name="pcf_emcure_location_no[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="pcf_emcure_particle_count_m3_05u'+avs_count+'" name="pcf_emcure_particle_count_m3_05u[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="pcf_emcure_particle_count_m3_50u'+avs_count+'"  name="pcf_emcure_particle_count_m3_50u[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="pcf_emcure_remarks'+avs_count+'"  name="pcf_emcure_remarks[]" class="form-control"/></td>';
        
        cols += '<td><i class="pcf_emcure_table_current_row fa fa-times-circle-o" style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" ></i></td>';
        newRow.append(cols);

        $("table.pcf_emcure_table").append(newRow);
        avs_count++;

    });

    $("table.pcf_emcure_table").on("click", ".pcf_emcure_table_current_row", function (event) {
        $(this).closest("tr").remove();       
       // nursing_row_count -= 1


         var deleted_row_id =  $(this).attr('deleted_row_id');

                 

         var prvalthd = $("#deleted_pcf_emcure_id").val();

         if (prvalthd) 
         {
           deleted_pcf_emcure_id = prvalthd+','+deleted_row_id
         }else
         {
           deleted_pcf_emcure_id = deleted_row_id;
         }

        $("#deleted_pcf_emcure_id").val(deleted_row_id);


          //alert(deleted_row_id);
    });







$('#SubmitData').click(function(e) {

            var client_company_name = $('#client_company_name').val();
            var client_first_name = $('#client_first_name').val();
            var client_last_name = $('#client_last_name').val();
            var client_mobile_number = $('#client_mobile_number').val();
            var client_email_id = $('#client_email_id').val();
            var client_frequency = $('#client_frequency').val();
            var client_address = $('#client_address').val();

            var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var validate_mobile_no = /^\d{10}$/;

            if(client_company_name == "") {
                $('#client_company_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Company Name.");
                setTimeout(function() {
                    $("#client_company_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(client_first_name == "") {
                $('#client_first_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter First Name.");
                setTimeout(function() {
                    $("#client_first_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(client_last_name == "") {
                $('#client_last_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Last Name.");
                setTimeout(function() {
                    $("#client_last_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(client_mobile_number == "") {
                $('#client_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Mobile Number.");
                setTimeout(function() {
                    $("#client_mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!client_mobile_number.match(validate_mobile_no) && client_mobile_number != "") {
                $('#client_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Mobile Number.");
                setTimeout(function() {
                    $("#client_mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(client_email_id == "") {
                $('#client_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Email Id.");
                setTimeout(function() {
                    $("#client_email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!client_email_id.match(validate_email) && client_email_id != "") {
                $('#client_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Email Id.");
                setTimeout(function() {
                    $("#client_email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(client_frequency == "") {
                $('#client_frequency').css("border-color", "red");
                $("#error_msg").empty().append("Please Select Client Frequency.");
                setTimeout(function() {
                    $("#client_frequency").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(client_address == "") {
                $('#client_address').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Address.");
                setTimeout(function() {
                    $("#client_address").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else{

                    $("#SubmitData").css("pointer-events","none");
                    e.preventDefault();
                    $.ajax({
                        url: 'client_db_operations.php',
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

