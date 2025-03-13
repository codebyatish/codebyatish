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
		<h1 class="page-header">Air Velocity RTML Sheet</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
      <li><a href="air_velocity_test.php">Air Velocity Test</a></li>
		  <li class="active" ><a>Air Velocity RTML Sheet</a></li>
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
                          <input type="button" class="btn btn-primary" id="av_indoco_table_add_new_row" value="Add Row" />
                      </div>

                   <?php } ?>


                  <div class="table-responsive mt-15" >
                    
                      <table  id="av_indoco_table" class="table table-striped table-bordered table-hover av_indoco_table">
                          <thead> 
                            <tr>
                              <th rowspan="3" >Room Name</th>
                              <th rowspan="3" >Filter Code</th>
                              <th rowspan="3" >Room Vol. Ft3</th>
                              <th rowspan="3" >No. of Inlets</th>
                              <th rowspan="3" >Class of Area</th>
                              <th rowspan="3" >Supply Area</th>
                              <th colspan="5">Velocity Reading - FPM</th>
                              <th rowspan="3" >Avg. FPM</th>
                              <th rowspan="3" >Filter Size Ft2.</th>
                              <th rowspan="3" >CFM</th>
                              <th rowspan="3" >A/C  Per Hr.</th>

                              <?php
                                 if ($ViewTestId) { ?>

                             <?php  }else{ ?>

                                 <th rowspan="3" >Action</th>

                             <?php } ?>

                             </tr>   

                            <tr>
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                            </tr>
                          </thead>
                          <tbody>

                         <?php


                                $sel_qry ="SELECT * FROM CRM_AVIndocoTemplate WHERE TestId = '$EditTestId'";
                                $sel_qry_result = mysqli_query($con,$sel_qry);
                                $sel_qry_result_num_row = mysqli_num_rows($sel_qry_result);


                                  if ($sel_qry_result_num_row != 0) 
                                  {

                                    while($view_sel_qry_details_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH)) 
                                    {
                                          $AVIndocoId = $view_sel_qry_details_row['AVIndocoId'];
                                          $TestId = $view_sel_qry_details_row['TestId'];
                                          $AVIndocoRoomName = $view_sel_qry_details_row['AVIndocoRoomName'];
                                          $AVIndocoFilterCode = $view_sel_qry_details_row['AVIndocoFilterCode'];
                                          $AVIndocoRoomVol3FT = $view_sel_qry_details_row['AVIndocoRoomVol3FT'];
                                          $AVIndocoNumberOfInlets = $view_sel_qry_details_row['AVIndocoNumberOfInlets'];
                                          $AVIndocoClassOfArea  = $view_sel_qry_details_row['AVIndocoClassOfArea'];
                                          $AVIndocoSupplyArea = $view_sel_qry_details_row['AVIndocoSupplyArea'];
                                          $AVIndocoVelocityReading1FPM = $view_sel_qry_details_row['AVIndocoVelocityReading1FPM'];
                                          $AVIndocoVelocityReading2FPM = $view_sel_qry_details_row['AVIndocoVelocityReading2FPM'];
                                          $AVIndocoVelocityReading3FPM = $view_sel_qry_details_row['AVIndocoVelocityReading3FPM'];
                                          $AVIndocoVelocityReading4FPM = $view_sel_qry_details_row['AVIndocoVelocityReading4FPM'];
                                          $AVIndocoVelocityReading5FPM = $view_sel_qry_details_row['AVIndocoVelocityReading5FPM'];
                                          $AVIndocoAvgFPM = $view_sel_qry_details_row['AVIndocoAvgFPM'];
                                          $AVIndocoFilterSize2FT = $view_sel_qry_details_row['AVIndocoFilterSize2FT'];
                                          $AVIndocoCFM = $view_sel_qry_details_row['AVIndocoCFM'];
                                          $AVIndocoACPH = $view_sel_qry_details_row['AVIndocoACPH'];

                                      ?>



                                          <tr>

                                            <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                            <td><input type="hidden" name="AVIndocoId[]" id="AVIndocoId" value="<?php echo $AVIndocoId; ?>" ><input type="hidden" name="for_new_row[]" id="for_new_row" value="<?php echo $EditTestId; ?>" ><input type="hidden"  id="edit_test_id" value="<?php echo $EditTestId; ?>"  name="edit_test_id[]" class="form-control" /> <input type="text"  id="av_indoco_room_name" name="av_indoco_room_name[]" class="form-control" value="<?php echo $AVIndocoRoomName; ?>"/>
                                            </td>
                                            <td><input type="text"  id="av_indoco_filter_code" name="av_indoco_filter_code[]" class="form-control" value="<?php echo $AVIndocoFilterCode; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_rooms_vol_ft3" name="av_indoco_rooms_vol_ft3[]" class="form-control" value="<?php echo $AVIndocoRoomVol3FT; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_no_of_inlets" name="av_indoco_no_of_inlets[]" class="form-control" value="<?php echo $AVIndocoNumberOfInlets; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_class_of_area" name="av_indoco_class_of_area[]" class="form-control" value="<?php echo $AVIndocoClassOfArea; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_supply_area" name="av_indoco_supply_area[]" class="form-control" value="<?php echo $AVIndocoSupplyArea; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_1fpm" name="av_indoco_velocity_reading_1fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading1FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_2fpm" name="av_indoco_velocity_reading_2fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading2FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_3fpm" name="av_indoco_velocity_reading_3fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading3FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_4fpm" name="av_indoco_velocity_reading_4fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading4FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_5fpm" name="av_indoco_velocity_reading_5fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading5FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_avg_fpm" name="av_indoco_avg_fpm[]" class="form-control" value="<?php echo $AVIndocoAvgFPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_filter_size_ft2" name="av_indoco_filter_size_ft2[]" class="form-control" value="<?php echo $AVIndocoFilterSize2FT; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_cfm" name="av_indoco_cfm[]" class="form-control" value="<?php echo $AVIndocoCFM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_acph" name="av_indoco_acph[]" class="form-control" value="<?php echo $AVIndocoACPH; ?>"/></td>
                                            <td></td>
                                            <input type="hidden" name="test_id" id="test_id" value="<?php echo $EditTestId; ?>">
                                            <!-- <td><span deleted_row_id = "<?php echo $AVEmcureId; ?>" class="av_indoco_table_current_row fa fa-times-circle-o" onclick="delete_row(this)"  style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" ></span></td> -->


                                          </tr>

                                     <?php } 
                                     } else if($ViewTestId){ 

                                            $view_sel_qry ="SELECT * FROM CRM_AVIndocoTemplate WHERE TestId = '$ViewTestId'";
                                            $view_sel_qry_result = mysqli_query($con,$view_sel_qry);
                                            $view_sel_qry_result_num_row = mysqli_num_rows($view_sel_qry_result);

                                          while($view_sel_qry_details_row=mysqli_fetch_array($view_sel_qry_result,MYSQLI_BOTH)) 
                                          {
                                              $AVIndocoId = $view_sel_qry_details_row['AVIndocoId'];
                                              $TestId = $view_sel_qry_details_row['TestId'];
                                              $AVIndocoRoomName = $view_sel_qry_details_row['AVIndocoRoomName'];
                                              $AVIndocoFilterCode = $view_sel_qry_details_row['AVIndocoFilterCode'];
                                              $AVIndocoRoomVol3FT = $view_sel_qry_details_row['AVIndocoRoomVol3FT'];
                                              $AVIndocoNumberOfInlets = $view_sel_qry_details_row['AVIndocoNumberOfInlets'];
                                              $AVIndocoClassOfArea  = $view_sel_qry_details_row['AVIndocoClassOfArea'];
                                              $AVIndocoSupplyArea = $view_sel_qry_details_row['AVIndocoSupplyArea'];
                                              $AVIndocoVelocityReading1FPM = $view_sel_qry_details_row['AVIndocoVelocityReading1FPM'];
                                              $AVIndocoVelocityReading2FPM = $view_sel_qry_details_row['AVIndocoVelocityReading2FPM'];
                                              $AVIndocoVelocityReading3FPM = $view_sel_qry_details_row['AVIndocoVelocityReading3FPM'];
                                              $AVIndocoVelocityReading4FPM = $view_sel_qry_details_row['AVIndocoVelocityReading4FPM'];
                                              $AVIndocoVelocityReading5FPM = $view_sel_qry_details_row['AVIndocoVelocityReading5FPM'];
                                              $AVIndocoAvgFPM = $view_sel_qry_details_row['AVIndocoAvgFPM'];
                                              $AVIndocoFilterSize2FT = $view_sel_qry_details_row['AVIndocoFilterSize2FT'];
                                              $AVIndocoCFM = $view_sel_qry_details_row['AVIndocoCFM'];
                                              $AVIndocoACPH = $view_sel_qry_details_row['AVIndocoACPH'];


                                      ?>


                                          <tr>
                                            <td><input type="text"  id="av_indoco_room_name" readonly="true"  name="av_indoco_room_name[]" class="form-control" value="<?php echo $AVIndocoRoomName; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_filter_code" readonly="true"  name="av_indoco_filter_code[]" class="form-control" value="<?php echo $AVIndocoFilterCode; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_rooms_vol_ft3" readonly="true"  name="av_indoco_rooms_vol_ft3[]" class="form-control" value="<?php echo $AVIndocoRoomVol3FT; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_no_of_inlets" readonly="true"  name="av_indoco_no_of_inlets[]" class="form-control" value="<?php echo $AVIndocoNumberOfInlets; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_class_of_area" readonly="true"  name="av_indoco_class_of_area[]" class="form-control" value="<?php echo $AVIndocoClassOfArea; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_supply_area" readonly="true"  name="av_indoco_supply_area[]" class="form-control" value="<?php echo $AVIndocoSupplyArea; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_1fpm" readonly="true"  name="av_indoco_velocity_reading_1fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading1FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_2fpm" readonly="true"  name="av_indoco_velocity_reading_2fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading2FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_3fpm" readonly="true"  name="av_indoco_velocity_reading_3fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading3FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_4fpm" readonly="true"  name="av_indoco_velocity_reading_4fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading4FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_5fpm" readonly="true"  name="av_indoco_velocity_reading_5fpm[]" class="form-control" value="<?php echo $AVIndocoVelocityReading5FPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_avg_fpm" readonly="true"  name="av_indoco_avg_fpm[]" class="form-control" value="<?php echo $AVIndocoAvgFPM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_filter_size_ft2" readonly="true"  name="av_indoco_filter_size_ft2[]" class="form-control" value="<?php echo $AVIndocoFilterSize2FT; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_cfm" readonly="true"  name="av_indoco_cfm[]" class="form-control" value="<?php echo $AVIndocoCFM; ?>"/></td>
                                            <td><input type="text"  id="av_indoco_acph" readonly="true"  name="av_indoco_acph[]" class="form-control" value="<?php echo $AVIndocoACPH; ?>"/></td>
                                          </tr>   
                                          <input type="hidden" name="test_id" id="test_id" value="<?php echo $ViewTestId; ?>">

                                         <?php }
                                          } else{

                                          ?>     

                                      <tr>
                                            <input type="hidden"  id="sel_qry_result_num_row" value="<?php echo $sel_qry_result_num_row; ?>"  name="sel_qry_result_num_row[]" class="form-control sel_qry_result_num_row" /> 
                                            <td>
                                              <input type="hidden"  id="for_new_row" name="for_new_row[]" value="New"/>
                                              <input type="text"  id="av_indoco_room_name" name="av_indoco_room_name[]" class="form-control" />
                                            </td>
                                            <td><input type="text"  id="av_indoco_filter_code" name="av_indoco_filter_code[]" class="form-control" /></td>
                                            <td><input type="text"  id="av_indoco_rooms_vol_ft3" name="av_indoco_rooms_vol_ft3[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_no_of_inlets" name="av_indoco_no_of_inlets[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_class_of_area" name="av_indoco_class_of_area[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_supply_area" name="av_indoco_supply_area[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_1fpm" name="av_indoco_velocity_reading_1fpm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_2fpm" name="av_indoco_velocity_reading_2fpm[]" class="form-control" /></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_3fpm" name="av_indoco_velocity_reading_3fpm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_4fpm" name="av_indoco_velocity_reading_4fpm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_velocity_reading_5fpm" name="av_indoco_velocity_reading_5fpm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_avg_fpm" name="av_indoco_avg_fpm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_filter_size_ft2" name="av_indoco_filter_size_ft2[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_cfm" name="av_indoco_cfm[]" class="form-control"/></td>
                                            <td><input type="text"  id="av_indoco_acph" name="av_indoco_acph[]" class="form-control"/></td>
                                            <td></td>
                                        </tr>
                                        <input type="hidden" name="test_id" id="test_id" value="<?php echo $TestId; ?>">
                                      <?php }  ?>


                            <input type="hidden" id="deleted_av_indoco_id" name="deleted_av_indoco_id">
                        </tbody>
                     </table>
                  </div>

                   <?php
                       if ($ViewTestId) { ?>

                         <div class="row mt-15">
                          <div class="col-md-12" >
                              <b>Any Comment</b>
                              <textarea id="av_indoco_description" name="av_indoco_description"  class="form-control"  rows="5" style="resize: none;"  placeholder="Any Comment"></textarea>
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
                              <input type="text" class="form-control" id="av_indoco_witnessed_by_name1" name="av_indoco_witnessed_by_name1" placeholder="Enter Witness 1 Name" value="<?php echo $WitnessedByName1; ?>">
                            </div>
                            <div class="col-md-4">
                              <b>Witnessed by 2</b> 
                              <input type="text" class="form-control" id="av_indoco_witnessed_by_name2" name="av_indoco_witnessed_by_name2" placeholder="Enter Witness 2 Name" value="<?php echo $WitnessedByName2; ?>">
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


    $("#av_indoco_table_add_new_row").on("click", function () 
    { 
        var newRow = $("<tr>");
        var cols = "";
        
        cols += '<td><input type="hidden"  id="for_new_row'+avs_count+'" name="for_new_row[]" class="form-control" value="New"/><input type="text"  id="av_indoco_room_name'+avs_count+'" name="av_indoco_room_name[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_indoco_filter_code'+avs_count+'" name="av_indoco_filter_code[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_indoco_rooms_vol_ft3'+avs_count+'" name="av_indoco_rooms_vol_ft3[]" class="form-control"/></td>';  

        cols += '<td><input type="text"  id="av_indoco_no_of_inlets'+avs_count+'" name="av_indoco_no_of_inlets[]" class="form-control"/></td>';  

        cols += '<td><input type="text"  id="av_indoco_class_of_area'+avs_count+'" name="av_indoco_class_of_area[]" class="form-control"/></td>'; 

        cols += '<td><input type="text"  id="av_indoco_supply_area'+avs_count+'" name="av_indoco_supply_area[]" class="form-control"/></td>'; 

        cols += '<td><input type="text"  id="av_indoco_velocity_reading_1fpm'+avs_count+'" name="av_indoco_velocity_reading_1fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_indoco_velocity_reading_2fpm'+avs_count+'"  name="av_indoco_velocity_reading_2fpm[]" class="form-control" /></td>';

        cols += '<td><input type="text"  id="av_indoco_velocity_reading_3fpm'+avs_count+'"  name="av_indoco_velocity_reading_3fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_indoco_velocity_reading_4fpm'+avs_count+'"  name="av_indoco_velocity_reading_4fpm[]" class="form-control"/></td>';

        cols += '<td><input type="text"  id="av_indoco_velocity_reading_5fpm'+avs_count+'"  name="av_indoco_velocity_reading_5fpm[]" class="form-control"/></td>';  
        cols += '<td><input type="text"  id="av_indoco_avg_fpm'+avs_count+'" name="av_indoco_avg_fpm[]" class="form-control"/></td>';     

        cols += '<td><input type="text"  id="av_indoco_filter_size_ft2'+avs_count+'" name="av_indoco_filter_size_ft2[]" class="form-control"/></td>';    

        cols += '<td><input type="text"  id="av_indoco_cfm'+avs_count+'" name="av_indoco_cfm[]" class="form-control"/></td>'; 

        cols += '<td><input type="text"  id="av_indoco_acph'+avs_count+'" name="av_indoco_acph[]" class="form-control"/></td>';  

        cols += '<td><i class="av_indoco_table_current_row fa fa-times-circle-o" style="color: red;font-size: 30px;padding: 2px 5px;cursor:pointer;" onclick="delete_row(this,'+avs_count+')" ></i></td>';
        newRow.append(cols);

        $("table.av_indoco_table").append(newRow);
        avs_count++;

    });



  function delete_row(obj,table_row_counter)
  {
      
      

      $(obj.parentElement.parentNode).remove(); 
      
        //console.log($(obj).attr('deleted_row_id'));
        var deleted_av_indoco_id = $(obj).attr('deleted_row_id');
        
        console.log(deleted_av_indoco_id);

        if (deleted_av_indoco_id != undefined) 
         {
           deleted_arr.push(deleted_av_indoco_id);
         }

       $("#deleted_av_indoco_id").val(deleted_arr);



  }



$('#SubmitDataModel').click(function(e) {

        var av_indoco_room_name = $('#av_indoco_room_name').val();
        var av_indoco_filter_code = $('#av_indoco_filter_code').val();

        if(av_indoco_room_name == "") {
            $('#av_indoco_room_name').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Room Name.");
            setTimeout(function() {
                $("#av_indoco_room_name").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);
        }else if(av_indoco_filter_code == "") {
            $('#av_indoco_filter_code').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Filter Code.");
            setTimeout(function() {
                $("#av_indoco_filter_code").removeAttr('style');
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
                url: 'av_indoco_test_db_operations.php',
                type: 'post',
                data: $('#form_data').serialize(),
                success: function(data) {
               //alert(data);
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
                  url: 'av_indoco_test_db_operations.php',
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

