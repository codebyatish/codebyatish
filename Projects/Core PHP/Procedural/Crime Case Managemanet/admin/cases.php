<?php

	include("include/header.php");

?>		

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
                <div class="card-body" id="FormDetails">
                  <form role="role" method="post" id="form_data" enctype="multipart/form-data">
                    

                    <br>
                    <b><span id="error_msg" style="color: red;"> </span></b>
                    <br>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <b>बारकोड नंबर :</b>
                        <input type="text" class="form-control" id="case_barcode_number" name="case_barcode_number" placeholder="इथे बारकोड नंबर लिहा"> 
                      </div>
                      <div class="col-md-6">
                        <b>क्राइम नंबर :</b>
                        <input type="text" class="form-control" id="case_number" name="case_number" placeholder="इथे क्राइम नंबर लिहा"> 
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <b>मुद्देमालाचा प्रकार सिलेक्ट करा :</b>
                          <select class="form-control" id="crime_of_category" name="crime_of_category" >
                            <option value="" >मुद्देमालाचा प्रकार सिलेक्ट करा</option>
                            <option value="भाग १ ते ५">भाग १ ते ५</option>
                            <option value="भाग ६">भाग ६</option>
                            <option value="दारूबंदी">दारूबंदी</option>
                            <option value="अकस्मात मयत">अकस्मात मयत</option>
                            <option value="इतर मुद्देमाल">इतर मुद्देमाल</option>
                            <option value="बेवारस दु / चारचाकी">बेवारस दु / चारचाकी</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <b>मुद्देमाल दाखल करण्याची तारीख :</b>
                        <input type="text" class="form-control datepicker" id="case_issue_date" name="case_issue_date"  placeholder="इथे मुद्देमाल दाखल करण्याची तारीख सिलेक्ट करा" style="text-indent: 8px;" > 
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <b>मुद्देमाल भरणाऱ्याचे नाव :</b>
                        <input type="text" class="form-control" id="case_entry_by" name="case_entry_by" placeholder="इथे मुद्देमाल भरणाऱ्याचे नाव लिहा"> 
                      </div>
                      <div class="col-md-6">
                        <b>मुद्देमाल कोठे ठेवणार आहे :</b>
                        <input type="text" class="form-control" id="case_location" name="case_location" placeholder="इथे मुद्देमाल कोठे ठेवणार आहे ते लिहा"> 
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <b>मुद्देमाल प्रलंबित राहण्याचे कारण :</b>
                        <input type="text" class="form-control" id="case_pending_reason" name="case_pending_reason" placeholder="इथे मुद्देमाल प्रलंबित राहण्याचे कारण लिहा"> 
                      </div>
                    </div>

                    <div class="text-center" style="margin-top: 50px;" >
                      <input type="hidden" name="case_id" id="case_id">
                      <input type="hidden" id="task" name="task" value="InsertDetails">
                      <a class="btn btn-success" id="SubmitData" style="color: white;cursor: pointer;width: 10%;"  ><span style="margin-bottom: 1px;display: none;" class="spinner-border spinner-border-sm mr-2" role="status" id="loader" ></span>Save</a>
                    </div>
                  </form>
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
    let delete_selected_id_array=[];
});



$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
});



$('#SubmitData').click(function(e) {
  
            var case_barcode_number = $('#case_barcode_number').val();
            var case_number = $('#case_number').val();
            var crime_of_category = $('#crime_of_category').val();
            var case_issue_date = $('#case_issue_date').val();
            var case_entry_by = $('#case_entry_by').val();
            var case_location = $('#case_location').val();
            var case_pending_reason = $('#case_pending_reason').val();

            if(case_barcode_number == "") {
                $('#case_barcode_number').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून बारकोड नंबर लिहा.");
                setTimeout(function() {
                    $("#case_barcode_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(case_number == "") {
                $('#case_number').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून क्राइम नंबर लिहा.");
                setTimeout(function() {
                    $("#case_number").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else if(crime_of_category == "") {
                $('#crime_of_category').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमालाचा प्रकार सिलेक्ट करा.");
                setTimeout(function() {
                    $("#crime_of_category").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(case_issue_date == "") {
                $('#case_issue_date').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमाल दाखल करण्याची तारीख सिलेक्ट करा.");
                setTimeout(function() {
                    $("#case_issue_date").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(case_entry_by == "") {
                $('#case_entry_by').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमाल भरणाऱ्याचे नाव लिहा.");
                setTimeout(function() {
                    $("#case_entry_by").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(case_location == "") {
                $('#case_location').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमाल कोठे ठेवणार आहे ते लिहा.");
                setTimeout(function() {
                    $("#case_location").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            } else if(case_pending_reason == "") {
                $('#case_pending_reason').css("border-color", "red");
                $("#error_msg").empty().append("कृपया करून मुद्देमाल प्रलंबित राहण्याचे कारण लिहा.");
                setTimeout(function() {
                    $("#case_pending_reason").removeAttr('style');
                    $('#error_msg').empty();
                }, 3000);
            }else{

                    $("#SubmitData").css("pointer-events","none");
                    $("#loader").show();
                    e.preventDefault();
                    $.ajax({
                        url: 'case_db_operations.php',
                        type: 'post',
                        data: $('#form_data').serialize(),
                        success: function(data) {

                              var result = data.split("~");

                              var AddSuccess = result[0].trim();
                              var case_id = result[1].trim();
 
                            if (AddSuccess == 'AddSuccess') {

                                $("#loader").hide();
                                window.location.href = 'add_evidences.php?id='+case_id;

                            } else {

                                $("#loader").hide();
                                $('#ClickForModel').click();
                                $('#ModelText').empty().append('You Have An Error.');

                            }
                        }

                    });

            }

});






  function add_evidences(case_id) {
   
      window.location.href = 'add_evidences.php?id='+case_id;

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
          var jqxhrn = $.get("case_db_operations.php?Id="+delete_selected_id_array[i]+"&task=delete_selected_records", function() {  
          })  .done(function(data) {
                                     
                CaseDatatable(); 
          }) 
      }
   
    
        
  }



 function update_details(id){

        var jqxhrn = $.get("case_db_operations.php?Id="+id+"&task=get_record_for_edit", function() {}).done(function(data) {

            var result = data.split("~");
            OpenForm();
            $('#task').empty().val('UpdateDetails');
            $('#case_number').val(result[0].trim());
            var date = result[1].split("-");
            var date_str_formated = date[2]+'/'+date[1]+'/'+date[0];
            $('#case_issue_date').val(date_str_formated);
            $('#case_entry_by').val(result[2]);
            $('#case_barcode_number').val(result[3]);
            $('#crime_of_category').val(result[4]);
            $('#case_id').val(id);
                
      }) 
 }  



   
    </script>

