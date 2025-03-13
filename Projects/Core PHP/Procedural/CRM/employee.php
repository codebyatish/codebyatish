<?php

    include('include/header.php');

    $employeeId = $_REQUEST['id'];

    $sel_qry ="SELECT * FROM CRM_Employee WHERE EmployeeId = '$employeeId'";
    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_details_row=mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

    $EmployeeId = $sel_qry_details_row['EmployeeId'];
    $EmployeeFirstName = $sel_qry_details_row['EmployeeFirstName'];
    $EmployeeLastName = $sel_qry_details_row['EmployeeLastName'];
    $EmployeeDesignation = $sel_qry_details_row['EmployeeDesignation'];
    $EmployeeEmailId = $sel_qry_details_row['EmployeeEmailId'];
    $EmployeeMobileNumber = $sel_qry_details_row['EmployeeMobileNumber'];
  
    
?>


  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'accounts.php';">Okay</button>
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
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'accounts.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Create Employee Account</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
		  <li class="active" ><a>Employee</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-heading" id="form_buttons" >
            <a  href="accounts.php" class="btn btn-primary" style="color: white;font-weight: bold;">Back</a>
<!-- 						<button class="btn btn-primary" style="color: white;font-weight: bold;" onclick="ShowForm()">Add</button>
						<button class="btn btn-danger" id="DeleteFormDetails" data-toggle="modal" data-target="#myModalDelete" style="color: white;font-weight: bold;" >Delete</button> -->
          </div>


					<div class="panel-body" id="form_body" style="padding: 25px 25px;">

						<form role="role" method="post" id="form_data" enctype="multipart/form-data">
							<br>
              <b><span id="error_msg" style="color: red;"></span></b>
              <br>
              <br>
								<div class="row">
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>First Name</b>
										<input type="text" class="form-control" name="employee_first_name" id="employee_first_name" placeholder="Enter First Name" value="<?php echo $EmployeeFirstName; ?>">
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Last Name</b>
										<input type="text" class="form-control" name="employee_last_name" id="employee_last_name" placeholder="Enter Last Name" value="<?php echo $EmployeeLastName; ?>">
									</div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Designation </b>
                    <input type="text" class="form-control" name="employee_designation" id="employee_designation" placeholder="Enter Designation" value="<?php echo $EmployeeDesignation; ?>">
                  </div>
								</div>

								<div class="row mt-15">
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Mobile Number</b>
                    <input type="text" class="form-control" name="employee_mobile_number" id="employee_mobile_number" placeholder="Enter Mobile Number"  value="<?php echo $EmployeeMobileNumber; ?>">
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Email Id ( Username ) </b>
                    <input type="text" class="form-control" name="employee_email_id" id="employee_email_id" placeholder="Enter Email Address" value="<?php echo $EmployeeEmailId; ?>">
                  </div>
								</div>

								<br>
								<br>


								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-4 text-center">


                    <?php 

                      if ($EmployeeId) { ?>
                        
                          <input type="hidden" name="task" id="task" value="UpdateDetails">
                          <input type="hidden" name="employee_id" id="employee_id" value="<?php echo $EmployeeId; ?>">
                          <a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Save</a>

                      <?php } else { ?>
                          
                          <input type="hidden" name="task" id="task" value="InsertDetails">
                          <input type="hidden" name="employee_id" id="employee_id" value="">
                          <a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Save</a>

                      <?php } ?>

									</div>
									<div class="col-md-4"></div>
								</div>


						</form>


					</div>

					<!-- /.panel-body -->


<!-- 					<div class="panel-body">

              <div class="table-responsive">
              	<div style="margin-top: 10px;" id="EmployeeDatatable" class="table-responsive"></div>
              </div>

					</div> -->
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

  document.getElementById("DeleteFormDetails").disabled = true;
  EmployeeDatatable();
  let delete_selected_id_array=[];

});


function ShowForm() {

	$('#form_body').slideDown();
	$('#form_buttons').slideUp();
  $('#task').val("InsertDetails");
  $('#employee_first_name').val("");
  $('#employee_last_name').val("");
  $('#employee_designation').val("");
  $('#employee_mobile_number').val("");
  $('#employee_email_id').val("");

  $('#employee_id').val("");

}

function CloseForm() {
	
	$('#form_body').slideUp();
	$('#form_buttons').slideDown();
  EmployeeDatatable();

}



function EmployeeDatatable()
{ 

    $('#EmployeeDatatable').empty().html( '<table  id="main_datatable" class="table table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "employee_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 

                "sTitle": "<span class='fa fa-trash-o' style='font-size: 20px;'  title='delete'></span><span class='custom-checkbox' style='padding-left: 5px;'><input type='checkbox' class='custom-control-input' onclick='select_all(this)' id='delete_selected_record_checkbox' style='cursor:pointer;' ><label class='custom-control-label' for='delete_selected_record_checkbox'></label></span><span style='padding: 4px 0px 0px 20px;'>Action</span>","sClass": "center","sWidth": "15%" ,"bSortable":false,"fnRender": function(obj) 
                { 
     
                          delete_selected_id_array=[];
                          Id= obj.aData[ obj.iDataColumn ];
                          idl= obj.aData[obj.iDataColumn];   

                        if(delete_selected_id_array.indexOf(idl) != '-1')
                        {

                         return   "<td><span class='custom-checkbox'><input type='checkbox' class='sel_log custom-control-input'onclick='select_record_for_delete(this)' id='"+idl+"' value='"+idl+" ><label class='custom-control-label' for='"+Id+"'></label><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;margin-left: 15px' onclick='update_details("+Id+")'></i></td>";

                        }else
                        {

                          return  "<td><span class='custom-checkbox'><input type='checkbox' class='sel_log custom-control-input' onclick='select_record_for_delete(this)' id='"+idl+"' value='"+idl+"' ><label class='custom-control-label' for='"+Id+"'></label><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;margin-left: 15px;' onclick='update_details("+Id+")'></i></td>";
                        } 
 
                       

                }       
              },

              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                  "sTitle": "First Name","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          employee_first_name = obj.aData[ obj.iDataColumn ];
                          return employee_first_name;
                        }
              },

              { 
                  "sTitle": "Full Name","sClass": "left", "bSortable":true, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          employee_last_name = obj.aData[ obj.iDataColumn ];
                          return employee_first_name+" "+employee_last_name;
                        }
              },

              { 
                "sTitle": "Designation", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Mobile Number", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Email Id (Username)", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Password", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                  "sTitle": "Last Updated","sClass": "left", "bSortable":true, "bSearchable": true,"fnRender": function(obj) 

                   {
                      full_date_time = obj.aData[ obj.iDataColumn ]; 
                      full_data = full_date_time.split(" ");
                      full_date = full_data[0].split("-");
                      return full_date[2]+"-"+full_date[1]+"-"+full_date[0]+" "+full_data[1];
                    } 

              }

            ]
       });
}





$('#SubmitData').click(function(e) {
  
            var employee_first_name = $('#employee_first_name').val();
            var employee_last_name = $('#employee_last_name').val();
            var employee_designation = $('#employee_designation').val();
            var employee_mobile_number = $('#employee_mobile_number').val();
            var employee_email_id = $('#employee_email_id').val();


            var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var validate_mobile_no = /^\d{10}$/;

            if(employee_first_name == "") {
                $('#employee_first_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter First Name.");
                setTimeout(function() {
                    $("#employee_first_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(employee_last_name == "") {
                $('#employee_last_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Last Name.");
                setTimeout(function() {
                    $("#employee_last_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(employee_designation == "") {
                $('#employee_designation').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Designation.");
                setTimeout(function() {
                    $("#employee_designation").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(employee_mobile_number == "") {
                $('#employee_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Mobile Number.");
                setTimeout(function() {
                    $("#employee_mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(!employee_mobile_number.match(validate_mobile_no) && employee_mobile_number != "") {
                $('#employee_mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Mobile Number.");
                setTimeout(function() {
                    $("#employee_mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(employee_email_id == "") {
                $('#employee_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Email Id.");
                setTimeout(function() {
                    $("#employee_email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!employee_email_id.match(validate_email) && employee_email_id != "") {
                $('#employee_email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Email Id.");
                setTimeout(function() {
                    $("#employee_email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else{

                    $("#SubmitData").css("pointer-events","none");
                    e.preventDefault();
                    $.ajax({
                        url: 'employee_db_operations.php',
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



  function select_all(obj)
  {
      if($(obj).is(':checked'))
      {
         $('.sel_log').each(function(){
            this.checked = true;
            $(this).parents('tr').css('background-color','silver');
            $(this).parents('tr').addClass('del');
            delete_selected_id_array.push($(this).attr('id'));
            document.getElementById("DeleteFormDetails").disabled = false;
         });
      }else
      {
        $('.sel_log').each(function(){
            this.checked = false;
            $(this).parents('tr').removeAttr('style');
            $(this).parents('tr').removeClass('del');
            delete_selected_id_array=[];
            document.getElementById("DeleteFormDetails").disabled = true;
         });

      }
  } 



  function select_record_for_delete(obj45)
  {

      if($(obj45).is(':checked'))
      {
          var ind =  delete_selected_id_array.indexOf($(obj45).attr('id'));
          if(ind == -1) {
            delete_selected_id_array.push(($(obj45).attr('id')));
          }
          $(obj45).parents('tr').css('background-color','silver');
          $(obj45).parents('tr').removeClass();
          $(obj45).parents('tr').addClass('del');
          document.getElementById("DeleteFormDetails").disabled = false;
      }
      else
      {
          for(var i = delete_selected_id_array.length - 1; i >= 0; i--) 
          {
              if(delete_selected_id_array[i] === $(obj45).attr('id')) 
              {
                 delete_selected_id_array.splice(i, 1); 
              }
          }
        
          $(obj45).parents('tr').removeAttr('style');
          $(obj45).parents('tr').removeClass('del');
          $(obj45).parents('tr').addClass('biege');

          if(delete_selected_id_array.length == 0)
          {
              document.getElementById("DeleteFormDetails").disabled = true;
          }
      }
  }


  function delete_selected_record()
  {

     //alert(delete_selected_id_array.length);
      for(var i=0;i<delete_selected_id_array.length;i++) 
      {
          var jqxhrn = $.get("employee_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                //alert(data);
                window.location.href = 'employee.php';
          }) 
      }
   
    
        
  }



 function update_details(id){

        
        var jqxhrn = $.get("employee_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {
            var result = data.split("`");
            ShowForm();
            $('#task').empty().val('UpdateDetails');
            $('#employee_first_name').val(result[0].trim());
            $('#employee_last_name').val(result[1].trim());
            $('#employee_designation').val(result[2].trim());
            $('#employee_email_id').val(result[3].trim());
            $('#employee_mobile_number').val(result[4].trim());
            $('#employee_password').val(result[5].trim());
            $('#employee_id').val(id);
                
      }) 
 }  



</script>

