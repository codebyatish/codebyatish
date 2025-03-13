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
                  <button type="button" class="btn btn-primary" onclick="CloseForm();" data-dismiss="modal">Okay</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Manage Accounts</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
		  <li class="active" ><a>Accounts</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-heading" id="form_buttons" >
            <a href="manager.php" class="btn btn-primary"  style="color: white;">Add Manager</a>
            <a href="employee.php" class="btn btn-primary" style="color: white;">Add Employee</a>
          </div>


					<div class="panel-body" id="form_body" style="display: none;padding: 25px 25px;">

						<form role="role" method="post" id="form_data" enctype="multipart/form-data">
							<br>
              <b><span id="error_msg" style="color: red;"> </span></b>
              <br>
              <br>
								<div class="row">
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>First Name</b>
										<input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Last Name</b>
										<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Mobile Number</b>
										<input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number">
									</div>
								</div>

								<div class="row mt-15">
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Select User Type</b>
										<select class="form-control" name="user_type" id="user_type"  >
											<option value="">Select User Type</option>
											<option>Manager</option>
											<option>Employee</option>
                      <option>Client</option>
										</select>
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Email Id ( Username ) </b>
										<input type="text" class="form-control" name="email_id" id="email_id" placeholder="Enter Email Address">
									</div>
									<div class="col-md-4">
										<b><span class="compulsory_mark" >*</span>Password</b>
										<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
									</div>
								</div>

								<br>
								<br>


								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-4 text-center">
                    <input type="hidden" name="task" id="task" value="">
                    <input type="hidden" name="login_id" id="login_id" value="">
										<a href="javascript:void(0)" class="btn btn-success" id="SubmitData" style="color: white;font-weight: bold;width: 20%;" >Save</a>
										<a href="javascript:void(0)" class="btn btn-danger" style="color: white;font-weight: bold;width: 20%;" onclick="CloseForm()" > Cancel</a>
									</div>
									<div class="col-md-4"></div>
								</div>


						</form>

						<hr>
					</div>

					<!-- /.panel-body -->


					<div class="panel-body">

              <div class="table-responsive">
              	<div style="margin-top: 10px;" id="AccountsDatatable" class="table-responsive"></div>
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

  //document.getElementById("DeleteFormDetails").disabled = true;
  AccountsDatatable();
  let delete_selected_id_array=[];

});


function ShowForm() {

	$('#form_body').slideDown();
	$('#form_buttons').slideUp();
  $('#task').val("InsertDetails");
  $('#first_name').val("");
  $('#last_name').val("");
  $('#mobile_number').val("");
  $('#user_type').val("");
  $('#email_id').val("");
  $('#password').val("");
  $('#login_id').val("");

}

function CloseForm() {
	
	$('#form_body').slideUp();
	$('#form_buttons').slideDown();
  AccountsDatatable();

}



function AccountsDatatable()
{ 

    $('#AccountsDatatable').empty().html( '<table  id="main_datatable" class="table table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "accounts_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 

                "sTitle": "<span class='fa fa-trash-o' style='font-size: 20px;'  title='delete'></span><span class='custom-checkbox' style='padding-left: 5px;'><input type='checkbox' class='custom-control-input' onclick='select_all(this)' id='delete_selected_record_checkbox' style='cursor:pointer;' ><label class='custom-control-label' for='delete_selected_record_checkbox'></label></span><span style='padding: 4px 0px 0px 20px;'>Action</span>","sClass": "center","sWidth": "15%" ,"bVisible":false, "bSortable":false,"fnRender": function(obj) 
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
                  "sTitle": "User Type","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          user_type = obj.aData[ obj.iDataColumn ];
                          return user_type;
                        }
              },



              { 
                  "sTitle": "M-Id","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          MId = obj.aData[ obj.iDataColumn ];
                          return MId;
                        }
              },


              { 
                  "sTitle": "E-Id","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          EId = obj.aData[ obj.iDataColumn ];
                          return EId;
                        }
              },


              { 

                "sTitle": "<span>Action</span>","sClass": "center","bVisible":true,"bSortable":false,"fnRender": function(obj) 
                { 
     

                        login_id= obj.aData[obj.iDataColumn];   

                        if(user_type == "Manager")
                        {

                            return  "<td><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;color:#337ab7;' alt='manager.php' onclick='update_details("+MId+",this)'></i></td>";

                        }else{

                            return  "<td><i class='fa fa-edit' style='cursor: pointer;font-size: 20px;color:#337ab7;' alt='employee.php'  onclick='update_details("+EId+",this)'></i></td>";

                        }

                }       
              },


              { 
                  "sTitle": "First Name","sClass": "left", "bSortable":true, "bVisible":false, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          first_name = obj.aData[ obj.iDataColumn ];
                          return first_name;
                        }
              },

              { 
                  "sTitle": "Full Name","sClass": "left", "bSortable":true, "bSearchable": true,
                  "fnRender": function(obj) 
                        {
                          last_name = obj.aData[ obj.iDataColumn ];
                          return first_name+" "+last_name;
                        }
              },


              { 
                "sTitle": "Mobile Number", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Email Id (Username)", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "Password", "bVisible":false, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "User Type", "bVisible":true, "bSortable":true, "sClass": "left"
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
  
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var mobile_number = $('#mobile_number').val();
            var email_id = $('#email_id').val();
            var user_type = $('#user_type').val();
            var password = $('#password').val();
            var validate_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var validate_mobile_no = /^\d{10}$/;

            if(first_name == "") {
                $('#first_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter First Name.");
                setTimeout(function() {
                    $("#first_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(last_name == "") {
                $('#last_name').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Last Name.");
                setTimeout(function() {
                    $("#last_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(mobile_number == "") {
                $('#mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Mobile Number.");
                setTimeout(function() {
                    $("#mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(!mobile_number.match(validate_mobile_no) && mobile_number != "") {
                $('#mobile_number').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Mobile Number.");
                setTimeout(function() {
                    $("#mobile_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(user_type == "") {
                $('#user_type').css("border-color", "red");
                $("#error_msg").empty().append("Please Select User Type.");
                setTimeout(function() {
                    $("#user_type").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(email_id == "") {
                $('#email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Your Email Id.");
                setTimeout(function() {
                    $("#email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(!email_id.match(validate_email) && email_id != "") {
                $('#email_id').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Valid Email Id.");
                setTimeout(function() {
                    $("#email_id").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(password == "") {
                $('#password').css("border-color", "red");
                $("#error_msg").empty().append("Please Enter Password.");
                setTimeout(function() {
                    $("#password").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else{

                    $("#SubmitData").css("pointer-events","none");
                    e.preventDefault();
                    $.ajax({
                        url: 'accounts_db_operations.php',
                        type: 'post',
                        data: $('#form_data').serialize(),
                        success: function(data) {

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
          var jqxhrn = $.get("accounts_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                                     
                AccountsDatatable(); 
          }) 
      }
   
    
        
  }


 function update_details(id,e){

    let page_link = e.getAttribute('alt');

    window.location.href = page_link+'?id='+id;
 }  







</script>

