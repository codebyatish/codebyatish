<?php

  include('include/header.php');
  $TestId = $_REQUEST["tid"];
  $EditTestId = $_REQUEST["etid"];
  $ViewTestId = $_REQUEST["vtid"];

?>

  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#data_insert_success_model" id="record_insert_model" >
  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#data_insert_model" id="record_submit_model" >


    <div class="modal fade" id="data_insert_success_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer" style="text-align: center;">
                

                <?php
                if ($ViewTestId) { ?>
                     <button type="button" class="btn btn-primary" onclick="window.location.href = 'approve_test.php';">Okay</button>
                  

               <?php  }else{ ?>

                    <button type="button" class="btn btn-primary" onclick="window.location.href = 'perform_test.php';">Okay</button>

               <?php } ?>


        
              </div>
          </div>
      </div>
  </div>



 <div class="modal fade" id="data_insert_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabelDelete" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <input type="hidden" class="close" data-dismiss="modal" aria-label="Close"  id="model_dismiss" >
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabelDelete">Are you sure, you want to Submit this record ?</h4>
              </div>
              <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-danger" id="SubmitData" style="width:12%;">Yes</button>
                <button type="button" class="btn btn-primary"  onclick="window.location.href = 'perform_test.php';" style="width:12%;" >No</button>
              </div>
          </div>
      </div>
  </div>




<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">PAO IPCA Sheet</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
      <li><a href="air_velocity_test.php">PAO Test</a></li>
		  <li class="active" ><a>PAO IPCA Sheet</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
          <div class="panel-heading" id="form_buttons" >

              <?php
                if ($ViewTestId) { ?>

                   <a href="approve_test.php" class="btn btn-danger btn-md" style="color: white;font-weight: bold;">Back</a>

               <?php  }else{ ?>

                   <a href="perform_test.php" class="btn btn-danger btn-md" style="color: white;font-weight: bold;">Back</a>

               <?php } ?>

           
          </div>


					<div class="panel-body" id="form_body" style="padding: 25px 25px;">


            <form role="role" method="post" id="form_data" enctype="multipart/form-data">
              <br>
              <b><span id="error_msg" style="color: red;"></span></b>
              <br>
              <br>
                  <input type="hidden" name="test_name" value="<?php echo $TestName; ?>" >
                  <input type="hidden" name="client_id" value="<?php echo $ClientId; ?>" >

                   <?php
                    if ($ViewTestId) { ?>

                   <?php  }else{ ?>

                      <div class="row" style="text-align: right;">
                          <input type="button" class="btn btn-primary" id="pao_ipca_table_add_new_row" value="Add Row" />
                      </div>

                   <?php } ?>


                  <div class="table-responsive mt-15" >
                    
                      <table  id="pao_ipca_table" class="table table-striped table-bordered table-hover pao_ipca_table">
                          <thead> 
                            <tr>
                              <th rowspan="3">Area </th>
                              <th rowspan="3">Filter No.</th>
                              <th colspan="2">Upstream Concentration</th>
                              <th rowspan="3">% Penetration</th>
                              <th rowspan="3">Result</th>
                              <?php
                                 if ($ViewTestId) { ?>

                             <?php  }else{ ?>

                                 <th rowspan="3">Action</th>

                             <?php } ?>
                            </tr>   
                            <tr>
                              <th>In µg/ltr.</th>
                              <th>Set to</th>
                            </tr>
                          </thead>

                          <tbody>

                         <?php


                                $sel_qry ="SELECT * FROM CRM_PAOIPCATemplate WHERE TestId = '$EditTestId'";
                                $sel_qry_result = mysqli_query($con,$sel_qry);
                                $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);


                                  if ($sel_qry_result_num_row != 0) 
                                  {

                                    while($view_sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH)) 
                                    {
                                              $PAOIPCAId = $view_sel_qry_details_row['PAOIPCAId'];
                                              $TestId = $view_sel_qry_details_row['TestId'];
                                              $PAOIPCAArea = $view_sel_qry_details_row['PAOIPCAArea'];
                                              $PAOIPCAFilterNo = $view_sel_qry_details_row['PAOIPCAFilterNo'];
                                              $PAOIPCAUpstreamConcentrationInUgLter = $view_sel_qry_details_row['PAOIPCAUpstreamConcentrationInUgLter'];
                                              $PAOIPCAUpstreamConcentrationSetTo = $view_sel_qry_details_row['PAOIPCAUpstreamConcentrationSetTo'];
                                              $PAOIPCAPercentagePenetration = $view_sel_qry_details_row['PAOIPCAPercentagePenetration'];
                                              $PAOIPCAResult = $view_sel_qry_details_row['PAOIPCAResult'];

                                      ?>



                                          <tr>

                                            <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                            <td><input type="hidden" name="PAOIPCAId[]" id="PAOIPCAId" value="<?php echo $PAOIPCAId; ?>" ><input type="hidden" name="for_new_row[]" id="for_new_row" value="<?php echo $EditTestId; ?>" ><input type="hidden"  id="edit_test_id" value="<?php echo $EditTestId; ?>"  name="edit_test_id[]" class="form-control" /><input type="text"  id="pao_ipca_area" name="pao_ipca_area[]" class="form-control" value="<?php echo $PAOIPCAArea; ?>"/>
                                            </td>
                                            <td><input type="text"  id="pao_ipca_filter_no" name="pao_ipca_filter_no[]" class="form-control" value="<?php echo $PAOIPCAFilterNo; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_upstream_concentration_in_ug_ltr" name="pao_ipca_upstream_concentration_in_ug_ltr[]" class="form-control" value="<?php echo $PAOIPCAUpstreamConcentrationInUgLter; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_upstream_concentration_set_to" name="pao_ipca_upstream_concentration_set_to[]" class="form-control" value="<?php echo $PAOIPCAUpstreamConcentrationSetTo; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_percentage_penetration" name="pao_ipca_percentage_penetration[]" class="form-control" value="<?php echo $PAOIPCAPercentagePenetration; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_result" name="pao_ipca_result[]" class="form-control" value="<?php echo $PAOIPCAResult; ?>"/></td>
                                            <td></td>
                                            <input type="hidden" name="test_id" id="test_id" value="<?php echo $EditTestId; ?>">
                                            <!-- <td><span deleted_row_id = "<?php echo $AVEmcureId; ?>" class="pao_ipca_table_current_row fa fa-times-circle-o" onclick="delete_row(this)"  style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" ></span></td> -->


                                          </tr>

                                     <?php } 
                                     } else if($ViewTestId){ 

                                            $view_sel_qry ="SELECT * FROM CRM_PAOIPCATemplate WHERE TestId = '$ViewTestId'";
                                            $view_sel_qry_result = mysqli_query($con,$view_sel_qry);
                                            $view_sel_qry_result_num_row = mysqli_num_rows($view_sel_qry_result);

                                          while($view_sel_qry_details_row=mysqli_fetch_array($view_sel_qry_result,MYSQLI_BOTH)) 
                                          {
                                              $PAOIPCAId = $view_sel_qry_details_row['PAOIPCAId'];
                                              $TestId = $view_sel_qry_details_row['TestId'];
                                              $PAOIPCAArea = $view_sel_qry_details_row['PAOIPCAArea'];
                                              $PAOIPCAFilterNo = $view_sel_qry_details_row['PAOIPCAFilterNo'];
                                              $PAOIPCAUpstreamConcentrationInUgLter = $view_sel_qry_details_row['PAOIPCAUpstreamConcentrationInUgLter'];
                                              $PAOIPCAUpstreamConcentrationSetTo = $view_sel_qry_details_row['PAOIPCAUpstreamConcentrationSetTo'];
                                              $PAOIPCAPercentagePenetration = $view_sel_qry_details_row['PAOIPCAPercentagePenetration'];
                                              $PAOIPCAResult = $view_sel_qry_details_row['PAOIPCAResult'];
                                      ?>


                                          <tr>
                                            <td><input type="text"  id="pao_ipca_area" name="pao_ipca_area[]" readonly="true" class="form-control" value="<?php echo $PAOIPCAArea; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_filter_no" name="pao_ipca_filter_no[]" readonly="true" class="form-control" value="<?php echo $PAOIPCAFilterNo; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_upstream_concentration_in_ug_ltr" readonly="true" name="pao_ipca_upstream_concentration_in_ug_ltr[]" class="form-control" value="<?php echo $PAOIPCAUpstreamConcentrationInUgLter; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_upstream_concentration_set_to" readonly="true" name="pao_ipca_upstream_concentration_set_to[]" class="form-control" value="<?php echo $PAOIPCAUpstreamConcentrationSetTo; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_percentage_penetration" readonly="true" name="pao_ipca_percentage_penetration[]" class="form-control" value="<?php echo $PAOIPCAPercentagePenetration; ?>"/></td>
                                            <td><input type="text"  id="pao_ipca_result" readonly="true" name="pao_ipca_result[]" class="form-control" value="<?php echo $PAOIPCAResult; ?>"/></td>
                                          </tr>   
                                          <input type="hidden" name="test_id" id="test_id" value="<?php echo $ViewTestId; ?>">

                                         <?php }
                                          } else{

                                          ?>     

                                      <tr>
                                          <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                          <td>
                                            <input type="hidden"  id="for_new_row" name="for_new_row[]" value="New"/>
                                            <input type="text"  id="pao_ipca_area" name="pao_ipca_area[]" class="form-control" />
                                          </td>
                                          <td><input type="text"  id="pao_ipca_filter_no" name="pao_ipca_filter_no[]" class="form-control"/></td>
                                          <td><input type="text"  id="pao_ipca_upstream_concentration_in_ug_ltr" name="pao_ipca_upstream_concentration_in_ug_ltr[]" class="form-control"/></td>
                                          <td><input type="text"  id="pao_ipca_upstream_concentration_set_to" name="pao_ipca_upstream_concentration_set_to[]" class="form-control" /></td>
                                          <td><input type="text"  id="pao_ipca_percentage_penetration" name="pao_ipca_percentage_penetration[]" class="form-control"/></td>
                                          <td><input type="text"  id="pao_ipca_result" name="pao_ipca_result[]" class="form-control"/></td>
                                          <td></td>
                                        </tr>
                                        <input type="hidden" name="test_id" id="test_id" value="<?php echo $TestId; ?>">
                                      <?php }  ?>


                            <input type="hidden" id="deleted_pao_ipca_id" name="deleted_pao_ipca_id">
                        </tbody>
                     </table>
                  </div>

                   <?php
                       if ($ViewTestId) { ?>

                         <div class="row mt-15">
                          <div class="col-md-12" >
                              <b>Any Comment</b>
                              <textarea id="pao_ipca_description" name="pao_ipca_description"  class="form-control"  rows="5" style="resize: none;"  placeholder="Any Comment"></textarea>
                          </div>
                        </div>

                   <?php  }else{ 


                              $sel_qry1 ="SELECT * FROM CRM_Test WHERE TestId = '$EditTestId'";
                              $sel_qry_result1 = mysqli_query($con,$sel_qry1);


                              $sel_qry_details_row1 = mysqli_fetch_array($sel_qry_result1,MYSQLI_BOTH);

                              $WitnessedByName1 = $sel_qry_details_row1['WitnessedByName1'];
                              $WitnessedByName2 = $sel_qry_details_row1['WitnessedByName2'];


                    ?>

                        <div class="row mt-15">     
                            <div class="col-md-4">
                              <b>Witnessed by 1</b> 
                              <input type="text" class="form-control" id="pao_ipca_witnessed_by_name1" name="pao_ipca_witnessed_by_name1" placeholder="Enter Witness 1 Name" value="<?php echo $WitnessedByName1; ?>">
                            </div>
                            <div class="col-md-4">
                              <b>Witnessed by 2</b> 
                              <input type="text" class="form-control" id="pao_ipca_witnessed_by_name2" name="pao_ipca_witnessed_by_name2" placeholder="Enter Witness 2 Name" value="<?php echo $WitnessedByName2; ?>">
                            </div>
                        </div>

                   <?php } ?>

                
                <br>
                <br>


                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 text-center">
                    
                    <?php
                       if ($ViewTestId) { ?>

                        <input type="hidden" name="view_test_id" id="view_test_id" value="<?php echo $ViewTestId; ?>">
                        <input type="hidden" name="task" id="task" value="ApproveTestTask">
                        <a href="javascript:void(0)" class="btn btn-success" id="ApproveTest" style="color: white;font-weight: bold;" >Approve Test</a>

                   <?php  }else{ 

                    ?>
          
                        <input type="hidden" name="task" id="task" value="InsertDetails">
                        <a href="javascript:void(0)" id="SubmitDataModel" class="btn btn-success" style="color: white;font-weight: bold;">Submit</a>

                   <?php } ?>
        
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
	




$(document).ready(function() {
  let deleted_arr = [];
  document.getElementById("sideNav").click();

});


    var sel_qry_result_num_row = $('.sel_qry_result_num_row').val(); 
    var avs_count = Number(sel_qry_result_num_row) + 1;


    $("#pao_ipca_table_add_new_row").on("click", function () 
    { 
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="hidden"  id="for_new_row'+avs_count+'" name="for_new_row[]" class="form-control" value="New"/><input type="text"  id="pao_ipca_area'+avs_count+'" name="pao_ipca_area[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="pao_ipca_filter_no'+avs_count+'" name="pao_ipca_filter_no[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="pao_ipca_upstream_concentration_in_ug_ltr'+avs_count+'" name="pao_ipca_upstream_concentration_in_ug_ltr[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="pao_ipca_upstream_concentration_set_to'+avs_count+'"  name="pao_ipca_upstream_concentration_set_to[]" class="form-control" /></td>';
  
        cols += '<td><input type="text"  id="pao_ipca_percentage_penetration'+avs_count+'" name="pao_ipca_percentage_penetration[]" class="form-control"/></td>';     

        cols += '<td><input type="text"  id="pao_ipca_result'+avs_count+'" name="pao_ipca_result[]" class="form-control"/></td>';    
        
        cols += '<td><i class="pao_ipca_table_current_row fa fa-times-circle-o" style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" onclick="delete_row(this,'+avs_count+')"></i></td>';

        newRow.append(cols);

        $("table.pao_ipca_table").append(newRow);
        avs_count++;

    });



  function delete_row(obj,table_row_counter)
  {
      
      

      $(obj.parentElement.parentNode).remove(); 
      
        //console.log($(obj).attr('deleted_row_id'));
        var deleted_pao_ipca_id = $(obj).attr('deleted_row_id');
        
        console.log(deleted_pao_ipca_id);

        if (deleted_pao_ipca_id != undefined) 
         {
           deleted_arr.push(deleted_pao_ipca_id);
         }

       $("#deleted_pao_ipca_id").val(deleted_arr);



  }



$('#SubmitDataModel').click(function(e) {


        var pao_ipca_room_name = $('#pao_ipca_room_name').val();
        var pao_ipca_code = $('#pao_ipca_code').val();

        if(pao_ipca_room_name == "") {
            $('#pao_ipca_room_name').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Room Name.");
            setTimeout(function() {
                $("#pao_ipca_room_name").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);
        }else if(pao_ipca_code == "") {
            $('#pao_ipca_code').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Filter Code.");
            setTimeout(function() {
                $("#pao_ipca_code").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);
        } else{

              $('#record_submit_model').click();

        }


});







$('#SubmitData').click(function(e) {

           
            $("#SubmitData").css("pointer-events","none");
            e.preventDefault();
            $.ajax({
                url: 'pao_ipca_test_db_operations.php',
                type: 'post',
                data: $('#form_data').serialize(),
                success: function(data) {
              //alert(data);
                    if (data.trim() == 'AddSuccess') {

                        $('#model_dismiss').click();
                        $('#record_insert_model').click();
                        $('#myModalLabel').empty().append('Your Record Added Successfully.');

                    }else if (data.trim() == 'UpdateSuccess') 
                    {   

                        $('#model_dismiss').click();
                        $('#record_insert_model').click();
                        $('#myModalLabel').empty().append('Your Record Updated Successfully.');

                    } else {

                        $('#model_dismiss').click();
                        $('#record_insert_model').click();
                        $('#myModalLabel').empty().append('You Have An Error.');

                    }
                }

            });



});





$('#ApproveTest').click(function(e) {


              $("#ApproveTest").css("pointer-events","none");
              e.preventDefault();
              $.ajax({
                  url: 'pao_ipca_test_db_operations.php',
                  type: 'post',
                  data: $('#form_data').serialize(),
                  success: function(data) {
                // alert(data);
                      if (data.trim() == 'Success') {

                          $('#record_insert_model').click();
                          $('#myModalLabel').empty().append('Test Approved.');

                      }else {

                          $('#record_insert_model').click();
                          $('#myModalLabel').empty().append('You Have An Error.');

                      }
                  }

              });



});










   //var nursing_char_qry_num_row = $('.nursing_char_qry_num_row').val(); 
    var avs_count = 0 //Number(nursing_char_qry_num_row) + 1;

//alert(nursing_row_count);

   
    $("#pao_ipca_table_add_new_row").on("click", function () 
    { 
        var newRow = $("<tr>");
        var cols = "";

        
        newRow.append(cols);

        $("table.pao_ipca_table").append(newRow);
        avs_count++;

    });

    $("table.pao_ipca_table").on("click", ".pao_ipca_table_current_row", function (event) {
        $(this).closest("tr").remove();       
       // nursing_row_count -= 1


         var deleted_row_id =  $(this).attr('deleted_row_id');

                 

         var prvalthd = $("#deleted_pao_ipca_id").val();

         if (prvalthd) 
         {
           deleted_pao_ipca_id = prvalthd+','+deleted_row_id
         }else
         {
           deleted_pao_ipca_id = deleted_row_id;
         }

        $("#deleted_pao_ipca_id").val(deleted_row_id);


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

