<?php

	include("include/header.php");
  $CaseId = $_REQUEST['id']; 

        $sel_case_qry ="SELECT * FROM EMS_Cases WHERE CaseId = '$CaseId'";
        $sel_case_qry_result=mysqli_query($con,$sel_case_qry);
        $sel_qry_row=mysqli_fetch_array($sel_case_qry_result,MYSQLI_BOTH);
  
?>		



      <!-- Add Details Modal -->
      <div class="modal fade" id="AddModel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModelText" ></h5>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="case_records.php" style="color: white;cursor: pointer;" >Okay</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /Add Details Modal -->

      <!-- Delete Modal -->
      <div class="modal fade" id="DeleteModel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Are you sure, you want to delete this record ?</h5>
              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" style="color: white;" type="button" data-dismiss="modal" onclick="CloseForm()" style="cursor: pointer;">Cancel</a>
                <a class="btn btn-danger" style="color: white;" onclick="delete_selected_record()" data-dismiss="modal" style="cursor: pointer;" >Delete</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Delete Modal -->


      <input type="hidden" data-toggle="modal" href="#AddModel" id="ClickForModel" >


      <!-- Page Wrapper -->
      <div class="page-wrapper">
        <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <h1 class="page-title text-center">नवीन मुद्देमाल भरा</h1> 
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <!-- /Page Header -->


          <div class="row">
            <div class="col-md-12">
              <div class="card flex-fill">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-4" >
                      <a class="btn btn-danger" href="case_records.php" style="color: white;cursor: pointer;" >Back</a>
                    </div>
                    <div class="col-md-4 text-center" >
                      <h4>क्राइम नंबर : <?php echo $sel_qry_row['CaseNumber']; ?></h4>
                    </div>
                    <div class="col-md-4" ></div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>



              <form role="role" method="post" id="form_data" enctype="multipart/form-data" >
                <div class="all_evidences">

                    <?php 

                          $sel_qry ="SELECT * FROM EMS_Evidences WHERE CaseId = '$CaseId'";
                          $sel_qry_result=mysqli_query($con,$sel_qry);

                          $sel_qry_num_row=mysqli_num_rows($sel_qry_result);


                          if ($sel_qry_num_row != 0) 
                          {

                            while($sel_qry_row=mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH)) 
                            {     

                                  $EvidenceId = $sel_qry_row['EvidenceId'];
                                  $CaseId = $sel_qry_row['CaseId'];
                                  $EvidenceName = $sel_qry_row['EvidenceName'];
                                  $EvidenceMRNO = $sel_qry_row['EvidenceMRNO'];
                                  $EvidenceCourtVerdict = $sel_qry_row['EvidenceCourtVerdict'];
                                  $CasePropertyPending = $sel_qry_row['CasePropertyPending'];
                                  $CasePropertyLocation = $sel_qry_row['CasePropertyLocation'];
                                  $EvidenceDescription = $sel_qry_row['EvidenceDescription'];
                                  $CategoryName = $sel_qry_row['CategoryName'];


                      ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                          <div class="card flex-fill">
                                            <div class="card-body">
                                              <b><span id="error_msg" style="color: red;"> </span></b>
                                              <br>
                                              <br>

                                              <div class="form-group row">
                                                  <div class="col-md-6">
                                                    <b>मुद्देमालचे नाव :</b>
                                                    <input type="hidden" name="for_new_row[]" id="for_new_row" value="<?php echo $EvidenceId; ?>" >
                                                    <input type="hidden" class="form-control" id="evidence_id" name="evidence_id[]" value="<?php echo $EvidenceId; ?>" > 
                                                    <input type="hidden"  id="sel_qry_num_row" value="<?php echo $sel_qry_num_row ?>"  name="sel_qry_num_row[]" class="form-control sel_qry_num_row" /> 
                                                    <input type="text" class="form-control" id="evidence_name" name="evidence_name[]" placeholder="Enter Evidence Name"  readonly="true" style="background-color: #ccc;pointer-events: none;" value="<?php echo $EvidenceName; ?>"  > 
                                                  </div>
                                                  <div class="col-md-6">
                                                    <b>एमआर नंबर :</b>
                                                    <input type="text" class="form-control" id="evidence_mrno" name="evidence_mrno[]" placeholder="Enter MR Number"  readonly="true" style="background-color: #ccc;pointer-events: none;" value="<?php echo $EvidenceMRNO; ?>"  > 
                                                  </div>
                                              </div>

                                              <div class="form-group row">
                                                  <div class="col-md-6">
                                                    <b>न्यायालयाचा निकाल :</b>
                                                    <input type="text" class="form-control" id="court_verdict" name="court_verdict[]" placeholder="Enter Court Verdict" readonly="true" style="background-color: #ccc;pointer-events: none;" value="<?php echo $EvidenceCourtVerdict; ?>" > 
                                                  </div>
<!--                                                   <div class="col-md-6">
                                                    <b>कोठे ठेवणार आहे :</b>
                                                    <input type="text" class="form-control" id="case_property_location" name="case_property_location[]" placeholder="Enter Case Property Location" readonly="true" style="background-color: #ccc;pointer-events: none;" value="<?php echo $CasePropertyLocation; ?>"> 
                                                  </div>
                                                  <div class="col-md-6">
                                                    <b>मुद्देमाल प्रलंबित राहण्याचे कारण :</b>
                                                    <input type="text" class="form-control" id="case_property_pending" name="case_property_pending[]" placeholder="Enter Why The Case Property is Pending" readonly="true" style="background-color: #ccc;pointer-events: none;" value="<?php echo $CasePropertyPending; ?>" > 
                                                  </div>
 -->                                            
                                                  <div class="col-md-6">
                                                    <b>मुद्देमालाचे वर्णन :</b>
                                                    <textarea rows="5" cols="5" class="form-control" id="evidence_description" name="evidence_description[]" placeholder="Enter text here" readonly="true" style="background-color: #ccc;resize: none;pointer-events: none;"><?php echo $EvidenceDescription; ?></textarea>
                                                  </div>
                                               </div>
                                              <div class="form-group row">
                                                  
                                              </div>
                                            </div>

<!--                                             <div class="card-footer" >
                                              <input type="button" deleted_row_id="<?php echo $EvidenceId; ?>" class="table_delete_current_row btn btn-md btn-danger"  value="Delete" style="float: right;" onclick="delete_row(this)">
                                            </div> -->
                                            
                                          </div>
                                        </div>
                                    </div>

                          <?php  }
                              }else{ ?>
                                    
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="card flex-fill">
                                            <div class="card-body">
                                              <b><span id="error_msg" style="color: red;"> </span></b>
                                              <br>
                                              <br>
                                                <div class="form-group row">
                                                  <div class="col-md-6">
                                                    <b>मुद्देमालचे नाव :</b>
                                                    <input type="hidden" name="for_new_row[]" id="for_new_row" value="New" >
                                                    <input type="hidden"  id="sel_qry_num_row" value="<?php echo $sel_qry_num_row ?>"  name="sel_qry_num_row[]" class="form-control sel_qry_num_row" /> 
                                                    <input type="text" class="form-control" id="evidence_name" name="evidence_name[]" placeholder="इथे मुद्देमालचे नाव लिहा"> 
                                                  </div>
                                                  <div class="col-md-6">
                                                    <b>एमआर नंबर :</b>
                                                    <input type="text" class="form-control" id="evidence_mrno" name="evidence_mrno[]" placeholder="इथे एमआर नंबर लिहा"> 
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-md-6">
                                                    <b>न्यायालयाचा निकाल :</b>
                                                    <input type="text" class="form-control" id="court_verdict" name="court_verdict[]" placeholder="इथे न्यायालयाचा निकाल लिहा"> 
                                                  </div>
                                                  <!-- <div class="col-md-6">
                                                    <b>कोठे ठेवणार आहे :</b>
                                                    <input type="text" class="form-control" id="case_property_location" name="case_property_location[]" placeholder="इथे कोठे ठेवणार आहे ते लिहा"> 
                                                  </div>
                                                   <div class="col-md-6">
                                                    <b>मुद्देमाल प्रलंबित राहण्याचे कारण :</b>
                                                    <input type="text" class="form-control" id="case_property_pending" name="case_property_pending[]" placeholder="इथे मुद्देमाल प्रलंबित राहण्याचे कारण लिहा"> 
                                                  </div>  -->
                                                  <div class="col-md-6">
                                                    <b>मुद्देमालाचे वर्णन :</b>
                                                    <textarea rows="5" cols="5" class="form-control" id="evidence_description" name="evidence_description[]" placeholder="इथे मुद्देमालाचे वर्णन लिहा" style="resize: none;" ></textarea>
                                                  </div>

                                                </div>

                                            </div>
                                          </div>
                                        </div>
                                    </div>


                              <?php }  ?>

                              <input type="hidden" id="deleted_evidance_id" name="deleted_evidance_id">

                </div>



                <div class="card flex-fill">
                  <div class="card-footer">
                        <a class="btn btn-primary" style="cursor: pointer;color: white;" id="add-evidence" >Add</a>
                  </div>
                </div>

                <div class="card flex-fill">
                  <div class="card-footer text-center">
                        <input type="hidden" name="task" name="task" value="insert_evidence_details">
                        <input type="hidden" id="case_id" name="case_id" value="<?php echo $CaseId;?>" >

                        <a class="btn btn-success" style="color: white;cursor: pointer;width: 10%;" id="SubmitData" ><span style="margin-bottom: 1px;display: none;" class="spinner-border spinner-border-sm mr-2" role="status" id="loader" ></span>Save</a>
                  </div>
                </div>
              </form>


        </div>

      </div>
      <!-- /Page Wrapper -->
    </div>
      <!-- /Main Wrapper -->


<?php

  include("include/footer.php");

?>    

<script type="text/javascript">


    var deleted_row_id = [];
    var sel_qry_num_row = $('.sel_qry_num_row').val(); 
    var row_counter = Number(sel_qry_num_row) + 1;

 
$("#add-evidence").on("click", function () 
{

        var newdiv = $("<div>");
        var item = ""; 
    
        item += '<div class="row"><div class="col-md-12"><div class="card flex-fill"><div class="card-body"><div class="form-group row"><div class="col-md-6"><b>मुद्देमालचे नाव :</b> <input type="hidden" name="for_new_row[]" id="for_new_row'+row_counter+'" value="New"> <input class="form-control" id="evidence_name'+row_counter+'" name="evidence_name[]" placeholder="इथे मुद्देमालचे नाव लिहा"></div><div class="col-md-6"><b>एमआर नंबर :</b> <input class="form-control" id="evidence_mrno'+row_counter+'" name="evidence_mrno[]" placeholder="इथे एमआर नंबर लिहा"></div></div><div class="form-group row"><div class="col-md-6"><b>न्यायालयाचा निकाल :</b> <input class="form-control" id="court_verdict'+row_counter+'" name="court_verdict[]" placeholder="इथे न्यायालयाचा निकाल लिहा"></div><div class="col-md-6"><b>मुद्देमालाचे वर्णन :</b><textarea rows="5" cols="5" class="form-control" id="evidence_description'+row_counter+'" name="evidence_description[]" placeholder="इथे मुद्देमालाचे वर्णन लिहा" style="resize:none"></textarea></div></div></div><div class="card-footer"><input type="button" class="table_delete_current_row btn btn-md btn-danger" onclick="delete_row(this,'+row_counter+')" style="float:right" value="Delete"></div></div></div></div>';

        newdiv.append(item);
        //$(newdiv).appendTo('div.all_evidences').show('slow');
        $("div.all_evidences").append(newdiv);
        row_counter++;


});



  function delete_row(obj,table_row_counter)
  {
      
      $(obj.parentElement.parentNode).remove(); 
      
        //console.log($(obj).attr('deleted_row_id'));
        var deleted_evidance_id = $(obj).attr('deleted_row_id');
        
        //console.log(deleted_evidance_id);
         if (deleted_evidance_id != undefined) 
         {
           deleted_row_id.push(deleted_evidance_id);
         }

        $("#deleted_evidance_id").val(deleted_row_id);



  }






  $('#SubmitData').click(function(e) {

            var evidence_name = $('#evidence_name').val();
            var evidence_mrno = $('#evidence_mrno').val();
            var court_verdict = $('#court_verdict').val();
            var evidence_description = $('#evidence_description').val();


            if(evidence_name == "") {
                $('#evidence_name').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमालचे नाव लिहा.");
                setTimeout(function() {
                    $("#evidence_name").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(evidence_mrno == "") {
                $('#evidence_mrno').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून एमआर नंबर लिहा.");
                setTimeout(function() {
                    $("#evidence_mrno").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(court_verdict == "") {
                $('#court_verdict').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून न्यायालयाचा निकाल लिहा.");
                setTimeout(function() {
                    $("#court_verdict").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(evidence_description == "") {
                $('#evidence_description').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमालाचे वर्णन लिहा.");
                setTimeout(function() {
                    $("#evidence_description").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else{

                          $("#SubmitData").attr("disabled", true);
                          $("#SubmitData").css("pointer-events", "none");
                          $("#SubmitData").css("cursor", "not-allowed");
                          $("#loader").show();
                          e.preventDefault();
                          $.ajax({
                              url: 'add_evidences_db_operations.php',
                              type: 'post',
                              data: $('#form_data').serialize(),
                              success: function(data) {

                                  //alert(data);
                                  if (data.trim() == 'AddSuccess') {

                                      $("#loader").hide();
                                      $('#ClickForModel').click();
                                      $('#ModelText').empty().append('Evidences Saved Successfully.');

                                  }else if (data.trim() == 'UpdateSuccess') {

                                      $("#loader").hide();
                                      $('#ClickForModel').click();
                                      $('#ModelText').empty().append('Evidences Saved Successfully.');

                                  } else {

                                      $("#loader").hide();
                                      $('#ClickForModel').click();
                                      $('#ModelText').empty().append('You Have An Error.');

                                  }
                              }

                          });

                  }

  });



</script>

