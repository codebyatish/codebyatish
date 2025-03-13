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
		<h1 class="page-header">Create Client Account</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
		  <li class="active" ><a>Client</a></li>
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

						<form role="role" method="post" id="form_data" enctype="multipart/form-data">
							<br>
              <b><span id="error_msg" style="color: red;"></span></b>
              <br>
              <br>
								<div class="row">
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Company Name </b>
                    <input type="text" class="form-control" name="client_company_name" id="client_company_name" placeholder="Enter Company Name">
                  </div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Contact Person's First Name</b>
										<input type="text" class="form-control" name="client_first_name" id="client_first_name" placeholder="Enter First Name">
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Contact Person's Last Name</b>
										<input type="text" class="form-control" name="client_last_name" id="client_last_name" placeholder="Enter Last Name">
									</div>
								</div>

								<div class="row mt-15">
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Contact Person's Mobile Number</b>
                    <input type="number" class="form-control" name="client_mobile_number" id="client_mobile_number" placeholder="Enter Mobile Number">
                  </div>
                  <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Contact Person's Email Id ( Username ) </b>
                    <input type="text" class="form-control" name="client_email_id" id="client_email_id" placeholder="Enter Email Address">
                  </div>
                   <div class="col-md-4">
                    <b><span class="compulsory_mark" >*</span>Select Frequency </b>
                    <select class="form-control" name="client_frequency" id="client_frequency" >
                        <option value=""> Select Frequency </option> 
                        <option value="One-Time">One-Time</option> 
                        <option value="Monthly">Monthly</option> 
                        <option value="Annually">Annually</option>  
                    </select>
                  </div>
								</div>

                <div class="row mt-15">
                  <div class="col-md-8">
                    <b><span class="compulsory_mark" >*</span>Address</b>
                    <textarea class="form-control" name="client_address" id="client_address" placeholder="Enter Address"  rows="5" style="resize: none;" ></textarea>
                  </div>
                </div>

								<br>
								<br>


								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-4 text-center">
                    <input type="hidden" name="task" id="task" value="InsertDetails">
                    <input type="hidden" name="client_id" id="client_id" value="">
										<a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;" >Save</a>
                    <a href="javascript:void(0)" class="btn btn-danger" style="color: white;font-weight: bold;" onclick="CloseForm()"  >Close</a>
									</div>
									<div class="col-md-4"></div>
								</div>

                <hr>

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
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	

$(document).ready(function() {

  document.getElementById("DeleteFormDetails").disabled = true;
  clientDatatable();
  let delete_selected_id_array=[];

});


function ShowForm() {

	$('#form_body').slideDown();
	$('#form_buttons').slideUp();
  $('#task').val("InsertDetails");
  $('#client_first_name').val("");
  $('#client_last_name').val("");
  $('#client_company_name').val("");
  $('#client_mobile_number').val("");
  $('#client_email_id').val("");
  $('#client_id').val("");

}

function CloseForm() {
	
	$('#form_body').slideUp();
	$('#form_buttons').slideDown();
  clientDatatable();

}



function clientDatatable()
{ 

    $('#clientDatatable').empty().html( '<table  id="main_datatable" class="table table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "client_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 

                "sTitle": "<span>Action</span>","sClass": "center","bSortable":false,"fnRender": function(obj) 
                { 
     
                          delete_selected_id_array=[];
                          Id= obj.aData[ obj.iDataColumn ];
                          idl= obj.aData[obj.iDataColumn];   

                        if(delete_selected_id_array.indexOf(idl) != '-1')
                        {

                         return   "<td><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;color:#337ab7;' onclick='update_details("+Id+")'></i></td>";

                        }else
                        {

                          return  "<td><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;color:#337ab7;' onclick='update_details("+Id+")'></i></td>";
                        } 
 
                       

                }       
              },

              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                "sTitle": "Company Name", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                  "sTitle": "First Name","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          client_first_name = obj.aData[ obj.iDataColumn ];
                          return client_first_name;
                        }
              },

              { 
                  "sTitle": "Client Name","sClass": "left", "bSortable":true, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          client_last_name = obj.aData[ obj.iDataColumn ];
                          return client_first_name+" "+client_last_name;
                        }
              },



              { 
                "sTitle": "Client Mobile Number", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Client Email Id (Username)", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Frequency", "bVisible":true, "bSortable":true, "sClass": "left"
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
          var jqxhrn = $.get("client_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                //alert(data);
                window.location.href = 'client.php';
          }) 
      }
   
    
        
  }



 function update_details(id){

        
        var jqxhrn = $.get("client_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {
            var result = data.split("`");
            ShowForm();
            $('#task').empty().val('UpdateDetails');
            $('#client_company_name').val(result[0].trim());
            $('#client_first_name').val(result[1].trim());
            $('#client_last_name').val(result[2].trim());
            $('#client_mobile_number').val(result[3].trim());
            $('#client_email_id').val(result[4].trim());
            $('#client_frequency').val(result[5].trim());
            $('#client_address').val(result[6].trim());
            $('#client_id').val(id);
                
      }) 
 }  


</script>

