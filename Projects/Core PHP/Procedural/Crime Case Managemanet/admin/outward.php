<?php

	include("include/header.php");

?>		

      <!-- Add Details Modal -->
      <div class="modal fade" id="AddModel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModelText" ></h5>
              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" style="color: white;" type="button" data-dismiss="modal" onclick="CloseForm()" style="cursor: pointer;">Okay</a>
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
                <h1 class="page-title text-center">जावक / निर्गती भरा</h1> 
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>

          <!-- /Page Header -->


          <div class="row">
            <div class="col-md-12">
              <div class="card flex-fill">
                <div class="card-header" id="AddDeleteButtons">
                  <button class="btn btn-primary" onclick="OpenForm()">नवीन जावक / निर्गती भरा</button>
                </div>
                <div class="card-body" id="FormDetails" style="display: none;">
                  <form role="role" method="post" id="form_data" enctype="multipart/form-data">
                    
                    <div class="row">
                      <div class="col-md-12" style="text-align: center;">
                        <h3>नवीन जावक / निर्गती</h3> 
                      </div>
                    </div>
                    <br>
                    <b><span id="error_msg" style="color: red;"> </span></b>
                    <br>
                    <br>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label"><b>बारकोड नंबर :</b></label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="outward_barcode" name="outward_barcode" placeholder="इथे बारकोड नंबर लिहा"> 
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label"><b>जावक / निर्गती कारण :</b></label>
                      <div class="col-md-4">
                        <textarea rows="5" cols="5" class="form-control" id="outward_reason" name="outward_reason"  placeholder="इथे जावक / निर्गती कारण लिहा" style="resize: none;" ></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label"><b>आपले नाव लिहा :</b></label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="outward_by" name="outward_by" placeholder="इथे आपले नाव लिहा"> </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label"><b>जावक / निर्गती दिनांक :</b></label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="outward_date" name="outward_date" value="<?php echo date('d-m-Y'); ?>" readonly="true" style="background-color: #ccc;resize: none;pointer-events: none;"> </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label"><b>जावक / निर्गती वेळ :</b></label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="outward_time" name="outward_time" value="" readonly="true" style="background-color: #ccc;resize: none;pointer-events: none;">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6" >
                          <input type='checkbox' id='outward_out_reach_checkbox'  name="outward_out_reach_checkbox" style="cursor: pointer" value="No">
                          <label class="col-form-label" style="padding-left: 10px;" ><b>जावक / निर्गती निर्गती साठी जाणार आहे का ?</b></label>
                      </div>
                    </div>

                    <div class="text-center">
                      <input type="hidden" name="outward_id" id="outward_id">
                      <input type="hidden" id="task" name="task" >
                      <a class="btn btn-success" id="SubmitData" style="color: white;cursor: pointer;width: 10%;"  ><span style="margin-bottom: 1px;display: none;" class="spinner-border spinner-border-sm mr-2" role="status" id="loader" ></span>Save</a>
                      <a class="btn btn-danger" onclick="CloseForm();" style="color: white;cursor: pointer;width: 10%;">Close</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header" id="AddDeleteButtons" style="display: none;" >
                  <button class="btn btn-danger" id="DeleteFormDetails" data-toggle="modal" href="#DeleteModel">Delete Case</button>
                </div>
                <div class="card-body">
                  <div style="margin-top: 10px;" id="OutwardDatatable" class="table-responsive"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /Page Wrapper -->
    </div>
      <!-- /Main Wrapper -->


<?php

  include("include/footer.php");

?>    

<script type="text/javascript">



$(document).ready(function() {

    showTime();
    document.getElementById("DeleteFormDetails").disabled = true;
    OutwardDatatable();
    let delete_selected_id_array=[];

});




function showTime(){
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("outward_time").value = time;
    ///document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}


function OpenForm()
{
    $("#FormDetails").fadeIn();
    $("#AddDeleteButtons").hide();
    $('#outward_barcode').val('');
    $('#outward_reason').val('');
    $('#outward_by').val('');
    $('#task').empty().val('InsertDetails');
    $("#SubmitData").css("pointer-events","all");
}


function CloseForm()
{
    $("#FormDetails").hide();
    $("#AddDeleteButtons").fadeIn();
    $('#task').empty();
    OutwardDatatable();
}


$('#outward_out_reach_checkbox').click(function(e) {

    if (this.value == "No") 
    {
      $('#outward_out_reach_checkbox').val("Yes");
    }else 
    {
      $('#outward_out_reach_checkbox').val("No");
    }

});



$('#SubmitData').click(function(e) {

            var outward_barcode = $('#outward_barcode').val();
            var outward_reason = $('#outward_reason').val();
            var outward_by = $('#outward_by').val();
            var outward_date = $('#outward_date').val();
            var outward_time = $('#outward_time').val();
            var outward_out_reach_checkbox = $('#outward_out_reach_checkbox').val();

            if(outward_barcode == "") {
                $('#outward_barcode').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून बारकोड नंबर लिहा.");
                setTimeout(function() {
                    $("#outward_barcode").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(outward_reason == "") {
                $('#outward_reason').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून जावक / निर्गती कारण लिहा.");
                setTimeout(function() {
                    $("#outward_reason").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(outward_by == "") {
                $('#outward_by').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून आपले नाव लिहा.");
                setTimeout(function() {
                    $("#outward_by").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else{
                      
                    $("#SubmitData").css("pointer-events","none");
                    $("#loader").show();
                    e.preventDefault();
                    $.ajax({
                        url: 'outward_db_operations.php',
                        type: 'post',
                        data: $('#form_data').serialize(),
                        success: function(data) {
                            if (data.trim() == 'AddSuccess') {

                                $("#loader").hide();
                                $('#ClickForModel').click();
                                $('#ModelText').empty().append('Record Inserted Successfully.');

                            } else if (data.trim() == 'UpdateSuccess') {

                                $("#loader").hide();
                                $('#ClickForModel').click();
                                $('#ModelText').empty().append('Record Updated Successfully.');

                            } else {

                                $("#loader").hide();
                                $('#ClickForModel').click();
                                $('#ModelText').empty().append('You Have An Error.');

                            }
                        }

                    });

            }

});





function OutwardDatatable()
{ 
    
    document.getElementById("DeleteFormDetails").disabled = true;
    $('#OutwardDatatable').empty().html( '<table  id="main_datatable" class="table table-striped table-bordered"  style="width: 100%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       
            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "outward_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                "sTitle": "बारकोड नंबर", "bVisible":true, "bSearchable": true, "sClass": "left"
              },

              { 
                "sTitle": "जावक / निर्गती कारण", "bVisible":true, "bSearchable": true, "sClass": "left"
              },

            
              { 
                "sTitle": "जावक / निर्गती दिनांक","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true,"fnRender": function(obj) 
                  {
                      date_str= obj.aData[ obj.iDataColumn ];
                      var from = date_str.split("-")
                      var date_str_formated = from[2]+'-'+from[1]+'-'+from[0];
                      return date_str_formated ;
                  }
              },


              { 
                "sTitle": "जावक / निर्गती वेळ","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true
              },

              { 
                "sTitle": "आपले नाव","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true
              },


              { "sTitle": "Last Updated","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true

              }
              

            ]
       });
}


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
          var jqxhrn = $.get("inward_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                                     
                OutwardDatatable(); 
          }) 
      }
   
    
        
  }



 function update_details(id){

        var jqxhrn = $.get("inward_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {

            var result = data.split("~");
            OpenForm();
            $('#task').empty().val('UpdateDetails');
            $('#outward_barcode').val(result[0].trim());
            var date = result[1].split("-");
            var date_str_formated = date[2]+'-'+date[1]+'-'+date[0];
            $('#outward_date').val(date_str_formated);

            $('#outward_time').val(result[3]);
            $('#outward_by').val(result[4]);
            $('#outward_id').val(id);
                
      }) 
 }  



   
    </script>

