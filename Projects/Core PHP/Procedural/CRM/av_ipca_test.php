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
		<h1 class="page-header">Air Velocity IPCA Sheet</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
      <li><a href="air_velocity_test.php">Air Velocity Test</a></li>
		  <li class="active" ><a>Air Velocity IPCA Sheet</a></li>
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
                          <input type="button" class="btn btn-primary" id="av_ipca_table_add_new_row" value="Add Row" />
                      </div>

                   <?php } ?>


                  <div class="table-responsive mt-15" >
                    
                      <table  id="av_ipca_table" class="table table-striped table-bordered table-hover av_ipca_table">
                          <thead> 

                            <thead> 
                            <tr>
                              <th rowspan="3" >Date</th>
                              <th rowspan="3" >Room</th>
                              <th rowspan="3" >Grill Size</th>
                              <th rowspan="3" >Grill area (Sq.ft)</th>
                              <th rowspan="3" >Room volume (Cu.ft.)</th>
                              <th colspan="5">Velocity Reading - FPM</th>
                              <th rowspan="3" >Avg. vel</th>
                              <th rowspan="3" >Air qty. (CFM)</th>
                              <th rowspan="3" >Designed (ACPH)</th>
                              <th rowspan="3" >Actual (ACPH)</th>
                              <?php
                                 if ($ViewTestId) { ?>

                             <?php  }else{ ?>

                                 <th rowspan="3" >Action</th>

                             <?php } ?>
                            </tr>   
                            <tr>
                              <th>V1</th>
                              <th>V2</th>
                              <th>V3</th>
                              <th>V4</th>
                              <th>V5</th>
                            </tr>
                          </thead>

                          <tbody>

                         <?php


                                $sel_qry ="SELECT * FROM CRM_AVIPCATemplate WHERE TestId = '$EditTestId'";
                                $sel_qry_result = mysqli_query($con,$sel_qry);
                                $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);


                                  if ($sel_qry_result_num_row != 0) 
                                  {

                                    while($view_sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH)) 
                                    {
                                              $AVIPCAId = $view_sel_qry_details_row['AVIPCAId'];
                                              $TestId = $view_sel_qry_details_row['TestId'];
                                              $AVIPCADate = $view_sel_qry_details_row['AVIPCADate'];
                                              $AVIPCARoomName = $view_sel_qry_details_row['AVIPCARoomName'];
                                              $AVIPCAGrillSize = $view_sel_qry_details_row['AVIPCAGrillSize'];
                                              $AVIPCAGrillAreaSqFt = $view_sel_qry_details_row['AVIPCAGrillAreaSqFt'];
                                              $AVIPCARoomVolumeCuFt = $view_sel_qry_details_row['AVIPCARoomVolumeCuFt'];
                                              $AVIPCAVelocityReading1FPM = $view_sel_qry_details_row['AVIPCAVelocityReading1FPM'];
                                              $AVIPCAVelocityReading2FPM = $view_sel_qry_details_row['AVIPCAVelocityReading2FPM'];
                                              $AVIPCAVelocityReading3FPM = $view_sel_qry_details_row['AVIPCAVelocityReading3FPM'];
                                              $AVIPCAVelocityReading4FPM = $view_sel_qry_details_row['AVIPCAVelocityReading4FPM'];
                                              $AVIPCAVelocityReading5FPM = $view_sel_qry_details_row['AVIPCAVelocityReading5FPM'];
                                              $AVIPCAAvgVel = $view_sel_qry_details_row['AVIPCAAvgVel'];
                                              $AVIPCAAirQtyCFM = $view_sel_qry_details_row['AVIPCAAirQtyCFM'];
                                              $AVIPCADesignedACPH = $view_sel_qry_details_row['AVIPCADesignedACPH'];
                                              $AVIPCAActualACPH = $view_sel_qry_details_row['AVIPCAActualACPH'];


                                      ?>



                                          <tr>

                                            <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                            <td><input type="hidden" name="AVIPCAId[]" id="AVIPCAId" value="<?php echo $AVIPCAId; ?>" ><input type="hidden" name="for_new_row[]" id="for_new_row" value="<?php echo $EditTestId; ?>" ><input type="hidden"  id="edit_test_id" value="<?php echo $EditTestId; ?>"  name="edit_test_id[]" class="form-control" /><input type="date"  id="av_ipca_date"  name="av_ipca_date[]" class="form-control" value="<?php echo $AVIPCADate; ?>"/>
                                            </td>
                                            <td><input type="text"  id="av_ipca_room_name" name="av_ipca_room_name[]" class="form-control" value="<?php echo $AVIPCARoomName; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_grill_size" name="av_ipca_grill_size[]" class="form-control" value="<?php echo $AVIPCAGrillSize; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_grill_area_sq_ft" name="av_ipca_grill_area_sq_ft[]" class="form-control" value="<?php echo $AVIPCAGrillAreaSqFt; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_room_volume_cu_ft" name="av_ipca_room_volume_cu_ft[]" class="form-control" value="<?php echo $AVIPCARoomVolumeCuFt; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_1fpm" name="av_ipca_velocity_reading_1fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading1FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_2fpm" name="av_ipca_velocity_reading_2fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading2FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_3fpm" name="av_ipca_velocity_reading_3fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading3FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_4fpm" name="av_ipca_velocity_reading_4fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading4FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_5fpm" name="av_ipca_velocity_reading_5fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading5FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_avg_vel" name="av_ipca_avg_vel[]" class="form-control" value="<?php echo $AVIPCAAvgVel; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_air_qty_cfm" name="av_ipca_air_qty_cfm[]" class="form-control" value="<?php echo $AVIPCAAirQtyCFM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_designed_acph" name="av_ipca_designed_acph[]" class="form-control" value="<?php echo $AVIPCADesignedACPH; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_actual_acph" name="av_ipca_actual_acph[]" class="form-control" value="<?php echo $AVIPCAActualACPH; ?>"/></td>
                                            <td></td>
                                            <input type="hidden" name="test_id" id="test_id" value="<?php echo $EditTestId; ?>">
                                            <!-- <td><span deleted_row_id = "<?php echo $AVEmcureId; ?>" class="av_ipca_table_current_row fa fa-times-circle-o" onclick="delete_row(this)"  style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" ></span></td> -->


                                          </tr>

                                     <?php } 
                                     } else if($ViewTestId){ 

                                            $view_sel_qry ="SELECT * FROM CRM_AVIPCATemplate WHERE TestId = '$ViewTestId'";
                                            $view_sel_qry_result = mysqli_query($con,$view_sel_qry);
                                            $view_sel_qry_result_num_row = mysqli_num_rows($view_sel_qry_result);

                                          while($view_sel_qry_details_row=mysqli_fetch_array($view_sel_qry_result,MYSQLI_BOTH)) 
                                          {
                                              $AVIPCAId = $view_sel_qry_details_row['AVIPCAId'];
                                              $TestId = $view_sel_qry_details_row['TestId'];
                                              $AVIPCADate = $view_sel_qry_details_row['AVIPCADate'];
                                              $AVIPCARoomName = $view_sel_qry_details_row['AVIPCARoomName'];
                                              $AVIPCAGrillSize = $view_sel_qry_details_row['AVIPCAGrillSize'];
                                              $AVIPCAGrillAreaSqFt = $view_sel_qry_details_row['AVIPCAGrillAreaSqFt'];
                                              $AVIPCARoomVolumeCuFt = $view_sel_qry_details_row['AVIPCARoomVolumeCuFt'];
                                              $AVIPCAVelocityReading1FPM = $view_sel_qry_details_row['AVIPCAVelocityReading1FPM'];
                                              $AVIPCAVelocityReading2FPM = $view_sel_qry_details_row['AVIPCAVelocityReading2FPM'];
                                              $AVIPCAVelocityReading3FPM = $view_sel_qry_details_row['AVIPCAVelocityReading3FPM'];
                                              $AVIPCAVelocityReading4FPM = $view_sel_qry_details_row['AVIPCAVelocityReading4FPM'];
                                              $AVIPCAVelocityReading5FPM = $view_sel_qry_details_row['AVIPCAVelocityReading5FPM'];
                                              $AVIPCAAvgVel = $view_sel_qry_details_row['AVIPCAAvgVel'];
                                              $AVIPCAAirQtyCFM = $view_sel_qry_details_row['AVIPCAAirQtyCFM'];
                                              $AVIPCADesignedACPH = $view_sel_qry_details_row['AVIPCADesignedACPH'];
                                              $AVIPCAActualACPH = $view_sel_qry_details_row['AVIPCAActualACPH'];


                                      ?>


                                          <tr>
                                            <td><input type="date"  id="av_ipca_date" readonly="true"  name="av_ipca_date[]" class="form-control" value="<?php echo $AVIPCADate; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_room_name" readonly="true" name="av_ipca_room_name[]" class="form-control" value="<?php echo $AVIPCARoomName; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_grill_size" readonly="true" name="av_ipca_grill_size[]" class="form-control" value="<?php echo $AVIPCAGrillSize; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_grill_area_sq_ft" readonly="true" name="av_ipca_grill_area_sq_ft[]" class="form-control" value="<?php echo $AVIPCAGrillAreaSqFt; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_room_volume_cu_ft" readonly="true" name="av_ipca_room_volume_cu_ft[]" class="form-control" value="<?php echo $AVIPCARoomVolumeCuFt; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_1fpm" readonly="true" name="av_ipca_velocity_reading_1fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading1FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_2fpm" readonly="true" name="av_ipca_velocity_reading_2fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading2FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_3fpm" readonly="true" name="av_ipca_velocity_reading_3fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading3FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_4fpm" readonly="true" name="av_ipca_velocity_reading_4fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading4FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_velocity_reading_5fpm" readonly="true"  name="av_ipca_velocity_reading_5fpm[]" class="form-control" value="<?php echo $AVIPCAVelocityReading5FPM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_avg_vel" readonly="true" name="av_ipca_avg_vel[]" class="form-control" value="<?php echo $AVIPCAAvgVel; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_air_qty_cfm" readonly="true" name="av_ipca_air_qty_cfm[]" class="form-control" value="<?php echo $AVIPCAAirQtyCFM; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_designed_acph" readonly="true" name="av_ipca_designed_acph[]" class="form-control" value="<?php echo $AVIPCADesignedACPH; ?>"/></td>
                                            <td><input type="text"  id="av_ipca_actual_acph" readonly="true" name="av_ipca_actual_acph[]" class="form-control" value="<?php echo $AVIPCAActualACPH; ?>"/></td>
                                          </tr>   
                                          <input type="hidden" name="test_id" id="test_id" value="<?php echo $ViewTestId; ?>">

                                         <?php }
                                          } else{

                                          ?>     

                                      <tr>
                                          <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                          <td>
                                            <input type="hidden"  id="for_new_row" name="for_new_row[]" value="New"/>
                                            <input type="date"  id="av_ipca_date"  name="av_ipca_date[]" class="form-control" />
                                          </td>
                                          <td><input type="text"  id="av_ipca_room_name" name="av_ipca_room_name[]" class="form-control" /></td>
                                          <td><input type="text"  id="av_ipca_grill_size" name="av_ipca_grill_size[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_grill_area_sq_ft" name="av_ipca_grill_area_sq_ft[]" class="form-control" /></td>
                                          <td><input type="text"  id="av_ipca_room_volume_cu_ft" name="av_ipca_room_volume_cu_ft[]" class="form-control" /></td>
                                          <td><input type="text"  id="av_ipca_velocity_reading_1fpm" name="av_ipca_velocity_reading_1fpm[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_velocity_reading_2fpm" name="av_ipca_velocity_reading_2fpm[]" class="form-control" /></td>
                                          <td><input type="text"  id="av_ipca_velocity_reading_3fpm" name="av_ipca_velocity_reading_3fpm[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_velocity_reading_4fpm" name="av_ipca_velocity_reading_4fpm[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_velocity_reading_5fpm" name="av_ipca_velocity_reading_5fpm[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_avg_vel" name="av_ipca_avg_vel[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_air_qty_cfm" name="av_ipca_air_qty_cfm[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_designed_acph" name="av_ipca_designed_acph[]" class="form-control"/></td>
                                          <td><input type="text"  id="av_ipca_actual_acph" name="av_ipca_actual_acph[]" class="form-control"/></td>
                                          <td></td>
                                        </tr>
                                        <input type="hidden" name="test_id" id="test_id" value="<?php echo $TestId; ?>">
                                      <?php }  ?>


                            <input type="hidden" id="deleted_av_ipca_id" name="deleted_av_ipca_id">
                        </tbody>
                     </table>
                  </div>

                   <?php
                       if ($ViewTestId) { ?>

                         <div class="row mt-15">
                          <div class="col-md-12" >
                              <b>Any Comment</b>
                              <textarea id="av_ipca_description" name="av_ipca_description"  class="form-control"  rows="5" style="resize: none;"  placeholder="Any Comment"></textarea>
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
                              <input type="text" class="form-control" id="av_ipca_witnessed_by_name1" name="av_ipca_witnessed_by_name1" placeholder="Enter Witness 1 Name" value="<?php echo $WitnessedByName1; ?>">
                            </div>
                            <div class="col-md-4">
                              <b>Witnessed by 2</b> 
                              <input type="text" class="form-control" id="av_ipca_witnessed_by_name2" name="av_ipca_witnessed_by_name2" placeholder="Enter Witness 2 Name" value="<?php echo $WitnessedByName2; ?>">
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


    $("#av_ipca_table_add_new_row").on("click", function () 
    { 
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="hidden"  id="for_new_row'+avs_count+'" name="for_new_row[]" class="form-control" value="New"/><input type="date"  id="av_ipca_date'+avs_count+'"  name="av_ipca_date[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_ipca_room_name'+avs_count+'" name="av_ipca_room_name[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_ipca_grill_size'+avs_count+'" name="av_ipca_grill_size[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_ipca_grill_area_sq_ft'+avs_count+'" name="av_ipca_grill_area_sq_ft[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_ipca_room_volume_cu_ft'+avs_count+'" name="av_ipca_room_volume_cu_ft[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_ipca_velocity_reading_1fpm'+avs_count+'" name="av_ipca_velocity_reading_1fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_ipca_velocity_reading_2fpm'+avs_count+'"  name="av_ipca_velocity_reading_2fpm[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_ipca_velocity_reading_3fpm'+avs_count+'"  name="av_ipca_velocity_reading_3fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_ipca_velocity_reading_4fpm'+avs_count+'"  name="av_ipca_velocity_reading_4fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_ipca_velocity_reading_5fpm'+avs_count+'"  name="av_ipca_velocity_reading_5fpm[]" class="form-control"/></td>';  
        cols += '<td><input type="text"  id="av_ipca_avg_vel'+avs_count+'" name="av_ipca_avg_vel[]" class="form-control"/></td>';     

        cols += '<td><input type="text"  id="av_ipca_air_qty_cfm'+avs_count+'" name="av_ipca_air_qty_cfm[]" class="form-control"/></td>';    

        cols += '<td><input type="text"  id="av_ipca_designed_acph'+avs_count+'" name="av_ipca_designed_acph[]" class="form-control"/></td>'; 

        cols += '<td><input type="text"  id="av_ipca_actual_acph'+avs_count+'" name="av_ipca_actual_acph[]" class="form-control"/></td>';  
        
        cols += '<td><i class="av_ipca_table_current_row fa fa-times-circle-o" style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" onclick="delete_row(this,'+avs_count+')"></i></td>';

        newRow.append(cols);

        $("table.av_ipca_table").append(newRow);
        avs_count++;

    });



  function delete_row(obj,table_row_counter)
  {
      
      

      $(obj.parentElement.parentNode).remove(); 
      
        //console.log($(obj).attr('deleted_row_id'));
        var deleted_av_ipca_id = $(obj).attr('deleted_row_id');
        
        console.log(deleted_av_ipca_id);

        if (deleted_av_ipca_id != undefined) 
         {
           deleted_arr.push(deleted_av_ipca_id);
         }

       $("#deleted_av_ipca_id").val(deleted_arr);



  }



$('#SubmitDataModel').click(function(e) {

        var av_ipca_date = $('#av_ipca_date').val();
        var av_ipca_room_name = $('#av_ipca_room_name').val();
        var av_ipca_filter_code = $('#av_ipca_filter_code').val();

        if(av_ipca_date == "") {
            $('#av_ipca_date').css("border-color", "red");
            $("#error_msg").empty().append("Please Select Date.");
            setTimeout(function() {
                $("#av_ipca_date").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);
        }else if(av_ipca_room_name == "") {
            $('#av_ipca_room_name').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Room Name.");
            setTimeout(function() {
                $("#av_ipca_room_name").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);
        }else if(av_ipca_filter_code == "") {
            $('#av_ipca_filter_code').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Filter Code.");
            setTimeout(function() {
                $("#av_ipca_filter_code").removeAttr('style');
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
                url: 'av_ipca_test_db_operations.php',
                type: 'post',
                data: $('#form_data').serialize(),
                success: function(data) {
              alert(data);
                    if (data.trim() == 'AddSuccess') {

                        $("body").css("position", "fixed");
                        $('#model_dismiss').click();
                        $('#record_insert_model').click();
                        $('#myModalLabel').empty().append('Your Record Added Successfully.');

                    }else if (data.trim() == 'UpdateSuccess') 
                    {   
                        $("body").css("position", "fixed");
                        $('#model_dismiss').click();
                        $('#record_insert_model').click();
                        $('#myModalLabel').empty().append('Your Record Updated Successfully.');

                    } else {

                        $("body").css("position", "fixed");
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
                  url: 'av_ipca_test_db_operations.php',
                  type: 'post',
                  data: $('#form_data').serialize(),
                  success: function(data) {
                 //alert(data);
                      if (data.trim() == 'ApproveSuccess') {

                          $('#record_insert_model').click();
                          $('#myModalLabel').empty().append('Test Approved.');

                      }else {

                          $('#record_insert_model').click();
                          $('#myModalLabel').empty().append('You Have An Error.');

                      }
                  }

              });



});


</script>

