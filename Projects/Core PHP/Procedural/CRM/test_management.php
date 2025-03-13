<?php

    include('include/header.php');
     
?>

<style type="text/css">
  .card{
        border: 0.5px solid #ccc;
    padding: 20px 20px;
  }
</style>
  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.alt = 'client.php';">Okay</button>
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
                  <button type="button" class="btn btn-primary" onclick="window.location.alt = 'client.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Test Management</h1>
		<ol class="breadcrumb">
		  <li><a alt="#">Dashboard</a></li>
		  <li class="active" ><a>Test Management</a></li>
		</ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">


<!--         <div class="panel-heading">
          <div class="row">
              <div class="col-md-3">
                <a href="test_generation.php" class="btn btn-primary" style="color: white;" >Create Test</a>
              </div>
            </div>
        </div>
 -->

					<div class="panel-body" style="padding: 25px 25px;">

            <div class="row">
              <div class="col-md-6">
                <b><span class="compulsory_mark" >*</span>Select Client</b>
                <select name="tm_select_client" class="form-control" id="tm_select_client">
                      <option value="0">Select Client</option>
                      <?php   
                      $sel_query = "SELECT * FROM CRM_Client";
                      $sel_query_result = mysqli_query($con,$sel_query);
                      while ($sel_query_row = mysqli_fetch_array($sel_query_result,MYSQLI_ASSOC))
                      {   ?>
                        <option value="<?php echo $sel_query_row['ClientId'];?>" alt="<?php echo $sel_query_row['ClientId'];?>" <?php if($sel_query_row['ClientId'] == $ClientId) { ?> selected="selected" <?php } ?> ><?php echo $sel_query_row['ClientFirstName']." ".$sel_query_row['ClientLastName'];?></option>  
                      <?php } ?>
                </select>
              </div>
            </div>


            <div class="row mt-15" id="TestCards" style="display: none;">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Air Velocity</h3>
                    <div class="row text-center">
                      <a  href="javascript:void(0)" alt="air_velocity_test.php" name="Air Velocity" class="btn btn-primary btn-sm mt-15 tm">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">PAO</h3>
                    <div class="row text-center">
                      <a  href="javascript:void(0)" alt="pao_test.php" name="PAO" class="btn btn-primary btn-sm mt-15 tm">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Particle Coun Format</h3>
                    <div class="row text-center">
                      <a  href="javascript:void(0)" alt="particle_coun_format_test.php" name="Particle Coun Format" class="btn btn-primary btn-sm mt-15 tm">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Recovery Test</h3>
                    <div class="row text-center">
                      <a  href="javascript:void(0)" alt="recovery_test.php" name="Recovery Test" class="btn btn-primary btn-sm mt-15 tm">View More</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>



					</div>





				</div>
			</div>
		</div>
	</div>



</div>
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	

$('.tm').click(function(e) {

  var tm_select_client_id = $('#tm_select_client').val();
  let url = e.target.getAttribute("alt");
  let TestName = e.target.getAttribute("name");
  window.location.href = url+"?id="+tm_select_client_id+"&tn="+TestName;


});


$('#tm_select_client').change(function(e) {

  $('#TestCards').slideDown();

});


$('#SubmitData').click(function(e) {

           
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
                        url: 'client_db_operations.phpp',
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
                window.location.alt = 'client.php';
          }) 
      }
   
    
        
  }



 function update_details(id){

        
        var jqxhrn = $.get("client_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {
            var result = data.split("`");
            ShowForm();
            $('#task').empty().val('UpdateDetails');
            $('#client_first_name').val(result[0].trim());
            $('#client_last_name').val(result[1].trim());
            $('#client_company_name').val(result[2].trim());
            $('#client_email_id').val(result[3].trim());
            $('#client_mobile_number').val(result[4].trim());
            $('#client_password').val(result[5].trim());
            $('#client_id').val(id);
                
      }) 
 }  


</script>

